
<!--
<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />

	<meta property="og:locale" content="en_AU" />
	<meta property="og:type" content="website" />
	<meta property="fb:admins" content="" />
	<meta property="fb:app_id" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:image:alt" content="" />

	<meta name="twitter:title" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />
	<meta name="twitter:card" content="summary_large_image" />
	

	<link rel="stylesheet" type="text/css" href="front/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="front/css/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="front/css/video-js.css" />
    <link rel="stylesheet" type="text/css" href="front/css/style.css?v=" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&family=Raleway:ital,wght@0,400;0,600;0,800;1,200&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">


	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">

<div class="bg-light top-header">        
	<div class="container">
		<div class="row align-items-center py-3 d-none d-lg-flex justify-content-between">
			<div class="col-lg-4 logo">
				<a href="index.php" class="text-decoration-none">
				
					<span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Kids Fashion</span>
				</a>
			</div>
			<div class="col-lg-6 col-6 text-left  d-flex justify-content-end align-items-center">
			  @if(Route::has('admin.login'))
                                <a href="{{ route('admin.login') }}" class="nav-link text-dark py-2 px-6 flex hover:text-blue-500">MyAccount</a>

                        @endif
				                        @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="nav-link text-dark  py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link text-dark  py-2 px-6 flex hover:text-blue-500">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link text-dark  ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                @endif
                            @endauth
                        @endif
				<form action="">					
					<div class="input-group">
						<input type="text" placeholder="Search For Products" class="form-control" aria-label="Amount (to the nearest dollar)">
						<span class="input-group-text">
							<i class="fa fa-search"></i>
					  	</span>
					</div>
				</form>
			</div>		
		</div>
	</div>
</div>

<header class="bg-dark">
	<div class="container">
		<nav class="navbar navbar-expand-xl" id="navbar">
			
			<button class="navbar-toggler menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		 <span class="navbar-toggler-icon icon-menu"></span>
				  <i class="navbar-toggler-icon fas fa-bars"></i>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			 <li class="nav-item">
          				<a class="nav-link active" aria-current="page" href="index.php" title="Products">Home</a>
        			</li> 
					  
<li class="nav-item dropdown">
						<button class="btn btn-dark " data-bs-toggle="dropdown" aria-expanded="false">
							HOME
						</button>
						
					</li>
					 <li class="nav-item dropdown">
						<button class="btn btn-dark " data-bs-toggle="dropdown" aria-expanded="false">
							ABOUT
						</button>
						
					</li>
							
						
					@foreach( getcategories() as $category)
					<li class="nav-item dropdown">
						<button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						 {{$category->categoryname}}
						</button>
						
						  
						<ul class="dropdown-menu dropdown-menu-dark">
						  	@foreach( getproducts() as $product)
							<li><a class="dropdown-item nav-link" href="#"> {{$product->name}}</a></li>
								 @endforeach
						</ul>
					</li>
					
					 @endforeach

					
					 <li class="nav-item dropdown">
						<button class="btn btn-dark " data-bs-toggle="dropdown" aria-expanded="false">
							Contact
						</button>
						
					</li>
							
					
      			</ul>      			
      		</div>   
			<div class="right-nav py-0">
				<a href="cart.php" class="ml-3 d-flex pt-2">
					<i class="fas fa-shopping-cart text-primary"></i>					
				</a>
			</div> 		
      	</nav>
  	</div>
</header>




<main>
    <section class="section-1">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                     <img src="images/carousel-1.jpg" class="d-block w-100" alt="">

                    <picture>
                        <source media="(max-width: 799px)" srcset="front/images/carousel-1-m.jpg" />
                        <source media="(min-width: 800px)" srcset="front/images/carousel-1.jpg" />
                        <img src="images/carousel-1.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                            <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <picture>
                        <source media="(max-width: 799px)" srcset="front/images/carousel-2-m.jpg" />
                        <source media="(min-width: 800px)" srcset="front/images/carousel-2.jpg" />
                        <img src="images/carousel-2.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                            <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> 

                    <picture>
                        <source media="(max-width: 799px)" srcset="front/images/carousel-3-m.jpg" />
                        <source media="(min-width: 800px)" srcset="front/images/carousel-3.jpg" />
                        <img src="images/carousel-2.jpg" alt="" />
                    </picture>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3">
                            <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on Branded Clothes</h1>
                            <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
  
   <section class="section-3">
        <div class="container">
            <div class="section-title">
                <h2>Categories</h2>
            </div>           
            <div class="row pb-3">
                <div class="col-lg-12 mx-4 p-5 d-flex justify-content-around ">
					@foreach( getcategories() as $category)
                    <div class="cat-card">
                        <div class="left">
                            <img src="front/images/cat-1.jpg" alt="" width="500px" class="  img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>{{$category->categoryname}}
</h2>
                               
                            </div>
                        </div>
                    </div>
					 @endforeach
                </div>
               
                </div>
        </div>
    </section>
    
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Products</h2>
            </div>    
            <div class="row pb-3 ">
                <div class="col-lg-4  d-flex justify-content-around">
                    <div class="card product-card">
					  	@foreach( getproducts() as $product)
                        <div class="product-image position-relative">
						  @if ($product->image != "")
                            <a href="{{ route('Product.page_product',$product->id ) }}" class="product-img">
						<img class="card-img-top" src="{{asset('/image/'.$product->image)}}" alt="">
						</a>
						@endif
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">{{$product->name}}</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>{{$product->price}}</strong></span>
                              
                            </div>
                        </div>   
                 @endforeach						
                    </div>                                               
                </div>  
				 <div class="col-lg-4   d-flex justify-content-around">
                    <div class="card product-card">
					  	@foreach( getproducts() as $product)
                        <div class="product-image position-relative">
						  @if ($product->image != "")
                            <a href="{{ route('Product.page_product',$product->id ) }}" class="product-img">
						<img class="card-img-top" src="{{asset('/image/'.$product->image)}}" alt="">
						</a>
						@endif
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">{{$product->name}}</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>{{$product->price}}</strong></span>
                              
                            </div>
                        </div>   
                 @endforeach						
                    </div>                                               
                </div>  
              <div class="col-lg-4   d-flex justify-content-around">
                    <div class="card product-card">
					  	@foreach( getproducts() as $product)
                        <div class="product-image position-relative">
						  @if ($product->image != "")
                            <a href="{{ route('Product.page_product',$product->id ) }}" class="product-img">
						<img class="card-img-top" src="{{asset('/image/'.$product->image)}}" alt="">
						</a>
						@endif
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">{{$product->name}}</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>{{$product->price}}</strong></span>
                              
                            </div>
                        </div>   
                 @endforeach						
                    </div>                                               
                </div>  
				
				<!--
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="front/images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="front/images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="front/images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="front/images/product-1.jpg" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>         
            </div>
        </div>
    </section>

   
   
</main>
<footer class="bg-dark mt-5">
	<div class="container pb-5 pt-3">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-card">
					<h3>Get In Touch</h3>
					<p>No dolore ipsum accusam no lorem. <br>
					123 Street, New York, USA <br>
					exampl@example.com <br>
					000 000 0000</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>Important Links</h3>
					<ul>
						<li><a href="about-us.php" title="About">About</a></li>
						<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>						
						<li><a href="#" title="Privacy">Privacy</a></li>
						<li><a href="#" title="Privacy">Terms & Conditions</a></li>
						<li><a href="#" title="Privacy">Refund Policy</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>My Account</h3>
					<ul>
						<li><a href="#" title="Sell">Login</a></li>
						<li><a href="#" title="Advertise">Register</a></li>
						<li><a href="#" title="Contact Us">My Orders</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="copy-right text-center">
						<p>© Copyright 2022 Amazing Shop. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="front/js/jquery-3.6.0.min.js"></script>
<script src="front/js/bootstrap.bundle.5.1.3.min.js"></script>
<script src="front/js/instantpages.5.1.0.min.js"></script>
<script src="front/js/lazyload.17.6.0.min.js"></script>
<script src="front/js/slick.min.js"></script>
<script src="front/js/custom.js"></script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
<!--

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadence Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="/assets/css/aos.css">
  <link rel="stylesheet" href="/assets/css/ionicons.min.css">
  <link rel="stylesheet" href="/assets/css/flaticon.css">
  <link rel="stylesheet" href="/assets/css/icomoon.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/all.min.css">




</head>

<body>

 
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header swar" >
          <h5 class="modal-title text-center uppercase" id="exampleModalLabel" style="color:#fffcfc;">Please Leave Your
            Number
            for Free Counselling By Our Expert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            style="background-color: #fff;"></button>
        </div>
        <div class="modal-body">
          <div class="container mt-2">
            <!-- <h5 style="color: #000; font-size: 20px; margin-bottom: 15px; text-align: center;">Please Leave Your Number
              for Free Counselling Our Expert</h5>
            <form action="submit.php" method="post">
              <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
              </div>
              <div class="mb-3">
                <input type="Mobile No" class="form-control" id="" name="mobile" placeholder="Enter your Mobile No."
                  required>
              </div>
              <div class="mb-3">
                <input type="Email" class="form-control" id="email" name="email" placeholder="Enter your Email"
                  required>
              </div>
              <div class="mb-3">
               
                <input type="Mobile No" class="form-control" id="email" name="email" placeholder="Enter your City"
                  required>
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:600;">Choose Course</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="check1" name="checkbox[]" value="option1">
                      <label class="form-check-label" for="check1" style="margin: 0 10px 0 0;">Fashion Design</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="check2" name="checkbox[]" value="option2">
                      <label class="form-check-label" for="check2" style="margin: 0 10px 0 0;">Interior Design</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3 popup-submit">
                <button type="submit" class="btn"
                  style="padding: 6px 30px; border-radius: 0px; border: 0; border-radius: 5px; background-color: #ea4000; color: white;">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> 
      </div>
    </div>
  </div>
  <!-- data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"  -->

  <!-- End modal popup  -->

  <!-- header
  <header>

    <!-- Topbar Star
    <div class="container-fluid logo-bg-color1 py-1">
      <div class="row">
        <div class="col-lg-6">
          <a href="tel:9823273512"
            class="d-flex justify-content-center text-white text-decoration-none topbar-responsive"><i
              class="fa-solid fa-phone mt-1"></i>&nbsp; Contact No.:&nbsp; +91 98232 73512</a>
        </div>
        <div class="col-lg-6">
          <a href="mailto:admission@cadence-wn.in"
            class="d-flex justify-content-center text-white text-decoration-none topbar-responsive"><i
              class="fa-solid fa-envelope mt-1"></i>&nbsp; Email:&nbsp; admission@cadence-wn.in</a>
        </div>
      </div>
    </div>
    <!-- Topbar En


    <nav class="navbar navbar-expand-lg bg-white bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="/assets/images/logo/logo.webp" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="fashion-designing-course.html">Fashion Designing</a></li>
                <li><a class="dropdown-item" href="interior-designing-course.html">Interior Designing</a></li>
              </ul>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.login') }}" class="nav-link text-dark py-2 px-6 flex hover:text-blue-500">MyAccount</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#notice">Notice</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="Events.html">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="placements.html">Placements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('pages.contact-us')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pages.online-admission')}}">Online Admission</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  
  <a href="https://www.instagram.com/cadence_wardhamannagar/?hl=en" class="floatx1" target="_blank">
    <i class="fa-brands fa-instagram my-floatx1"></i>
  </a>
  <a href="https://www.facebook.com/cadence.wardhamannagar/" class="floatx2" target="_blank">
    <i class="fa-brands fa-facebook my-floatx2"></i>
  </a>
  <a href="https://www.youtube.com/channel/UCL9PLt1ksSkueFHDjEKPhEQ" class="floatx3" target="_blank">
    <i class="fa-brands fa-youtube my-floatx3"></i>
  </a>

  <a href="#enquiry-tab" class="floatx4">
    <i class="fa-solid fa-headset my-floatx4"></i>
  </a>

  <a href="tel:9373273513" class="floatx6">
    <i class="fa-solid fa-phone my-floatx6"></i>
  </a>

  <a href="#notice" class="floatx7">
    <i class="fa-solid fa-bell" style="color: #fafcff;"></i>
  </a>



  <a href="https://wa.me/919373273513" class="floatx5 whatsapp-small" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>
  <a href="https://web.whatsapp.com/send?phone/send?phone=919373273513" class="floatx5 whatsapp-large" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>

  <div id="carouselExampleCaptions" class="carousel slide bg-dark bg-gradient margin-t-header">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/images/banner/banner1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ftco-animate">
          <h1 class="text-white carousel-heading causes-heading">Welcome to Cadence Academy, <br>Wadhaman Nagar</h1>
          <h4 class="text-white causes-heading">Best Fashion Designing Courses</h4>
          <p><a href="contact-us.html" class="btn my-btn px-4 py-2 mt-3">Enquiry</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/images/banner/banner2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block ftco-animate">
          <h1 class="text-white carousel-heading causes-heading">Welcome to Cadence Academy, <br>Wadhaman Nagar</h1>
          <h4 class="text-white causes-heading">Best Fashion Designing Courses</h4>
          <p><a href="contact-us.html" class="btn my-btn px-4 py-2 mt-3">Enquiry</a></p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Carousel 


  <section class="ftco-section welcome pt-5 pb-5">
    <!-- About Start
    <div class="container pb-5">
      <div class="row align-items-center">
        <div class="col-12 ftco-animate">
          <h1 class="mb-4 logo-color causes-heading text-center main-heading">WELCOME TO CADENCE ACADEMY WARDHAMAN NAGAR
          </h1>
        </div>
        <div class="col-lg-6 ftco-animate">
          <div class="row g-2">
            <div class="col-6 text-end">
              <img class="img-fluid rounded w-100 shadow scale-big" src="/assets/images/fashion-designing/fashionx8.jpg">
            </div>
            <div class="col-6 text-start mt-auto">
              <img class="img-fluid rounded w-75 shadow scale-big"
                src="assets/images/interior-designing/interiorx3.jpg">
            </div>
            <div class="col-6 text-end mb-auto">
              <img class="img-fluid rounded w-75 shadow scale-big"
                src="/assets/images/interior-designing/interiorx7.jpg">
            </div>
            <div class="col-6 text-start">
              <img class="img-fluid rounded w-100 shadow scale-big" src="/assets/images/fashion-designing/fashionx9.jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 ftco-animate">
          <h2 class="mb-4 logo-color causes-heading">Academy Of Fashion & Interior</h2>

          <p class=" text-justify causes-text my-text-black"><strong>Cadence Academy, Wardhaman Nagar</strong> is the
            Best and Biggest  Fashion
            Designing and Interior Designing
            Institute
            that offers
            several professional
            courses in
            art, design, and allied fields. We are committed to providing our students with quality & professional
            educational
            experiences. Many opportunities to enhance your education are provided beyond the traditional classroom
            experience.
            You’ll have the opportunity to participate in profession-related organizations, specialized workshops, guest
            lectures,
            field trips, and study programs.

            Our experienced instructors and hands-on projects will help you develop a strong foundation in fashion
            design and
            interior design.
          </p>
          <a href="about.html" class="btn my-btn px-4 py-2 mt-3">More Info</a>
          </a>
        </div>
      </div>
    </div>
   

  </section>

  <div class="under-line m-auto"></div>


  <section class="section style-3 pt-5 pb-5 our-courses">
    <div class="container ">

      <div class="row">
        <div class="col-12">
          <h2 class="text-center logo-color fw-600 causes-heading mb-5">OUR COURSES</h2>
        </div>


        <div class="col-lg-6 ftco-animate py-2">

          <div class="slideshow-container shadow my-rounded">
            <!-- Slides 
            <div class="mySlides">
              <img src="assets/images/fashion-designing/fashion4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <img src="assets/images/fashion-designing/fashion6.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <img src="assets/images/fashion-designing/fashion7.jpg" style="width:100%">
            </div>

            <!-- Navigation buttons 
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <!-- Dots/bullets for navigation
            <div style="text-align:center" class="mt-2 pb-2">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>


        </div>

        <div class="col-lg-6 ftco-animate py-2">
          <div class="section-title-wrap">

            <h3 class="subtitle causes-heading fw-500 logo-color">Fashion Design</h3>
            <p class="text-justify mb-0 causes-text my-text-black">
              Fashion Designing industry provides the most lucrative, glamorous and exciting career options in today's
              world. If you
              have a penchant for creativity, style, and originality, Cadence Academy of Fashion and Interior Designing,
              Nagpur offers
              a tailor-made course in fashion designing exclusively for you. <br>
              Fashion designing is the art of creating clothing and accessories that not only serve a functional purpose
              but also make
              a powerful statement about individual style and self-expression. It's a dynamic and ever-evolving field
              where creativity
              knows no bounds. Fashion designers play a pivotal role in shaping trends, colors, fabrics, and silhouettes
              that define
              each season.
            </p>
          </div>


          <a href="fashion-designing-course.html" class="btn my-btn px-4 py-2 mt-3">Explore</a>
          </a>

        </div>
      </div>
      <hr>
      <div class="row mt-5 mb-5">

        <div class="col-lg-6 ftco-animate py-2">
          <div class="section-title-wrap">

            <h3 class="subtitle causes-heading fw-500 logo-color">Interior Design</h3>
            <p class="text-justify mb-0 causes-text my-text-black">
              Our course on Interior Designing is created to meet expectations of the industry. We create a harmony
              between
              theoretical, technical, artistic, and creative fields. Interior designing is competitive where the key to
              success is
              getting you noticed. Interior designers execute projects for a myriad of activities. <br>
              Interior designing is the transformative art of creating harmonious, functional, and aesthetically
              pleasing living and working spaces. It's about turning a house into a home, an office into a sanctuary,
              and a space into an experience. Interior designers combine their expertise in color theory, furniture
              selection, spatial planning, and a deep understanding of architectural elements to craft interiors that
              reflect the unique personalities and needs of their clients. They carefully curate materials, fabrics, and
              decor to create atmospheres that not only impress but also promote comfort and well-being.
            </p>
          </div>


          <a href="interior-designing-course.html" class="btn my-btn px-4 py-2 mt-3">Explore</a>
          </a>

        </div>

        <div class="col-lg-6 ftco-animate py-2">
          <div class="slideshow-container2 shadow my-rounded">
          
            <div class="mySlides2">
              <img src="/assets/images/interior-designing/interior2.jpg" style="width:100%">
            </div>

            <div class="mySlides2">
              <img src="/assets/images/interior-designing/interior4.jpg" style="width:100%">
            </div>

            <div class="mySlides2">
              <img src="/assets/images/interior-designing/interior8.jpg" style="width:100%">
            </div>

         
            <a class="prev2" onclick="plusSlides2(-1)">❮</a>
            <a class="next2" onclick="plusSlides2(1)">❯</a>

          
            <div style="text-align:center" class="mt-2 pb-2">
              <span class="dot2" onclick="currentSlide2(1)"></span>
              <span class="dot2" onclick="currentSlide2(2)"></span>
              <span class="dot2" onclick="currentSlide2(3)"></span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="under-line m-auto"></div>


  
  <section class="ftco-section our-activities pt-5 pb-5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row ">
        <div class="col-12 ftco-animate">
          <h2 class="text-center logo-color fw-600 causes-heading">OUR ACTIVITIES</h2>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12  ftco-animate py-4">

          <iframe width="100%" height="100%" class="my-rounded youtube-video"
            src="https://www.youtube.com/embed/F94XoMuaWvA?autoplay=1&mute=1&loop=1">
          </iframe>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 pr-md-4 ftco-animate py-2">
          <h2 class="mb-4 logo-color causes-heading">By our student's creative work, design and ideas</h2>

          <p class=" text-justify causes-text my-text-black">In Wardhaman Nagar, Cadence Academy is the premier Fashion
            Designing and Interior Designing Institute, offering a variety of professional
            courses in art, design, and allied fields. Our commitment to delivering quality and professional educational
            experiences
            to our students is unwavering. We provide numerous opportunities to enrich your education beyond the
            conventional
            classroom setting. You'll have the chance to engage in profession-related organizations, attend specialized
            workshops,
            benefit from guest lectures, partake in field trips, and explore study programs.</p>


          </a>


        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Celebrity Interaction</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/celebrity-interaction/ShreyasTalpadeManjriFadnvis-800x600-1.jpg" alt=""
                  width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Exhibition</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/exhibition/Exhi-2.jpg" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Fashion Shows</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/fashionshow/fashionshow_imgx6.jpg" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Industrial Visits</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/industrial-visits/industrial-visits-2.jpg" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Festivity</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/freshers-party/frehsers-2.jpg" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Site Visit</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/site-visit/sitevisit-8.jpg" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Educational Tours</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/tours/Long-Tours-3.jpg" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Training and Workshops</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/training-workshop/Class-Rooms-2.jpg" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="our-activities.html" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Garba</h3>
              </div>
              <div class="imgg">
                <img src="/assets/images/garba/Garba-5.jpg" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
      </div>
      <a href="our-activities.html" class="btn my-btn px-4 py-2 mt-3">Explore</a>
    </div>
  </section>
 

  <div class="under-line m-auto"></div>


  <section class="pt-5 pb-5 keypoints">
    <div class="container">
      <div class="my-container">
        <div class="row d-flex">
          <div class="col-lg-12 ftco-animate">
            <h2 class="text-center logo-color fw-600 causes-heading">KEYPOINTS</h2>
            <h3 class="text-center fw-600 causes-heading mb-4">Why Choose Cadence?</h3>
            <p class="text-center causes-text text-justify my-text-black"> Cadence Academy Wadhaman Nagar, Design has
              been in the
              field
              of Fashion
              Designing &
              Interior
              Designing since the year 2002. Cadence, by doing its best for 18 years wants to contribute to the great
              ocean of designers and believes in creating achievers, not just certificate receivers. Cadence has a
              garden
              of professional alumni who are now spreading the fragrance of success in their respective fields.</p>
          </div>
          <div class="rowb">

            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-user" style="color: #ea4000; justify-content: center;
                                  display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">Expert Faculty</h4>
                <p class="causes-text my-text-black">We make sure that our students are taught the nuances of their
                  craft by expert
                  faculty.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-plane-departure" style="color: #ea4000; justify-content: center;
                                  display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">Foreign Tours</h4>

                <p class="causes-text my-text-black">We strongly believe that our students must have a global view of
                  Fashion &
                  Interior.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-wifi" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">WiFi campus</h4>

                <p class="causes-text my-text-black">We ensure that our students get seamless connectivity on campus.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-shirt" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Fashion Shows</h4>

                <p class="causes-text my-text-black">Creations must be exhibited, Cadence organizes Fashion Shows and
                  exhibitions.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-file-invoice" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Scholarships</h4>

                <p class="causes-text my-text-black"> Talented students must have an opportunity to make it big in the
                  Fashion &
                  Interior industry.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-briefcase" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Placement/Internship</h4>

                <p class="causes-text my-text-black">
                  We have excellent tie-ups with the Fashion & Interior industry. We also offer internships.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-book" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Syllabus Tailored For Success</h4>

                <p class="causes-text my-text-black">Our syllabus matches the needs of the fashion & interior industry.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-pen-to-square" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Personalized Attention</h4>
                <p class="causes-text my-text-black"> We take great care and give personal attention to help students.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-building" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Institute-Industry Interface
                </h4>
                <p class="causes-text my-text-black">We invite professionals to conduct seminars, guest lectures etc.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-laptop" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Complete Automation(ERP)</h4>
                <p class="causes-text my-text-black">We have a complete automation system wherein we help our students
                  via E2E.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-bookmark" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">In-House Publication</h4>
                <p class="causes-text my-text-black">
                  Tailor made Exclusive courseware for Cadence Students for every subject.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-bookmark" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Workshop</h4>
                <p class="causes-text my-text-black">
                  Industries experts Famous FDs and Renowned architect and Designer section to be added</p>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>


  <section class="ftco-section welcome pt-5 pb-5" id="notice">
   
    <div class="container pb-5">
      <div class="row align-items-center">
        <div class="col-12 ftco-animate">

        </div>
        <div class="col-lg-6 ftco-animate">
          
              <img class="img-fluid rounded w-100 shadow" width="100%" src="assets/images/unnamed.png">
            
        </div>
        <div class="col-lg-6 ftco-animate">
          <div class="circular-notice">
            <div class="heading-bg">
              <h2 class="mb-4 logo-color causes-heading text-center"><a href="" target="_blank"
                  class="text-decoration-none" style="color: #ffffff;">Circular And Notice</a></h2>
            </div>
  
  
            <marquee behavior="scroll" direction="up" class="mt-2 p-4">
              <p class=" text-justify causes-text my-text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quasi recusandae amet laborum vel dolorem iusto eaque molestiae nemo, voluptatum totam quia, magni dolorum
                impedit nihil reiciendis? Iste at asperiores assumenda?
              </p>
            </marquee>
          </div>
          

       
          </a>
        </div>
      </div>
    </div>
  

  </section>

  <div class="under-line m-auto"></div>


 

  <section class="pt-5 pb-4 testimonial">
    <div class="content-wrapper ftco-animate">
      <h2 class="causes-heading fw-600 logo-color text-center mb-4">STUDENT TESTIMONIALS</h2>
     
      <div class="wrapper-for-arrows py-2">
        <div id="reviewWrap" class="review-wrap">
          <div id="imgDiv" class="">
          </div>
          <div id="personName"></div>
          <div id="profession"></div>
          <div id="description" class="scrollable-content">
          </div>
        </div>
        <div class="left-arrow-wrap arrow-wrap">
          <div class="arrow" id="leftArrow"></div>
        </div>
        <div class="right-arrow-wrap arrow-wrap">
          <div class="arrow" id="rightArrow"></div>
        </div>
      </div>
    </div>
  </section>


  <div class="under-line m-auto"></div>



  <!-- Enquiry  
  <section id="enquiry-tab" class="pt-5 pb-5 enquiry-form-bg font_text">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="text-center logo-color mb-5">ENQUIRY</h2>
        <div class="col-sm-12 col-md-12 col-lg-12 ftco-animate">
          <div class="contact-info shadow">
            <div class="row">
              <div class="col-lg-6">
               <form action="" method="post">
                  <h1 class="text-center causes-text heading1 mb-1 logo-color mb-4"><b>PLEASE LEAVE YOUR NUMBER FOR FREE
                      COUNSELLING BY OUR EXPERT</b></h1>
                @csrf

       
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>

        <div class="mb-3">
            <label for="mobile">Mobile No:</label>
            <input type="text" name="mobile" required>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="city">City:</label>
            <input type="text" name="city" required>
        </div>

        <div class="mb-3">
            <label class="form-label" style="font-weight:600;">Choose Course</label>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="check1" name="course[]" value="Fashion Design">
                        <label class="form-check-label" for="check1" style="margin: 0 10px 0 0;">Fashion Design</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="check2" name="course[]" value="Interior Design">
                        <label class="form-check-label" for="check2" style="margin: 0 10px 0 0;">Interior Design</label>
                    </div>
                </div>
            </div>
        </div>

                  <div class="mb-3 enquiry-submit">
                    <button type="submit" class="btn"
                      style="padding: 6px 30px; border-radius: 0px; border: 0; border-radius: 5px; background-color: #ea4000; color: white;">Submit</button>
                  </div>

                </form>
              </div>
              <div class="col-lg-6 d-none d-lg-block">
                <img src="/assets/images/enquiry-bg3.png" alt="" width="100%" height="100%" class="my-rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <footer>
    <div class="container-fluid bg-black-dim footer wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6 ftco-animate">
            <div class="text-center bg-light my-rounded mb-2">
              <a href=""><img class="img-fluid me-3" src="/assets/images/logo/logo.webp" alt="" width="180px" /></a>
            </div>
            <p class="text-white-90 text-justify causes-text">
              A renowned ISO 9001-2008 certified Fashion and Interior Design Institute which was established in the year
              2002 to
              impart par excellence vocational courses to students.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 ftco-animate">
            <h4 class="text-white causes-heading">Contact Us</h4>
            <div class="under-line-short mb-4"></div>
            <p class="text-white-90 causes-text">
              <a href="contact-us.html"><i class="fa fa-map-marker-alt me-3 text-white-90"></i></a>
              Cadence Academy, Wardhaman Nagar 269 Shardha
              Complex
              Above HDFC
              Bank, Avenue, Nagpur-440008, Maharashtra
            </p>
            <p class="causes-text text-white-90"><a href="tel:9823273512" class="text-decoration-none text-white-90"><i
                  class="fa-solid fa-phone me-3 text-white-90"></i>+91 98232
                73512</a>
            </p>
            <p class="causes-text text-white-90"><a href="mailto:admission@cadence-wn.in"
                class="text-decoration-none text-white-90"><i
                  class="fa fa-envelope me-3 text-white-90"></i>admission@cadence-wn.in</a></p>
          </div>
          <div class="col-lg-3 col-md-6 ftco-animate">
            <h4 class="text-light causes-heading">Quick Links</h4>
            <div class="under-line-short mb-4"></div>
            <ul class="footer-list">
              <li><a href="index.html" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Home</a></li>
              <li><a href="about.html" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; About</a></li>
              <li><a href="our-activities.html" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Our Activities</a></li>
              <li><a href="gallery.html" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Gallery</a></li>
              <li><a href="placements.html" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Placements</a></li>
              <li><a href="{{ route('pages.contact-us')}}" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Contact</a></li>
              <li><a href="{{ route('pages.online-admission')}}" class="text-decoration-none text-white-90"><i
                    class="fa-solid fa-angles-right"></i>&nbsp; Online Admission</a></li>
            </ul>

          </div>
          <div class="col-lg-3 col-md-6 ftco-animate footerz-col">
            <h4 class="text-light causes-heading">Social Media</h4>
            <div class="under-line-short mb-4"></div>
            <div class="social-links">
              <a href="https://www.instagram.com/cadence_wardhamannagar/?hl=en" class="ig" target="_blank"><i
                  class="fab fa-instagram x-large"></i></a>
              <a href="https://www.facebook.com/cadence.wardhamannagar/" class="fb" target="_blank"><i
                  class="fab fa-facebook-f x-large"></i></a>
              <a href="https://www.youtube.com/channel/UCL9PLt1ksSkueFHDjEKPhEQ" class="yt" target="_blank"><i
                  class="fab fa-youtube x-large"></i></a>
              <!-- <a href="#" class="wa"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid bg-black ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mt-2 mb-2 text-white">
            <span>Copyright &copy; 2023; All Rights Reserved.</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <button class="btnx-scroll"><i class="fa-solid fa-angle-up"></i></button>
  
  <script>
    function openPopupx() {
      document.getElementById("myModal").style.display = "block";
    }
  </script>
  
  <script>
    const button = document.querySelector('.btnx-scroll');

    const displayButton = () => {
      window.addEventListener('scroll', () => {
        console.log(window.scrollY);

        if (window.scrollY > 100) {
          button.style.display = "block";
        } else {
          button.style.display = "none";
        }
      });
    };

    const scrollToTop = () => {
      button.addEventListener("click", () => {
        window.scroll({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
        console.log(event);
      });
    };

    displayButton();
    scrollToTop();
  </script>

  <script src="assets/js/gsap.min.js"></script>
  <script>
    const reviewWrap = document.getElementById("reviewWrap");
    const leftArrow = document.getElementById("leftArrow");
    const rightArrow = document.getElementById("rightArrow");
    const imgDiv = document.getElementById("imgDiv");
    const personName = document.getElementById("personName");
    const profession = document.getElementById("profession");
    const description = document.getElementById("description");
    const surpriseMeBtn = document.getElementById("surpriseMeBtn");
    const chicken = document.querySelector(".chicken");

    let isChickenVisible;

    let people = [
      {
        photo:
          'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Akshay Satpute",
        profession: "April 2022",
        description:
          "My experience was very good in Cadence Academy Wardhaman Nagar. I like to study here to do work after my class hours too. Faculties are relly good and knowledgeable. I like to thank Cadence Academy Wardhaman Nagar, the best institute ever... "
      },
      {
        photo:
          'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Pranjali Kandalkar",
        profession: "February 2022",
        description:
          "I am extremely happy with the study patten and teaching process of Cadence Wardhaman Nagar. The faculties make all the concept easy to understand through various mode of teaching pattern. Thank you Cadence Wardhaman Nagar for helping me in understading my potential..."
      },
      {
        photo:
          'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Komal Krishnaji Raghorte",
        profession: "February 2022",
        description:
          "Cadence Academy Wardhaman Nagar is a great academy. They have a very good staff and teaching is done very nicely. All teachers are very frank that's why I feel comfortable with them. I really feel proud that I'am student of Cadence Academy Wardhaman Nagar..."
      },

      {
        photo:
          "url('https://cdn.pixabay.com/photo/2019/02/11/20/20/woman-3990680_960_720.jpg')",
        name: "Aashi Model",
        profession: "March 2022",
        description:
          "Cadence has always believed in helping and guiding its students and it was no different in the placement season. Regular classes were held at our Academy to help us with our practical skills. The faculties are very supportive, co-operative and humble. Thank you for everything Cadence..."
      },

      {
        photo:
          "url('https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg')",
        name: "Sakshi Pothare",
        profession: "April 2022",
        description:
          "The Experience of learning at Cadence Wardhaman Nagar has been great. The institute is one of the best in its kind, as there are plenty of opportunities to learn here in various activities and class visits. The faculties are best as they cater to each students needs and help them in all ways related to studies. Thank you Cadence Wardhaman Nagar for making me what I am today..."
      },

      {
        photo:
          "url('https://cdn.pixabay.com/photo/2014/10/30/17/32/boy-509488_960_720.jpg')",
        name: "Dhananjay Pathrabe",
        profession: "March 2022",
        description:
          "Being a part of Cadence Wardhaman Nagar makes me feel proud and happy as I am very much satisfied with the syllabus and the way the faculties makes the subject easy for us. Thank you Cadence Wardhaman Nagar for giving me a great platform to shape my creativity..."
      }
    ];

    imgDiv.style.backgroundImage = people[0].photo;
    personName.innerText = people[0].name;
    profession.innerText = people[0].profession;
    description.innerText = people[0].description;
    let currentPerson = 0;

    //Select the side where you want to slide
    function slide(whichSide, personNumber) {
      let reviewWrapWidth = reviewWrap.offsetWidth + "px";
      let descriptionHeight = description.offsetHeight + "px";
      //(+ or -)
      let side1symbol = whichSide === "left" ? "" : "-";
      let side2symbol = whichSide === "left" ? "-" : "";

      let tl = gsap.timeline();

      if (isChickenVisible) {
        tl.to(chicken, {
          duration: 0.4,
          opacity: 0
        });
      }

      tl.to(reviewWrap, {
        duration: 0.4,
        opacity: 0,
        translateX: `${side1symbol + reviewWrapWidth}`
      });

      tl.to(reviewWrap, {
        duration: 0,
        translateX: `${side2symbol + reviewWrapWidth}`
      });

      setTimeout(() => {
        imgDiv.style.backgroundImage = people[personNumber].photo;
      }, 400);
      setTimeout(() => {
        description.style.height = descriptionHeight;
      }, 400);
      setTimeout(() => {
        personName.innerText = people[personNumber].name;
      }, 400);
      setTimeout(() => {
        profession.innerText = people[personNumber].profession;
      }, 400);
      setTimeout(() => {
        description.innerText = people[personNumber].description;
      }, 400);

      tl.to(reviewWrap, {
        duration: 0.4,
        opacity: 1,
        translateX: 0
      });

      if (isChickenVisible) {
        tl.to(chicken, {
          duration: 0.4,
          opacity: 1
        });
      }
    }

    function setNextCardLeft() {
      if (currentPerson === 3) {
        currentPerson = 0;
        slide("left", currentPerson);
      } else {
        currentPerson++;
      }

      slide("left", currentPerson);
    }

    function setNextCardRight() {
      if (currentPerson === 0) {
        currentPerson = 3;
        slide("right", currentPerson);
      } else {
        currentPerson--;
      }

      slide("right", currentPerson);
    }

    leftArrow.addEventListener("click", setNextCardLeft);
    rightArrow.addEventListener("click", setNextCardRight);

    surpriseMeBtn.addEventListener("click", () => {
      if (chicken.style.opacity === "0") {
        chicken.style.opacity = "1";
        imgDiv.classList.add("move-head");
        surpriseMeBtn.innerText = "Remove the chicken";
        surpriseMeBtn.classList.remove("surprise-me-btn");
        surpriseMeBtn.classList.add("hide-chicken-btn");
        isChickenVisible = true;
      } else if (chicken.style.opacity === "1") {
        chicken.style.opacity = "0";
        imgDiv.classList.remove("move-head");
        surpriseMeBtn.innerText = "Surprise me";
        surpriseMeBtn.classList.add("surprise-me-btn");
        surpriseMeBtn.classList.remove("hide-chicken-btn");
        isChickenVisible = false;
      }
    });

    window.addEventListener("resize", () => {
      description.style.height = "100%";
    });

  </script>
  
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      const slides = document.getElementsByClassName("mySlides");
      const dots = document.getElementsByClassName("dot");

      if (n > slides.length) {
        slideIndex = 1;
      }

      if (n < 1) {
        slideIndex = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dots", "");
      }

      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active-dots";
    }

    // Automatic slideshow
    setInterval(() => {
      plusSlides(1);
    }, 4000); // Change slide every 4 seconds
  </script>

 
  <script>
    let slideIndex2 = 1;
    showSlides2(slideIndex2);

    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }

    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
      let i;
      const slides = document.getElementsByClassName("mySlides2");
      const dots = document.getElementsByClassName("dot2");

      if (n > slides.length) {
        slideIndex2 = 1;
      }

      if (n < 1) {
        slideIndex2 = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dots", "");
      }

      slides[slideIndex2 - 1].style.display = "block";
      dots[slideIndex2 - 1].className += " active-dots";
    }

    // Automatic slideshow
    setInterval(() => {
      plusSlides2(1);
    }, 5000); 
  </script>
  






  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/jquery.easing.1.3.js"></script>
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/jquery.animateNumber.min.js"></script>
  <script src="/assets/js/scrollax.min.js"></script>
  <script src="/assets/js/model-pop-up.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="/assets/js/google-map.js"></script>
  <script src="/assets/js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"81fb64094ee17938","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
    crossorigin="anonymous"></script>
</body>

</html>

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>flipcard - eCommerce HTML Template</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="flip/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="flip/css/stylesheet-skin3.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!-- CSS Part End-->
</head>

<body>
    <div class="wrapper-wide">
        <div id="header">
            <!-- Top Bar Start-->
            <nav id="top" class="htop">
                <div class="container">
                    <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                        <div class="pull-left flip left-top">
                            <div class="links">
                                <ul>
                                    <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                                    <li class="email"><a href="mailto:info@flipcard.com"><i class="fa fa-envelope"></i>info@flipcard.com</a></li>
                                    <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                                        <div class="dropdown-menu custom_block">
                                            <ul>
                                                <li>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img alt="" src="flip/image/banner/cms-block.jpg"></td>
                                                                <td><img alt="" src="flip/image/banner/responsive.jpg"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h4>CMS Blocks</h4>
                                                                </td>
                                                                <td>
                                                                    <h4>Responsive Template</h4>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                                <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                                                                <td><strong><a class="btn btn-default btn-sm" href="#">Read More</a></strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Wish List (0)</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                            <div id="language" class="btn-group">
                                <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="flip/image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="flip/image/flags/gb.png" alt="English" title="English" /> English</button>
                                    </li>
                                    <li>
                                        <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="flip/image/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="currency" class="btn-group">
                                <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> $ USD <i class="fa fa-caret-down"></i></span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="top-links" class="nav pull-right flip">
                            <ul>
							  <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('admin.login') }}">ADMIN</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Top Bar End-->
            <!-- Header Start-->
            <header class="header-row">
                <div class="container">
                    <div class="table-container">
                        <!-- Logo Start -->
                        <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                            <div id="logo"><a href="index.html"><H1>Flipcard</H1></a></div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Start-->
                        <div class="col-table-cell col-lg-5 col-md-5 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Search End-->
                        <!-- Mini Cart Start-->
                        <div class="col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                            <div id="cart">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle"> <span class="cart-icon pull-left flip"></span> <span id="cart-total">2 item(s) - $1,132.00</span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="image/product/sony_vaio_1-50x50.jpg"></a></td>
                                                    <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$902.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="image/product/samsung_tab_1-50x50.jpg"></a></td>
                                                    <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$230.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="Remove" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$940.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                                        <td class="text-right">$188.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$1,132.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mini Cart End-->
                    </div>
                </div>
            </header>
            <!-- Header End-->
            <!-- Main Menu Start-->
            <nav id="menu" class="navbar">
                <div class="container">
                    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="home_link" title="Home" href="index.html"><span>Home</span></a></li>
                            <li class="dropdown"><a>Shop by Categories</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li> <a href="category.html">Clothing<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Men <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Women</a> </li>
                                                    <li><a href="category.html">Girls<span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">Sub Categories </a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Boys</a></li>
                                                    <li><a href="category.html">Baby</a></li>
                                                    <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Electronics<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Laptops <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories </a> </li>
                                                                <li> <a href="category.html">New Sub Categories </a> </li>
                                                                <li> <a href="category.html">Sub Categories New </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li> <a href="category.html">Desktops <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories </a> </li>
                                                                <li> <a href="category.html">Sub Categories New </a> </li>
                                                                <li> <a href="category.html">Sub Categories New </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li> <a href="category.html">Cameras <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Mobile Phones <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">TV &amp; Home Audio <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a> </li>
                                                                <li><a href="category.html">Sub Categories New </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">MP3 Players</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="category.html">Shoes<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Men</a> </li>
                                                    <li><a href="category.html">Women <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a> </li>
                                                                <li><a href="category.html">Sub Categories </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Girls</a> </li>
                                                    <li><a href="category.html">Boys</a> </li>
                                                    <li><a href="category.html">Baby</a> </li>
                                                    <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Watches<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Men's Watches</a></li>
                                                    <li> <a href="category.html">Women's Watches</a></li>
                                                    <li> <a href="category.html">Kids' Watches</a></li>
                                                    <li> <a href="category.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Jewellery<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Silver <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Gold <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">test 1</a></li>
                                                                <li><a href="category.html">test 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Diamond</a></li>
                                                    <li><a href="category.html">Pearl <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Men's Jewellery</a></li>
                                                    <li><a href="category.html">Children's Jewellery <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="category.html">Health &amp; Beauty<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Perfumes</a></li>
                                                    <li> <a href="category.html">Makeup</a></li>
                                                    <li> <a href="category.html">Sun Care</a></li>
                                                    <li> <a href="category.html">Skin Care</a></li>
                                                    <li> <a href="category.html">Eye Care</a></li>
                                                    <li> <a href="category.html">Hair Care</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Kids &amp; Babies<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Toys</a></li>
                                                    <li><a href="category.html">Games <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">test 25</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Puzzles</a></li>
                                                    <li><a href="category.html">Hobbies</a></li>
                                                    <li><a href="category.html">Strollers</a></li>
                                                    <li><a href="category.html">Health &amp; Safety</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Sports<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Cycling</a></li>
                                                    <li><a href="category.html">Running</a></li>
                                                    <li><a href="category.html">Swimming</a></li>
                                                    <li><a href="category.html">Football</a></li>
                                                    <li><a href="category.html">Golf</a></li>
                                                    <li><a href="category.html">Windsurfing</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Home &amp; Garden<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Bedding</a></li>
                                                    <li><a href="category.html">Food</a></li>
                                                    <li><a href="category.html">Furniture</a></li>
                                                    <li><a href="category.html">Kitchen</a></li>
                                                    <li><a href="category.html">Lighting</a></li>
                                                    <li><a href="category.html">Tools</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Wines &amp; Spirits<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Wine</a></li>
                                                    <li><a href="category.html">Whiskey</a></li>
                                                    <li><a href="category.html">Vodka</a></li>
                                                    <li><a href="category.html">Liqueurs</a></li>
                                                    <li><a href="category.html">Beer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu_brands dropdown">
							@foreach( getcategories() as $category)
							<a href="#"> {{$category->categoryname}}</a>
							 @endforeach
                             
                            </li>
                            <li class="custom-link">@foreach( getproducts() as $product)<a href="#">{{$product->name}}</a> @endforeach</li>
                            <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>Custom Block</a>
                                <div class="dropdown-menu custom_block">
                                    <ul>
                                        <li>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td><img alt="" src="flip/image/banner/cms-block.jpg"></td>
                                                        <td><img alt="" src="flip/image/banner/responsive.jpg"></td>
                                                        <td><img alt="" src="flip/image/banner/cms-block.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>CMS Blocks</h4>
                                                        </td>
                                                        <td>
                                                            <h4>Responsive Template</h4>
                                                        </td>
                                                        <td>
                                                            <h4>Dedicated Support</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                        <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                        <td>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-primary btn-sm" href="#">Read More</a></strong></td>
                                                        <td><strong><a class="btn btn-primary btn-sm" href="#">Read More</a></strong></td>
                                                        <td><strong><a class="btn btn-primary btn-sm" href="#">Read More</a></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown"><a href="blog.html">Blog</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-detail.html">Single Post</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown"><a>Pages</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="category.html">Category (Grid/List)</a></li>
                                        <li><a href="product.html">Product Page</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Product Compare</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="search.html">Search</a></li>
                                        <li><a href="manufacturer.html">Brands</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="elements-forms.html">Forms</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="email-template" target="_blank">Email Template Page</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="order-history.html">Order History</a></li>
                                        <li><a href="order-information.html">Order Information</a></li>
                                        <li><a href="return.html">Return</a></li>
                                        <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="contact-link"><a href="contact-us.html">Contact Us</a></li>
                            <li class="custom-link-right"><a href="#" target="_blank">Special Offers</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Main Menu End-->
        </div>
        <div id="container">
            <div class="container">
                <div class="row">
                    <!--Middle Part Start-->
                    <div id="content" class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-8">
                                <!-- Slideshow Start-->
                                <div class="slideshow single-slider owl-carousel">
                                    <div class="item"> <a href="#"><img class="img-responsive" src="flip/image/slider/banner-1-750x400.jpg" alt="banner 1" /></a></div>
                                    <div class="item"> <a href="#"><img class="img-responsive" src="flip/image/slider/banner-2-750x400.jpg" alt="banner 2" /></a></div>
                                    <div class="item"> <a href="#"><img class="img-responsive" src="flip/image/slider/banner-3-750x400.jpg" alt="banner 3" /></a></div>
                                </div>
                                <!-- Slideshow End-->
                            </div>
                            <div class="col-sm-4 pull-right flip">
                                <div class="flipcard-banner">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<a href="#"><img title="sample-banner1" alt="sample-banner1" src="flip/image/banner/sp-small-banner-360x185.jpg"></a></div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a href="#"><img title="sample-banner" alt="sample-banner" src="flip/image/banner/sp-small-banner1-360x185.jpg"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bestsellers Product Start-->
                        <h3 class="subtitle">Product</h3>
                        <div class="owl-carousel product_carousel">
                            <div class="product-thumb clearfix">
								@foreach( getproducts() as $product)
                                <div class="image"><a href="{{ route('Product.page_product',$product->slug ) }}">
									  @if ($product->image != "")
								
							<img class="card-img-top img-responsive" src="{{asset('/image/'.$product->image)}}" alt="">
								
								</a>
								@endif
								</div>
                                <div class="caption">
                                    <h4><a href="product.html">{{$product->name}}</a></h4>
                                    <p class="price"> {{$product->price}}</p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
								  @endforeach
                            </div>
                            <div class="product-thumb clearfix">
								@foreach( getproducts() as $product)
                                <div class="image"><a href="{{ route('Product.page_product',$product->id ) }}">
									  @if ($product->image != "")
								
							<img class="card-img-top img-responsive" src="{{asset('/image/'.$product->image)}}" alt="">
								
								</a>
								@endif
								</div>
                                <div class="caption">
                                    <h4><a href="product.html">{{$product->name}}</a></h4>
                                    <p class="price"> {{$product->price}}</p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
								  @endforeach
                            </div>
                            <div class="product-thumb clearfix">
								@foreach( getproducts() as $product)
                                <div class="image"><a href="{{ route('Product.page_product',$product->id ) }}">
									  @if ($product->image != "")
								
							<img class="card-img-top img-responsive" src="{{asset('/image/'.$product->image)}}" alt="">
								
								</a>
								@endif
								</div>
                                <div class="caption">
                                    <h4><a href="product.html">{{$product->name}}</a></h4>
                                    <p class="price"> {{$product->price}}</p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
								  @endforeach
                            </div>
                            
                           
                           <div class="product-thumb clearfix">
								@foreach( getproducts() as $product)
                                <div class="image"><a href="{{ route('Product.page_product',$product->id ) }}">
									  @if ($product->image != "")
								
							<img class="card-img-top img-responsive" src="{{asset('/image/'.$product->image)}}" alt="">
								
								</a>
								@endif
								</div>
                                <div class="caption">
                                    <h4><a href="product.html">{{$product->name}}</a></h4>
                                    <p class="price"> {{$product->price}}</p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
								  @endforeach
                            </div>
							 <div class="product-thumb clearfix">
								@foreach( getproducts() as $product)
                                <div class="image"><a href="{{ route('Product.page_product',$product->id ) }}">
									  @if ($product->image != "")
								
							<img class="card-img-top img-responsive" src="{{asset('/image/'.$product->image)}}" alt="">
								
								</a>
								@endif
								</div>
                                <div class="caption">
                                    <h4><a href="product.html">{{$product->name}}</a></h4>
                                    <p class="price"> {{$product->price}}</p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
								  @endforeach
                            </div>
                        </div>
                        <!-- Featured Product End-->
                        <!-- Banner Start-->
                        <div class="flipcard-banner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img title="Sample Banner 2" alt="Sample Banner 2" src="flip/image/banner/sample-banner-3-360x360.jpg"></a></div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img title="Sample Banner" alt="Sample Banner" src="flip/image/banner/sample-banner-1-360x360.jpg"></a></div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img title="Sample Banner 3" alt="Sample Banner 3" src="flip/image/banner/sample-banner-2-360x360.jpg"></a></div>
                            </div>
                        </div>
                        <!-- Banner End-->
                        <!-- Categories Product Slider Start-->
                        <div class="category-module" id="latest_category">
                            <h3 class="subtitle">Categories - <a class="viewall" href="category.tpl">view all</a></h3>
                            <div class="category-module-content">
                                <ul id="sub-cat" class="tabs">
								@foreach( getcategories() as $category)
                                    <li><a href="#tab-cat1"> {{$category->categoryname}}</a></li>
                                    
									 @endforeach
                                </ul>
                                <div id="tab-cat1" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image">
											<a href="product.html">
											<img src="flip/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" 
											class="img-responsive" /></a>
</div>
                                            <div class="caption">
                                                <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                                <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html"> Strategies for Acquiring Your Own Laptop </a></h4>
                                                <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_air_1-200x200.jpg" alt="Laptop Silver black" title="Laptop Silver black" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Laptop Silver black</a></h4>
                                                <p class="price"> <span class="price-new">$1,142.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-5%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                                <p class="price"> $2.00 </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                                <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-cat2" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-cat3" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/nikon_d300_1-200x200.jpg" alt="Digital Camera for Elderly" title="Digital Camera for Elderly" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                                <p class="price"> <span class="price-new">$92.00</span> <span class="price-old">$98.00</span> <span class="saving">-6%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-cat4" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                                <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">iPhone5</a></h4>
                                                <p class="price"> $123.20 </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                                <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/palm_treo_pro_1-200x200.jpg" alt="HTC M7 with Stunning Looks" title="HTC M7 with Stunning Looks" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">HTC M7 with Stunning Looks</a></h4>
                                                <p class="price"> $337.99 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-cat5" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                                <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_classic_1-200x200.jpg" alt="Portable Mp3 Player" title="Portable Mp3 Player" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_pro_1-200x200.jpg" alt=" Strategies for Acquiring Your Own Laptop " title=" Strategies for Acquiring Your Own Laptop " class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html"> Strategies for Acquiring Your Own Laptop </a></h4>
                                                <p class="price"> <span class="price-new">$1,400.00</span> <span class="price-old">$1,900.00</span> <span class="saving">-26%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_air_1-200x200.jpg" alt="Laptop Silver black" title="Laptop Silver black" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Laptop Silver black</a></h4>
                                                <p class="price"> <span class="price-new">$1,142.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-5%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                                <p class="price"> $2.00 </p>
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_nano_1-200x200.jpg" alt="Mp3 Player" title="Mp3 Player" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Mp3 Player</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="FinePix S8400W Long Zoom Camera" title="FinePix S8400W Long Zoom Camera" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_shuffle_1-200x200.jpg" alt="Hp Pavilion G6 2314ax Notebok Laptop" title="Hp Pavilion G6 2314ax Notebok Laptop" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick="cart.add('34');"><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick="compare.add('34');"><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_touch_1-200x200.jpg" alt="Samsung Galaxy S4" title="Samsung Galaxy S4" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                                <p class="price"> <span class="price-new">$62.00</span> <span class="price-old">$122.00</span> <span class="saving">-50%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/nikon_d300_1-200x200.jpg" alt="Digital Camera for Elderly" title="Digital Camera for Elderly" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                                <p class="price"> <span class="price-new">$92.00</span> <span class="price-old">$98.00</span> <span class="saving">-6%</span> </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-cat6" class="tab_content">
                                    <div class="owl-carousel latest_category_tabs">
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_classic_1-200x200.jpg" alt="Portable Mp3 Player" title="Portable Mp3 Player" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick="cart.add('48');"><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="image"><a href="product.html"><img src="flip/image/product/ipod_nano_1-200x200.jpg" alt="Mp3 Player" title="Mp3 Player" class="img-responsive" /></a></div>
                                            <div class="caption">
                                                <h4><a href="product.html">Mp3 Player</a></h4>
                                                <p class="price"> $122.00 </p>
                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Categories Product Slider End-->
                        <!-- Categories Product Slider Start -->
                        <h3 class="subtitle">Health &amp; Beauty - <a class="viewall" href="category.html">view all</a></h3>
                        <div class="owl-carousel latest_category_carousel">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/iphone_6-200x200.jpg" alt="Hair Care Cream for Men" title="Hair Care Cream for Men" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Hair Care Cream for Men</a></h4>
                                    <p class="price"> $134.00 </p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/nikon_d300_5-200x200.jpg" alt="Hair Care Products" title="Hair Care Products" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Hair Care Products</a></h4>
                                    <p class="price"> <span class="price-new">$66.80</span> <span class="price-old">$90.80</span> <span class="saving">-27%</span> </p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/nikon_d300_4-200x200.jpg" alt="Bed Head Foxy Curls Contour Cream" title="Bed Head Foxy Curls Contour Cream" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Bed Head Foxy Curls Contour Cream</a></h4>
                                    <p class="price"> $88.00 </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href=""><img src="flip/image/product/macbook_5-200x200.jpg" alt="Shower Gel Perfume for Women" title="Shower Gel Perfume for Women" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Shower Gel Perfume for Women</a></h4>
                                    <p class="price"> <span class="price-new">$95.00</span> <span class="price-old">$99.00</span> <span class="saving">-4%</span> </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick="cart.add('61');"><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/macbook_4-200x200.jpg" alt="Perfumes for Women" title="Perfumes for Women" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Perfumes for Women</a></h4>
                                    <p class="price"> $85.00 </p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/macbook_3-200x200.jpg" alt="Make Up for Naturally Beautiful Better" title="Make Up for Naturally Beautiful Better" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Make Up for Naturally Beautiful Better</a></h4>
                                    <p class="price"> $123.00 </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="flip/image/product/macbook_2-200x200.jpg" alt="Pnina Tornai Perfume" title="Pnina Tornai Perfume" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Pnina Tornai Perfume</a></h4>
                                    <p class="price"> $110.00 </p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Categories Product Slider End -->
                        <!-- Banner Start -->
                        <div class="flipcard-banner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a href="#"><img title="1 Block Banner" alt="1 Block Banner" src="flip/image/banner/1blockbanner-1140x75.jpg"></a></div>
                            </div>
                        </div>
                        <!-- Banner End -->
                        <!-- Brand Logo Carousel Start-->
                        <div id="carousel" class="owl-carousel nxt">
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/apple_logo-100x100.jpg" alt="Palm" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/canon_logo-100x100.jpg" alt="Sony" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/apple_logo-100x100.jpg" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/canon_logo-100x100.jpg" alt="Apple" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/apple_logo-100x100.jpg" alt="HTC" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/canon_logo-100x100.jpg" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="flip/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
                        </div>
                        <!-- Brand Logo Carousel End -->
                    </div>
                    <!--Middle Part End-->
                </div>
            </div>
        </div>
        <!-- Feature Box Start-->
        <div class="container">
            <div class="custom-feature-box row">
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_1">
                        <div class="title">Free Shipping</div>
                        <p>Free shipping on order over $1000</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_3">
                        <div class="title">Gift Cards</div>
                        <p>Give the special perfect gift</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_4">
                        <div class="title">Reward Points</div>
                        <p>Earn and spend with ease</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Box End-->
        <!--Footer Start-->
        <footer id="footer">
            <div class="fpart-first">
                <div class="container">
                    <div class="row">
                        <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <h5>Contact Details</h5>
                            <ul>
                                <li class="address"><i class="fa fa-map-marker"></i>Central Square, 22 Hoi Wing Road, New Delhi, India</li>
                                <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                                <li class="email"><i class="fa fa-envelope"></i>Send email via our <a href="contact-us.html">Contact Us</a>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-us.html">Delivery Information</a></li>
                                <li><a href="about-us.html">Privacy Policy</a></li>
                                <li><a href="about-us.html">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Customer Service</h5>
                            <ul>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="returns.html">Returns</a></li>
                                <li><a href="sitemap.html">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Extras</h5>
                            <ul>
                                <li><a href="manufacturer.html">Brands</a></li>
                                <li><a href="gift-voucher.html">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <h5>Newsletter</h5>
                            <div class="form-group">
                                <label class="control-label" for="subscribe">Sign up to receive latest news and updates.</label>
                                <input id="signup" type="email" required="" placeholder="Email address" name="email" class="form-control">
                            </div>
                            <input type="submit" value="Subscribe" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
            <div class="fpart-second">
                <div class="container">
                    <div id="powered" class="clearfix">
                        <div class="powered_text pull-left flip">
                            <p>flipcard Ecommerce Template © 2016 | Template By <a href="http://harnishdesign.net" target="_blank">Harnish Design</a></p>
                        </div>
                        <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="flip/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a>                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a>                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
                    </div>
                    <div class="bottom-row">
                        <div class="custom-text text-center"> <img alt="" src="image/logo-small.png">
                            <p>This is a CMS block. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_american.png" alt="american-express" title="American Express"></a>                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a>                            <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a>                            </div>
                    </div>
                </div>
            </div>
            <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
        <!-- Facebook Side Block Start -->
        <div id="facebook" class="fb-left sort-order-1">
            <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
            <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">Harnish Design</a></blockquote>
                </div>
            </div>
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </div>
        <!-- Facebook Side Block End -->
        <!-- Twitter Side Block Start -->
        <div id="twitter_footer" class="twit-left sort-order-2">
            <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
            <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");
            </script>
        </div>
        <!-- Twitter Side Block End -->
        <!-- Video Side Block Start -->
        <div id="video_box" class="vb-right sort-order-1">
            <div id="video_box_icon"><i class="fa fa-play"></i></div>
            <p>
                <iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>
            </p>
        </div>
        <!-- Video Side Block End -->
        <!-- Custom Side Block Start -->
        <div id="custom_side_block" class="custom_side_block_right sort-order-2">
            <div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>
            <table>
                <tbody>
                    <tr>
                        <td>
                            <h2>CMS Blocks</h2>
                        </td>
                    </tr>
                    <tr>
                        <td><img alt="" src="flip/image/banner/cms-block.jpg"></td>
                    </tr>
                    <tr>
                        <td>
                            <p>This is a CMS block. You can insert any content (HTML, Text, Images) Here.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong><a href="#" class="btn btn-sm btn-primary">Read More</a></strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Custom Side Block End -->
    </div>
    <!-- JS Part Start-->
    <script type="text/javascript" src="flip/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="flip/js/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="flip/js/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="flip/js/jquery.dcjqaccordion.min.js"></script>
    <script type="text/javascript" src="flip/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="flip/js/custom.js"></script>
    <!-- JS Part End-->
</body>

</html>