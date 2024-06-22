<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables as per the question
        $name = "Donal Trump";
        $age = "75";

        // Prepare data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie parameters
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $cookieMinutes = 1;
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false; // Set to true if HTTPS is used
        $cookieHttpOnly = true;

        // Create the response with JSON data and set cookie
        $response = new Response(json_encode($data), 200);
        $response->withCookie(
            cookie(
                $cookieName,
                $cookieValue,
                $cookieMinutes,
                $cookiePath,
                $cookieDomain,
                $cookieSecure,
                $cookieHttpOnly
            )
        );

        return $response;
    }
}
