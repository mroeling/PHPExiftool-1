<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\EXE;

use PHPExiftool\Driver\AbstractTag;

class FileVersion extends AbstractTag
{

    protected $Id = 'FileVersion';

    protected $Name = 'FileVersion';

    protected $FullName = 'EXE::PEString';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'File Version';

}
