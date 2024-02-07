<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


        {{-- create modal  --}}
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

        {{-- view modal  --}}
        <div id="viewUserModal" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">User Details</h3>
                                <form role="form" id="viewUserForm">
                                @csrf
                                    <div class="form-group"><label>Username</label> <input type="text" class="form-control" name="viewusername" id="viewusername" readonly></div>
                                    <div class="form-group"><label>Password</label> <input type="password" class="form-control" name="viewpassword" id="viewpassword" readonly></div>
                                    <div class="form-group"><label>First Name</label> <input type="text" class="form-control" name="viewfirstname" id="viewfirstname" readonly></div>
                                    <div class="form-group"><label>Last Name</label> <input type="text" class="form-control" name="viewlastname" id="viewlastname" readonly></div>
                                    <div class="form-group"><label>Contact Number</label> <input type="text" class="form-control" name="viewcontactno" id="viewcontactno" readonly></div>
                                    <div class="form-group"><label>Address</label> <input type="text" class="form-control" name="viewaddress" id="viewaddress" readonly></div>
                                    <div class="form-group"><label>Division</label> <input type="text" class="form-control" name="viewdivision" id="viewdivision" readonly></div>
                                    <div class="form-group"><label>Section</label> <input type="text" class="form-control" name="viewsection" id="viewsection" readonly></div>
                                    <div class="form-group"><label>Job Title</label>
                                        <select class="form-control" name="viewjobtitle" id="viewjobtitle" readonly>
                                        <option value="">Please Select</option>
                                        <option value="EMS I">EMS I</option>
                                        <option value="EMS II">EMS II</option>
                                        <option value="Engineer III">Engineer III</option>
                                        <option value="Engineer IV">Engineer IV</option>
                                    </select></div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control" name="viewusertype" id="viewusertype" readonly>
                                        <option value="2">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    </div>
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

             {{-- view modal  --}}
             <div id="updateUserModal" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md"><h3 class="m-t-none m-b">User Details</h3>
                                    <form role="form" id="updateUserForm">
                                    @csrf
                                        <div class="form-group"><label>Username</label> <input type="text" class="form-control" name="updateusername" id="updateusername"></div>
                                        <div class="form-group"><label>Password</label> <input type="password" class="form-control" name="updatepassword" id="updatepassword"></div>
                                        <div class="form-group"><label>First Name</label> <input type="text" class="form-control" name="updatefirstname" id="updatefirstname"></div>
                                        <div class="form-group"><label>Last Name</label> <input type="text" class="form-control" name="updatelastname" id="updatelastname"></div>
                                        <div class="form-group"><label>Contact Number</label> <input type="text" class="form-control" name="updatecontactno" id="updatecontactno"></div>
                                        <div class="form-group"><label>Address</label> <input type="text" class="form-control" name="updateaddress" id="updateaddress"></div>
                                        <div class="form-group"><label>Division</label> <input type="text" class="form-control" name="updatedivision" id="updatedivision"></div>
                                        <div class="form-group"><label>Section</label> <input type="text" class="form-control" name="updatesection" id="updatesection"></div>
                                        <div class="form-group"><label>Job Title</label>
                                            <select class="form-control" name="updatejobtitle" id="updatejobtitle">
                                            <option value="">Please Select</option>
                                            <option value="EMS I">EMS I</option>
                                            <option value="EMS II">EMS II</option>
                                            <option value="Engineer III">Engineer III</option>
                                            <option value="Engineer IV">Engineer IV</option>
                                        </select></div>
                                        <div class="form-group">
                                            <label>User Type</label>
                                            <select class="form-control" name="updateusertype" id="updateusertype">
                                            <option value="2">User</option>
                                            <option value="1">Admin</option>
                                        </select>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-white float-right" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary float-right mr-1" type="submit"><strong>Update</strong></button>
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
                    _token: "{{ csrf_token() }}" 
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
                                    <button data-toggle="modal" data-target="#viewUserModal" class="btn btn-success btn-sm viewUser" id="${data}">View</button>
                                    <button data-toggle="modal" data-target="#updateUserModal" class="btn btn-primary btn-sm updateUser" id="${data}">Edit</button>
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

            $(document).on("click", ".viewUser", function () {
         
                id = ($(this).attr('id'));

                $.ajax({
                    type: "post",
                    url: "{{ route('profile.show') }}",
                    data: {id:id, _token: '{{ csrf_token()}}'},
                    dataType: "json",
                    success: function (response) {
                        $("#viewusername").val(response.username);
                        $("#viewpassword").val(response.password);
                        $("#viewfirstname").val(response.firstname);
                        $("#viewlastname").val(response.lastname);
                        $("#viewcontactno").val(response.contactno);
                        $("#viewaddress").val(response.address);
                        $("#viewdivision").val(response.division);
                        $("#viewsection").val(response.section);
                        $("#viewbirthplace").val(response.birthplace);
                        $("#viewbirthdate").val(response.birthdate);
                        $("#viewjobtitle").val(response.jobtitle);
                        $("#viewusertype").val(response.usertype);


                    }
                });
            })

            var userId;
            $(document).on("click", ".updateUser", function () {
                userId = ($(this).attr('id'));
                $.ajax({
                    type: "post",
                    url: "{{ route('profile.show') }}",
                    data: {id:userId, _token: '{{ csrf_token()}}'},
                    dataType: "json",
                    success: function (response) {
                        $("#updateusername").val(response.username);
                        $("#updatepassword").val(response.password);
                        $("#updatefirstname").val(response.firstname);
                        $("#updatelastname").val(response.lastname);
                        $("#updatecontactno").val(response.contactno);
                        $("#updateaddress").val(response.address);
                        $("#updatebirthplace").val(response.birthplace);
                        $("#updatebirthdate").val(response.birthdate);
                        $("#updatedivision").val(response.division);
                        $("#updatesection").val(response.section);
                        $("#updatejobtitle").val(response.jobtitle);
                        $("#updateusertype").val(response.usertype);
                    }
                });
            })

            $('#updateUserForm').submit(function (e) { 
                e.preventDefault()
                var formData = {
                    id: userId,
                    username: $("#updateusername").val(),
                    password: $("#updatepassword").val(),
                    firstname: $("#updatefirstname").val(),
                    lastname: $("#updatelastname").val(),
                    contactno: $("#updatecontactno").val(),
                    address: $("#updateaddress").val(),
                    division: $("#updatedivision").val(),
                    section: $("#updatesection").val(), 
                    jobtitle: $("#updatejobtitle").val(),
                    usertype: $("#updateusertype").val(),
                    _token: "{{ csrf_token() }}"
                };

                $.ajax({
                    type: "post",
                    url: "{{ route('profile.edit') }}",
                    data: formData,
                    dataType: "json",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                        },
                    success: function (response) {
                        table.ajax.reload()
                        swal({
                            title: "Good Job!",
                            text: "User Updated Successfully!",
                            type: "success"
                        });
                        $('#updateUserModal').modal('hide')
                    },
                    error: function(xhr, status, error){
                        swal({
                            title: "Error!",
                            text: "All fields are required!",
                            type: "error"
                        });        
                    }
                });
            });

            $(document).on("click", ".deleteUser", function () {  
                console.log('trying to delete');
                swal({
                            title: "Sample Text?",
                            text: "Sub Text",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes",
                            cancelButtonText: "Cancel",
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            closeOnConfirm: false,
                            closeOnCancel: false,
                            reverseButtons: true
                        },

                        function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
                
            });

        });

    </script>

</body>

</html>
