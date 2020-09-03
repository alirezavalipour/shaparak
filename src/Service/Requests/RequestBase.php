<?php

namespace Shaparak\Service\Requests;

use Exception;
use function GuzzleHttp\Psr7\uri_for;

class RequestBase
{

    private   $baseUrl;
    private   $curl;
    public    $requestType;
    protected $requestTypeCode;
    protected $data;
    protected $merchantId;

    const UPDATE_CHANGED        = 0;
    const UPDATE_WITHOUT_CHANGE = 2;

    function __construct()
    {
        $this->baseUrl = config('shaparak.base_url');
    }

    private function getReadRequestUrl()
    {
        return $this->baseUrl . '/merchant/webService/readRequestCartableWithFilter';
    }

    public function getData()
    {
        return $this->data;
    }

    public function getRequestTypeCode()
    {
        return $this->requestTypeCode;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function setMerchantId($merchantId)
    {
        return $this->merchantId = $merchantId;
    }

    private function getWriteRequestUrl()
    {
        return $this->baseUrl . '/merchant/webService/writeExternalRequest';
    }

    private function initRequest()
    {
        $this->curl = curl_init();
    }

    private function setOption()
    {

        curl_setopt_array($this->curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",

        ]);

        return $this;
    }

    private function authorization()
    {
        $username = config('shaparak.username_type') ? (int)config('shaparak.username') : config('shaparak.usernaem');
        $password = config('shaparak.password_type') ? (int)config('shaparak.password') : config('shaparak.password');

        return "Basic " . base64_encode($username . ":" . $password);
    }

    public function setHeaders()
    {
        $headers = [
            "Accept: application/json",
            "Authorization:" . $this->authorization(),
            "Content-Type: application/json",
        ];

        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);

        return $this;
    }

    public function setProxy()
    {
        if ($proxy = config('shaparak.proxy_url')) {
            curl_setopt($this->curl, CURLOPT_PROXY, $proxy);
        }

        return $this;
    }

    private function setUrl()
    {
        $url = $this->requestType ? $this->getWriteRequestUrl() : $this->getReadRequestUrl();

        curl_setopt($this->curl, CURLOPT_URL, $url);
    }

    public function readRequest()
    {
        $this->requestType = false;

        return $this;
    }

    public function writeRequest()
    {

        $this->requestType = true;

        return $this;

    }

    public function setData($data)
    {
        $this->data = $data;
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data));

        return $this;
    }

    public function makeRequest()
    {

        $this->initRequest();
        $this->setOption();
        $this->setProxy();
        $this->setUrl();
        $this->setHeaders();

        return $this;
    }

    public function send()
    {

        $result = curl_exec($this->curl);

        if ($errorNumber = curl_errno($this->curl)) {
            throw new Exception(curl_strerror($errorNumber));
        }

        return $result;

    }

}
