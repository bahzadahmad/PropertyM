<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'seller-api.php',
        'password-form.php',
        'dealer-add.php',
        'add-object-details.php',
        'set-password.php',
    ];
}
