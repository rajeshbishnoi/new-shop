<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
					</div>
					<div class="top-right">
					<ul>
						<li><a href="{{url('/checkout')}}">Checkout</a></li>
						<li><a href="{{url('/login')}}">Login</a></li>
						<li><a href="{{url('/registered')}}"> Create Account </a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="{{url('/')}}">New Shop <span>Shop anywhere</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">

							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{URL('/')}}" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Submenu1</h6>
														<li><a href="{{url('/products')}}">Clothing</a></li>
														<li><a href="{{url('/products')}}">Wallets</a></li>
														<li><a href="{{url('/products')}}">Shoes</a></li>
														<li><a href="{{url('/products')}}">Watches</a></li>
														<li><a href="{{url('/products')}}"> Underwear </a></li>
														<li><a href="{{url('/products')}}">Accessories</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Submenu2</h6>
														<li><a href="{{url('/products')}}">Sunglasses</a></li>
														<li><a href="{{url('/products')}}">Wallets,Bags</a></li>
														<li><a href="{{url('/products')}}">Footwear</a></li>
														<li><a href="{{url('/products')}}">Watches</a></li>
														<li><a href="{{url('/products')}}">Accessories</a></li>
														<li><a href="{{url('/products')}}">Jewellery</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="{{url('/products')}}"><img src="images/woo.jpg" alt=" "/></a>
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="{{url('/products')}}"><img src="images/woo1.jpg" alt=" "/></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Submenu1</h6>
														<li><a href="{{url('/products')}}">Clothing</a></li>
														<li><a href="{{url('/products')}}">Wallets</a></li>
														<li><a href="{{url('/products')}}">Shoes</a></li>
														<li><a href="{{url('/products')}}">Watches</a></li>
														<li><a href="{{url('/products')}}"> Underwear </a></li>
														<li><a href="{{url('/products')}}">Accessories</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Submenu2</h6>
														<li><a href="{{url('/products')}}">Sunglasses</a></li>
														<li><a href="{{url('/products')}}">Wallets,Bags</a></li>
														<li><a href="{{url('/products')}}">Footwear</a></li>
														<li><a href="{{url('/products')}}">Watches</a></li>
														<li><a href="{{url('/products')}}">Accessories</a></li>
														<li><a href="{{url('/products')}}">Jewellery</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="{{url('/products1')}}"><img src="{{URL::asset('public/images/woo3.jpg')}}" alt=" "/></a>
												</div> 
												<div class="col-sm-3  multi-gd-img">
														<a href="{{URL('/products1')}}"><img src="{{URL::asset('public/images/woo4.jpg')}}" alt=" "/></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li><a href="{{url('/codes')}}">Short Codes</a></li>
									<li><a href="{{url('/mail')}}">Mail Us</a></li>
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<form action="#" method="post">
									<input name="Search" type="search" placeholder="Search...">
								</form>
							</div>	
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="{{url('/checkout')}}">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="{{URL::asset('public/images/bag.png')}}" alt="" />
									</h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>