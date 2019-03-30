<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
        //
=======
>>>>>>> c6a44cfbba9146d8cc601f2edc8523ba3dcf4012
>>>>>>> 0e7107da6edb1dc0f59c7365b5b1448ce280af83
        '*'
    ];
}
