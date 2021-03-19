@extends('layouts.master')
@section('title', 'Desco Admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <h1 style="text-align: center">Customers</h1>
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Customer ID </th>
                                    <th> Name </th>
                                    <th> Number </th>
                                    <th> Month </th>
                                    <th> Bill </th>
                                    <th> Due Months </th>
                                    <th> Due Bill </th>
                                    <th> Status </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>{{$customer->cid}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->pmonth}}</td>
                                        <td>{{$customer->bill}}</td>
                                        <td>{{$customer->duemonth}}</td>
                                        <td>{{$customer->due}}</td>
                                        <td>{{$customer->status}}</td>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <hr>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center"><b/>Update Bill</h2>
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <table class="table table-striped" style="background-color: #8FBCBB">
                                <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Current Month</th>
                                    <th>Bill</th>
                                    <th>Due Months</th>
                                    <th>Due bill</th>
                                    <th>Issue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form class="insert-form" id="insert-form" method="GET" action="{{route('customer.issue')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('GET')
                                    <tr>
                                        <td width="15%"><input type="text" class="form-control" id="cid" name="cid"  required></td>
                                        <td width="20%"><input type="text" class="form-control" id="cm" name="cm"  required></td>
                                        <td width="15%"><input type="text" class="form-control" id="bill" name="bill"  required></td>
                                        <td width="20%"><input type="text" class="form-control" id="dm" name="dm"  ></td>
                                        <td width="15%"><input type="text" class="form-control" id="dbill" name="dbill"  ></td>
                                        <td width="10%"><button name="submit" class="btn btn-info btn-sm" id="submit"><i class="mdi mdi-send"></i></button></td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>




@endsection
