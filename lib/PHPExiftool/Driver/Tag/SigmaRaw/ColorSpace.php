<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SigmaRaw;

use PHPExiftool\Driver\AbstractTag;

class ColorSpace extends AbstractTag
{

    protected $Id = 'COLORSPACE';

    protected $Name = 'ColorSpace';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Color Space';

}
