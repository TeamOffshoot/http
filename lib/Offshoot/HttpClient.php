<?php

namespace Offshoot;

interface HttpClient
{

    const POST = 'post';
    const GET = 'get';

    /**
     * set the permanent access token
     * @param string $token
     */
    public function setAccessToken($token);

    /**
     * get the header name for the access token
     * @return string
     */
    public function getAccessTokenHeader();

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
