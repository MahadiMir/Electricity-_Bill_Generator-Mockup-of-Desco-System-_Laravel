<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use App\Customer;
use App\Payment;
use Dompdf\Dompdf;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Null_;



class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bill.billform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Passing Data in Invoice
    public function invoice(Request $request)
    {
        $cid = $request-> cid;
        $pay = Customer::where('cid', $cid)->first();

        if($pay->bill == 0){
            return view('bill.paid');
        }
        else{
        $bill = $pay->bill;
        $due = $pay->due;
        $vat = ($bill+$due)*(15/100);
        $total = $bill+$due;
        $payable = $bill+$due+$vat;
        return view('bill.invoice',compact('pay','bill','due','vat','total','payable'));
        }
    }

    public function invoice1(Request $request)
    {
        return view('bill.paid');
    }


    //Data Update after Customer's Payment
    public function dataupdate(Request $request)
    {



        $cid = $request-> cid;
        $you = Customer::where('cid', $cid)->first();
        $you->update([
            'pmonth'=> " ",
            'bill'=> 0,
            'duemonth'=>" ",
            'due'=>0,
            'status'=>'Paid',
        ]);

        Payment::create([
            'cid'=>$cid,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'pmonth'=> $request->pmonth,
            'bill'=> $request->bill,
            'duemonth'=>$request->duemonth,
            'due'=>$request->due,
            'vat'=>$request->vat,
            'total'=>$request->total,
            'status'=>'Paid',
        ]);


        $payments = Payment::all();
        $customers = Customer::all();
        return view('admin.billissue',compact('customers','payments'));
    }

 public function receipt(Request $request)
 {
     $cid = $request-> cid;
     $month = $request->month;

//     $you = Payment::where('cid',$cid )->where('pmonth',$month)->first();
//     return view('bill.receipt',compact('you'));
       $lullis = Payment::all();
     foreach($lullis as $lulli){
         if ($lulli->cid == $cid && $lulli->pmonth == $month )
         {
             $you = Payment::where('cid',$cid )->where('pmonth',$month)->first();
             return view('bill.receipt',compact('you'));
         }
         else{
             return view('bill.nobill',compact('month'));
         }
     }




//     $output='
//
//    <div style="margin-top:100px; background: #0e6c5e;  padding-top: 100px;  padding-bottom: 100px;">
//    <div>
//        <h1 class="hs-line-11 font-alt mb-20 mb-xs-0" style="text-align: center; margin-left: auto;
//  margin-right: auto; color: snow ">Bill From DESCO</h1>
//  <br>
//        <h2 class="hs-line-11 font-alt mb-20 mb-xs-0" style="text-align: center; margin-left: auto;
//  margin-right: auto; color: snow">Receipt of '.$you->pmonth.'</h2>
//  </div>
//
//
//                    <table style="width : 100%; margin-top:100px;  margin-left: auto;
//  margin-right: auto; text-align:center; color: snow">
//                        <tr style="">
//                            <th style="padding: 10px">
//                                Customer ID
//                            </th >
//                            <th style="padding: 10px">
//                                Name
//                            </th >
//                            <th style="padding: 10px">
//                                Address
//                            </th >
//                            <th style="padding: 10px">
//                                Phone
//                            </th>
//                            <th style="padding: 10px">
//                                Current Month
//                            </th>
//                            <th style="padding: 10px">
//                                Bill
//                            </th>
//                            <th style="padding: 10px">
//                                Due Month
//                            </th>
//                            <th style="padding: 10px">
//                                Due
//                            </th>
//                        </tr>
//
//
//                        <tr>
//                            <td style="padding: 10px ;text-align: center">
//                                 '.$you->cid.'
//
//                            </td>
//                            <td style="padding: 10px; text-align: center">
//                                '.$you->name.'
//
//                            </td>
//                            <td style="padding: 10px; text-align: center">
//
//'.$you->address.'
//                            </td>
//                            <td style="padding: 10px ;text-align: center">
//                                '.$you->phone.'
//
//                            </td >
//                            <td style="padding: 10px ;text-align: center">
//
//'.$you->pmonth.'
//                            </td>
//                            <td style="padding: 10px; text-align: center">
//                                '.$you->bill.'
//
//                            </td>
//                            <td style="padding: 10px ;text-align: center">
//'.$you->duemonth.'
//
//                            </td>
//                            <td style="padding: 10px; text-align: center">
//
//                                '.$you->due.'
//                            </td>
//
//                        </tr>
//
//                    </table>
//                    <hr />
//        </br>
//
//                          <div style="float: right;">
//                            <div class="lead mt-0 mb-30" style=" color: snow">
//                                VAT (15%): <strong>'.$you->vat.' Taka</strong>
//                            </div>
//						  </br>
//						  </br>
//                            <div class="lead mt-0 mb-30" style=" color: snow">
//                                Paid: <strong>'.$you->total.' Taka</strong>
//                            </div>
//                            </div>
//
//
//</div>
//
//';
//
//
//
//     $dompdf = new Dompdf();
//     $dompdf->loadHtml($output);
//
//// (Optional) Setup the paper size and orientation
//     $dompdf->setPaper('A3', 'landscape');
//
//// Render the HTML as PDF
//     $dompdf->render();
//
//// Output the generated PDF to Browser
//     $dompdf->stream($output=$you->cid.'_'.$you->pmonth.'_'."invoice".".pdf");




 }

    public function receipt1( Request $request)
    {

        $cid = $request-> cid;
        $month = $request->month;

        $you = Payment::where('cid',$cid )->where('pmonth',$month)->first();
        return view('bill.receipt2',compact('you'));


    }

}
