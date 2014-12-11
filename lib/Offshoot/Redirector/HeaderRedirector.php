<?php

namespace Offshoot\Redirector;

class HeaderRedirector implements \Offshoot\Redirector
{

    public function redirect($uri)
    {

        header('Location: ' . $uri);
        exit(0);

    }

}
