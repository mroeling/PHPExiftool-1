<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class TimeStamp1 extends AbstractTag
{

    protected $Id = 1114;

    protected $Name = 'TimeStamp1';

    protected $FullName = 'Canon::CameraInfo1DmkIII';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Time Stamp 1';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

}
