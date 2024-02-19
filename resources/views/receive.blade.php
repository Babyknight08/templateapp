<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Projects detail</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

 
    @include('includes.sidebar')

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
           
    @include('includes.navbar')

        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Project detail</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index.html">Documents</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index.html">Inbox</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Receive</strong><div>

                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInUp">
            <div class="row">
                <div class="col">
                    <div class="ibox">
                        <div class="ibox-content">
                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs float-right">Edit project</a>

                                        <h2>Contract with Zender Company</h2>
                                    </div>

                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Status:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1"><span class="label label-primary">Active</span></dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Created by:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1">Alex Smith</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Messages:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1"> 162</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Client:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1"><a href="#" class="text-navy"> Zender Company</a></dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Version:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1"> v1.4.2</dd>
                                        </div>
                                    </dl>

                                </div>
                                <div class="col-lg-6" id="cluster_info">

                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Last Updated:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1">16.08.2014 12:15:57</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Created:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="mb-1"> 10.07.2014 23:36:57</dd>
                                        </div>
                                    </dl>
                                    <dl class="row mb-0">
                                        <div class="col-sm-4 text-sm-right">
                                            <dt>Participants:</dt>
                                        </div>
                                        <div class="col-sm-8 text-sm-left">
                                            <dd class="project-people mb-1">
                                                <a href=""><img alt="image" class="rounded-circle" src="img/a3.jpg"></a>
                                                <a href=""><img alt="image" class="rounded-circle" src="img/a1.jpg"></a>
                                                <a href=""><img alt="image" class="rounded-circle" src="img/a2.jpg"></a>
                                                <a href=""><img alt="image" class="rounded-circle" src="img/a4.jpg"></a>
                                                <a href=""><img alt="image" class="rounded-circle" src="img/a5.jpg"></a>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div> --}}
                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <dl class="row mb-0">
                                        <div class="col-sm-2 text-sm-right">
                                            <dt>Completed:</dt>
                                        </div>
                                        <div class="col-sm-10 text-sm-left">
                                            <dd>
                                                <div class="progress m-b-1">
                                                    <div style="width: 60%;" class="progress-bar progress-bar-striped progress-bar-animated"></div>
                                                </div>
                                                <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div> --}}
                            <div class="row m-t-sm">
                                <div class="col">
                                    <div class="panel blank-panel">
                                        <div class="panel-heading">
                                            <div class="panel-options">
                                                <ul class="nav nav-tabs">
                                                    <li><a class="nav-link active" href="#tab-1" data-toggle="tab">Users messages</a></li>
                                                    <li><a class="nav-link" href="#tab-2" data-toggle="tab">History</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body">

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-1">
                                                    <div class="feed-activity-list">
                                                        <div class="feed-element">
                                                           <form action="" method="post">
                                                            <div class="row">
                                                                <div class="form-group col-6"><label for="system">System</label> <input type="text" class="form-control" name="system" id="system" value="{{ $data->System}}"></div>
                                                                <div class="form-group col-6"><label for="subsystem">Sub-System</label> <input type="text" class="form-control" name="subsystem" id="subsystem" value="{{ $data->SubSystem}}"></div> 
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-6"><label for="subjectname">Subject Name</label> <input type="text" class="form-control" name="subjectname" id="subjectname" value="{{ $data->subjectname}}"></div>
                                                                <div class="form-group col-6"><label for="division">Division</label> <input type="text" class="form-control" name="division" id="division"></div> 
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-6"><label for="section">Section</label> <input type="text" class="form-control" name="section" id="section"></div>
                                                                <div class="form-group col-6"><label for="personnel">Personnel</label> <input type="text" class="form-control" name="personnel" id="personnel"></div> 
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-6"><label for="action">Action</label> <input type="text" class="form-control" name="action" id="action" value="{{ $data->Action}}"></div>
                                                                {{-- <div class="form-group col-6"><label for="remarks">Remarks</label> <input type="text" class="form-control" name="remarks" id="remarks" value="{{ $data->Remarks}}"></div>  --}}
                                                                <div class="form-group col-6"><label for="remarks">Remarks</label> <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea></div> 
                                                               
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-6">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="documents" name="documents" multiple>
                                                                        <label class="custom-file-label" for="documents">Choose file...</label>
                                                                    </div>
                                                                    <p id="file-info"></p>
                                                                    <button type="button" id="remove-file" class="btn btn-danger" style="display: none;">Remove file</button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="btn btn-white float-right" data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary float-right mr-1" type="submit"><strong>Submit</strong></button>
                                                            </div>

                                                            </form>
                                                        </div>       
                                          
                                       
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab-2">

                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>Title</th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Comments</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                            </td>
                                                            <td>
                                                                Create project in webapp
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                            </td>
                                                            <td>
                                                                Various versions
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                There are many variations
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                            </td>
                                                            <td>
                                                                Latin words
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    Latin words, combined with a handful of model sentence structures
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                                            </td>
                                                            <td>
                                                                The generated Lorem
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                The first line
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                                            </td>
                                                            <td>
                                                                The standard chunk
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                                            </td>
                                                            <td>
                                                                Lorem Ipsum is that
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                                </p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                                            </td>
                                                            <td>
                                                                Contrary to popular
                                                            </td>
                                                            <td>
                                                                12.07.2014 10:10:1
                                                            </td>
                                                            <td>
                                                                14.07.2014 10:16:36
                                                            </td>
                                                            <td>
                                                                <p class="small">
                                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                                </p>
                                                            </td>

                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="wrapper wrapper-content project-manager">
                        <h4>Project description</h4>
                        <img src="img/zender_logo.png" class="img-fluid">

                        <p class="small">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                        </p>

                        <p class="small font-bold">
                            <span><i class="fa fa-circle text-warning"></i> High priority</span>
                        </p>
                        <h5>Project tag</h5>
                        <ul class="tag-list" style="padding: 0">
                            <li><a href=""><i class="fa fa-tag"></i> Zender</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Lorem ipsum</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Passages</a></li>
                            <li><a href=""><i class="fa fa-tag"></i> Variations</a></li>
                        </ul>
                        <h5>Project files</h5>
                        <ul class="list-unstyled project-files">
                            <li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
                            <li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.jpg</a></li>
                            <li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
                            <li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
                        </ul>
                        <div class="text-center m-t-md">
                            <a href="#" class="btn btn-xs btn-primary">Add files</a>
                            <a href="#" class="btn btn-xs btn-primary">Report contact</a>

                        </div>
                    </div>
                </div> --}}
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

<script>
    $(document).ready(function () {

        $('#loading-example-btn').click(function () {
            btn = $(this);
            simpleLoad(btn, true)

            // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

            simpleLoad(btn, false)
        });
    });

    function simpleLoad(btn, state) {
        if (state) {
            btn.children().addClass('fa-spin');
            btn.contents().last().replaceWith(" Loading");
        } else {
            setTimeout(function () {
                btn.children().removeClass('fa-spin');
                btn.contents().last().replaceWith(" Refresh");
            }, 2000);
        }
    }

</script>
</body>

</html>
