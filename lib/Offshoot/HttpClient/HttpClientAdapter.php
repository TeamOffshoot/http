<?php

namespace Offshoot\HttpClient;

use Offshoot\HttpClient;

abstract class HttpClientAdapter implements HttpClient
{

    /**
     * an array of headers to be used in the request
     * @var array
     */
    protected $headers;

    public function __construct()
    {
        $this->headers = array();
    }

    /**
     * set a header on the request
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value)
    {
        $this->headers[] = $key . ': ' . $value;
    }

    protected function getHttpHeaders()
    {
        return array_map(function($key, $value) {
             return $key . ': ' . $value;
         }, array_keys($this->headers), $this->headers);
    }

    protected function hasHeaders()
    {
        return count($this->headers);
    }

}
