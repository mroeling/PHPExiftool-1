<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use PHPExiftool\Driver\AbstractTag;

class IHLEXIF extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'IHL_EXIF';

    protected $FullName = 'CanonVRD::IHL';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'IHL EXIF';

    protected $flag_Binary = true;

    protected $Index = 1;

}
