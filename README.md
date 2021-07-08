<p align="center">
    <img src="https://img.shields.io/badge/v-0.6.0_pre--alpha-brightgreen.svg" alt="Version">
</p>

# Laravel Agent

## Table of contents

- [Intro](#intro)
- [How to use](#how-to-use)
- [Testing](#testing)

## Intro

Laravel Agent provide access to Laravel web application to be used by a C&C (Command & Control) server.

## How to use

1. run `composer require uniqud/laravel-agent`
2. Add `UNIQUD_APP_TOKEN` key to `.env` file of your Laravel application then set value (which can be custom) for auth.
3. Publish config file, using `php artisan vendor:publish --tag=config` then you can change `TaskRunner` class to your custom one.

## Testing

To run tests using PHPUnit, execute `./vendor/bin/phpunit`.
