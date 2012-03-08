<?php

namespace PHPExiftool\Driver\Tag\XMPCrs;

class CropUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CropUnit';

    protected $Name = 'CropUnit';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Crop Unit';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'pixels',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'inches',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'cm',
        ),
    );

}