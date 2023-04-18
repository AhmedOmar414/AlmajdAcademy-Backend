<?php

namespace App\Http\Controllers\Api\Admin\Paypal;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($id,$amount){
        $user = Family::find($id);

        if (!$user) {
            abort(404);
        }

        return view('paypal', compact('user', 'amount'));
    }
}
