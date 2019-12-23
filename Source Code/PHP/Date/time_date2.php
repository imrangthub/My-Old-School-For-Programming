<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

// Prints something like: Monday
echo date("l");

// Prints something like: Monday 30th of October 2009 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

// Prints: July 1, 2009 is on a Saturday
echo "July 1, 2009 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2009));

/* use the constants in the format parameter */
// prints something like: Mon, 15 Aug 2009 15:12:46 UTC
echo date(DATE_RFC822);

// prints something like: 2009-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2009));
?>
