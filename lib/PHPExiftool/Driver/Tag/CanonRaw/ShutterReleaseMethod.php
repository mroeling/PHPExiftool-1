<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonRaw;

use PHPExiftool\Driver\AbstractTag;

class ShutterReleaseMethod extends AbstractTag
{

    protected $Id = 4112;

    protected $Name = 'ShutterReleaseMethod';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Shutter Release Method';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single Shot',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Continuous Shooting',
        ),
    );

}
