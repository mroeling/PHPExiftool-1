<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sigma;

use PHPExiftool\Driver\AbstractTag;

class MeteringMode extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'MeteringMode';

    protected $FullName = 'Sigma::Main';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => 'Multi-segment',
        ),
        'A' => array(
            'Id' => 'A',
            'Label' => 'Average',
        ),
        'C' => array(
            'Id' => 'C',
            'Label' => 'Center-weighted average',
        ),
    );

}
