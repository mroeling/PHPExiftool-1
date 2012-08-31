<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use PHPExiftool\Driver\AbstractTag;

class CCDScanMode extends AbstractTag
{

    protected $Id = 4153;

    protected $Name = 'CCDScanMode';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'CCD Scan Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Interlaced',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Progressive',
        ),
    );

}
