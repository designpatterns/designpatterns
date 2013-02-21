Visitor pattern
===============

### Overview

A safe way extend functionality of existing class by setting it's objects as
hosts and providing limited or unlimited access to them for any other objects.

### Reasons to use

If the answer to following questions is "yes", then most likely you should use
this pattern:

- Am I working with existing code?
- Is there functionality that is to be added to an existing class?
- Am I sure that there is no safe way to add this functionality right into the
  class?
- Do I need to limit the access to the existing class?
