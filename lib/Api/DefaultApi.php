<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  PflegeDe\Partner
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * pflege.de partner API
 *
 * The Partner-API of pflege.de to create Affiliate-Leads programmatically
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PflegeDe\Partner\Api;

use \PflegeDe\Partner\ApiClient;
use \PflegeDe\Partner\ApiException;
use \PflegeDe\Partner\Configuration;
use \PflegeDe\Partner\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  PflegeDe\Partner
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * API Client
     *
     * @var \PflegeDe\Partner\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \PflegeDe\Partner\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\PflegeDe\Partner\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \PflegeDe\Partner\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \PflegeDe\Partner\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\PflegeDe\Partner\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation helloWorldGet
     *
     * @throws \PflegeDe\Partner\ApiException on non-2xx response
     * @return void
     */
    public function helloWorldGet()
    {
        list($response) = $this->helloWorldGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation helloWorldGetWithHttpInfo
     *
     * @throws \PflegeDe\Partner\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function helloWorldGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/hello-world";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/hello-world'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation leadTreppenliftPost
     *
     * @param string $partnerId  (required)
     * @param \PflegeDe\Partner\Model\Treppenlift $body  (required)
     * @param bool $debug Der Lead wird zwar gespeichert, intern aber nicht weiterverteilt und auch keine Affiliate-Transaktion angelegt (optional)
     * @throws \PflegeDe\Partner\ApiException on non-2xx response
     * @return void
     */
    public function leadTreppenliftPost($partnerId, $body, $debug = null)
    {
        list($response) = $this->leadTreppenliftPostWithHttpInfo($partnerId, $body, $debug);
        return $response;
    }

    /**
     * Operation leadTreppenliftPostWithHttpInfo
     *
     * @param string $partnerId  (required)
     * @param \PflegeDe\Partner\Model\Treppenlift $body  (required)
     * @param bool $debug Der Lead wird zwar gespeichert, intern aber nicht weiterverteilt und auch keine Affiliate-Transaktion angelegt (optional)
     * @throws \PflegeDe\Partner\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadTreppenliftPostWithHttpInfo($partnerId, $body, $debug = null)
    {
        // verify the required parameter 'partnerId' is set
        if ($partnerId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $partnerId when calling leadTreppenliftPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling leadTreppenliftPost');
        }
        // parse inputs
        $resourcePath = "/lead/treppenlift";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($partnerId !== null) {
            $queryParams['partner_id'] = $this->apiClient->getSerializer()->toQueryValue($partnerId);
        }
        // query params
        if ($debug !== null) {
            $queryParams['debug'] = $this->apiClient->getSerializer()->toQueryValue($debug);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/lead/treppenlift'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
