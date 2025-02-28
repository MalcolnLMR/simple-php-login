# Simple PHP Login Project

This project is a simple PHP-based login system that allows users to register and log in with different access levels. The access levels determine which parts of the application users can access, with levels ranging from 0 (public access) to 5 (admin access).

## Security notes to my future self
Disclaimer: I'm a student taking notes, so double check anything below if you plan to use it.

#### Does NOT use only $_SESSION to validate access level.
$_SESSION is a server side variable, but that doesnt means it cant be manipulated. Would be nice if you use some practices to prevent it. like regenerate session id after login, turn on cookie_httponly and cookie_secure. And if you have a "access_level" (like in this repo), before any crit action (e.g. delete, drop) check access_level from the database, not from session.
