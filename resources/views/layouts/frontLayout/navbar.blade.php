<section class="elementor-section elementor-top-section elementor-element elementor-element-1e6b54b elementor-section-full_width elementor-hidden-tablet elementor-hidden-phone elementor-section-height-default elementor-section-height-default" data-id="1e6b54b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6525884" data-id="6525884" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-a7df5b0 elementor-nav-menu__align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="a7df5b0" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
<div class="elementor-widget-container">
    <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade"><ul id="menu-1-a7df5b0" class="elementor-nav-menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-372"><a href="product-category/pet/index.html" class="menu-link elementor-item">Shop by Pet</a>

<ul class="sub-menu elementor-nav-menu--dropdown">
@foreach(App\Category::orderBy('name','asc')->where('parent_id',0)->get() as $parent)
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-374"><a href="product-category/pet/cat/index.html" class="menu-link elementor-sub-item">{{$parent->name}}</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
@foreach(App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-382"><a href="{{asset('products/'.$child->url)}}" class="menu-link elementor-sub-item">{{$child->name}}</a></li>
@endforeach
</ul>

</li>
@endforeach
</ul>

</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="shop-by-brand/index.html" class="menu-link elementor-item">Shop by brand</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-381"><a href="product-category/pharmacy/index.html" class="menu-link elementor-item">Pharmacy</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-382"><a href="product-category/pharmacy/compund-pharmacy/index.html" class="menu-link elementor-sub-item">mohsin</a></li>

</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="today-deals/index.html" class="menu-link elementor-item">Today deals</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="gift-cards/index.html" class="menu-link elementor-item">Gift Cards</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="holiday-shop/index.html" class="menu-link elementor-item">Holiday Shop</a></li>
</ul></nav>
  <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
<i class="eicon-menu-bar" aria-hidden="true"></i>
<span class="elementor-screen-only">Menu</span>
</div>
<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true"><ul id="menu-2-a7df5b0" class="elementor-nav-menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-372"><a href="product-category/pet/index.html" class="menu-link elementor-item">Shop by Pet</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-374"><a href="product-category/pet/cat/index.html" class="menu-link elementor-sub-item">mohsin</a></li>

</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="shop-by-brand/index.html" class="menu-link elementor-item">Shop by brand</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-381"><a href="product-category/pharmacy/index.html" class="menu-link elementor-item">Pharmacy</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-382"><a href="product-category/pharmacy/compund-pharmacy/index.html" class="menu-link elementor-sub-item">mohsin</a></li>

</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="today-deals/index.html" class="menu-link elementor-item">Today deals</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="gift-cards/index.html" class="menu-link elementor-item">Gift Cards</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="holiday-shop/index.html" class="menu-link elementor-item">Holiday Shop</a></li>
</ul></nav>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e072f16" data-id="e072f16" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-9a500bb elementor-widget elementor-widget-heading" data-id="9a500bb" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">FREE 1-3 DAY SHIPPING OVER $49!</h2>		</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<header class="elementor-section elementor-top-section elementor-element elementor-element-665f79b elementor-section-full_width elementor-section-height-min-height elementor-section-content-middle elementor-hidden-desktop elementor-section-height-default elementor-section-items-middle" data-id="665f79b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1ead85c" data-id="1ead85c" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-e17a7bb elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="e17a7bb" data-element_type="widget" data-widget_type="theme-site-logo.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="index.html">
      <img width="3000" height="996" src="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png')}}" class="attachment-full size-full" alt="" loading="lazy" srcset="http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets.png 3000w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-300x100.png 300w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-1024x340.png 1024w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-768x255.png 768w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-1536x510.png 1536w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-2048x680.png 2048w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-600x199.png 600w, http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-230x76.png 230w" sizes="(max-width: 3000px) 100vw, 3000px" />								</a>
              </div>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-91777a4" data-id="91777a4" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-531c24a elementor-nav-menu__align-center elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="531c24a" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
<div class="elementor-widget-container">
    <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade"><ul id="menu-1-531c24a" class="elementor-nav-menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-372"><a href="product-category/pet/index.html" class="menu-link elementor-item">Shop by Pet</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-374"><a href="product-category/pet/cat/index.html" class="menu-link elementor-sub-item">mohsin</a></li>

</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="shop-by-brand/index.html" class="menu-link elementor-item">Shop by brand</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-381"><a href="product-category/pharmacy/index.html" class="menu-link elementor-item">Pharmacy</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-382"><a href="product-category/pharmacy/compund-pharmacy/index.html" class="menu-link elementor-sub-item">mohsin</a></li>

</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="today-deals/index.html" class="menu-link elementor-item">Today deals</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="gift-cards/index.html" class="menu-link elementor-item">Gift Cards</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="holiday-shop/index.html" class="menu-link elementor-item">Holiday Shop</a></li>
</ul></nav>
  <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
<i class="eicon-menu-bar" aria-hidden="true"></i>
<span class="elementor-screen-only">Menu</span>
</div>
<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true"><ul id="menu-2-531c24a" class="elementor-nav-menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-372"><a href="product-category/pet/index.html" class="menu-link elementor-item">Shop by Pet</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-374"><a href="product-category/pet/cat/index.html" class="menu-link elementor-sub-item">Cat</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-373"><a href="product-category/pet/bird/index.html" class="menu-link elementor-sub-item">Bird</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-375"><a href="product-category/pet/dog/index.html" class="menu-link elementor-sub-item">Dog</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-376"><a href="product-category/pet/farm-animal/index.html" class="menu-link elementor-sub-item">Farm Animal</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-377"><a href="product-category/pet/fish/index.html" class="menu-link elementor-sub-item">Fish</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-378"><a href="product-category/pet/horse/index.html" class="menu-link elementor-sub-item">Horse</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-379"><a href="product-category/pet/reptile/index.html" class="menu-link elementor-sub-item">Reptile</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-380"><a href="product-category/pet/small-pet/index.html" class="menu-link elementor-sub-item">Small pet</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="shop-by-brand/index.html" class="menu-link elementor-item">Shop by brand</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-381"><a href="product-category/pharmacy/index.html" class="menu-link elementor-item">Pharmacy</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-382"><a href="product-category/pharmacy/compund-pharmacy/index.html" class="menu-link elementor-sub-item">Compund Pharmacy</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-383"><a href="product-category/pharmacy/ear-and-eye-care/index.html" class="menu-link elementor-sub-item">Ear and eye care</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-384"><a href="product-category/pharmacy/energy-relief/index.html" class="menu-link elementor-sub-item">Energy Relief</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-385"><a href="product-category/pharmacy/flea-and-tick/index.html" class="menu-link elementor-sub-item">Flea and tick</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-386"><a href="product-category/pharmacy/health-conditions/index.html" class="menu-link elementor-sub-item">Health Conditions</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-387"><a href="product-category/pharmacy/heat-worm/index.html" class="menu-link elementor-sub-item">Heat Worm</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-388"><a href="product-category/pharmacy/medications/index.html" class="menu-link elementor-sub-item">Medications</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-389"><a href="product-category/pharmacy/pain-relief-arthritis/index.html" class="menu-link elementor-sub-item">Pain Relief &amp; Arthritis</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-390"><a href="product-category/pharmacy/skin-and-coat/index.html" class="menu-link elementor-sub-item">Skin and Coat</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="today-deals/index.html" class="menu-link elementor-item">Today deals</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="gift-cards/index.html" class="menu-link elementor-item">Gift Cards</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="holiday-shop/index.html" class="menu-link elementor-item">Holiday Shop</a></li>
</ul></nav>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c8e0a5c" data-id="c8e0a5c" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-b1d5605 toggle-icon--cart-solid elementor-menu-cart--items-indicator-bubble elementor-menu-cart--show-divider-yes elementor-menu-cart--show-remove-button-yes elementor-menu-cart--buttons-inline elementor-widget elementor-widget-woocommerce-menu-cart" data-id="b1d5605" data-element_type="widget" data-widget_type="woocommerce-menu-cart.default">
<div class="elementor-widget-container">
  <div class="elementor-menu-cart__wrapper">
    <div class="elementor-menu-cart__container elementor-lightbox" aria-expanded="false">
<div class="elementor-menu-cart__main" aria-expanded="false">
  <div class="elementor-menu-cart__close-button"></div>
  <div class="widget_shopping_cart_content"></div>
</div>
</div>
    <div class="elementor-menu-cart__toggle elementor-button-wrapper">
<a id="elementor-menu-cart__toggle_button" href="#" class="elementor-button elementor-size-sm">
<span class="elementor-button-text"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span>0.00</bdi></span></span>
<span class="elementor-button-icon" data-counter="0">
  <i class="eicon" aria-hidden="true"></i>
  <span class="elementor-screen-only">Cart</span>
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
</div>
</div>



<div id="content" class="site-content">

<div class="ast-container">



<div id="primary" class="content-area primary">


  <main id="main" class="site-main">





<article
class="post-5 page type-page status-publish ast-article-single" id="post-5" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


<header class="entry-header ast-header-without-markup">


</header><!-- .entry-header -->

<div class="entry-content clear"
itemprop="text"	>


<div data-elementor-type="wp-page" data-elementor-id="5" class="elementor elementor-5" data-elementor-settings="[]">
    <div class="elementor-inner">
      <div class="elementor-section-wrap">
      <section class="elementor-section elementor-top-section elementor-element elementor-element-687897f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="687897f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-219dfcd5" data-id="219dfcd5" data-element_type="column">
<div class="elementor-column-wrap">
      <div class="elementor-widget-wrap">
        </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44f59b1a" data-id="44f59b1a" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-7b36b6be elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-button" data-id="7b36b6be" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
  <div class="elementor-button-wrapper">
<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
    <span class="elementor-button-content-wrapper">
    <span class="elementor-button-text">Save 40%</span>
</span>
  </a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-58780fdf elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="58780fdf" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><h5> on your first  <img loading="lazy" class="alignnone size-full wp-image-202" src="{{asset('assets/frontend/wp-content/uploads/2020/11/autoship-logo.png')}}" alt="" width="104" height="21" srcset="http://drollypets.com/wp-content/uploads/2020/11/autoship-logo.png 104w, http://drollypets.com/wp-content/uploads/2020/11/autoship-logo-100x21.png 100w" sizes="(max-width: 104px) 100vw, 104px" /> | <a href="#">Learn More</a></h5></div>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7c53cf79" data-id="7c53cf79" data-element_type="column">
<div class="elementor-column-wrap">
      <div class="elementor-widget-wrap">
        </div>
  </div>
</div>
        </div>
  </div>
</section>
