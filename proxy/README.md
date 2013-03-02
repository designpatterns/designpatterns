Proxy pattern
===============

### Overview

Provides another "layer" of security / data validation, of data before it passed to its destination.
it shares the same interface with its destination object.

### Reasons to use

If the answer to following questions is "yes", then most likely you should use
this pattern:

- you want to validate credentials before granting data access?
- you want to validate the object before it transfers to its destination?
- if you want to prepare some object befor passing it on

### Resources

- [Wikipedia - The proxy pattern](http://en.wikipedia.org/wiki/Proxy_pattern)
- [php5dp - proxy pattern](http://www.php5dp.com/php-proxy-design-pattern-protect-your-assets/)
- [Source making](http://sourcemaking.com/design_patterns/proxy) 
