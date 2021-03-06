<?php
/**
 * This file is part of the hubware/sonos library
 *
 * (C) hubware AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Hubware\Gateway\Sonos\Model\Control;

use Hubware\Gateway\Sonos\Model\SonosBase;

/**
 * playing session
 *
 *
 */
class Session extends SonosBase
{

    /**
     * id of session
     * @var string
     */
    public $id;

    /**
     * name of session
     * @var string
     */
    public $name;
}