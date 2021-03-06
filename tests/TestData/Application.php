<?php

/*
 * This file is part of the SilexRouting extension.
 *
 * (c) Daniel Tschinder
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ChiliLabs\Silex\Tests\TestData;

use ChiliLabs\Silex\Application\RoutingTrait;
use Silex\Application as SilexApplication;

/**
 * @author Daniel Tschinder <daniel@tschinder.de>
 */
class Application extends SilexApplication
{
    use RoutingTrait;
}
