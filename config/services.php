<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
      | default location for this type of information, allowing packages
      | to have a conventional place to find your various credentials.
      |
     */

    'mailgun'  => [
        'domain' => '',
        'secret' => '',
    ],
    'mandrill' => [
        'secret' => '',
    ],
    'ses'      => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],
    'stripe'   => [
        'model'  => 'App\User',
        'secret' => '',
    ],
    'github'   => [
        'client_id'     => '2b7d877fdc147cc54cbb',
        'client_secret' => '120ec69f201fa32f255cceb9e1cfe04f5879966e',
        'redirect'      => 'http://ccl.app',
    ],
    'facebook'   => [
        'client_id'     => '463034580526046',
        'client_secret' => '969addecb7c0b374477f57fd1f1af916',
        'redirect'      => 'http://ccl.app',
    ],
];
