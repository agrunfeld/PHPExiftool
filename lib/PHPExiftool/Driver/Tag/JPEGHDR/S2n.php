<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\JPEGHDR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class S2n extends AbstractTag
{

    protected $Id = 's2n';

    protected $Name = 'S2n';

    protected $FullName = 'JPEG::HDR';

    protected $GroupName = 'JPEG-HDR';

    protected $g0 = 'APP11';

    protected $g1 = 'JPEG-HDR';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'S2n';

}
