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
            '_route' => 'generated::cw7xF33OqFmeZHDQ',
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
            '_route' => 'generated::R1ZVgojsEldcQuar',
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
            '_route' => 'generated::JpmHpE5YTz5UERFD',
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
            '_route' => 'generated::X6JtvYPlo3M58S03',
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
            '_route' => 'generated::TrOXmizvvi8C3stL',
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
            '_route' => 'generated::insSdeK3iO91kAc2',
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
            '_route' => 'generated::zGFxlXFuLBuCH75U',
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
            '_route' => 'generated::tcL9xV5LpsUIMuV6',
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
            '_route' => 'generated::cWLiV9HXETXZXmKj',
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
            '_route' => 'generated::J5Laud1J4Oa7FbCL',
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
            '_route' => 'generated::teo5e2zOUfNFESpU',
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
            '_route' => 'generated::r3Iq5MA4Qc3cgs97',
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
            '_route' => 'generated::TcKdW1ER5zzG9rD4',
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
            '_route' => 'generated::tI16jfNI73I7QAPt',
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
            '_route' => 'generated::jlD1dDx11tODPbWA',
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
            '_route' => 'generated::ZDg5jq4mI2pMHXwX',
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
            '_route' => 'generated::9rHnOMUoU72vRou4',
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
      '/user-api/salaries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HqWMDwFHRc9ObEwm',
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
            '_route' => 'generated::Cb6NP5CWz9hhG8XU',
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
            '_route' => 'generated::DuvRcCZ1QSAaYVYF',
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
            '_route' => 'generated::jWdb36Z8Ivo7NyVu',
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
            '_route' => 'generated::gUGFBMO7gTRvxxKv',
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
            '_route' => 'generated::ekJni4mLqbnVlmfB',
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
            '_route' => 'generated::Kk03hdna8RgyROrS',
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
            '_route' => 'generated::5MEf1gzoQEqiGqdp',
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
            '_route' => 'generated::taZdZ3wJbM9W0Nkh',
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
            '_route' => 'generated::yEPFVeZQn59IwZlv',
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
      '/guest-api/users-billings/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8tLNGnDi7odGuy29',
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
      '/guest-api/users-billings-paid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YprwAomrwzXCJFrX',
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
      '/guest-api/calculate-tutor-billings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ckk0d1oPB4I3RVA6',
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
            '_route' => 'generated::qjS4MwUkKNs37LWS',
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
            '_route' => 'generated::5h8oorgWy59Fxzf1',
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
      '/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cancel',
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
      0 => '{^(?|/user\\-api/(?|u(?|pdate\\-(?|family/([^/]++)(*:50)|lecture/([^/]++)(*:73))|npaid/([^/]++)(*:95))|de(?|stroy\\-families/([^/]++)(*:132)|lete\\-lecture/([^/]++)(*:162))|tutor(?|s/([^/]++)(?|(*:192))|\\-courses/([^/]++)(*:219))|paid/([^/]++)(*:241)|course(?|\\-lectures/([^/]++)(*:277)|s/([^/]++)(?|(*:298)))|lectures/([^/]++)(?|(*:328))|get\\-course\\-lectures/([^/]++)(*:367))|/guest\\-api/payment\\-success/([^/]++)(*:413)|/pay/([^/]++)/([^/]++)/([^/]++)(*:452)|/success/([^/]++)(*:477))/?$}sDu',
    ),
    3 => 
    array (
      50 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MbO9MecRE4Gf8Eau',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rOxixEbVto2PExY1',
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
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DANT2HsHiZgidMv9',
          ),
          1 => 
          array (
            0 => 'month',
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
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S0SxUFQugNK1uicS',
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
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jre8heatHbCCbLyU',
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
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zBraaiavlPEkmnzV',
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
            '_route' => 'generated::D4kqMHBIdRCdxiil',
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
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WiCI9Ay2ZdtI9W0k',
          ),
          1 => 
          array (
            0 => 'id',
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
      241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vooNr5XoLEolIpNl',
          ),
          1 => 
          array (
            0 => 'month',
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
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XNHoxcAIphLLphSw',
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
      298 => 
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
      328 => 
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
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::logBX0dGlV19nJGa',
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
      413 => 
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
      452 => 
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
            2 => 'month',
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
      477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'success',
          ),
          1 => 
          array (
            0 => 'month',
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
    'generated::cw7xF33OqFmeZHDQ' => 
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
        'as' => 'generated::cw7xF33OqFmeZHDQ',
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
    'generated::R1ZVgojsEldcQuar' => 
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
        'as' => 'generated::R1ZVgojsEldcQuar',
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
    'generated::JpmHpE5YTz5UERFD' => 
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
        'as' => 'generated::JpmHpE5YTz5UERFD',
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
    'generated::X6JtvYPlo3M58S03' => 
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
        'as' => 'generated::X6JtvYPlo3M58S03',
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
    'generated::MbO9MecRE4Gf8Eau' => 
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
        'as' => 'generated::MbO9MecRE4Gf8Eau',
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
    'generated::S0SxUFQugNK1uicS' => 
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
        'as' => 'generated::S0SxUFQugNK1uicS',
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
    'generated::TrOXmizvvi8C3stL' => 
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
        'as' => 'generated::TrOXmizvvi8C3stL',
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
    'generated::insSdeK3iO91kAc2' => 
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
        'as' => 'generated::insSdeK3iO91kAc2',
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
    'generated::zBraaiavlPEkmnzV' => 
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
        'as' => 'generated::zBraaiavlPEkmnzV',
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
    'generated::D4kqMHBIdRCdxiil' => 
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
        'as' => 'generated::D4kqMHBIdRCdxiil',
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
    'generated::zGFxlXFuLBuCH75U' => 
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
        'as' => 'generated::zGFxlXFuLBuCH75U',
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
    'generated::tcL9xV5LpsUIMuV6' => 
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
        'as' => 'generated::tcL9xV5LpsUIMuV6',
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
    'generated::cWLiV9HXETXZXmKj' => 
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
        'as' => 'generated::cWLiV9HXETXZXmKj',
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
    'generated::J5Laud1J4Oa7FbCL' => 
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
        'as' => 'generated::J5Laud1J4Oa7FbCL',
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
    'generated::teo5e2zOUfNFESpU' => 
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
        'as' => 'generated::teo5e2zOUfNFESpU',
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
    'generated::r3Iq5MA4Qc3cgs97' => 
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
        'as' => 'generated::r3Iq5MA4Qc3cgs97',
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
    'generated::TcKdW1ER5zzG9rD4' => 
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
        'as' => 'generated::TcKdW1ER5zzG9rD4',
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
    'generated::tI16jfNI73I7QAPt' => 
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
        'as' => 'generated::tI16jfNI73I7QAPt',
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
    'generated::jlD1dDx11tODPbWA' => 
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
        'as' => 'generated::jlD1dDx11tODPbWA',
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
    'generated::ZDg5jq4mI2pMHXwX' => 
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
        'as' => 'generated::ZDg5jq4mI2pMHXwX',
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
    'generated::9rHnOMUoU72vRou4' => 
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
        'as' => 'generated::9rHnOMUoU72vRou4',
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
    'generated::vooNr5XoLEolIpNl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/paid/{month}',
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
        'as' => 'generated::vooNr5XoLEolIpNl',
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
    'generated::DANT2HsHiZgidMv9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/unpaid/{month}',
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
        'as' => 'generated::DANT2HsHiZgidMv9',
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
    'generated::HqWMDwFHRc9ObEwm' => 
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
        'as' => 'generated::HqWMDwFHRc9ObEwm',
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
    'generated::Cb6NP5CWz9hhG8XU' => 
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
        'as' => 'generated::Cb6NP5CWz9hhG8XU',
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
    'generated::WiCI9Ay2ZdtI9W0k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-api/tutor-courses/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@tutorCourses',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@tutorCourses',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::WiCI9Ay2ZdtI9W0k',
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
    'generated::XNHoxcAIphLLphSw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-api/course-lectures/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@courseLectures',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@courseLectures',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::XNHoxcAIphLLphSw',
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
    'generated::jre8heatHbCCbLyU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user-api/delete-lecture/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@deleteLecture',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@deleteLecture',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::jre8heatHbCCbLyU',
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
    'generated::rOxixEbVto2PExY1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user-api/update-lecture/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth:sanctum',
          3 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@updateLecture',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\TutorActions\\ActionsController@updateLecture',
        'namespace' => NULL,
        'prefix' => 'user-api',
        'where' => 
        array (
        ),
        'as' => 'generated::rOxixEbVto2PExY1',
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
    'generated::DuvRcCZ1QSAaYVYF' => 
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
        'as' => 'generated::DuvRcCZ1QSAaYVYF',
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
    'generated::logBX0dGlV19nJGa' => 
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
        'as' => 'generated::logBX0dGlV19nJGa',
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
    'generated::jWdb36Z8Ivo7NyVu' => 
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
        'as' => 'generated::jWdb36Z8Ivo7NyVu',
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
    'generated::gUGFBMO7gTRvxxKv' => 
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
        'as' => 'generated::gUGFBMO7gTRvxxKv',
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
    'generated::ekJni4mLqbnVlmfB' => 
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
        'as' => 'generated::ekJni4mLqbnVlmfB',
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
    'generated::Kk03hdna8RgyROrS' => 
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
        'as' => 'generated::Kk03hdna8RgyROrS',
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
    'generated::5MEf1gzoQEqiGqdp' => 
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
        'as' => 'generated::5MEf1gzoQEqiGqdp',
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
    'generated::taZdZ3wJbM9W0Nkh' => 
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
        'as' => 'generated::taZdZ3wJbM9W0Nkh',
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
    'generated::yEPFVeZQn59IwZlv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
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
        'as' => 'generated::yEPFVeZQn59IwZlv',
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
    'generated::8tLNGnDi7odGuy29' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/users-billings/search',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillingsSearch',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillingsSearch',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::8tLNGnDi7odGuy29',
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
    'generated::YprwAomrwzXCJFrX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'guest-api/users-billings-paid',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillingsPaid',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\BillingsController@usersBillingsPaid',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::YprwAomrwzXCJFrX',
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
    'generated::Ckk0d1oPB4I3RVA6' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009020000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'guest-api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ckk0d1oPB4I3RVA6',
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
    'generated::qjS4MwUkKNs37LWS' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009050000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qjS4MwUkKNs37LWS',
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
    'generated::5h8oorgWy59Fxzf1' => 
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
        'as' => 'generated::5h8oorgWy59Fxzf1',
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
      'uri' => 'pay/{id}/{amount}/{month}',
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
      'uri' => 'success/{month}',
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
    'cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\Api\\Admin\\Paypal\\PaymentController@cancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cancel',
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
