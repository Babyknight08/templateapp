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
                    <h2>Inbox</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Inbox</strong>
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
                        <a data-toggle="modal" class="btn btn-primary" href="#createTransactionModal">+Transaction</a>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover inboxTable" id="inboxTable">
                    <thead>
                    <tr>
                        <th>Transaction No.</th>
                        <th>System</th>
                        <th>Sub-System</th>
                        <th>Subject</th>
                        <th>Action Take</th>
                        <th>Sender</th>
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
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Adding User</h3>
                                <form role="form" id="createTransactionForm">
                                @csrf
                                <div class="form-group">
                                    <label for="system">System</label>
                                    <select class="form-control" name="system" id="system">
                                    <option value="">-Select-</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="subsystem">Sub-System</label>
                                    <select class="form-control" name="subsystem" id="subsystem">
                                    <option value="">-Select-</option>
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
                                    <option value="">-Select-</option>
                                    <option value="Environmental Monitoring and Enforcement Division">Environmental Monitoring and Enforcement Division</option>
                                    <option value="Clearance and Permitting Division">Clearance and Permitting Division</option>
                                    <option value="Finance and Administrative Division">Finance and Administrative Division</option>
                                    <option value="Office of the Regional Director">Office of the Regional Director</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section" id="section">
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="personnel">Personnel</label>
                                    <select class="form-control" name="personnel" id="personnel">
                                </select>
                                </div>

                                <div class="form-group">
                                    <label>Action</label>
                                    <select class="form-control" name="action" id="action">
                                    <option value="">-Select-</option>
                                    <option value="For Appropriate Action">For Appropriate Action</option>
                                    <option value="For Initial/Signature">For Initial/Signature</option>
                                    <option value="For Review">For Review</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <input id="documents" name="documents" type="file" class="documents">
                                    <label for="documents" class="custom-file-label">Choose file...</label>
                                    <p id="file-info"></p>
                                    <button type="button" id="remove-file" style="display: none;">Remove file</button>
                                </div>
                                --}}

                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="documents" name="documents">
                                        <label class="custom-file-label" for="documents">Choose file...</label>
                                    </div>
                                    <p id="file-info"></p>
                                    <button type="button" id="remove-file" class="btn btn-danger" style="display: none;">Remove file</button>
                                </div>
                                

                                {{-- <div class="form-group">
                                    <label for="documents">documents</label>
                                    <textarea class="form-control" id="documents" name="documents" rows="3"></textarea>
                                </div> --}}
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


         {{-- view modal  --}}
         <div id="viewTransactionModal" class="modal fade" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Adding User</h3>
                                <form role="form" id="viewTransactionForm">
                                @csrf
                                <div class="form-group"><label for="viewsystem">System</label> <input type="text" class="form-control" name="viewsystem" id="viewsystem" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewsubsystem">Sub-System</label> <input type="text" class="form-control" name="viewsubsystem" id="viewsubsystem" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewsubjectname">Subject Name</label> <input type="text" class="form-control" name="viewsubjectname" id="viewsubjectname" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewdivision">Division</label> <input type="text" class="form-control" name="viewdivision" id="viewdivision" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewsection">Section</label> <input type="text" class="form-control" name="viewsection" id="viewsection" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewsender">Sender</label> <input type="text" class="form-control" name="viewsender" id="viewsender" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewaction">Personnel</label> <input type="text" class="form-control" name="viewpersonnel" id="viewpersonnel" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewaction">Action</label> <input type="text" class="form-control" name="viewaction" id="viewaction" autocomplete="off" readonly></div>
                                <div class="form-group"><label for="viewremarks">Remarks</label> <input type="text" class="form-control" name="viewremarks" id="viewremarks" autocomplete="off" readonly></div>

                                {{-- <div class="form-group">
                                    <label for="viewsubsystem">Sub-System</label>
                                    <select class="form-control" name="viewsubsystem" id="viewsubsystem" readonly>
                                    <option value="">-Select-</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="viewsubjectname">Subject</label>
                                    <textarea class="form-control" id="viewsubjectname" name="viewsubjectname" rows="3" readonly></textarea>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label for="viewdivision">Division</label>
                                    <select class="form-control" name="viewdivision" id="viewdivision" readonly>
                                    <option value="">-Select-</option>
                                    <option value="Environmental Monitoring and Enforcement Division">Environmental Monitoring and Enforcement Division</option>
                                    <option value="Clearance and Permitting Division">Clearance and Permitting Division</option>
                                    <option value="Finance and Administrative Division">Finance and Administrative Division</option>
                                    <option value="Office of the Regional Director">Office of the Regional Director</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="viewsection">Section</label>
                                    <select class="form-control" name="viewsection" id="viewsection" readonly>
                                </select>
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label for="viewpersonnel">Personnel</label>
                                    <select class="form-control" name="viewpersonnel" id="viewpersonnel" readonly>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="viewaction">Action</label>
                                    <select class="form-control" name="viewaction" id="viewaction" readonly>
                                    <option value="">-Select-</option>
                                    <option value="For Appropriate Action">For Appropriate Action</option>
                                    <option value="For Initial/Signature">For Initial/Signature</option>
                                    <option value="For Review">For Review</option>
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="viewremarks">Remarks</label>
                                    <textarea class="form-control" id="viewremarks" name="viewremarks" rows="3" readonly></textarea>
                                </div> --}}

                                <div class="form-group">
                                    <a id="download-file"></a>
                                    <button type="button" id="remove-file" class="btn btn-danger" style="display: none;">Remove file</button>
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
            
        var table = $('#inboxTable').DataTable({
                ajax: {
                    type: "post",
                    url: "{{ route('inbox.show') }}",
                    dataType: "json",
                    dataSrc: "data",
                    data: { 
                    _token: "{{ csrf_token() }}",
                    id:  {{ auth()->user()->id }}  
                },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                },
                order: [0, 'desc'],
                responsive: true,
                columns: [
                    { data: 'Transaction_No' },
                    { data: 'System' },
                    { data: 'SubSystem' },
                    { data: 'SubjectName' },
                    { data: 'Action' },
                    { data: function(row) { return row.firstname + ' ' + row.lastname; } },
                    { 
                        data: 'created_at',
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
                        }
                    },
         
                    {
                        data: "id",
                        render: function (data, type, row, meta) {
                            return `
                                <div class="text-center">
                                    <button data-toggle="modal" data-target="#viewTransactionModal" class="btn btn-success btn-sm inboxView" id="${data}">View</button>
                                    <button data-toggle="modal" data-target="#inboxReceiveModal" class="btn btn-primary btn-sm inboxReceive" id="${data}">Receive</button>
                                </div>`;
                                
                        }
                    }
                ],
                columnDefs: [
                    { width: '6%', targets: 0 },
                    { width: '6%', targets: 1 },
                    { width: '6%', targets: 2 },
                    { width: '15%', targets: 3 },
                    { width: '8%', targets: 4 },
                    { width: '8%', targets: 5 },
                    { width: '8%', targets: 6 },
                    { width: '8%', targets: 7 },

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



            $('#createTransactionForm').submit(function (e) { 
                e.preventDefault();
                var id = {{ auth()->user()->id }};
                var sender = "{{ auth()->user()->firstname }}" + " " + "{{ auth()->user()->lastname }}";

                var formData = new FormData(this);
                formData.append('userid', id);
                formData.append('sender', sender);

                $.ajax({
                    type: "post",
                    url: "{{ route('inbox.store') }}",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                    success: function (response) {
                        swal({
                        title: "Success!",
                        text: "Transaction Created!",
                        type: "success"
                    });

                    $('#createTransactionForm')[0].reset();
                    $('#createTransactionModal').modal('hide');

                    $('#documents').val('');
                    $('#documents').next('.custom-file-label').html('Choose file...');
                    $('#remove-file').hide();
                    $('#file-info').text('');

                    },
                    error: function(xhr, status, error){
                        swal({
                            title: "Error!",
                            text: "All fields are required!",
                            type: "error"
                        });
                        $.each(xhr.responseJSON.errors, function(field, messages) {
                            $('#' + field).css('border-color', 'red');
                        });

                    }
                    
                });
            });


            $('#createTransactionModal').on('show.bs.modal', function () {
                var divisionSelect = $('#division');
                var sectionSelect = $('#section');
                var personnelSelect = $('#personnel');
                var id = {{ auth()->user()->id }};
                
                function populateSections(selectedDivision) {
                    sectionSelect.empty().html('<option value="">-Select-</option>'); 
                    if (selectedDivision === "Office of the Regional Director") {
                        sectionSelect.append('<option value="Planning and Information System Management Unit">Planning and Information System Management Unit</option><option value="Legal Unit">Legal Unit</option><option value="Environmental Education Information Unit">Environmental Education Information Unit</option>');
                    } else if (selectedDivision === "Environmental Monitoring and Enforcement Division") {
                        sectionSelect.append('<option value="Water and Air Quality Monitoring Section">Water and Air Quality Monitoring Section</option><option value="Ambient Water and Air">Ambient Water and Air</option><option value="Toxic Chemical and Hazardous Waste Management Section">Toxic Chemical and Hazardous Waste Management Section</option>');
                    }
                }

                divisionSelect.on('change', function() {
                    var selectedDivision = $(this).val();
                    populateSections(selectedDivision);
    
                    personnelSelect.empty().html('<option value="">-Select-</option>');
                });

                divisionSelect.trigger('change');


                sectionSelect.on('change', function() {
                    var selectedSection = $(this).val();
                    $.ajax({
                        type: "post",
                        url: "{{ route('inbox.create') }}",
                        dataType: "json",
                        data: { id: id, section: selectedSection },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                        },
                        success: function (response) {
                            personnelSelect.empty().html('<option value="">-Select-</option>');
                            $.each(response.data, function(index, user) {
                                var fullName = user.firstname + ' ' + user.lastname;
                                personnelSelect.append($('<option></option>').attr('value', user.id   ).text(fullName));
                            });
                        },
                        error: function(xhr, status, error){
                            console.error(error);
                        }
                    });
                });

            }); 


            function updateFileInfo(file) {
                    if (file) {
                        $('.custom-file-label').text(file.name);
                        
                        var fileSize = (file.size / (1024 * 1024)).toFixed(2); 
                        $('#file-info').text('File size: ' + fileSize + ' MB');
                        $('#remove-file').show();
                    } else {
                        $('.custom-file-label').text('Choose file...');
                        $('#file-info').empty();
                        $('#remove-file').hide();
                    }
                }

            $('#documents').on('change', function() {
                var file = this.files[0];
                updateFileInfo(file);
            });

            $('#remove-file').on('click', function() {
                $('#documents').val(null);
                updateFileInfo(null);
            });


            $(document).on('click', '.inboxView', function (e) { 
                e.preventDefault();
                var id = $(this).attr('id');

                $.ajax({
                    type: "post",
                    url: "{{ route('inbox.view') }}",
                    data: {id: id}, 
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                    },
                    success: function (response) {
                        $('#viewsystem').val(response.data.System);
                        $('#viewsubsystem').val(response.data.SubSystem);
                        $('#viewsubjectname').val(response.data.subjectname);
                        $('#viewdivision').val(response.data.division);
                        $('#viewsection').val(response.data.section);
                        $('#viewaction').val(response.data.action);
                        $('#viewremarks').val(response.data.remarks);
                        $('#viewsender').val(response.data.sender);
                        $('#viewpersonnel').val(response.data.personnel_firstname + ' ' + response.data.personnel_lastname);

                        if (response.data.documents) {
                            var fileUrl = response.data.documents;
                            var fileInfo = $('<a>').attr({
                                href: fileUrl,
                                download: 'downloaded_file' 
                            }).text('Download File');


                            $('#download-file').empty().append(fileInfo);
                        } else {
                        
                            $('#download-file').text('No document uploaded');
                        }
                    },

                });
            });

     

       });

    </script>

</body>

</html>
