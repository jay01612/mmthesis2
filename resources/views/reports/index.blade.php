@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
    
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="{{ url('/main') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Dashboard</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <label>Booked (Not Payed) Not Verified</label>
                </header>
                <div class="panel-body">
                    <table class="table table-sm table-striped table-condensed" id="tableNotPayed">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Theme</th>
                                <th>Pax</th>
                                <th>Venue</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <label>Booked (Not Payed) But Verified</label>
                </header>
                <div class="panel-body">
                    <table class="table table-sm table-striped table-condensed" id="tableNotPayed1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Theme</th>
                                <th>Pax</th>
                                <th>Venue</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </section>
        </div>
    </div>
    
</section>

@endsection

@section('scripts')
<script type="text/javascript">

    var tableNotPayedTable = $('#tableNotPayed');
    var tableNotPayedTable1 = $('#tableNotPayed1');

    $(document).ready(function(){
        tableNotPayed();
        tableNotPayed1();
    });

    function tableNotPayed(){

        tableNotPayedTable.DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ],
            ajax: {
               url : "{{ url('api/getBookedNotPayed') }}",
               method: "GET"
            },
            columns: [
                { data: "name" },
                { data: "email" },
                { data: "mobilenumber" },
                { data: "theme" },
                { data: "pax" },
                { data: "venue" },
                { data: "date" },
                { data: "time" }
                /*and so on, keep adding data elements here for all your columns.*/
            ]
        } );
    }

    function tableNotPayed1(){

        tableNotPayedTable1.DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ],
            ajax: {
               url : "{{ url('api/getBookedNotPayed1') }}",
               method: "GET"
            },
            columns: [
                { data: "name" },
                { data: "email" },
                { data: "mobilenumber" },
                { data: "theme" },
                { data: "pax" },
                { data: "venue" },
                { data: "date" },
                { data: "time" }
                /*and so on, keep adding data elements here for all your columns.*/
            ]
        } );
    }

</script>
@endsection