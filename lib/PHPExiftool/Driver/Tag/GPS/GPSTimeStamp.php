<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class GPSTimeStamp extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSTimeStamp';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'GPS Time Stamp';

    protected $local_g2 = 'Time';

    protected $MaxLength = 3;

    protected $local_g1 = 'mixed';

    protected $flag_Permanent = 'mixed';

}
