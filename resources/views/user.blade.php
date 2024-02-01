<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

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
                    <h2>User Table</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>User</strong>
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
                    <div class="ibox-title">
                        <a data-toggle="modal" class="btn btn-primary" href="#createUserModal">+User</a>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover userTable" id="userTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Type</th>
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



        <div id="createUserModal" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Adding User</h3>
                                <form role="form" id="createUserForm">
                                @csrf
                                    <div class="form-group"><label>Username</label> <input type="text" placeholder="Enter Username" class="form-control" name="username" id="username"></div>
                                    <div class="form-group"><label>Password</label> <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password"></div>
                                    <div class="form-group"><label>First Name</label> <input type="text" placeholder="Enter First Name" class="form-control" name="firstname" id="firstname"></div>
                                    <div class="form-group"><label>Last Name</label> <input type="password" placeholder="Enter Last Name" class="form-control" name="lastname" id="lastname"></div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control" name="usertype" id="usertype">
                                        <option value="2">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-white float-right" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary float-right mr-1" type="submit"><strong>Create</strong></button>
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
        $(document).ready(function(){

            var table = $('#userTable').DataTable({
                ajax: {
                    type: "post",
                    url: "{{ route('user.show') }}",
                    dataType: "json",
                    dataSrc: "data",
                    data: { 
                    _token: "{{ csrf_token() }}"  // Add this line to include the CSRF token
                },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                },
                order: [0, 'desc'],
                responsive: true,
                columns: [
                    { data: 'id' },
                    { data: 'username' },
                    { data: 'password' },
                    { data: 'firstname' },
                    { data: 'lastname' },
                    { data: 'usertype' },
                    {
                        data: "id",
                        render: function (data, type, row, meta) {
                            return `
                                <div class="text-center">
                                    <button class="btn btn-success btn-sm viewUser" id="${data}">View</button>
                                    <button class="btn btn-primary btn-sm updateUser" id="${data}">Edit</button>
                                    <button class="btn btn-danger btn-sm deleteUser" id="${data}">Delete</button>
                                </div>`;
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

            // create user
            $('#createUserForm').submit(function (e) { 
            e.preventDefault();
            $('#addModal').modal('hide')
                $.ajax({
                    type: "post",
                    url: "{{ route('user.store') }}",
                    data: $(this).serialize(),
                    dataType: "json",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                        },
                    success: function (response) {
                        table.ajax.reload()
                        swal({
                            title: "Good Job!",
                            text: "User Successfully Added!",
                            type: "success"
                        });
                        $('#createUserForm')[0].reset();
                        $('#createUserModal').modal('hide')
                    },
                    error: function(xhr, status, error){
                        var responseJSON = xhr.responseJSON;
                        swal({
                            title: "Error!",
                            text: responseJSON.message,
                            type: "error"
                        });        
                    }
                });
            });
        });

    </script>

</body>

</html>
