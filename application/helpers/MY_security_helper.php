<?php

function validate_request($api_key)
{
    return ($api_key === "RGlzdXJhQmFuZGFyYTIwMTgwMDhXMTc2MTg2NQ==");
}

function validate_user($request_username, $session_username)
{
    return ($request_username === $session_username);
}

function generate_jwt($headers, $payload, $secret = 'UmFuZHVudURpc3VyYVcxNzYxODY1MjAxODAwOA==')
{
    $default_headers = array('alg' => 'HS256', 'typ' => 'JWT');

    $headers_encoded = base64_encode(json_encode($headers ? array_merge($default_headers, $headers) : $default_headers));

    $payload_encoded = base64_encode(json_encode($payload));

    $signature = hash_hmac('SHA256', "{$headers_encoded}.{$payload_encoded}", $secret, true);
    $signature_encoded = base64_encode($signature);

    $jwt = "$headers_encoded.$payload_encoded.$signature_encoded";

    return $jwt;
}

function validate_jwt($jwt, $secret = 'UmFuZHVudURpc3VyYVcxNzYxODY1MjAxODAwOA==')
{
    $tokenParts = explode('.', $jwt);
    $header = base64_decode($tokenParts[0]);
    $payload = base64_decode($tokenParts[1]);
    $signature_provided = $tokenParts[2];

    // check expire?

    $base64_header = base64_encode($header);
    $base64_payload = base64_encode($payload);
    $signature = hash_hmac('SHA256', "{$base64_header}.{$base64_payload}", $secret, true);
    $base64_signature = base64_encode($signature);

    return $base64_signature === $signature_provided;
}

function get_jwt_payload($jwt)
{
    $tokenParts = explode('.', $jwt);
    return base64_decode($tokenParts[1]);
}