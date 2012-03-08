<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSSpeed extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Speed';

    protected $Name = 'GPSSpeed';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'GPS Speed';

}