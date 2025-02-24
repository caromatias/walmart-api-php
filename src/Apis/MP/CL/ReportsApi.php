<?php

/**
 * ReportsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 */

/**
 * MX Reports
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\MP\CL;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ReportsApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'getItemReport' => 'application/json',
    ];

    /**
     * Operation getItemReport
     *
     * Get item report
     *
     * @param  string $type Type of report to be requested (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function getItemReport(
        string $type
    ): string {
        return $this->getItemReportWithHttpInfo($type);
    }

    /**
     * Operation getItemReportWithHttpInfo
     *
     * Get item report
     *
     * @param  string $type Type of report to be requested (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    protected function getItemReportWithHttpInfo(
        string $type,
    ): string {
        $request = $this->getItemReportRequest($type);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, 'string', $response->getHeaders());
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getItemReportAsync
     *
     * Get item report
     *
     * @param  string $type Type of report to be requested (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemReportAsync(
        string $type
    ): PromiseInterface {
        return $this->getItemReportAsyncWithHttpInfo($type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemReportAsyncWithHttpInfo
     *
     * Get item report
     *
     * @param  string $type Type of report to be requested (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getItemReportAsyncWithHttpInfo(
        string $type,
    ): PromiseInterface {
        $returnType = 'string';
        $request = $this->getItemReportRequest($type);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'getItemReport'
     *
     * @param  string $type Type of report to be requested (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemReportRequest(
        string $type,
    ): Request {
        $contentType = self::contentTypes['getItemReport'];

        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling getItemReport'
            );
        }
        $resourcePath = '/v3/getReport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'GET';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $type,
                'type', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getClientId()) || !(empty($this->config->getClientSecret()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getClientId() . ":" . $this->config->getClientSecret());
        }

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

