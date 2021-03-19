@extends('layouts.master')
@section('title', 'Desco Admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <h1 style="text-align: center">Payments</h1>
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <div class="panel panel-primary filterable">
                            <div class="panel-heading">
                                <h3 class="panel-title">Products</h3>
                                <div class="pull-right"><button class="btn btn-info btn-xs btn-filter"><i class="mdi mdi-filter">Filter</i></button></div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center filters">
                                    <th><input type="text" class="form-control" placeholder="Customer ID" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Month" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                                    <th> Download Receipt </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                    <form class="insert-form" id="insert-form" method="GET" action="{{route('bill.receipt1')}}" enctype="multipart/form-data">
                                        <tr>
                                            <td>
                                                <input type="hidden" name="cid" value="{{$payment->cid}}">
                                                {{$payment->cid}}
                                            </td>
                                            <td>{{$payment->name}}</td>
                                            <td>
                                                <input type="hidden" name="month" value="{{$payment->pmonth}}">
                                                {{$payment->pmonth}}
                                            </td>
                                            <td>{{$payment->status}}</td>
                                            <td width="10%"><button name="submit" class="btn btn-info btn-sm" id="submit" style="width: fit-content;"><i class="mdi mdi-folder-download"></i></button></td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script type="text/javascript">
        $('.filterable .btn-filter').click(function(){
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function(e){
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever 😉 */
            var $filteredRows = $rows.filter(function(){
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
            }
        });
    </script>
    <script type="text/javascript">
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change','#select1',function(){
            _('bid').value = '';
            let category = $(this).val();
            $.ajax({
                url : '/category/' + category,
                method : 'GET',
                success:function(data){
                    $('#select2').empty();
                    $('#select2').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#select2').append("<option value='"+ value.name + "'>" + value.name + "</option>");
                    });
                }
            });
        });
        $(document).on('change', '#select2', function (){
            let category = _('select1').value;
            let sub_category = $(this).val();
            $.ajax({
                url : '/sub_category/'+ sub_category +'/'+ category,
                method : 'GET',
                success:function (data){
                    _('bid').value = data.batch_id;
                }
            });
        });
    </script>

@endsection
