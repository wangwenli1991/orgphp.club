﻿@extends('home.header')


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
					<li class="active">Category List View Page With Left Sidebar</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- heading-banner end -->
<!-- shop-area start -->
<div class="shop-area">
	<div class="container">
		<div class="row">
			<!-- left-sidebar start -->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<!-- widget-categories start -->
				<aside class="widget widget-categories">
						<h3 class="sidebar-title">Categories</h3>
						<ul class="sidebar-menu">
							<li><a href="#">Clothes</a> <span class="count">(14)</span></li>
							<li><a href="#">Men</a> <span class="count">(9)</span></li>
							<li><a href="#">Shoes</a> <span class="count">(2)</span></li>
							<li><a href="#">Sunglasses</a> <span class="count">(2)</span></li>
							<li><a href="#">Women</a> <span class="count">(8)</span></li>
						</ul>
					</aside>
				<!-- widget-categories end -->
				<!-- shop-filter start -->
				<aside class="widget shop-filter">
						<h3 class="sidebar-title">price</h3>
						<div class="info_widget">
							<div class="price_filter">
								<div id="slider-range"></div>
								<div class="price_slider_amount">
									<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
									<input type="submit"  value="Filter">  
								</div>
							</div>
						</div>							
					</aside>
				<!-- shop-filter end -->
				<!-- filter-by start -->
				<aside class="widget filter-by">
						<h3 class="sidebar-title">Filter by</h3>
						<ul class="sidebar-menu">
							<li><a href="#">L</a> <span class="count">(1)</span></li>
							<li><a href="#">M</a> <span class="count">(1)</span></li>
							<li><a href="#">S</a> <span class="count">(1)</span></li>
							<li><a href="#">XL</a> <span class="count">(1)</span></li>
						</ul>						
					</aside>
				<!-- filter-by end -->
				<!-- widget-tags start -->
				<aside class="widget widget-tags">
						<h3 class="sidebar-title">Tags</h3>
						<ul>
							<li><a href="#">asian</a></li>
							<li><a href="#">brown</a></li>
							<li><a href="#">euro</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">france</a></li>
							<li><a href="#">hat</a></li>
							<li><a href="#">travel</a></li>
							<li><a href="#">white</a></li>
							<li><a href="#">t-shirt</a></li>
							<li><a href="#">teen</a></li>
						</ul>
					</aside>
				<!-- widget-tags end -->
			</div>
			<!-- left-sidebar end -->
			<!-- shop-content start -->
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="shop-content">
					<!-- Nav tabs -->
					<ul class="shop-tab" role="tablist">
						<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
							<i class="fa fa-th"></i></a></li>
						<li role="presentation" class="active"><a href="#profile" aria-controls="profile"
							role="tab" data-toggle="tab"><i class="fa fa-list"></i></a></li>
					</ul>
					<div class="show-result">
						<p>
							Showing 1&ndash;12 of 19 results</p>
					</div>
					<div class="toolbar-form">
						<form action="#">
						<div class="tolbar-select">
							<select>
								<option value="volvo">Sort by Popularity</option>
								<option value="saab">Default sorting</option>
								<option value="mercedes">Sort by average rating</option>
								<option value="audi">Sort by newness</option>
								<option value="audi">Sort by Price: low to high</option>
								<option value="audi">Sort by Price: high to low</option>
							</select>
						</div>
						</form>
					</div>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane" id="home">
							<div class="row">
								<!-- single-product start -->
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/1.jpg" alt="" />
												<img class="secondary-img" src="img/product/2.jpg" alt="" />
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
								<div class="col-lg-4 col-md-4 col-sm-4">
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
								<div class="col-lg-4 col-md-4 col-sm-4">
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
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/35.jpg" alt="" />
												<img class="secondary-img" src="img/product/36.jpg" alt="" />
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
								<div class="col-lg-4 col-md-4 col-sm-4">
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
								<!-- single-product start -->
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/12.jpg" alt="" />
												<img class="secondary-img" src="img/product/13.jpg" alt="" />
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
								<div class="col-lg-4 col-md-4 col-sm-4">
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
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/26.jpg" alt="" />
												<img class="secondary-img" src="img/product/28.jpg" alt="" />
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
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/5.jpg" alt="" />
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
						<div role="tabpanel" class="tab-pane active" id="profile">
							<div class="row shop-list">
								<!-- single-product start -->
								<div class="col-md-12">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/15.jpg" alt="" />
												<img class="secondary-img" src="img/product/16.jpg" alt="" />
											</a>
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
											<div class="product-desc">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
													est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
													quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
													id nulla.</p>
											</div>
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
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-md-12">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/22.jpg" alt="" />
												<img class="secondary-img" src="img/product/23.jpg" alt="" />
											</a>
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
											<div class="product-desc">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
													est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
													quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
													id nulla.</p>
											</div>
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
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-md-12">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/8.jpg" alt="" />
												<img class="secondary-img" src="img/product/7.jpg" alt="" />
											</a>
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
											<div class="product-desc">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
													est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
													quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
													id nulla.</p>
											</div>
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
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-md-12">
									<div class="single-product">
										<div class="product-img">
											<a href="single-product.html">
												<img class="primary-img" src="img/product/16.jpg" alt="" />
												<img class="secondary-img" src="img/product/17.jpg" alt="" />
											</a>
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
											<div class="product-desc">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
													est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
													quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit
													id nulla.</p>
											</div>
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
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>
					</div>
				</div>
				<div class="shop-pagination">
					<div class="pagination">
						<ul>
							<li class="active">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- shop-content end -->
		</div>
	</div>
</div>
<!-- shop-area end -->
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