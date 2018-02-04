# Bitty View

[![Build Status](https://travis-ci.org/bittyphp/bitty-view.svg?branch=master)](https://travis-ci.org/bittyphp/bitty-view)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/12f86851b0f54c9ba0c67ee1ec355490)](https://www.codacy.com/app/bittyphp/bitty-view)
[![Total Downloads](https://poser.pugx.org/bittyphp/bitty-view/downloads)](https://packagist.org/packages/bittyphp/bitty-view)
[![License](https://poser.pugx.org/bittyphp/bitty-view/license)](https://packagist.org/packages/bittyphp/bitty-view)

Abstract view layer for Bitty.

This package merely provides the view interface and an abstract view that can be extended to provide commonly useful functionality.

## Installation

It's best to install using [Composer](https://getcomposer.org/).

```sh
$ composer require bittyphp/bitty-view
```

## Implementations

The following implementations are available. Pick and choose whichever one(s) you would like:

- [Twig](https://github.com/bittyphp/bitty-twig)
- [Mustache](https://github.com/bittyphp/bitty-mustache)

### Twig

[Twig](https://twig.symfony.com/) is a wildly popular templating engine from the makers of [Symfony](https://symfony.com/).
```sh
$ composer require bittyphp/bitty-twig
```

### Mustache

[Mustache](https://github.com/bobthecow/mustache.php) provides logic-less templates.

```sh
$ composer require bittyphp/bitty-mustache
```
