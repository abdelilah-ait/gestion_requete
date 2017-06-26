<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{!! csrf_token() !!}" />
<title>Espace Admin</title>

<link href="assets/css/bootstrap1.min.css" rel="stylesheet">
<link href="assets/css/datepicker3.css" rel="stylesheet">
<link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="assets/css/styles1.css" rel="stylesheet">
<link rel="stylesheet" href="assets/font_awesome/css/font-awesome.css" />


<!--Icons-->
<script src="assets/js/lumino.glyphs.js"></script>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav id="mynav" class="nav-colored navbar-inverse navbar-fixed-top">
		<div class="container-fluid" style="">
			<div class="navbar-header" style="">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>ESPACE</span>ADMINISTRATEUR</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	   @yield('content')

	{{-- <script src="assets/js/jquery-1.11.1.min.js"></script> --}}
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script>
		var myNav = document.getElementById('mynav');
		window.onscroll = function () { 
		    "use strict";
		    if (document.body.scrollTop > 50 ) {
		        myNav.classList.add("nav-transparent");
		        myNav.classList.remove("nav-colored");
		    }
		    else {
		        myNav.classList.add("nav-colored");
		        myNav.classList.remove("nav-transparent");
		    } 
		};

		// $(document).ready(function() {
  //           $('#tab1').DataTable();
  //           $('#tab2').DataTable();
  //           $('#tab3').DataTable();
  //           $('#tab4').DataTable();
  //           $('#tab5').DataTable();
  //       });

  		$('.display').each(function () {
        	var source = $(this).attr("data-source");
        	$(this).dataTable({
	            "sPaginationType": "full_numbers",
	            "bProcessing": true,
	            "bServerSide": true,
	            "sAjaxSource": url('adminvisual/adminhome')
        	});
    	});

		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
