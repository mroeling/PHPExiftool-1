<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Matroska;

use PHPExiftool\Driver\AbstractTag;

class AttachedFileData extends AbstractTag
{

    protected $Id = 1628;

    protected $Name = 'AttachedFileData';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Attached File Data';

    protected $flag_Binary = true;

}
