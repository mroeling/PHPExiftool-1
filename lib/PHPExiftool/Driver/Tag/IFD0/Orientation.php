<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class Orientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 274;

    protected $Name = 'Orientation';

    protected $FullName = 'mixed';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Orientation';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Horizontal (normal)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Mirror horizontal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Rotate 180',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Mirror vertical',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Mirror horizontal and rotate 270 CW',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Rotate 90 CW',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Mirror horizontal and rotate 90 CW',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Rotate 270 CW',
        ),
    );

}