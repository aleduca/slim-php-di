<?php

function is_logged_in()
{
    return isset($_SESSION['user']);
}


function auth(string $index)
{
    if (isset($_SESSION[$index])) {
        return $_SESSION[$index];
    }
}
