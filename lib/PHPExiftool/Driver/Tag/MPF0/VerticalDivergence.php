<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MPF0;

use PHPExiftool\Driver\AbstractTag;

class VerticalDivergence extends AbstractTag
{

    protected $Id = 45575;

    protected $Name = 'VerticalDivergence';

    protected $FullName = 'MPF::Main';

    protected $GroupName = 'MPF0';

    protected $g0 = 'MPF';

    protected $g1 = 'MPF0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Vertical Divergence';

}
