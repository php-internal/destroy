<div align="center">

![Destroy](./resources/logo.svg)

</div>

<p align="center">Destruction as a Service</p>

<div align="center">

[![Support](https://img.shields.io/static/v1?style=flat-square&label=Support&message=%E2%9D%A4&logo=GitHub&color=%23fe0086)](https://patreon.com/roxblnfk)

</div>

<br />

The package provides explicit resource management for PHP applications through the `Destroyable` interface.
It solves memory leaks in long-running applications by enabling deterministic cleanup of resources and breaking circular reference chains that prevent garbage collection.

Perfect for daemon processes, event-driven applications, and any scenario where `__destruct()` alone isn't sufficient for proper resource management.

## Installation

```bash
composer require internal/destroy
```

[![PHP](https://img.shields.io/packagist/php-v/internal/destroy.svg?style=flat-square&logo=php)](https://packagist.org/packages/internal/destroy)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/internal/destroy.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/internal/destroy)
[![License](https://img.shields.io/packagist/l/internal/destroy.svg?style=flat-square)](LICENSE.md)
[![Total Destroys](https://img.shields.io/packagist/dt/internal/destroy.svg?style=flat-square)](https://packagist.org/packages/internal/destroy/stats)
