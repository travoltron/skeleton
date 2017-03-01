# :package_name

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

# To use this skeleton

1. Create the directory that you'll be using to work in locally and cd into it

```bash
$ mkdir directory && cd directory
```

2. Run the bulk updater

```bash
$ php prefill.php
```

3. Remove the references to this git repo 

```bash
$ rm -rf .git*
```

4. Initialize a new git repo

```bash
$ git init
$ git add --all
$ git commit -m "first commit"
$ git remote add origin git@github.com::vendor/:package_name.git
$ git push -u origin master
```

> This assumes you have created an empty repository at Github. Change to suit your own needs. -travoltron

5. Upload to packagist or include this package in your base Laravel app

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

6. Include the Service Provider in your app

In the file `config/app.php`, find the `'providers'` array and insert 
`:vendor\\\\:package_name\\\\SkeletonServiceProvider::class`.

Now the commands are registered, as well as the routes. If you plan on making a static class, you can add the :Skeleton class to the `aliases` array in the same file. 

## Description

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

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
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
