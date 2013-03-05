Null object pattern
===================

### Overview

Pattern for creating neutral object from the logical point of view which
prevents logic to be broken because of a missing object.
May be very useful as a patch or a placeholder but please use it with
caution in places where it does make sense.

### Reasons to use

If the answer to following questions is "yes", then most likely you should use
this pattern:

- Is there any application layer (for example an implementation of Factory,
  Gateway or Repository patterns) which returns objects?
- May that layer return NULL instead of an object which may break some logic
  expectations?
- Do you have `if` blocks for **do nothing** code or for `null` returned
  instead of an object?
