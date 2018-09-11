# :package_name

[![Software License][ico-license]](LICENSE.md)

# To use this skeleton

#### Create the directory that you'll be using to work in locally, cd into it and clone this package

```bash
$ mkdir directory && cd directory
$ git clone -b 5.7 git@github.com:travoltron/skeleton.git .
```

#### Run the bulk updater

```bash
$ php prefill.php
```

#### Remove the references to this git repo 

```bash
$ rm -rf .git*
```

#### Initialize a new git repo

```bash
$ git init
$ git add --all
$ git commit -m "first commit"
$ git remote add origin git@github.com::vendor/:package_name.git
$ git push -u origin master
```

> This assumes you have created an empty repository at Github. Change to suit your own needs. -travoltron

#### Upload to packagist or include this package in your base Laravel app

For people hosting private packages on Github: you can add your token to Composer and include the packages like normal. You just need to tag the release and include this in your `composer.json`:

```json
"require": {
  "php": ">=5.6.4",
  ":vendor/:package_name": "0.0.1"
},
"repositories": [
  {
    "type": "vcs",
    "url":  "git@github.com::vendor/:package_name.git"
  }
],
```

#### Include the Service Provider in your app

In the file `config/app.php`, find the `'providers'` array and insert 
`:Vendor\SkeletonClass\SkeletonServiceProvider::class`.

Now the commands are registered, as well as the routes. 
If you plan on making a static class, you can add the :Skeleton class to the `aliases` array in the same file. 

## Description

:package_description

## Install

Via Composer

``` bash
$ composer require :vendor/:package_name
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
