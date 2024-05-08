<?php
function reset_session()
{
    session_start();
    if (isset($_SESSION)) {
    session_unset();
    session_destroy();
    session_start();
    }
}