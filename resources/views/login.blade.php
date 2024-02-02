<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
           
                <h1 class="logo-name">.</h1>
             
            <h3>Welcome to EMB Survey</h3>
            @if(Auth::check())
            <p class="text-muted welcome-message"><b>{{ Auth::user()->name }}</b></p>
            <script>
                window.location.href = "{{ route('dashboard') }}";
            </script>
        @endif 

               @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            <form class="m-t" role="form" method="post" id="loginform" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
        </div>
    </div>
    
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- Page-Level Scripts -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    {{-- Form Script --}}

    
</body>

</html>
