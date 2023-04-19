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
            '_route' => 'generated::UXPgZkfbWDfHf2tp',
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
            '_route' => 'generated::wSY0iCAe7tMGu0LM',
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
            '_route' => 'generated::kl2RNmBpC1fVjbYt',
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
            '_route' => 'generated::Acaz2LKKta69JkOt',
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
            '_route' => 'generated::uZJcBB6ADY7RgIE1',
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
            '_route' => 'generated::1pBNPpqAtFVNOzQk',
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
            '_route' => 'generated::gltAw2cPMSuYbloB',
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
            '_route' => 'generated::n3TQx0IPAOiF1UPR',
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
            '_route' => 'generated::pX5k6726x20SBvK8',
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
            '_route' => 'generated::T7RKmiJaFLVFbcnH',
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
            '_route' => 'generated::qD7JCMynaGLMcvIM',
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
            '_route' => 'generated::Vhxbd26XKhSPsTIP',
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
            '_route' => 'generated::86e7CNCLBI4Mk4lP',
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
            '_route' => 'generated::WwAU3DqEH5fCGlhR',
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
            '_route' => 'generated::7JVn66GJy6y8mX07',
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
            '_route' => 'generated::ywO2gnvLmxI3HVxG',
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
            '_route' => 'generated::07FEoAVaowcSGRyA',
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
            '_route' => 'generated::dkK1SR3FW0V72tQQ',
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
            '_route' => 'generated::rqKAD5oQRTtAbvkl',
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
            '_route' => 'generated::D9eDyzMolQccxild',
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
            '_route' => 'generated::PeKPNJcZmVvGLXNj',
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
            '_route' => 'generated::c3YKG8LQyJNFaTUb',
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
            '_route' => 'generated::85bjVqNQSLvRtxa9',
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
            '_route' => 'generated::cxySKKCOp1JvCKMK',
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
            '_route' => 'generated::f88O8qtPPbZgfZpM',
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
            '_route' => 'generated::VUptRV8lefHyhdos',
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
            '_route' => 'generated::QrS8Rk3ytiC4YZQJ',
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
            '_route' => 'generated::PGt1fxCM8hysb8y8',
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
            '_route' => 'generated::xdEmAM8ALyTHujmZ',
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
            '_route' => 'generated::x0vkUodzSYe6dTbW',
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
            '_route' => 'generated::DnSNLb0T82rnXErY',
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
            '_route' => 'generated::shZohX43g71v2XsQ',
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
            '_route' => 'generated::2pTsWBbfQxfogZb4',
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
            '_route' => 'generated::Js5lPyi3WD1XcqtD',
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
            '_route' => 'generated::j8FlNLv2nU2gysCy',
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
            '_route' => 'generated::k3Vl6KFhVQUfXABU',
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
            '_route' => 'generated::GD9f3gQTNH4JPpMU',
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
            '_route' => 'generated::H9va0COXUFg9s5nd',
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
    'generated::UXPgZkfbWDfHf2tp' => 
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
        'as' => 'generated::UXPgZkfbWDfHf2tp',
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
    'generated::wSY0iCAe7tMGu0LM' => 
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
        'as' => 'generated::wSY0iCAe7tMGu0LM',
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
    'generated::kl2RNmBpC1fVjbYt' => 
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
        'as' => 'generated::kl2RNmBpC1fVjbYt',
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
    'generated::Acaz2LKKta69JkOt' => 
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
        'as' => 'generated::Acaz2LKKta69JkOt',
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
    'generated::Js5lPyi3WD1XcqtD' => 
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
        'as' => 'generated::Js5lPyi3WD1XcqtD',
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
    'generated::j8FlNLv2nU2gysCy' => 
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
        'as' => 'generated::j8FlNLv2nU2gysCy',
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
    'generated::uZJcBB6ADY7RgIE1' => 
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
        'as' => 'generated::uZJcBB6ADY7RgIE1',
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
    'generated::1pBNPpqAtFVNOzQk' => 
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
        'as' => 'generated::1pBNPpqAtFVNOzQk',
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
    'generated::k3Vl6KFhVQUfXABU' => 
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
        'as' => 'generated::k3Vl6KFhVQUfXABU',
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
    'generated::GD9f3gQTNH4JPpMU' => 
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
        'as' => 'generated::GD9f3gQTNH4JPpMU',
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
    'generated::gltAw2cPMSuYbloB' => 
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
        'as' => 'generated::gltAw2cPMSuYbloB',
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
    'generated::n3TQx0IPAOiF1UPR' => 
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
        'as' => 'generated::n3TQx0IPAOiF1UPR',
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
    'generated::pX5k6726x20SBvK8' => 
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
        'as' => 'generated::pX5k6726x20SBvK8',
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
    'generated::T7RKmiJaFLVFbcnH' => 
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
        'as' => 'generated::T7RKmiJaFLVFbcnH',
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
    'generated::qD7JCMynaGLMcvIM' => 
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
        'as' => 'generated::qD7JCMynaGLMcvIM',
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
    'generated::Vhxbd26XKhSPsTIP' => 
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
        'as' => 'generated::Vhxbd26XKhSPsTIP',
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
    'generated::86e7CNCLBI4Mk4lP' => 
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
        'as' => 'generated::86e7CNCLBI4Mk4lP',
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
    'generated::WwAU3DqEH5fCGlhR' => 
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
        'as' => 'generated::WwAU3DqEH5fCGlhR',
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
    'generated::7JVn66GJy6y8mX07' => 
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
        'as' => 'generated::7JVn66GJy6y8mX07',
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
    'generated::ywO2gnvLmxI3HVxG' => 
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
        'as' => 'generated::ywO2gnvLmxI3HVxG',
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
    'generated::07FEoAVaowcSGRyA' => 
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
        'as' => 'generated::07FEoAVaowcSGRyA',
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
    'generated::dkK1SR3FW0V72tQQ' => 
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
        'as' => 'generated::dkK1SR3FW0V72tQQ',
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
    'generated::rqKAD5oQRTtAbvkl' => 
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
        'as' => 'generated::rqKAD5oQRTtAbvkl',
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
    'generated::D9eDyzMolQccxild' => 
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
        'as' => 'generated::D9eDyzMolQccxild',
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
    'generated::PeKPNJcZmVvGLXNj' => 
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
        'as' => 'generated::PeKPNJcZmVvGLXNj',
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
    'generated::c3YKG8LQyJNFaTUb' => 
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
        'as' => 'generated::c3YKG8LQyJNFaTUb',
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
    'generated::H9va0COXUFg9s5nd' => 
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
        'as' => 'generated::H9va0COXUFg9s5nd',
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
    'generated::85bjVqNQSLvRtxa9' => 
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
        'as' => 'generated::85bjVqNQSLvRtxa9',
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
    'generated::cxySKKCOp1JvCKMK' => 
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
        'as' => 'generated::cxySKKCOp1JvCKMK',
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
    'generated::f88O8qtPPbZgfZpM' => 
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
        'as' => 'generated::f88O8qtPPbZgfZpM',
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
    'generated::VUptRV8lefHyhdos' => 
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
        'as' => 'generated::VUptRV8lefHyhdos',
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
    'generated::QrS8Rk3ytiC4YZQJ' => 
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
        'as' => 'generated::QrS8Rk3ytiC4YZQJ',
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
    'generated::PGt1fxCM8hysb8y8' => 
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
        'as' => 'generated::PGt1fxCM8hysb8y8',
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
    'generated::xdEmAM8ALyTHujmZ' => 
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
        'as' => 'generated::xdEmAM8ALyTHujmZ',
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
    'generated::x0vkUodzSYe6dTbW' => 
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
        'as' => 'generated::x0vkUodzSYe6dTbW',
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
    'generated::DnSNLb0T82rnXErY' => 
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
        'as' => 'generated::DnSNLb0T82rnXErY',
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
    'generated::shZohX43g71v2XsQ' => 
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
        'as' => 'generated::shZohX43g71v2XsQ',
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
    'generated::2pTsWBbfQxfogZb4' => 
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
        'as' => 'generated::2pTsWBbfQxfogZb4',
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
