Strategy pattern
================

### Overview

Sets multiple pieces of logic with similar interface but different behaviour to
be used in any part of any other class.

### Reasons to use

If the answer to following questions is "yes", then most likely you should use
this pattern:

- Do you have too many if statements around one logic?
- Is this logic only used once?
- Are you working with code that can be refactored safely?
