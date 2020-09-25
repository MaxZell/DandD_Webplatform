<?php
// Will be executed to wait with the output of the header.
ob_start ();

session_start ();
session_unset ();
session_destroy ();

header ("Location: ../../../index.php");
ob_end_flush ();
?> 