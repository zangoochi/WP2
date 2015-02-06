<?php

// Get the current Session Timeout Value
// $currentTimeoutInSecs = ini_get(’session.gc_maxlifetime’);

// Change the Session Timeout Value

// Change the session timeout value to 30 minutes  // 8*60*60 = 8 hours
// ini_set(’session.gc_maxlifetime’, 30*60);

// php.ini setting required for session timeout.
// ini_set(‘session.gc_maxlifetime’,30);
// ini_set(‘session.gc_probability’,1);
// ini_set(‘session.gc_divisor’,1);

echo ini_get('session.gc_maxlifetime');
echo "\n";
echo ini_get('session.gc_probability');
echo "\n";
echo ini_get('session.gc_divisor');
echo "\n";
?>
