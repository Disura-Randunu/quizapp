<?php

function validate_request($api_key)
{
    return ($api_key === "RGlzdXJhQmFuZGFyYTIwMTgwMDhXMTc2MTg2NQ==");
}

function validate_user($request_username, $session_username)
{
    return ($request_username === $session_username);
}