<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HBTQQVslKEHoUkPR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KXDCkGYSrrrnZzpS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/get-families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tsVASp42BWmcmOli',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/store-family' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYBtrFYiUfDLiqvZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/tutors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8Yz4a630dbkx9m3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0lNdRmuf4AWwjkMJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-dollars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1QYv7GtX5onyseVo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-euro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GtIosV2BIKBi6eqb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-candain-dollar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EoUCIKJ4fa0OqJah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-pound' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZNVfS1baWzQvv9GI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6M5uas13jxgjsIhK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-tutors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PhFHscuMqOYE5Puc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/total-hours' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::06J0rlLnAaMiA7du',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/get-currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UKOVlXXg9esls5IT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/get-countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qZq3kLUkJQPV91Px',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/family-billing-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lZ8aVzv0RzeidlaR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/get-pdf-billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ynG1EF52k31gWPsZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/paid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kXju8U03odf7kSGj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/unpaid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sr4JL95qjvgZfYiK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/salaries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIsUID3SztuQ9hiY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yyW3lTHvmF5W1l9k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/lectures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lectures.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lectures.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/get-tutor-families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pnJIsuFO4a0OEYJu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/tutor-total-month-hours' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hHHHihMYMP9S106J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/tutor-total-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aBU1hfKBhviVM3PZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/tutor-total-families' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uAnUVNhKpVk8KSw1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-api/tutor-total-lectures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Ycp0zRGRbo9diw3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rbQUpe450TsZKXUE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/send-test-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kNzTXogcwHDFxGuf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/users-billings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5jqCgvzZG1V5vybd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/create-payment-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/cancel-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/update-billings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhKgICO9ZWhy5D4J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/guest-api/calculate-tutor-billings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eSmTTqs3FWp4q86G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lFeFadqpYG47X5sQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t06b5LmrkKjYJ3yx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/capture-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'capture-order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/user\\-api/(?|update\\-family/([^/]++)(*:44)|destroy\\-families/([^/]++)(*:77)|tutors/([^/]++)(?|(*:102))|courses/([^/]++)(?|(*:130))|lectures/([^/]++)(?|(*:159))|get\\-course\\-lectures/([^/]++)(*:198))|/guest\\-api/payment\\-success/([^/]++)(*:244)|/pay/([^/]++)/([^/]++)(*:274))/?$}sDu',
    ),
    3 => 
    array (
      44 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eeT2KdfSLzV1ixEW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nd5oe6vIUL0h7ANF',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nvk9njbTgvXUPvLk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MksSN4utPAcaIH3W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'courses.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'courses.update',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'courses.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lectures.show',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'lectures.update',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'lectures.destroy',
          ),
          1 => 
          array (
            0 => 'lecture',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ldLBDc1guz2HU9Dk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.success',
          ),
          1 => 
          array (
            0 => 'family_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.show',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'amount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HBTQQVslKEHoUkPR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005200000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HBTQQVslKEHoUkPR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KXDCkGYSrrrnZzpS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005230000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::KXDCkGYSrrrnZzpS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tsVASp42BWmcmOli' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/get-families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@getFamilies',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@getFamilies',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::tsVASp42BWmcmOli',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYBtrFYiUfDLiqvZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/store-family',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@storeFamily',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@storeFamily',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::eYBtrFYiUfDLiqvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eeT2KdfSLzV1ixEW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user-api/update-family/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@updateFamily',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@updateFamily',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::eeT2KdfSLzV1ixEW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nd5oe6vIUL0h7ANF' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user-api/destroy-families/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@destroyFamily',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Families\\IndexController@destroyFamily',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::nd5oe6vIUL0h7ANF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8Yz4a630dbkx9m3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@index',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Q8Yz4a630dbkx9m3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lNdRmuf4AWwjkMJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/tutors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@store',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::0lNdRmuf4AWwjkMJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nvk9njbTgvXUPvLk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user-api/tutors/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@update',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Nvk9njbTgvXUPvLk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MksSN4utPAcaIH3W' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user-api/tutors/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Tutors\\TutorsController@destroy',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::MksSN4utPAcaIH3W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1QYv7GtX5onyseVo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-dollars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalDollars',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalDollars',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::1QYv7GtX5onyseVo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GtIosV2BIKBi6eqb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-euro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalEuro',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalEuro',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::GtIosV2BIKBi6eqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EoUCIKJ4fa0OqJah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-candain-dollar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalCandainDollar',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalCandainDollar',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::EoUCIKJ4fa0OqJah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZNVfS1baWzQvv9GI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-pound',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalPound',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalPound',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZNVfS1baWzQvv9GI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6M5uas13jxgjsIhK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalFamilies',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalFamilies',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::6M5uas13jxgjsIhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhFHscuMqOYE5Puc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-tutors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalTutors',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalTutors',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::PhFHscuMqOYE5Puc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::06J0rlLnAaMiA7du' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/total-hours',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalHours',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Statistics\\IndexController@totalHours',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::06J0rlLnAaMiA7du',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UKOVlXXg9esls5IT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/get-currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Currency\\CurrencyController@currencies',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Currency\\CurrencyController@currencies',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::UKOVlXXg9esls5IT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZq3kLUkJQPV91Px' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/get-countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Country\\CountryController@countries',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Country\\CountryController@countries',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::qZq3kLUkJQPV91Px',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lZ8aVzv0RzeidlaR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/family-billing-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Reports\\ReportsController@familyBillingReport',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Reports\\ReportsController@familyBillingReport',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::lZ8aVzv0RzeidlaR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ynG1EF52k31gWPsZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/get-pdf-billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\PdfBillings\\PdfBillingsController@generateBillingPdf',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\PdfBillings\\PdfBillingsController@generateBillingPdf',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::ynG1EF52k31gWPsZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kXju8U03odf7kSGj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/paid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@paid',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@paid',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::kXju8U03odf7kSGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sr4JL95qjvgZfYiK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/unpaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@unPaid',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@unPaid',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Sr4JL95qjvgZfYiK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uIsUID3SztuQ9hiY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/salaries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Salaries\\IndexController@salaries',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Salaries\\IndexController@salaries',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::uIsUID3SztuQ9hiY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yyW3lTHvmF5W1l9k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/salaries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Salaries\\IndexController@salariesCalculate',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Salaries\\IndexController@salariesCalculate',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::yyW3lTHvmF5W1l9k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'courses.index',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@index',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@index',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'courses.store',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@store',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@store',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'courses.show',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@show',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@show',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user-api/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'courses.update',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@update',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@update',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'courses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user-api/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'courses.destroy',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@destroy',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lectures.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/lectures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'lectures.index',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@index',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@index',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lectures.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/lectures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'lectures.store',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@store',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@store',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lectures.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/lectures/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'lectures.show',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@show',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@show',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lectures.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user-api/lectures/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'lectures.update',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@update',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@update',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lectures.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user-api/lectures/{lecture}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'as' => 'lectures.destroy',
        'uses' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Api\\Tutor\\Lecture\\LectureController@destroy',
        'namespace' => NULL,
        'prefix' => 'user-api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pnJIsuFO4a0OEYJu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/get-tutor-families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Familis\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Familis\\IndexController@index',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::pnJIsuFO4a0OEYJu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ldLBDc1guz2HU9Dk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/get-course-lectures/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@courseLecture',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Course\\CourseController@courseLecture',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::ldLBDc1guz2HU9Dk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hHHHihMYMP9S106J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutor-total-month-hours',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalMonthHours',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalMonthHours',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::hHHHihMYMP9S106J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aBU1hfKBhviVM3PZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutor-total-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalCourses',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalCourses',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::aBU1hfKBhviVM3PZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uAnUVNhKpVk8KSw1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutor-total-families',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalFamilies',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalFamilies',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::uAnUVNhKpVk8KSw1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Ycp0zRGRbo9diw3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutor-total-lectures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalLectures',
        'controller' => 'App\\Http\\Controllers\\Api\\Tutor\\Statistics\\IndexController@totalLectures',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::6Ycp0zRGRbo9diw3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rbQUpe450TsZKXUE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/login',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Login\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\Login\\LoginController@login',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::rbQUpe450TsZKXUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNzTXogcwHDFxGuf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/send-test-message',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Controller@whatsappTest',
        'controller' => 'App\\Http\\Controllers\\Controller@whatsappTest',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::kNzTXogcwHDFxGuf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5jqCgvzZG1V5vybd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/users-billings',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillings',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillings',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::5jqCgvzZG1V5vybd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/create-payment-link',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@sendPaymentLinks',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@sendPaymentLinks',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'payment.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/payment-success/{family_id}',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@success',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@success',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'payment.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/cancel-payment',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@cancel',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@cancel',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'payment.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OhKgICO9ZWhy5D4J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/update-billings',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:827:"function (){
    $lectures = \\App\\Models\\Lecture::all();
    foreach ($lectures as $lecture){
        $data[\'family_id\'] = $lecture->family_id;
        $billing[\'family_id\'] = $data[\'family_id\'];
        $billing[\'tutor_id\'] = $lecture->course->tutor_id;
        $billing[\'lecture_id\'] = $lecture->id;
        $billing[\'currency_id\'] = \\App\\Models\\Family::find($data[\'family_id\'])->currency->id;
        $billing[\'hour_rate\'] = \\App\\Models\\Family::find($data[\'family_id\'])->hour_price;
        $billing[\'lecture_duration\'] = $lecture->lecture_duration;
        $billing[\'month\'] = \\Carbon\\Carbon::now()->month;
        $billing[\'year\'] = \\Carbon\\Carbon::now()->year;
        $billing[\'amount\'] = $billing[\'lecture_duration\']*$billing[\'hour_rate\'];
        \\App\\Models\\Billing::create($billing);
    }
    \\dd("done ya bro");

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008fc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::OhKgICO9ZWhy5D4J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eSmTTqs3FWp4q86G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/calculate-tutor-billings',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:253:"function (\\Illuminate\\Http\\Request $request){
    $courses = \\App\\Models\\Course::where(\'tutor_id\',$request->id)->get();
    $total = 0;
    foreach ($courses as $cours){
      $total += $cours->lectures->sum(\'lecture_duration\');
    }
    \\dd($total);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008fe0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::eSmTTqs3FWp4q86G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lFeFadqpYG47X5sQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009010000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lFeFadqpYG47X5sQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t06b5LmrkKjYJ3yx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@checkoutPage',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\IndexController@checkoutPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t06b5LmrkKjYJ3yx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pay/{id}/{amount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@createOrder',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@createOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'capture-order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'capture-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@captureOrder',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@captureOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'capture-order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@success',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
