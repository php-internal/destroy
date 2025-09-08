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

**Why Not Just `__destruct()`?**

PHP's `__destruct()` method has critical limitations with circular references.
While simple two-object cycles (A → B → A) can sometimes be resolved by `gc_collect_cycles()`,
more complex scenarios with three or more interconnected objects often fail to trigger destructors at all.

Additionally, `gc_collect_cycles()` has significant performance overhead,
making frequent calls impractical in high-performance applications.

```php
// Simple cycle - might be collected eventually
$a->ref = $b;
$b->ref = $a;

// Complex cycle - often never collected
$a->ref = $b;
$b->ref = $c; 
$c->ref = $a;
```

The `Destroyable` interface provides explicit control over cleanup,
ensuring resources are freed deterministically without relying on garbage collection cycles or performance-impacting manual collection calls.

Perfect for daemon processes, event-driven applications, and any scenario where deterministic resource cleanup is critical.

## Installation

```bash
composer require internal/destroy
```

[![PHP](https://img.shields.io/packagist/php-v/internal/destroy.svg?style=flat-square&logo=php)](https://packagist.org/packages/internal/destroy)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/internal/destroy.svg?style=flat-square&logo=packagist)](https://packagist.org/packages/internal/destroy)
[![License](https://img.shields.io/packagist/l/internal/destroy.svg?style=flat-square)](LICENSE.md)
[![Total Destroys](https://img.shields.io/packagist/dt/internal/destroy.svg?style=flat-square)](https://packagist.org/packages/internal/destroy/stats)
