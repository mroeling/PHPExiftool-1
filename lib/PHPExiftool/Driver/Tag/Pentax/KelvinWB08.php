<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class KelvinWB08 extends AbstractTag
{

    protected $Id = 33;

    protected $Name = 'KelvinWB_08';

    protected $FullName = 'Pentax::KelvinWB';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Kelvin WB 08';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
