<?php

namespace Offshoot;

interface HttpClient
{

    const POST = 'post';
    const GET = 'get';

    /**
     * set a header on the request
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value);

    /**
     * make a get request to the given uri
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    public function get($uri, array $params = array());

    /**
     * make a post request to the given uri
     * @param string $uri
     * @param array|string $params
     * @return mixed
     */
    public function post($uri, $params = null);

}
