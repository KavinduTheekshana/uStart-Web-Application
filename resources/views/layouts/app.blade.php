<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>uStart - Automated Customer Tracking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link href="{{ asset('../assets/images/favicon.ico') }}" rel="shortcut icon">

        <!-- App css -->
        <link href="{{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('../assets/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('../assets/css/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet">



    </head>

    <body class="account-body accountbg">
            @yield('content')
        <!-- jQuery  -->
        <script src="{{ asset('../assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('../assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('../assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('../assets/js/waves.min.js') }}"></script>
        <script src="{{ asset('../assets/js/jquery.slimscroll.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('../assets/js/app.js') }}"></script>


    </body>
</html>
