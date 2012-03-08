<?php

namespace PHPExiftool\Driver\Tag\Canon;

class FilterEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'FilterEffect';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Filter Effect';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yellow',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Orange',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Red',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Green',
        ),
    );

}