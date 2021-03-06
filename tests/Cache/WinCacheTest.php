<?php

/*
 * This file is part of CacheServiceProvider.
 *
 * (c) Quentin Aupetit <qaupetit@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Moust\Silex\Tests\Cache;

use Moust\Silex\Cache\WincacheCache;

class WincacheCacheTest extends AbstractCacheTest
{
    protected function setUp()
    {
        if (!extension_loaded('wincache')) {
            $this->markTestSkipped('L\'extension WincacheCache n\'est pas disponible.');
        }
    }

    public function instanciateCache()
    {
        $cache = new WincacheCache();

        $this->assertInstanceOf('Moust\Silex\Cache\WincacheCache', $cache);

        return $cache;
    }
}