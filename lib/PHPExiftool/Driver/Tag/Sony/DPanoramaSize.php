<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use PHPExiftool\Driver\AbstractTag;

class DPanoramaSize extends AbstractTag
{

    protected $Id = 56;

    protected $Name = '3DPanoramaSize';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = '3D Panorama Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Wide',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '16:9',
        ),
    );

}
