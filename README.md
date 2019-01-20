# Bitty View

[![Build Status](https://travis-ci.org/bittyphp/view.svg?branch=master)](https://travis-ci.org/bittyphp/view)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/12f86851b0f54c9ba0c67ee1ec355490)](https://www.codacy.com/app/bittyphp/view)
[![PHPStan Enabled](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)
[![Total Downloads](https://poser.pugx.org/bittyphp/view/downloads)](https://packagist.org/packages/bittyphp/view)
[![License](https://poser.pugx.org/bittyphp/view/license)](https://packagist.org/packages/bittyphp/view)

Abstract view layer for Bitty.

This package merely provides the view interface and an abstract view that can be extended to provide commonly useful functionality.

## Installation

It's best to install using [Composer](https://getcomposer.org/).

```sh
$ composer require bittyphp/view
```

## Implementations

The following implementations are available. Pick and choose whichever one(s) you would like:

- [Twig](https://github.com/bittyphp/view-twig)
- [Latte](https://github.com/bittyphp/view-latte)
- [Mustache](https://github.com/bittyphp/view-mustache)

### Twig

[Twig](https://twig.symfony.com/) is a wildly popular templating engine from the makers of [Symfony](https://symfony.com/).
```sh
$ composer require bittyphp/view-twig
```

### Latte

[Latte](https://latte.nette.org/), from the makers of the [Nette](https://nette.org/) framework,  promotes itself as security-focused and designer friendly.
```sh
$ composer require bittyphp/view-latte
```

### Mustache

[Mustache](https://github.com/bobthecow/mustache.php) provides logic-less templates and has rendering support in many different programming languages.

```sh
$ composer require bittyphp/view-mustache
```
