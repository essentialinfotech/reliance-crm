
<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
use App\Product;
$cartCount = Product::cartCount();

 ?>

<div
	class="hfeed site" id="page">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>


			<div data-elementor-type="header" data-elementor-id="7" class="elementor elementor-7 elementor-location-header" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
					<header class="elementor-section elementor-top-section elementor-element elementor-element-29bdc865 elementor-section-content-middle elementor-section-height-min-height elementor-section-full_width elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-items-middle" data-id="29bdc865" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-10e8a191" data-id="10e8a191" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7c87a14b elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="7c87a14b" data-element_type="widget" data-widget_type="theme-site-logo.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
											<a href="{{url('/')}}">
							<img width="3000" height="996" src="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}}" class="attachment-full size-full" alt="" loading="lazy" srcset="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 3000w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 300w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 1024w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 768w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 1536w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 2048w, {{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 600w,{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}} 230w" sizes="(max-width: 3000px) 100vw, 3000px" />								</a>
											</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-7301f40" data-id="7301f40" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a6d12cc elementor-hidden-phone elementor-search-form--skin-classic elementor-search-form--button-type-icon elementor-search-form--icon-search elementor-widget elementor-widget-search-form" data-id="7a6d12cc" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;classic&quot;}" data-widget_type="search-form.default">
				<div class="elementor-widget-container">
					
									<div class="elementor-search-form__container">
								<input placeholder="Find your best for your pet" class="elementor-search-form__input typeahead" type="search" name="product" title="Search" value="">
													<button class="elementor-search-form__submit" type="submit" title="Search" aria-label="Search">
													<i class="fa fa-search" aria-hidden="true"></i>
							<span class="elementor-screen-only">Search</span>
											</button>
											</div>
		
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-bede54a" data-id="bede54a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8048b5c elementor-widget elementor-widget-heading" data-id="8048b5c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">24/7 help</h2>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-3175c82" data-id="3175c82" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fd5968c elementor-widget elementor-widget-heading" data-id="fd5968c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">|</h2>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-e332430" data-id="e332430" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0d7147a elementor-nav-menu__align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="0d7147a" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
						<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade"><ul id="menu-1-0d7147a" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-421"><a href="my-account/index.html" class="menu-link elementor-item">My account</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
	 @if(empty(Auth::check()))
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="{{route('user.user_login_form')}}" class="menu-link elementor-sub-item">Signing</a></li>
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="{{route('user.register')}}" class="menu-link elementor-sub-item">New Customer?<b>Start her</b></a></li>
		@else
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="{{route('cart')}}" class="menu-link elementor-sub-item">Cart ({{ $cartCount}})</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-424"><a href="{{route('user.user_account')}}" class="menu-link elementor-sub-item">Account</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-425"><a href="{{route('user.user_logout')}}" class="menu-link elementor-sub-item">Logout</a></li>
@endif
</ul>
</li>
</ul></nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<i class="eicon-menu-bar" aria-hidden="true"></i>
			<span class="elementor-screen-only">Menu</span>
		</div>
			<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true"><ul id="menu-2-0d7147a" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-421"><a href="my-account/index.html" class="menu-link elementor-item">My account</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
@if(empty(Auth::check()))

			<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="{{route('user.register')}}" class="menu-link elementor-sub-item">New Customer?<b>Start her</b></a></li>
@else
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="{{route('user.user_login_form')}}" class="menu-link elementor-sub-item">Signing</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-423"><a href="my-account/orders/index.html" class="menu-link elementor-sub-item">Account</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-424"><a href="my-account/edit-address/index.html" class="menu-link elementor-sub-item">Addresses</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-425"><a href="my-account/edit-account/index.html" class="menu-link elementor-sub-item">Logout</a></li>
	@endif
</ul>
</li>
</ul></nav>
				</div>
				</div>
						</div>
					</div>
		</div>
			<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-51e4cea" data-id="51e4cea" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6bd8e38 elementor-widget elementor-widget-heading" data-id="6bd8e38" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">|</h2>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-908b128" data-id="908b128" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4ec24ac toggle-icon--cart-solid elementor-menu-cart--items-indicator-bubble elementor-menu-cart--show-divider-yes elementor-menu-cart--show-remove-button-yes elementor-menu-cart--buttons-inline elementor-widget elementor-widget-woocommerce-menu-cart" data-id="4ec24ac" data-element_type="widget" data-widget_type="woocommerce-menu-cart.default">
				<div class="elementor-widget-container">
					<div class="elementor-menu-cart__wrapper">
						<!-- <div class="elementor-menu-cart__container elementor-lightbox" aria-expanded="false">
				<div class="elementor-menu-cart__main" aria-expanded="false">
					<div class="elementor-menu-cart__close-button"></div>
					<div class="widget_shopping_cart_content"></div>
				</div>
			</div> -->
						<div class="elementor-menu-cart__toggle elementor-button-wrapper">
			<a id="elementor-menu-cart__toggle_button" href="{{route('cart')}}" class="elementor-button elementor-size-sm">
				<span class="elementor-button-text"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>({{ $cartCount}})</bdi></span></span>
				<span class="elementor-button-icon" data-counter="({{ $cartCount}})">

					<i class="eicon" aria-hidden="true"></i>
					<span class="elementor-screen-only">Cart ({{ $cartCount}})</span>
				</span>
			</a>
		</div>

								</div> <!-- close elementor-menu-cart__wrapper -->
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</header>
				@include('layouts.frontLayout.navbar')
