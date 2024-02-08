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
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
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
                        <th>Action Take</th>
                        <th>Personnel</th>

                        <th>DateTime Forwarded</th>
                        <th>Remarks</th>
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


        {{-- create modal  --}}
        <div id="createTransactionModal" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Adding User</h3>
                                <form role="form" id="createTransactionForm">
                                @csrf
                                <div class="form-group">
                                    <label for="system">System</label>
                                    <select class="form-control" name="system" id="system">
                                    <option value="Admin">Admin</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="subsystem">Sub-System</label>
                                    <select class="form-control" name="subsystem" id="subsystem">
                                    <option value="Admin">Admin</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="subjectname">Subject</label>
                                    <textarea class="form-control" id="subjectname" name="subjectname" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="division">Division</label>
                                    <select class="form-control" name="division" id="division">
                                    <option value="Environmental Monitoring and Enforcement Division">Environmental Monitoring and Enforcement Division</option>
                                    <option value="Office of the Regional Director">Office of the Regional Director</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section" id="section">
                                    <option value="Water and Air Quality Monitoring Section">Water and Air Quality Monitoring Section</option>
                                    <option value="Planning and Information System Management Unit">Planning and Information System Management Unit</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="personnel">Personnel</label>
                                    <select class="form-control" name="personnel" id="personnel">
                                    <option value="Water and Air Quality Monitoring Section">Water and Air Quality Monitoring Section</option>
                                    <option value="Planning and Information System Management Unit">Planning and Information System Management Unit</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Action</label>
                                    <select class="form-control" name="action" id="action">
                                    <option value="Water and Air Quality Monitoring Section">Water and Air Quality Monitoring Section</option>
                                    <option value="Planning and Information System Management Unit">Planning and Information System Management Unit</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                                </div>
                                {{-- <div class="custom-file">
                                    <input id="documents" name="documents" type="file" class="custom-file-input">
                                    <label for="documents" class="custom-file-label">Choose file...</label>
                                </div> --}}
    
                                <div class="form-group">
                                    <label for="documents">documents</label>
                                    <textarea class="form-control" id="documents" name="documents" rows="3"></textarea>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-white float-right" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary float-right mr-1" type="submit"><strong>Submit</strong></button>
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
                    { width: '6%', targets: 0 },
                    { width: '6%', targets: 1 },
                    { width: '6%', targets: 2 },
                    { width: '15%', targets: 3 },
                    { width: '8%', targets: 4 },
                    { width: '8%', targets: 5 },
                    { width: '8%', targets: 6 },
                    { width: '8%', targets: 7 },
                    { width: '5%', targets: 8 },
                ],
                order: [0, 'desc'],
                responsive: true,
                columns: [
                    { data: 'Transaction_No' },
                    { data: 'System' },
                    { data: 'SubSystem' },
                    { data: 'SubjectName' },
                    { data: function(row) { return row.firstname + ' ' + row.lastname; } },
                    { data: 'Action' },
                    { 
                        data: function(row) { 
                            return row.personnel_firstname + ' ' + row.personnel_lastname; 
                        } 
                    },
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
                                    <button data-toggle="modal" data-target="#viewUserModal" class="btn btn-success btn-sm viewUser" id="${data}">View</button>
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



       });

    </script>

</body>

</html>
