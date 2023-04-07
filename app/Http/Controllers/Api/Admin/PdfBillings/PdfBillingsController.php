<?php

namespace App\Http\Controllers\Api\Admin\PdfBillings;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Models\Billing;
use App\Models\Family;
use App\Traits\Helpers\ApiResponseTrait;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PdfBillingsController extends Controller
{
    use ApiResponseTrait;
    public function generateBillingPdf(Request $request){
        $data = $request->validate([
            'family_id' => 'required',
            'month' => 'required',
            'year' => 'required',
        ]);
        $family = Family::find($data['family_id']);

        $billing = Billing::where('family_id',$data['family_id'])->where('month',$data['month'])->get();
        $pdf = PDF\Pdf::loadView('admin.pdfBilling',['billings'=>$billing,'family'=>$family]);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="file.pdf"'
        ];
        return response($pdf->output(), 200, $headers);


    }
}
