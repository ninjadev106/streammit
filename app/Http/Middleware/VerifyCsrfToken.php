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
        //
        '/auth/signup',
        '/auth/signin',
        '/auth/logout',
        '/auth/user-profile-update',
        '/auth/change-password',
        '/auth/change-email',
        '/auth/upgrade-membership',
        '/auth/save-device-token',
        '/comment',
        '/visit',
        '/download',
        '/view',
        '/likelog',
        '/contact-us',
        '/notify/confirm',
        '/checkout-paypal',
        '/execute-paypal'
    ];
}
