<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMwgRs;

use PHPExiftool\Driver\AbstractTag;

class RegionAppliedToDimensionsH extends AbstractTag
{

    protected $Id = 'RegionsAppliedToDimensionsH';

    protected $Name = 'RegionAppliedToDimensionsH';

    protected $FullName = 'XMP::mwg_rs';

    protected $GroupName = 'XMP-mwg-rs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-mwg-rs';

    protected $g2 = 'Image';

    protected $Type = 'real';

    protected $Writable = true;

    protected $Description = 'Region Applied To Dimensions H';

}
