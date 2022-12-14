<?php

function create_response($status, $message, $data)
{
    return array('status' => $status, 'message' => $message, 'data' => $data);
}
