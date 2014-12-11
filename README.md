# http

## Requirements

* PHP 5.3 (or higher)
* ext-curl, ext-json

## Development Requirements

* phpunit/phpunit 3.7

## Getting Started

TBD

### Using cURL

If you're using a cURL based HttpClient like the `CurlHttpClient`, you will want
to include the cacert.pem file that can be found at
[http://curl.haxx.se/docs/caextract.html](http://curl.haxx.se/docs/caextract.html)

You can add this as a dependency in your composer file. Your `composer.json`
might look something like this:

    {
      "require": {
        "offshoot/http": "0.1.x",
        "haxx-se/curl": "1.0.0"
      },
      "repositories": [
        {
          "type": "package",
          "package": {
            "name": "haxx-se/curl",
            "version": "1.0.0",
            "dist": {
              "url": "http://curl.haxx.se/ca/cacert.pem",
              "type": "file"
            }
          }
        }
      ]
    }

You will be able to find the cacert.pem file in `vendor/haxx-se/curl/cacert.pem`

## Usage

    $pathToCertificateFile = "vendor/haxx-se/curl/cacert.pem";
    $httpClient = new \Offshoot\HttpClient\CurlHttpClient($pathToCertificateFile);

    $redirector = new \Offshoot\Redirector\HeaderRedirector();

## Contributing

Contributions are welcome. Just fork the repository and send a pull request.
Please be sure to include test coverage with your pull request. You can learn
more about Pull Requests
[here](https://help.github.com/articles/creating-a-pull-request)

In order to run the test suite, ensure that the development dependencies have
been installed via composer. Then from your command line, simple run:

    vendor/bin/phpunit --bootstrap tests/bootstrap.php tests/

## License

This library is released under the
[MIT License](https://github.com/TeamOffshoot/http/blob/master/LICENSE)

