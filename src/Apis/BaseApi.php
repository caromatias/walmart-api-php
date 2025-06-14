<?php

/**
 * BaseApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * Authentication & Authorization Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;
use Ramsey\Uuid\Uuid;
use Walmart\Configuration;
use Walmart\HeaderSelector;
use Walmart\Walmart;

/**
 * BaseApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class BaseApi
{
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [];

    /**
     * @param Configuration   $config
     * @param ?ClientInterface $client
     * @param ?HeaderSelector  $selector
     */
    public function __construct(
        Configuration $config,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
    ) {
        $this->config = $config;
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Add standard headers to the request
     *
     * @return array
     */
    protected function getDefaultHeaders(): array
    {
        return [
            'WM_SVC.NAME' => 'caromatias/walmart-api/' . Walmart::VERSION,
            'WM_QOS.CORRELATION_ID' => Uuid::uuid4()->toString(),
            // These aren't required by every endpoint, but many use them and passing the when they're
            // not needed doesn't adversely affect the request
            'WM_MARKET' => strtolower($this->config->getCountry()),
            'WM_SEC.TIMESTAMP' => round(microtime(true) * 1000),
        ];
    }

    /**
     * Create HTTP client options array
     *
     * @throws \RuntimeException on file opening failure
     * @return array of HTTP client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Writes to the debug log file
     *
     * @param any $data
     * @return void
     */
    protected function writeDebug($data)
    {
        if ($this->config->getDebug()) {
            file_put_contents($this->config->getDebugFile(), '[' . date('Y-m-d H:i:s') . ']: ' . print_r($data, true) . "\n", FILE_APPEND);
        }
    }
}