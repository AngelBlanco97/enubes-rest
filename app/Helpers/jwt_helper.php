<?php

use Config\Services;
use Firebase\JWT\JWT;
use App\Models\UserModel;
use Firebase\JWT\Key;

function getJWTFromRequest($authenticationHeader): string
{
    // return print('<pre>' . print_r($authenticationHeader, true) . '</pre>');
    if (is_null($authenticationHeader)) {
        throw new Exception('Missing or invalid JWT in request');
    }

    return explode(' ', $authenticationHeader)[1];
}

function validateJWTFromRequest(string $encodedToken)
{
    $key = Services::getSecretKey();
    $decodedToken = JWT::decode($encodedToken, new Key($key, 'HS256'));
    $userModel = new UserModel();
    $userModel->findUserByEmailAddress($decodedToken->email);
}

function getSignedJWTForUser(string $email): string
{
    $issuedAtTime = time();
    $tokenTimeToLive = getenv('JWT_LIVE_TIME');
    $tokenExpiration = $issuedAtTime + $tokenTimeToLive;
    $payload = [
        'email' => $email,
        'iat' => $issuedAtTime,
        'exp' => $tokenExpiration
    ];

    $jwt = JWT::encode($payload, Services::getSecretKey(), 'HS256');
    return $jwt;
}
