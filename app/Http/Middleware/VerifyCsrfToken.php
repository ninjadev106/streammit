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
        '/auth/expired',
        '/comment',
        '/visit',
        '/download',
        '/view',
        '/likelog',
        '/contact-us',
        '/reset-password-request',
        '/change-password1',
        '/notify/confirm',
        '/payment/add-funds/stripe'
    ];
}
