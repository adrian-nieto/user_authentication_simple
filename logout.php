<?php
    session_start();
    //logout user
    session_destroy();

    echo "Logged out successfully";
?>
