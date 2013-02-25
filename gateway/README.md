Gateway pattern
===============

### Overview

Provides a simple uniform view of external resources to the internals
of an application.

Examples of external resources:

- Relational or NoSQL databases
- Web services like Google's or Yahoo's ones
- Filesystem of the server
- Other web and non-web applications for data interoperability

In other words, Gateway pattern allows programmer to encapsulate
platform-dependent code in single class.

### Reasons to use

If the answer to following questions is "yes", then most likely you should use
this pattern:

- Is there any persistence in your application (database, remote service,
  filesystem, etc.)?
- Are you going to introduce multiple types of persistence?
- Do you want to keep your business logic be independent on which type of
  persistence is used?

### Resources

- [Practical PHP Patterns: Gateway](http://css.dzone.com/books/practical-php-patterns/basic/dnp-practical-php-patterns)
  by [Giorgio Sironi](https://twitter.com/giorgiosironi)
- [The Gateway Pattern](https://tutsplus.com/lesson/the-gateway-pattern/) by
  [Patkós Csaba](https://twitter.com/PatkosCsaba)
- [Gateway](http://martinfowler.com/eaaCatalog/gateway.html) by
  [Martin Fowler](https://twitter.com/martinfowler)
- [The Static Gateway Pattern](http://codebetter.com/jpboodhoo/2007/10/15/the-static-gateway-pattern/)
  by [Jean-Paul S. Boodhoo](https://twitter.com/jpboodhoo)
