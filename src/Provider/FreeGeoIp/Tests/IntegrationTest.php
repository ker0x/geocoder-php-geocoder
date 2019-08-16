<?php

declare(strict_types=1);

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\FreeGeoIp\Tests;

use Geocoder\IntegrationTest\ProviderIntegrationTest;
use Geocoder\Provider\FreeGeoIp\FreeGeoIp;
use Http\Client\HttpClient;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class IntegrationTest extends ProviderIntegrationTest
{
    protected $testAddress = false;

    /**
     * @var bool Web service no longer operating
     */
    protected $testIpv4 = false;

    /**
     * @var bool Web service no longer operating
     */
    protected $testIpv6 = false;

    protected $testReverse = false;

    protected function createProvider(HttpClient $httpClient)
    {
        return new FreeGeoIp($httpClient, 'https://internal.geocoder/json/%s');
    }

    protected function getCacheDir()
    {
        return __DIR__.'/.cached_responses';
    }

    protected function getApiKey()
    {
        return null;
    }
}
