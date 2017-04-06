# chinese-slug

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Package for translate string to english, then use it to create a slug.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following..

```
src/
tests/
```


## Install

Via Composer

``` bash
$ composer require jiemoon/chinese-slug
```

## Usage

``` php
$skeleton = new Jiemoon\ChineseSlug();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jiemoon/chinese-slug.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jiemoon/chinese-slug/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jiemoon/chinese-slug.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jiemoon/chinese-slug.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jiemoon/chinese-slug.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jiemoon/chinese-slug
[link-travis]: https://travis-ci.org/jiemoon/chinese-slug
[link-scrutinizer]: https://scrutinizer-ci.com/g/jiemoon/chinese-slug/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jiemoon/chinese-slug
[link-downloads]: https://packagist.org/packages/jiemoon/chinese-slug
[link-contributors]: ../../contributors
