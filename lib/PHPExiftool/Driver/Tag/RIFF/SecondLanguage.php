<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RIFF;

use PHPExiftool\Driver\AbstractTag;

class SecondLanguage extends AbstractTag
{

    protected $Id = 'IAS2';

    protected $Name = 'SecondLanguage';

    protected $FullName = 'RIFF::Info';

    protected $GroupName = 'RIFF';

    protected $g0 = 'RIFF';

    protected $g1 = 'RIFF';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Second Language';

}
