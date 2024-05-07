<?php
function reset_session()
{
    if (!isset($_SESSION))
    session_unset();
    session_destroy();
    session_start();
}