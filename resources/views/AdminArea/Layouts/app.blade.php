<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./AdminArea/images/favicon.png">
    <!-- Page Title  -->
    <title>Dashboard | POS</title>
    <!-- StyleSheets  -->
    @include('AdminArea.Includes.css')
    @yield('css')
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        @include('AdminArea.Includes.linebar')
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('AdminArea.Includes.nav')
                <!-- main header @e -->
                @include('AdminArea.Includes.sidebar')
                <!-- content @s -->
                <div class="nk-content ">
                    @yield('content')
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('AdminArea.Includes.js')
    @yield('js')



    <div class="modal fade ml-6" id="logoutModal" tabindex="-1" data-backdrop="static" role="dialog"
        aria-labelledby="modal-notification" aria-hidden="true" style="margin-left: 25px;">
        <div class="modal-dialog modal-primary modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-primary modal-sm ">

                <div class="modal-header">
                    <h6 class="modal-title " id="modal-title-notification">Logout</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="py-3 text-center">

                        <h4 class="heading mt-4">Are You Sure!</h4>
                        <p>
                            Do You Want To Logout Now ?
                        </p>
                    </div>

                </div>
                <div class="modal-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="Submit" class="btn btn-white">Sure, Logout</button>
                        <button type="button" class="btn btn-link text-white ml-auto"
                            data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>

        @yield('additional_scripts') < !--additional scripts-->
</body>

</html>
