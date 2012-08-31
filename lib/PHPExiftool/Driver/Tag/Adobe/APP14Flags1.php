<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Adobe;

use PHPExiftool\Driver\AbstractTag;

class APP14Flags1 extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'APP14Flags1';

    protected $FullName = 'JPEG::Adobe';

    protected $GroupName = 'Adobe';

    protected $g0 = 'APP14';

    protected $g1 = 'Adobe';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'APP14 Flags 1';

    protected $Values = array(
    );

}
