<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('AdminArea/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>POS | Auth</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('AdminArea/assets/css/dashlite.css?ver=2.0.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('AdminArea/assets/css/theme.css?ver=2.0.0')}}">
</head>

<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    @yield('content')
                 <!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('AdminArea/assets/js/bundle.js?ver=2.0.0')}}"></script>
    <script src="{{ asset('AdminArea/assets/js/scripts.js?ver=2.0.0')}}"></script>

</html>