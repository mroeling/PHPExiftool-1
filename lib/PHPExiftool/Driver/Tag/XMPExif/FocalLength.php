<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPExif;

use PHPExiftool\Driver\AbstractTag;

class FocalLength extends AbstractTag
{

    protected $Id = 'FocalLength';

    protected $Name = 'FocalLength';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'rational';

    protected $Writable = true;

    protected $Description = 'Focal Length';

    protected $local_g2 = 'Camera';

}
