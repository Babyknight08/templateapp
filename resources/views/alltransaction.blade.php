<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="token" content="{{ csrf_token() }}">
    <title>EMB Survey</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style>
        .table td {
            word-wrap: break-word;
            max-width: 100px; 
        }
        
    </style>
    
</head>

<body>
    <div id="wrapper">

    @include('includes.sidebar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('includes.navbar')
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>All Transaction</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Documents</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>All Transaction</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover TransactionTable" id="TransactionTable">
                                    <thead>
                                        <tr>
                                            <th>Transaction No.</th>
                                            <th>System</th>
                                            <th>Sub-System</th>
                                            <th>Subject</th>
                                            <th>Sender</th>
                                            <th>Action Taken</th>
                                            <th>Personnel</th>
                                            <th>Remarks</th>
                                            <th>DateTime Forwarded</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')

        </div>
        </div>


        {{-- view all transaction modal  --}}
        <div id="viewTransactionModal" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Adding User</h3>
                                <form role="form" id="viewTransactionModal">
                                    @csrf
                                    <div class="form-group"><label for="system">System</label> <input type="text" class="form-control system" name="system" id="system" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Sub-System</label> <input type="text" class="form-control" name="subsystem" id="subsystem" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Subject</label> <input type="text" class="form-control" name="subjectname" id="subjectname" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Division</label> <input type="text" class="form-control" name="division" id="division" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Section</label> <input type="text" class="form-control" name="section" id="section" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Sender</label> <input type="text" class="form-control" name="sender" id="sender" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Personnel</label> <input type="text" class="form-control" name="personnel" id="personnel" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Action</label> <input type="text" class="form-control" name="action" id="action" autocomplete="off" readonly></div>
                                    <div class="form-group"><label for="system">Remarks</label> <input type="text" class="form-control" name="remarks" id="remarks" autocomplete="off" readonly></div>
                                    <div>
                                        <button type="button" class="btn btn-white float-right" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
       $(document).ready(function () {
        var table = $('#TransactionTable').DataTable({
                ajax: {
                    type: "post",
                    url: "{{ route('alltransaction.show') }}",
                    dataType: "json",
                    dataSrc: "data",
                    data: { 
                    _token: "{{ csrf_token() }}" 
                },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                },
                columnDefs: [
                    { width: '11%', targets: 0, wrap: true },
                    { width: '11%', targets: 1, wrap: true },
                    { width: '11%', targets: 2, wrap: true },
                    { width: '11%', targets: 3, wrap: true },
                    { width: '11%', targets: 4, wrap: true },
                    { width: '11%', targets: 5, wrap: true },
                    { width: '11%', targets: 6, wrap: true },
                    { width: '11%', targets: 7, wrap: true },
                    { width: '11%', targets: 8, wrap: true },
                    { width: '11%', targets: 9, wrap: true }
                ],

                order: [0, 'desc'],
                responsive: true,
                columns: [
                    { data: 'Transaction_No' },
                    { data: 'System' },
                    { data: 'SubSystem' },
                    { data: 'SubjectName' },
                    { data: 'Sender' },
                    { data: 'Action' },
                    { data: 'Personnel' },
                    { data: 'Remarks' },
                    { data: 'created_at',
                        render: function(data, type, row, meta) {
                            var date = new Date(data);
                            var formattedDate = date.toLocaleDateString('en-US', {
                                year: 'numeric', 
                                month: 'short', 
                                day: '2-digit', 
                                hour: '2-digit', 
                                minute: '2-digit', 
                                second: '2-digit'
                            });
                            return formattedDate;
                    }},

                    {
                        data: "id",
                        render: function (data, type, row, meta) {
                            return `
                            <div class="text-center">
                                    <button data-toggle="modal" data-target="#viewTransactionModal" class="btn btn-success btn-sm viewTransactionModal" id="${data}">View</button>
                            </div>
                             `
                        }
                    }
                ],
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });

            $(document).on('click', '.viewTransactionModal', function (e) { 
                id = $(this).attr('id');
          
                $.ajax({
                type: "post",
                url: "{{ route('alltransaction.view') }}",
                data:  {id:id},
                dataType: "json",
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                success: function (response) {
                    $('#system').val(response.data.System);
                    $('#subsystem').val(response.data.SubSystem);
                    $('#subjectname').val(response.data.subjectname);
                    $('#division').val(response.data.division);
                    $('#section').val(response.data.section);
                    $('#personnel').val(response.data.personnel);
                    $('#remarks').val(response.data.remarks);
                    $('#action').val(response.data.action);
                    $('#sender').val(response.data.sender);
                    
               },
               error: function(status){
                    console.log(status);
               }
            
            });
            });


       });

    </script>

</body>

</html>
