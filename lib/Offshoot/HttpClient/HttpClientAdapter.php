<?php

namespace Offshoot\HttpClient;

use Offshoot\HttpClient;

abstract class HttpClientAdapter implements HttpClient
{

    /** @var string */
    protected $accessToken;

    public function setAccessToken($token)
    {
        $this->accessToken = $token;
    }

    /**
     * get the permanent access token
     * @return string
     */
    protected function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * returns a generic default that should be overriden
     * @return string
     */
    protected function getAccessTokenHeader()
    {
        return 'X-Access-Token';
    }

}
