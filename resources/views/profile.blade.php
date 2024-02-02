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
                                <label for="fileInput">
                                    <img alt="image" class="img-fluid" src="img/profile_big.jpg" id="profileImage">
                                </label>
                                <input type="file" id="fileInput" style="display: none;" accept="image/*">
                            </div>
                            
                            <div class="ibox-content profile-content">
                                <h4 id="profilename"><strong></strong></h4>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <h5>
                                    About me
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>
                                {{-- <div class="row m-t-lg">
                                    <div class="col-md-4">
                                        <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>169</strong> Posts</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>28</strong> Following</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                        <h5><strong>240</strong> Followers</h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                    </div>
                </div>
                    </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                   <h5>Profile Details</h5>
                                              
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
                                                        <div class="form-group col-md"><label for="username">Username</label> <input type="text" placeholder="Username" class="form-control" name="username" id="username" autocomplete="off"></div>
                                                        <div class="form-group col-md"><label for="password">Password</label> <input type="text" placeholder="Password" class="form-control" name="password" id="password"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="firstname">First Name</label> <input type="text" placeholder="First Name" class="form-control" name="firstname" id="firstname"></div>
                                                        <div class="form-group col-md"><label for="lastname">Last Name</label> <input type="text" placeholder="Last Name" class="form-control" name="lastname" id="lastname"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="contactno">Contact No</label> <input type="number" placeholder="Enter Contact No." class="form-control" name="contactno" id="contactno"></div>
                                                        <div class="form-group col-md"><label for="address">Address</label> <input type="text" placeholder="Enter Address" class="form-control" name="address" id="address" autocomplete="off"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="birthdate">Birth Date</label> <input type="date"  class="form-control" name="birthdate" id="birthdate"></div>
                                                        <div class="form-group col-md"><label for="birthplace">Birth Place</label> <input type="text" class="form-control" name="birthplace" id="birthplace"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md"><label for="division">Division</label><select class="form-control" name="division" id="division">
                                                            <option value="">Please Select</option>
                                                            <option value="Environmental Monitoring Enforcement Division">Environmental Monitoring Enforcement Division</option>
                                                            <option value="Clearance and Permitting Division">Clearance and Permitting Division</option>
                                                            <option value="Office of the Regional Director">Office of the Regional Director</option>
                                                            <option value="Finance and Administrative Division">Finance and Administrative Division</option>
                                                        </select>
                                                        </div>
                                                        <div class="form-group col-md"><label for="section">Section</label><select class="form-control" name="section" id="section">
                                                            <option value="">Please Select</option>
                                                            <option value="PISMU">PISMU</option>
                                                            <option value="EEIU">EEIU</option>
                                                            <option value="Legal">Legal</option>
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

                                                    <div class="row">
                                                        <div class="form-group col-md">
                                                            <label for="aboutme" class="form-label">About Me</label>
                                                            <textarea class="form-control" rows="3" name="aboutme" id="aboutme"></textarea>
                                                        </div>
                                                    </div>

                                                    <div>                             
                                                        <button class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
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
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Change "token" to "csrf-token"
                },
                dataType: "json",
                success: function (response) {
                    $("#username").val(response.username);
                    $("#firstname").val(response.firstname);
                    $("#lastname").val(response.lastname);
                    $("#contactno").val(response.contactno);
                    $("#address").val(response.address);
                    $("#birthdate").val(response.birthdate);
                    $("#birthplace").val(response.birthplace);
                    $("#division").val(response.division);
                    $("#section").val(response.section);
                    $("#jobtitle").val(response.jobtitle);
                    $("#profilename").text(response.firstname + ' ' + response.lastname);
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
                        text: "Profile successfully update!",
                        type: "success"
                    });
                    }
                });
            });

        });
    </script>
    

</body>

</html>
