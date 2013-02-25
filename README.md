Programming Design Patterns
===========================

Repository with community-driven docs and examples for Programming Design
Patterns

Our mission
-----------

We tend to build the most full and up-to-date collection of good quality
examples and recommendations on use for all known Programming Design Patterns

Collaborating
-------------

To start collaborating:

- fork this repo, create a branch, checkout that branch, apply your work,
  push the branch to Github, and send a pull request; or,

- create a ticket to start a discussion on Github

Using examples
--------------

### PHP

We're using [Composer](http://getcomposer.org) to resolve dependencies for our
PHP examples and tests. 
To run example called `something` in `state` pattern, change directory to
`state/php`, make sure to install all dependencies:

```
composer install
```

and execute test suit:

```
vendor/bin/phpunit tests/something_test.php
```

This will execute test the suit agains an example found in
`state/php/examples/something.php`

Credits
-------

Our work is based on external resources pretty much. Just a few of them are:

- [Agile Design Patterns](https://tutsplus.com/course/agile-design-patterns/)
  course by [Csaba Patkós](https://twitter.com/PatkosCsaba)
- [Design Patterns](http://www.cs.sjsu.edu/~pearce/modules/patterns/) by
  [Jon Pearce](http://www.cs.sjsu.edu/~pearce/pearce.html)
- [Design Patterns](http://sourcemaking.com/design_patterns) by
  [SourceMaking.com](http://sourcemaking.com)
- [Catalog of Patterns](http://martinfowler.com/eaaCatalog/) by
  [Martin Fowler](https://twitter.com/martinfowler)
- [Wikipedia](http://en.wikipedia.org/wiki/Main_Page)
- [StackOverflow](http://http://stackoverflow.com)

License
-------

This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.

In jurisdictions that recognize copyright laws, the author or authors
of this software dedicate any and all copyright interest in the
software to the public domain. We make this dedication for the benefit
of the public at large and to the detriment of our heirs and
successors. We intend this dedication to be an overt act of
relinquishment in perpetuity of all present and future rights to this
software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

For more information, please refer to <http://unlicense.org/>
