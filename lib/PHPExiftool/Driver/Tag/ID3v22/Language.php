<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v22;

use PHPExiftool\Driver\AbstractTag;

class Language extends AbstractTag
{

    protected $Id = 'TLA';

    protected $Name = 'Language';

    protected $FullName = 'ID3::v2_2';

    protected $GroupName = 'ID3v2_2';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v2_2';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Language';

}
