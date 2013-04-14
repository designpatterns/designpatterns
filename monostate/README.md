Monostate pattern
=================

### Overview

The Monostate pattern attempts to hide the fact that a class is only operating
on a single instance of data by using static data members. This way, consumers
of this class will feel as if they are instantiating their own instance, but in
fact will be accessing static data.

### Reasons to use

- Transparency - who ever use it, wont know its a singleton, and uses it as a regular object
- Polymorphism - since the methods are not static inherit them and offer different behavior over the same properties.

### Caveats

- While "transparency" of pattern existance may be a nice thing, it may also
  lead to unexpected behaviour when someone may not know that by modifying one
  object they modify others.
- Don't forget that Monostate pattern creates as many objects as you
  instantiate, so in some cases it may be resources consuming. In such cases
  Singleton pattern may be a more prefered option.

### Source

- https://tutsplus.com/lesson/monostate-pattern
- http://www.codethinked.com/the-monostate-pattern
