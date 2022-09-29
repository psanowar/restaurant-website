<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

	<base href="/public">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resto - Restaurant Bootstrap 4 Template by GetTemplates.co</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	

<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	

<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Special Dishes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="special-dishes.html">Beef Steak Sauce</a>
                          <a class="dropdown-item" href="special-dishes.html">Salmon Zucchini</a>
                        </div>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.html">Team</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="reservation.html">Reservation</a>
                    </li>
                    <li class="nav-item dropdown" style="background-color: yellow;">
                        

                        @auth 

                        <a class="nav-link" href="{{ url('showcart',Auth::user()->id) }}">

                        Cart[{{ $count }}]

                        </a>

                        @endauth




                        @guest

                        Cart[0]

                        @endguest



                    
                    </li>
                    <li>
                        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <li>
                            
                            <x-app-layout>
    
                            </x-app-layout>

                        </li>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>




    <div>
        
        <h1 align="center">Show Cart</h1>
    <table align="center" bgcolor="yellow">


        <tr>
            <th style="padding:20px">Food Name</th>
            <th style="padding:20px">Price</th>
            <th style="padding:20px">Quantity</th>
            <th style="padding:20px">Image</th>
            <th style="padding:20px">Action</th>

        </tr>

        <form action="{{ url('orderconfirm') }}" method="post">
            @csrf

        @foreach($data as $data)
        <tr align="center">
            <td>
                <input type="text" name="foodname[]" value="{{ $data->title }}" hidden=""> 
                {{ $data->title }}
            </td>

            <td>
                <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                {{ $data->price }}
            </td>

            <td>
                <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                {{ $data->quantity }}
            </td>

            <td><img width="100px" height="100px" src="foodimage/{{ $data->image }}"></td>
            
            
        </tr>
        @endforeach

        @foreach($data2 as $data2)

        <tr style="position:relative; top:-150px; right: -428px;">
            <td><a class="btn btn-warning" href="{{ url('removefood',$data2->id) }}">Remove</a></td>
        </tr>
        

        @endforeach

    </table>

    </div>

	

        <div align="center" style="padding:10px">
            <button class="btn btn-primary" type="button" id="order">Order Now</button>

        </div>



        <div id="appear" align="center" style="padding:10px; display: none;">
            
            <div style="padding:10px">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name"> 
            </div>

            <div style="padding:10px">
                <label>Phone</label>
                <input type="number" name="phone" placeholder="Phone"> 
            </div>

            <div style="padding:10px">
                <label>Name</label>
                <input type="text" name="address" placeholder="Address"> 
            </div>

            <div style="padding:10px">
                <input class="btn btn-success" type="submit" value="Order Confirm">
                <button id="close" type="button" class="btn btn-danger">Close</button> 
            </div>

        </div>

        </form>


        <br>
        <br>
        <br>



        








 </div>






    <script type="text/javascript">
        

        $("#order").click(

            function(){

                $("#appear").show();

            }
            );

        $("#close").click(

            function(){

                $("#appear").hide();

            }
            
            );


    </script>

	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>