<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Profile</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Sweet Alert -->
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
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <form action="" method="post" id="imageForm" enctype="multipart/form-data">
                                    @csrf
                                    <label for="ProfileImg" style="display: block; width: 100%; height: 100%;">
                                        <img alt="image" class="img-fluid" id="ProfileImgPreview" style="width: 100%; height: 100%; object-fit: contain;">
                                    </label>
                                    <input type="file" id="ProfileImg" style="display: none;" accept="image/*" name="ProfileImg">
                                </form>
                            </div>
                            
                            
                            
                            <div class="ibox-content profile-content">
                                <h4 id="profilename"><strong></strong></h4>
                                <p><i class="fa fa-map-marker profile-address" id="profile-address"></i></p>
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                   <h5>Profile Details</h5>
                   <div class="ibox-tools">
                    <button class="btn btn-sm btn-success float-right m-t-n-xs" id="editprofilebtn"><strong>Edit</strong></button>
               
                </div>
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">

                                    <div class="feed-element">
                                        <div class="row">
                                            <div class="col b-r"><h3 class="m-t-none m-b"></h3>
                                                <form role="form" name="profileform" id="profileform">
                                                @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="username">Username</label> <input type="text" placeholder="Username" class="form-control" name="username" id="username" autocomplete="off" readonly></div>
                                                        <div class="form-group col-md"><label for="password">Password <span class="text-danger"><i>(Hidden)</i></span></label> <input type="text" placeholder="Password" class="form-control" name="password" id="password" readonly></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="firstname">First Name</label> <input type="text" placeholder="First Name" class="form-control" name="firstname" id="firstname" readonly></div>
                                                        <div class="form-group col-md"><label for="lastname">Last Name</label> <input type="text" placeholder="Last Name" class="form-control" name="lastname" id="lastname" readonly></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="contactno">Contact No</label> <input type="number" placeholder="Enter Contact No." class="form-control" name="contactno" id="contactno" readonly></div>
                                                        <div class="form-group col-md"><label for="address">Address</label> <input type="text" placeholder="Enter Address" class="form-control" name="address" id="address" autocomplete="off" readonly></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="division">Division</label><select class="form-control" name="division" id="division">
                                                            <option value="">Please Select</option>
                                                            <option value="Environmental Monitoring and Enforcement Division">Environmental Monitoring and Enforcement Division</option>
                                                            <option value="Clearance and Permitting Division">Clearance and Permitting Division</option>
                                                            <option value="Finance and Administrative Division">Finance and Administrative Division</option>
                                                            <option value="Office of the Regional Director">Office of the Regional Director</option>
                                                        </select>
                                                        </div>
                                                        <div class="form-group col-md">
                                                            <label for="section">Section</label>
                                                            <select class="form-control" name="section" id="section">
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="jobtitle">Job Title</label><select class="form-control" name="jobtitle" id="jobtitle">
                                                            <option value="">Please Select</option>
                                                            <option value="EMS I">EMS I</option>
                                                            <option value="EMS II">EMS II</option>
                                                            <option value="Engineer III">Engineer III</option>
                                                            <option value="Engineer IV">Engineer IV</option>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div>                             
                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs submitbtn" type="submit"><strong>Submit</strong></button>
                                                    </div>
                                                </form>
                                            </div>
                                  
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
 
        @include('includes.footer')

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>
    
    <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <script>
        $(document).ready(function(){
            var id = {{ Auth::user()->id }};
            $.ajax({
                type: "post",
                url: "{{ route('profile.show') }}",
                data: { 
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function (response) {
                    $("#username").val(response.data.username);
                    $("#firstname").val(response.data.firstname);
                    $("#lastname").val(response.data.lastname);
                    $("#address").val(response.data.address);
                    $("#contactno").val(response.data.contactno);
                    $("#birthdate").val(response.data.birthdate);
                    $("#birthplace").val(response.data.birthplace);
                    $("#division").val(response.data.division);
                    $("#jobtitle").val(response.data.jobtitle);
                    $("#profilename").text(response.data.firstname + ' ' + response.data.lastname);
                    $("#profile-address").text(response.data.address);


                    if (response.profileimg && response.profileimg.ProfileImg) {
                        $("#ProfileImgPreview").attr('src', response.profileimg.ProfileImg);
                    } else {
                        $("#ProfileImgPreview").attr('src', '/uploads/defaultprofile/defaultprofile.png');
                    }



                    if (response.data.division == "Environmental Monitoring and Enforcement Division") {
                        console.log('this is emed!');
                        $('#section').empty(); 
                        $('#section').append($('<option>', {
                            value: "Ambient Monitoring Section",
                            text: "Ambient Monitoring Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Chemical and Hazardous Waste Management Section",
                            text: "Chemical and Hazardous Waste Management Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Solid Waste Management Section",
                            text: "Solid Waste Management Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Water and Air Quality Management Section",
                            text: "Water and Air Quality Management Section"
                        }));
                    }

                    if (response.data.division == "Clearance and Permitting Division") {
                        $('#section').empty(); 
                        $('#section').append($('<option>', {
                            value: "Air and Water Permitting Section",
                            text: "Air and Water Permitting Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Environmental Impact Assessment Section",
                            text: "Environmental Impact Assessment Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Chemical and Hazardous Waste Permiting Section",
                            text: "Chemical and Hazardous Waste Permiting Section"
                        }));
                    }


                    if (response.data.division == "Office of the Regional Director") {
                        $('#section').empty(); 
                        $('#section').append($('<option>', {
                            value: "Environmental Education and Information Unit",
                            text: "Environmental Education and Information Unit"
                        }));
                        $('#section').append($('<option>', {
                            value: "Legal Unit",
                            text: "Legal Unit"
                        }));
                   
                        $('#section').append($('<option>', {
                            value: "Office of the Regional Director",
                            text: "Office of the Regional Director"
                        }));
                        $('#section').append($('<option>', {
                            value: "Planning and Information System Management Unit",
                            text: "Planning and Information System Management Unit"
                        }));
                        $('#section').append($('<option>', {
                            value: "Provincial Environmental Monitoring Unit",
                            text: "Provincial Environmental Monitoring Unit"
                        }));
                    }

                    if (response.data.division == "Finance and Administrative Division") {
                        $('#section').empty(); 
                        $('#section').append($('<option>', {
                            value: "Administrative Section",
                            text: "Administrative Section"
                        }));
                        $('#section').append($('<option>', {
                            value: "Finance Section",
                            text: "Finance Section"
                        }));
                    }

                    $("#division").change(function() {
                        if($(this).val() == "Environmental Monitoring and Enforcement Division"){
                            $('#section').empty(); 
                            $('#section').append($('<option>', {
                                value: "Ambient Monitoring Section",
                                text: "Ambient Monitoring Section"
                            }));
                            $('#section').append($('<option>', {
                                value: "Chemical and Hazardous Waste Management Section",
                                text: "Chemical and Hazardous Waste Management Section"
                            }));
                            $('#section').append($('<option>', {
                                value: "Solid Waste Management Section",
                                text: "Solid Waste Management Section"
                            }));
                            $('#section').append($('<option>', {
                                value: "Water and Air Quality Management Section",
                                text: "Water and Air Quality Management Section"
                            }));
                        }
                            if($(this).val() == "Clearance and Permitting Division"){
                                $('#section').empty(); 
                            $('#section').append($('<option>', {
                                value: "Air and Water Permitting Section",
                                text: "Air and Water Permitting Section"
                            }));
                            $('#section').append($('<option>', {
                                value: "Environmental Impact Assessment Section",
                                text: "Environmental Impact Assessment Section"
                            }));
                            $('#section').append($('<option>', {
                                value: "Chemical and Hazardous Waste Permiting Section",
                                text: "Chemical and Hazardous Waste Permiting Section"
                            }));
                            }

                            if ($(this).val() == "Office of the Regional Director") {
                                $('#section').empty(); 
                            $('#section').append($('<option>', {
                                value: "Environmental Education and Information Unit",
                                text: "Environmental Education and Information Unit"
                            }));
                            $('#section').append($('<option>', {
                                value: "Legal Unit",
                                text: "Legal Unit"
                            }));
                    
                            $('#section').append($('<option>', {
                                value: "Office of the Regional Director",
                                text: "Office of the Regional Director"
                            }));
                            $('#section').append($('<option>', {
                                value: "Planning and Information System Management Unit",
                                text: "Planning and Information System Management Unit"
                            }));
                            $('#section').append($('<option>', {
                                value: "Provincial Environmental Monitoring Unit",
                                text: "Provincial Environmental Monitoring Unit"
                            }));
                            }

                            if ($(this).val() == "Finance and Administrative Division") {
                                $('#section').empty(); 
                                $('#section').append($('<option>', {
                                    value: "Administrative Section",
                                    text: "Administrative Section"
                                }));
                                $('#section').append($('<option>', {
                                    value: "Finance Section",
                                    text: "Finance Section"
                                }));
                            }

                            if ($(this).val() == "") {
                                $('#section').empty(); 
                                $('#section').append($('<option>', {
                                    value: "",
                                    text: ""
                                }));
                            }


                        
                        $("#section").val(response.data.section);

                    });

                $("#section").val(response.data.section);

                },
                error: function (xhr, status, error) {
                    
                
                }
            });

            $("#profileform").submit(function (e) { 
                e.preventDefault();

                var formData = {
                    id: {{ Auth::user()->id }},
                    username: $("#username").val(),
                    password: $("#password").val(),
                    firstname: $("#firstname").val(),
                    lastname: $("#lastname").val(),
                    address: $("#address").val(),
                    contactno: $("#contactno").val(),
                    birthdate: $("#birthdate").val(),
                    birthplace: $("#birthplace").val(),
                    division: $("#division").val(),
                    section: $("#section").val(),
                    jobtitle: $("#jobtitle").val(),
                    _token: "{{ csrf_token() }}"
                };

                $.ajax({
                    type: "post",
                    url: "{{ route('profile.edit') }}",
                    data: formData,
                    dataType: "json",
                    success: function (response) {
                        swal({
                            title: "Success!",
                            text: "Profile successfully updated!",
                            type: "success"
                        });
                    },

                    error: function (xhr, status, error) {
                        swal({
                            title: "Error!",
                            text: "All fields are required!",
                            type: "error"
                        });
                    }
                });

            });

            var btnstate = 1;
            EditState();

            $('#username').on('change', function () {
                EditState();
            });

            $('#editprofilebtn').on('click', function () {
                btnstate = (btnstate === 1) ? 0 : 1;
                $('#profileform input, #profileform select').trigger('change');
            });

            function EditState() {
                if (btnstate === 1) {
                    $(document.querySelectorAll('input')).prop('readonly', true);
                    $(document.querySelectorAll('select')).prop('disabled', true);
                    $(".submitbtn").hide();
                    $("#editprofilebtn").text("Edit");
                } else {
                    $(document.querySelectorAll('input')).prop('readonly', false);
                    $(document.querySelectorAll('select')).prop('disabled', false);
                    $(".submitbtn").show();
                    $("#editprofilebtn").text("Lock");

                }
            }          

                        
            $('#ProfileImg').change(function() {
                var formData = new FormData();
                formData.append('User_ID', {{ Auth::user()->id }});
                formData.append('ProfileImg', $(this)[0].files[0]);
                formData.append('_token', "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('profile.ProfileImg')}}",
                    type: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
           
                        console.log(response); 
                        $('#ProfileImgPreview').attr('src', response.data.ProfileImg);

                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        // Handle error
                    }
                });
            });


            

        });
    </script>
    

</body>

</html>
