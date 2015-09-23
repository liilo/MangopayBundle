MangoPay for Symfony2
=====================

This bundle is a simple Symfony wrapper for [MangoPay SDK](https://github.com/Mangopay/mangopay2-php-sdk).
Features include:

- Integrates the MangoPay library into a Symfony2 environment
- Provides a service with parameters you can define in your parameters file

## Installation

Install the bundle via Composer:

``` bash
$ php composer.phar require liilo/mangopay-bundle dev-master
```

And register the bundle in your AppKernel.php file

``` php
return array(
   // ...
   new Liilo\MangopayBundle\LiiloMangopayBundle(),
   // ...
);
```

## Configuration

You will have to define your client id/password in the config.yml file.

``` yml
liilo_mangopay:
    client_id: YOUR_CLIENT_ID
    client_password: YOUR_CLIENT_PASSWORD
    temp_folder: TEMP_FOLDER_PATH # should be outside www folder
    prod: true|false #defaults to false (sandbox)
```

## Documentation

See documentation for [MangoPay REST API](http://docs.mangopay.com/api-references/)

## License

This bundle is distributed under MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
