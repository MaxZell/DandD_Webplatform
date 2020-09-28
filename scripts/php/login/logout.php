<?php
// Will be executed to wait with the output of the header.
ob_start ();

session_start ();
session_unset ();
session_destroy ();

header ("Location: ./../../../index.php");
ob_end_flush ();

/**
 * ToDo remove Sessions after logout, so that user can not came back to interface
 * https://stackoverflow.com/questions/3512507/proper-way-to-logout-from-a-session-in-php/51317339
*/
// session_unset();
// session_destroy();
// $_SESSION = array();
?> 