@extends('home.header')


@section('content')


<!-- HOME SLIDER -->
<!-- heading-banner start -->
<div class="heading-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Women Cloth</a></li>
					<li class="active">Product Details</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- heading-banner end -->
<!-- single-product-area start -->
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single-pro-tab-content">
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<a href="#">
										<img src="img/product/1.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="profile">
									<a href="#">
										<img src="img/product/2.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="messages">
									<a href="#">
										<img src="img/product/3.jpg" alt="" /></a></div>
								<div role="tabpanel" class="tab-pane" id="settings">
									<a href="#">
										<img src="img/product/4.jpg" alt="" /></a></div>
							</div>
							<!-- Nav tabs -->
							<ul class="single-product-tab" role="tablist">
								<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
									data-toggle="tab">
									<img src="img/product/1.jpg" alt="" /></a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
									<img src="img/product/2.jpg" alt="" /></a></li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
									<img src="img/product/3.jpg" alt="" /></a></li>
								<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
									<img src="img/product/4.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 shop-list">
						<div class="product-info product-single">
							<h3>
								<a href="single-product.html">Feugiat justo lacinia</a></h3>
							<div class="pro-rating">
								<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
									class="fa fa-star"></i><i class="fa fa-star"></i><a class="reviews" href="#">16 reviews</a>
								| <a class="add-review" href="#">Add Your Review</a>
							</div>
							<div class="pro-price">
								<span class="normal">$150</span> <span class="old">$180</span>
							</div>
							<hr class="page-divider">
							<div class="product-desc">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
									est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
									quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
									id nulla.</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
									est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
									quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
									id nulla.</p>
								<ul>
									<li>- Cras tristique neque a mauris volutpat, eget sodales neque elementum.</li>
									<li>- Vestibulum iaculis velit sed dolor suscipit pretium.</li>
									<li>- Etiam mattis risus id leo imperdiet tincidunt.</li>
								</ul>
							</div>
							<hr class="page-divider">
							<form action="#" class="row variable">
							<div class="col-sm-6">
								<div class="form-group selectpicker-wrapper">
									<label for="exampleSelect1">
										Size</label>
									<select id="exampleSelect1" class="selectpicker input-price" data-live-search="true"
										data-width="100%" data-toggle="tooltip" title="Select">
										<option>Select Your Size</option>
										<option>Size 1</option>
										<option>Size 2</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group selectpicker-wrapper">
									<label for="exampleSelect2">
										Color</label>
									<select id="exampleSelect2" class="selectpicker input-price" data-live-search="true"
										data-width="100%" data-toggle="tooltip" title="Select">
										<option>Select Your Color</option>
										<option>Color 1</option>
										<option>Color 2</option>
									</select>
								</div>
							</div>
							</form>
							<div class="product-action">
								<form action="#">
								<div class="cart-plus-minus">
									<input type="text" value="1" /></div>
								</form>
								<div class="pro-button-top">
									<a href="#">add to cart</a>
								</div>
								<div class="pro-button-bottom">
									<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
									</a><a href="#"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
							<hr class="page-divider small">
							<table>
								<tbody>
									<tr>
										<td class="title">
											Category:
										</td>
										<td>
											Men Dress
										</td>
									</tr>
									<tr>
										<td class="title">
											Product Code:
										</td>
										<td>
											PS08
										</td>
									</tr>
									<tr>
										<td class="title">
											Tags:
										</td>
										<td>
											Fashion - clothes - Dress - Men - jean
										</td>
									</tr>
								</tbody>
							</table>
							<div class="widget-icon">
								<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i>
								</a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-google-plus">
								</i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="product-tabs">
							<div>
								<!-- Nav tabs -->
								<ul class="pro-details-tab" role="tablist">
									<li role="presentation" class="active"><a href="#tab-desc" aria-controls="tab-desc"
										role="tab" data-toggle="tab">Description</a></li>
									<li role="presentation"><a href="#page-comments" aria-controls="page-comments" role="tab"
										data-toggle="tab">Reviews (1)</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="tab-desc">
										<div class="product-tab-desc">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
												est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
												quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
												id nulla.</p>
											<p>
												Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum
												turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce
												aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo
												augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
												tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit
												odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida
												vehicula tellus, in imperdiet ligula euismod eget.</p>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="page-comments">
										<div class="product-tab-desc">
											<div class="product-page-comments">
												<h2>
													1 review for Integer consequat ante lectus</h2>
												<ul>
													<li>
														<div class="product-comments">
															<img src="img/author.jpg" alt="" />
															<div class="product-comments-content">
																<p>
																	<strong>admin</strong> - <span>March 7, 2015:</span> <span class="pro-comments-rating">
																		<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
																			class="fa fa-star"></i></span>
																</p>
																<div class="desc">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
																	est tristique auctor. Donec non est at libero vulputate rutrum.
																</div>
															</div>
														</div>
													</li>
												</ul>
												<div class="review-form-wrapper">
													<h3>
														Add a review</h3>
													<form action="#">
													<input type="text" placeholder="your name" />
													<input type="email" placeholder="your email" />
													<div class="your-rating">
														<h5>
															Your Rating</h5>
														<span><a href="#"><i class="fa fa-star"></i></a><a href="#"><i class="fa fa-star"></i>
														</a></span><span><a href="#"><i class="fa fa-star"></i></a><a href="#"><i class="fa fa-star">
														</i></a><a href="#"><i class="fa fa-star"></i></a></span><span><a href="#"><i class="fa fa-star">
														</i></a><a href="#"><i class="fa fa-star"></i></a><a href="#"><i class="fa fa-star">
														</i></a><a href="#"><i class="fa fa-star"></i></a></span><span><a href="#"><i class="fa fa-star">
														</i></a><a href="#"><i class="fa fa-star"></i></a><a href="#"><i class="fa fa-star">
														</i></a><a href="#"><i class="fa fa-star"></i></a><a href="#"><i class="fa fa-star">
														</i></a></span>
													</div>
													<textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
													<input type="submit" value="submit" />
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="section-title text-center">
							<h2>
								Related Products</h2>
						</div>
					</div>
					<div class="clear">
					</div>
					<div class="related-curosel">
						<!-- single-product start -->
						<div class="col-lg-12">
							<div class="single-product">
								<div class="product-img">
									<a href="single-product.html">
										<img class="primary-img" src="img/product/9.jpg" alt="" />
										<img class="secondary-img" src="img/product/7.jpg" alt="" />
									</a>
									<div class="product-action">
										<div class="pro-button-top">
											<a href="#">add to cart</a>
										</div>
										<div class="pro-button-bottom">
											<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
											</a><a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h3>
										<a href="single-product.html">Feugiat justo lacinia</a></h3>
									<div class="pro-price">
										<span class="normal">$150</span> <span class="old">$180</span>
									</div>
									<div class="pro-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product end -->
						<!-- single-product start -->
						<div class="col-lg-12">
							<div class="single-product">
								<div class="product-img">
									<a href="single-product.html">
										<img class="primary-img" src="img/product/19.jpg" alt="" />
										<img class="secondary-img" src="img/product/20.jpg" alt="" />
									</a>
									<div class="product-action">
										<div class="pro-button-top">
											<a href="#">add to cart</a>
										</div>
										<div class="pro-button-bottom">
											<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
											</a><a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h3>
										<a href="single-product.html">Feugiat justo lacinia</a></h3>
									<div class="pro-price">
										<span class="normal">$150</span> <span class="old">$180</span>
									</div>
									<div class="pro-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product end -->
						<!-- single-product start -->
						<div class="col-lg-12">
							<div class="single-product">
								<div class="product-img">
									<a href="single-product.html">
										<img class="primary-img" src="img/product/5.jpg" alt="" />
										<img class="secondary-img" src="img/product/6.jpg" alt="" />
									</a>
									<div class="product-action">
										<div class="pro-button-top">
											<a href="#">add to cart</a>
										</div>
										<div class="pro-button-bottom">
											<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
											</a><a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h3>
										<a href="single-product.html">Feugiat justo lacinia</a></h3>
									<div class="pro-price">
										<span class="normal">$150</span> <span class="old">$180</span>
									</div>
									<div class="pro-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product end -->
						<!-- single-product start -->
						<div class="col-lg-12">
							<div class="single-product">
								<div class="product-img">
									<a href="single-product.html">
										<img class="primary-img" src="img/product/25.jpg" alt="" />
										<img class="secondary-img" src="img/product/26.jpg" alt="" />
									</a>
									<div class="product-action">
										<div class="pro-button-top">
											<a href="#">add to cart</a>
										</div>
										<div class="pro-button-bottom">
											<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
											</a><a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h3>
										<a href="single-product.html">Feugiat justo lacinia</a></h3>
									<div class="pro-price">
										<span class="normal">$150</span> <span class="old">$180</span>
									</div>
									<div class="pro-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product end -->
						<!-- single-product start -->
						<div class="col-lg-12">
							<div class="single-product">
								<div class="product-img">
									<a href="single-product.html">
										<img class="primary-img" src="img/product/9.jpg" alt="" />
										<img class="secondary-img" src="img/product/10.jpg" alt="" />
									</a>
									<div class="product-action">
										<div class="pro-button-top">
											<a href="#">add to cart</a>
										</div>
										<div class="pro-button-bottom">
											<a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-retweet"></i>
											</a><a href="#"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="product-info">
									<h3>
										<a href="single-product.html">Feugiat justo lacinia</a></h3>
									<div class="pro-price">
										<span class="normal">$150</span> <span class="old">$180</span>
									</div>
									<div class="pro-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
											class="fa fa-star"></i><i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- single-product end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- single-product-area end -->
<!-- brand-area start -->
<div class="brand-area pad-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2>
						Our Brands</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="brand-carousel">
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-brand">
						<a href="#">
							<img src="img/brand/1.png" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- brand-area end -->



@endsection