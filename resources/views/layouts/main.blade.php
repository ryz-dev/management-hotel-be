<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.include.meta')
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper  theme-3-active pimary-color-blue">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
            @include('layouts.include.navbar')

		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
            @include('layouts.include.left-sidebar')
		</div>
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
            @include('layouts.include.right-sidebar')
		</div>
		<!-- /Right Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
                @yield('content')
            </div>

            @include('layouts.include.footer')
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
    @include('layouts.include.js-lib')

    @yield('javascript')
</body>
</html>
