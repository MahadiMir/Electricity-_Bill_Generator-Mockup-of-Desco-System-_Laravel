<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.welcome');
    }

    //Customer List and Bill Issuance Table View
    public function cusview()
    {
        $customers = Customer::all();
        $payments = Payment::all();
        return view('admin.billissue',compact('customers','payments'));
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
        $cid = rand(0,10000);

        Customer::create([
            'cid'=>$cid,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,


        ]);
        return view('customer.success',compact('cid'));
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

    }

    //Registration View
    public function regpage()
    {
        return view('customer.reg');
    }

    //Admin's Bill Update View
    public function issue(Request $request)
    {

        $cid = $request->cid;
        $bill = Customer::where('cid', $cid)->first();
        if(empty($bill)){
            Session::flash('error', 'Invalid Customer ID');
            return redirect()->route('customer.show');
        }
        else{
            $bill->update([
                'pmonth'=>$request->cm,
                'bill'=>$request->bill,
                'duemonth'=>$request->dm,
                'due'=>$request->dbill,
                'status' =>'Unpaid',
            ]);
        }
        $payments = Payment::all();
        $customers = Customer::all();
        return view('admin.billissue',compact('customers','payments'));
    }

    public function payment(){

        $payments = Payment::all();
        return view('admin.payment',compact('payments'));
    }
}
