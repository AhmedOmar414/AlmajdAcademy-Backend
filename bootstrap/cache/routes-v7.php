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
            '_route' => 'generated::fWt9c099B099pjFx',
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
            '_route' => 'generated::znZXRaFrDOWJVXAX',
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
            '_route' => 'generated::d2R827Dv6CTZJ0q0',
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
            '_route' => 'generated::wQVYPCik3TGaiFYA',
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
            '_route' => 'generated::KZnA11ixyg4Wpi5j',
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
            '_route' => 'generated::akPbb4g2hpci5pWL',
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
            '_route' => 'generated::eVREiqnXXXgxCUv4',
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
            '_route' => 'generated::sW9E2AO5z6Vi6s8U',
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
            '_route' => 'generated::4QbvxDkRnMV327Z7',
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
            '_route' => 'generated::FGuHf1BoBi8p0xVh',
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
            '_route' => 'generated::o7du5tQPlGDD9sW3',
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
            '_route' => 'generated::BIuh8AVmFbewLHQB',
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
            '_route' => 'generated::KxrdzbnfuFxJL3ks',
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
            '_route' => 'generated::zqhbGqwXGlIyk8C3',
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
            '_route' => 'generated::yFcplzPPDtbyCQ1v',
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
            '_route' => 'generated::MQKMvyWmGTeaCNxD',
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
            '_route' => 'generated::uTliv7tnKNGsDGa6',
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
            '_route' => 'generated::OdwjwhXRjYtqLMHt',
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
            '_route' => 'generated::abV4eSkCYo3eFupN',
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
            '_route' => 'generated::k5D3BC46aw7QoX7Q',
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
            '_route' => 'generated::yxyRgPXU0hjluThc',
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
            '_route' => 'generated::CKpnvJAdYCfkXnU6',
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
            '_route' => 'generated::c1hp4HThHnwfgzYj',
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
            '_route' => 'generated::bbXtcPjZolhvUpIj',
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
            '_route' => 'generated::EPWbdZgutUF3P1xz',
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
            '_route' => 'generated::9KaliDh1RUHJ2Y25',
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
            '_route' => 'generated::QvgnBQs3qLNxzeNx',
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
      '/guest-api/whatsapp/send-test-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tenxesUhvjGGOB3L',
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
            '_route' => 'generated::7oUIgtyFAqWq6Lrh',
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
            '_route' => 'generated::FLlVAH4v4Wc32wWl',
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
            '_route' => 'generated::7LlDv9H89OHbwbnj',
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
      0 => '{^(?|/user\\-api/(?|update\\-family/([^/]++)(*:44)|destroy\\-families/([^/]++)(*:77)|tutors/([^/]++)(?|(*:102))|courses/([^/]++)(?|(*:130))|lectures/([^/]++)(?|(*:159))|get\\-course\\-lectures/([^/]++)(*:198))|/guest\\-api/payment\\-success/([^/]++)(*:244))/?$}sDu',
    ),
    3 => 
    array (
      44 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xRDfCjkyJqXXupDE',
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
            '_route' => 'generated::7xI14PY3mKdAKvYg',
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
            '_route' => 'generated::I1dros63mA642XgD',
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
            '_route' => 'generated::oPqDOWd4hepJCRFi',
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
            '_route' => 'generated::Do3vpK8GbEQdG0rs',
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
    'generated::fWt9c099B099pjFx' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005170000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fWt9c099B099pjFx',
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
    'generated::znZXRaFrDOWJVXAX' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000051a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::znZXRaFrDOWJVXAX',
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
    'generated::d2R827Dv6CTZJ0q0' => 
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
        'as' => 'generated::d2R827Dv6CTZJ0q0',
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
    'generated::wQVYPCik3TGaiFYA' => 
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
        'as' => 'generated::wQVYPCik3TGaiFYA',
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
    'generated::xRDfCjkyJqXXupDE' => 
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
        'as' => 'generated::xRDfCjkyJqXXupDE',
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
    'generated::7xI14PY3mKdAKvYg' => 
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
        'as' => 'generated::7xI14PY3mKdAKvYg',
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
    'generated::KZnA11ixyg4Wpi5j' => 
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
        'as' => 'generated::KZnA11ixyg4Wpi5j',
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
    'generated::akPbb4g2hpci5pWL' => 
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
        'as' => 'generated::akPbb4g2hpci5pWL',
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
    'generated::I1dros63mA642XgD' => 
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
        'as' => 'generated::I1dros63mA642XgD',
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
    'generated::oPqDOWd4hepJCRFi' => 
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
        'as' => 'generated::oPqDOWd4hepJCRFi',
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
    'generated::eVREiqnXXXgxCUv4' => 
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
        'as' => 'generated::eVREiqnXXXgxCUv4',
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
    'generated::sW9E2AO5z6Vi6s8U' => 
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
        'as' => 'generated::sW9E2AO5z6Vi6s8U',
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
    'generated::4QbvxDkRnMV327Z7' => 
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
        'as' => 'generated::4QbvxDkRnMV327Z7',
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
    'generated::FGuHf1BoBi8p0xVh' => 
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
        'as' => 'generated::FGuHf1BoBi8p0xVh',
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
    'generated::o7du5tQPlGDD9sW3' => 
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
        'as' => 'generated::o7du5tQPlGDD9sW3',
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
    'generated::BIuh8AVmFbewLHQB' => 
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
        'as' => 'generated::BIuh8AVmFbewLHQB',
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
    'generated::KxrdzbnfuFxJL3ks' => 
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
        'as' => 'generated::KxrdzbnfuFxJL3ks',
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
    'generated::zqhbGqwXGlIyk8C3' => 
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
        'as' => 'generated::zqhbGqwXGlIyk8C3',
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
    'generated::yFcplzPPDtbyCQ1v' => 
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
        'as' => 'generated::yFcplzPPDtbyCQ1v',
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
    'generated::MQKMvyWmGTeaCNxD' => 
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
        'as' => 'generated::MQKMvyWmGTeaCNxD',
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
    'generated::uTliv7tnKNGsDGa6' => 
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
        'as' => 'generated::uTliv7tnKNGsDGa6',
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
    'generated::OdwjwhXRjYtqLMHt' => 
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
        'as' => 'generated::OdwjwhXRjYtqLMHt',
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
    'generated::abV4eSkCYo3eFupN' => 
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
        'as' => 'generated::abV4eSkCYo3eFupN',
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
    'generated::k5D3BC46aw7QoX7Q' => 
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
        'as' => 'generated::k5D3BC46aw7QoX7Q',
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
    'generated::yxyRgPXU0hjluThc' => 
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
        'as' => 'generated::yxyRgPXU0hjluThc',
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
    'generated::CKpnvJAdYCfkXnU6' => 
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
        'as' => 'generated::CKpnvJAdYCfkXnU6',
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
    'generated::Do3vpK8GbEQdG0rs' => 
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
        'as' => 'generated::Do3vpK8GbEQdG0rs',
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
    'generated::c1hp4HThHnwfgzYj' => 
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
        'as' => 'generated::c1hp4HThHnwfgzYj',
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
    'generated::bbXtcPjZolhvUpIj' => 
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
        'as' => 'generated::bbXtcPjZolhvUpIj',
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
    'generated::EPWbdZgutUF3P1xz' => 
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
        'as' => 'generated::EPWbdZgutUF3P1xz',
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
    'generated::9KaliDh1RUHJ2Y25' => 
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
        'as' => 'generated::9KaliDh1RUHJ2Y25',
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
    'generated::QvgnBQs3qLNxzeNx' => 
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
        'as' => 'generated::QvgnBQs3qLNxzeNx',
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
    'generated::tenxesUhvjGGOB3L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/whatsapp/send-test-message',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:28:"function (){return "sdfds";}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ee0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::tenxesUhvjGGOB3L',
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
    'generated::7oUIgtyFAqWq6Lrh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'guest-api/update-billings',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:838:"function (){
    $lectures = \\App\\Models\\Lecture::all();
    foreach ($lectures as $lecture){
        $data[\'family_id\'] = $lecture->family_id;
        $billing[\'family_id\'] = $data[\'family_id\'];
        $billing[\'tutor_id\'] = $lecture->course()->tutor_sfhdid ?? 0;
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

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008f30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::7oUIgtyFAqWq6Lrh',
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
    'generated::FLlVAH4v4Wc32wWl' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008f50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::FLlVAH4v4Wc32wWl',
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
    'generated::7LlDv9H89OHbwbnj' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008f80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7LlDv9H89OHbwbnj',
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
