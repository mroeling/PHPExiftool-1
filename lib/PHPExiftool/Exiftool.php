<?php

/*
 * This file is part of Phraseanet
 *
 * (c) 2005-2010 Alchemy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use \Symfony\Component\Process\Process;

/**
 *
 * @package
 * @license     http://opensource.org/licenses/gpl-3.0 GPLv3
 * @link        www.phraseanet.com
 */
class Exiftool
{

  /**
   * For use with list option
   */

  const LISTTYPE_WRITABLE          = 'w';
  /**
   * For use with list option
   */
  const LISTTYPE_SUPPORTED_FILEEXT = 'f';
  /**
   * For use with list option
   */
  const LISTTYPE_WRITABLE_FILEEXT  = 'wf';
  /**
   * For use with list option
   */
  const LISTTYPE_SUPPORTED_XML     = 'x';
  /**
   * For use with list option
   */
  const LISTTYPE_DELETABLE_GROUPS  = 'd';
  /**
   * For use with list option
   */
  const LISTTYPE_GROUPS            = 'g';

  public static function listDatas($type = self::LISTTYPE_SUPPORTED_XML)
  {
    $available = array(
      self::LISTTYPE_WRITABLE, self::LISTTYPE_SUPPORTED_FILEEXT
      , self::LISTTYPE_WRITABLE_FILEEXT, self::LISTTYPE_SUPPORTED_XML
      , self::LISTTYPE_DELETABLE_GROUPS, self::LISTTYPE_GROUPS,
    );

    if (!in_array($type, $available))
      throw new \Exception('Unknown list attribute');

    return static::executeCommand(self::getBinary() . ' -list' . $type);
  }

  private static function executeCommand($command)
  {
    $process = new Process($command);
    $process->run();

    return $process->getOutput();
  }

  public static function getNamespacesFromXml($XML)
  {
    $namespaces = array();

    $dom = new \DOMDocument;

    if ($dom->loadXML($XML))
    {
      $pattern = "(xmlns:([a-zA-Z-_0-9]+)=[']{1}(https?:[/{2,4}|\\{2,4}][\w:#%/;$()~_?/\-=\\\.&]*)[']{1})";

      preg_match_all($pattern, $XML, $matches, PREG_PATTERN_ORDER, 0);

      foreach ($matches[2] as $key => $value)
      {
        $namespaces[$matches[1][$key]] = $value;
      }
    }

    unset($dom);

    return $namespaces;
  }

  public static function getMetadatas(\SplFileInfo $file)
  {
    $XML = static::executeCommand(self::getBinary() . ' -X ' . escapeshellarg($file->getPathname()));

    $dom = new \DOMDocument;
    $dom->loadXML($XML);

    $DomXpath = new \DOMXPath($dom);
    $DomXpath->registerNamespace('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');

    foreach (static::getNamespacesFromXml($XML) as $prefix => $uri)
    {
      $DomXpath->registerNamespace($prefix, $uri);
    }

    $nodes = $DomXpath->query('/rdf:RDF/rdf:Description/*');

    $metadatas = new Driver\Metadata\MetadataBag();

    foreach ($nodes as $node)
    {
      $tagname   = $node->nodeName;
      $metaValue = $node->nodeValue;
      if ($node->getElementsByTagNameNS('http://www.w3.org/1999/02/22-rdf-syntax-ns#', 'li')->length > 0)
      {
        echo "MULTI\n";
      }

      if (strpos($tagname, 'CIFF:') === 0)
      {
        /** We bypass datas we can have with SplFileInfo * */
        foreach (array('Canon', 'CanonRaw') as $substit)
        {
          try
          {
            Driver\TagFactory::getFromRDFTagname(str_replace('CIFF:', $substit . ':', $tagname));
            $tagname = str_replace('CIFF:', $substit . ':', $tagname);

            break;
          }
          catch (Exception\TagUnknown $e)
          {

          }
        }
      }

      try
      {
        $tag = Driver\TagFactory::getFromRDFTagname($tagname);

        $metadata = new Driver\Metadata\Metadata($tag, $metaValue);


        if ($metadatas->containsKey($tagname))
        {
          $previousMeta = $metadatas->get($tagname);
          if ($previousMeta->getValue() == $metaValue)
          {
//            echo "Bag already contains $tagname with same value\n";
          }
          else
          {
            echo "Bag for " . $file->getFileName() . " already contains $tagname with different value - " . $previousMeta->getValue() . " and $metaValue\n";
          }
        }

        $metadatas->set($tagname, $metadata);
      }
      catch (Exception\TagUnknown $e)
      {
        echo "cannot read " . $file->getFileName() . " // $tagname as $metaValue \n";
      }
    }

    return $metadatas;
  }

  private static function getBinary()
  {
    return realpath(__DIR__ . '/../../lib/vendor/Exiftool/exiftool');
  }

}