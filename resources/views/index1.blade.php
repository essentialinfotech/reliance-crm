
@extends('layouts.frontLayout.front_design')

@section('content')
<section class="elementor-section elementor-top-section elementor-element elementor-element-3efafe4 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="3efafe4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56ef6a8" data-id="56ef6a8" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-059010d elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="059010d" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
<div class="elementor-widget-container">
  <div class="elementor-swiper">
<div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInUp">
<div class="slideshow-container">
@foreach($banners as $key => $banner)
<div class="mySlides fade">
<div class="numbertext"></div>
<img src="{{asset('images/backend_images/banners/'.$banner->image)}}" style="background-size: cover;">
<div class="text">Caption Text</div>
</div>
@endforeach

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-85da479 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="85da479" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48e725a" data-id="48e725a" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-5331cd3 elementor-widget elementor-widget-text-editor" data-id="5331cd3" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p>Extra 5% Autoshoip &amp; Save <a href="#"><span style="font-size: 18px;">Learn More &gt;</span></a></p></div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-f317b1f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f317b1f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b513417" data-id="b513417" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-d3ee8f2 elementor-widget elementor-widget-premium-carousel-widget" data-id="d3ee8f2" data-element_type="widget" data-widget_type="premium-carousel-widget.default">
<div class="elementor-widget-container">

<div id="premium-carousel-wrapper-d3ee8f2" class="premium-carousel-wrapper carousel-wrapper-d3ee8f2   premium-carousel-dots-below" data-settings="{&quot;vertical&quot;:false,&quot;slidesToScroll&quot;:1,&quot;slidesToShow&quot;:1,&quot;infinite&quot;:true,&quot;speed&quot;:500,&quot;fade&quot;:false,&quot;autoplay&quot;:false,&quot;autoplaySpeed&quot;:5000,&quot;draggable&quot;:true,&quot;touchMove&quot;:true,&quot;rtl&quot;:false,&quot;adaptiveHeight&quot;:false,&quot;pauseOnHover&quot;:false,&quot;centerMode&quot;:false,&quot;centerPadding&quot;:&quot;15px&quot;,&quot;arrows&quot;:true,&quot;nextArrow&quot;:&quot;&lt;a type=\&quot;button\&quot; data-role=\&quot;none\&quot; class=\&quot;carousel-arrow carousel-next\&quot; aria-label=\&quot;Next\&quot; role=\&quot;button\&quot; style=\&quot;\&quot;&gt;&lt;i class=\&quot;fas fa-chevron-right\&quot; aria-hidden=\&quot;true\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;prevArrow&quot;:&quot;&lt;a type=\&quot;button\&quot; data-role=\&quot;none\&quot; class=\&quot;carousel-arrow carousel-prev\&quot; aria-label=\&quot;Next\&quot; role=\&quot;button\&quot; style=\&quot;\&quot;&gt;&lt;i class=\&quot;fas fa-chevron-left\&quot; aria-hidden=\&quot;true\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;dots&quot;:true,&quot;customPaging&quot;:&quot;fas fa-circle&quot;,&quot;slidesDesk&quot;:1,&quot;slidesTab&quot;:1,&quot;slidesMob&quot;:1,&quot;animation&quot;:&quot;null&quot;,&quot;tabletBreak&quot;:1025,&quot;mobileBreak&quot;:768,&quot;navigation&quot;:[]}">
    <div id="premium-carousel-d3ee8f2" class="premium-carousel-inner">
                        <div class="premium-carousel-template item-wrapper">
            <style>.elementor-216 .elementor-element.elementor-element-3a65822d > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-3a65822d > .elementor-element-populated > .elementor-background-overlay, .elementor-216 .elementor-element.elementor-element-3a65822d > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-3a65822d:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-216 .elementor-element.elementor-element-3a65822d:hover > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-3a65822d:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-4417e880 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-216 .elementor-element.elementor-element-3c15c6c4{text-align:center;}.elementor-216 .elementor-element.elementor-element-3c15c6c4 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-216 .elementor-element.elementor-element-211a998b > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-211a998b > .elementor-element-populated > .elementor-background-overlay, .elementor-216 .elementor-element.elementor-element-211a998b > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-211a998b:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-216 .elementor-element.elementor-element-211a998b:hover > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-211a998b:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-2c954111 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-216 .elementor-element.elementor-element-2abaa9cf{text-align:center;}.elementor-216 .elementor-element.elementor-element-2abaa9cf .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-216 .elementor-element.elementor-element-d5439af > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-d5439af > .elementor-element-populated > .elementor-background-overlay, .elementor-216 .elementor-element.elementor-element-d5439af > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-d5439af:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-216 .elementor-element.elementor-element-d5439af:hover > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-d5439af:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-4015f4a9 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-216 .elementor-element.elementor-element-659d3bf9{text-align:center;}.elementor-216 .elementor-element.elementor-element-659d3bf9 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-216 .elementor-element.elementor-element-5711bdc6 > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-5711bdc6 > .elementor-element-populated > .elementor-background-overlay, .elementor-216 .elementor-element.elementor-element-5711bdc6 > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-5711bdc6:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-216 .elementor-element.elementor-element-5711bdc6:hover > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-5711bdc6:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-3f1b161a .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-216 .elementor-element.elementor-element-616bcd09{text-align:center;}.elementor-216 .elementor-element.elementor-element-616bcd09 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-216 .elementor-element.elementor-element-f997d67 > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-f997d67 > .elementor-element-populated > .elementor-background-overlay, .elementor-216 .elementor-element.elementor-element-f997d67 > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-f997d67:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-216 .elementor-element.elementor-element-f997d67:hover > .elementor-element-populated, .elementor-216 .elementor-element.elementor-element-f997d67:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-216 .elementor-element.elementor-element-8360a50 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-216 .elementor-element.elementor-element-2fa10642{text-align:center;}.elementor-216 .elementor-element.elementor-element-2fa10642 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}</style>		<div data-elementor-type="section" data-elementor-id="216" class="elementor elementor-216" data-elementor-settings="[]">
<div class="elementor-section-wrap">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-16ee3e6d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16ee3e6d" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
        @foreach($products as $product)
  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3a65822d" data-id="3a65822d" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-4417e880 elementor-widget elementor-widget-image" data-id="4417e880" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="#">
      <img width="174" height="300" src="{{asset('images/backend_images/products/medium/'.$product->image)}}" class="attachment-large size-large" alt="" loading="lazy" />								</a>
              </div>
</div>
</div>
<div class="elementor-element elementor-element-3c15c6c4 elementor-widget elementor-widget-heading" data-id="3c15c6c4" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default"><a href="#">{{$product->product_name}}</a></h2>		</div>
</div>
    </div>
  </div>
</div>

@endforeach

        </div>
  </div>
</section> -->
<!-- </div>
</div>
            </div>
                        <div class="premium-carousel-template item-wrapper">
            <style>.elementor-86 .elementor-element.elementor-element-9da7d81 > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-9da7d81 > .elementor-element-populated > .elementor-background-overlay, .elementor-86 .elementor-element.elementor-element-9da7d81 > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-9da7d81:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-86 .elementor-element.elementor-element-9da7d81:hover > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-9da7d81:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-437e996 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-86 .elementor-element.elementor-element-8d4038d{text-align:center;}.elementor-86 .elementor-element.elementor-element-8d4038d .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-86 .elementor-element.elementor-element-3102e0c > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-3102e0c > .elementor-element-populated > .elementor-background-overlay, .elementor-86 .elementor-element.elementor-element-3102e0c > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-3102e0c:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-86 .elementor-element.elementor-element-3102e0c:hover > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-3102e0c:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-54d2941 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-86 .elementor-element.elementor-element-548f046{text-align:center;}.elementor-86 .elementor-element.elementor-element-548f046 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-86 .elementor-element.elementor-element-554b75d > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-554b75d > .elementor-element-populated > .elementor-background-overlay, .elementor-86 .elementor-element.elementor-element-554b75d > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-554b75d:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-86 .elementor-element.elementor-element-554b75d:hover > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-554b75d:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-4cdf7c6 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-86 .elementor-element.elementor-element-fec905c{text-align:center;}.elementor-86 .elementor-element.elementor-element-fec905c .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-86 .elementor-element.elementor-element-b5acab6 > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-b5acab6 > .elementor-element-populated > .elementor-background-overlay, .elementor-86 .elementor-element.elementor-element-b5acab6 > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-b5acab6:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-86 .elementor-element.elementor-element-b5acab6:hover > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-b5acab6:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-ef19fd8 .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-86 .elementor-element.elementor-element-fa91394{text-align:center;}.elementor-86 .elementor-element.elementor-element-fa91394 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}.elementor-86 .elementor-element.elementor-element-2421696 > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-2421696 > .elementor-element-populated > .elementor-background-overlay, .elementor-86 .elementor-element.elementor-element-2421696 > .elementor-background-slideshow{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-2421696:hover > .elementor-element-populated{border-style:solid;border-width:1px 1px 1px 1px;border-color:#9D9D9D;}.elementor-86 .elementor-element.elementor-element-2421696:hover > .elementor-element-populated, .elementor-86 .elementor-element.elementor-element-2421696:hover > .elementor-element-populated > .elementor-background-overlay{border-radius:1px 1px 1px 1px;}.elementor-86 .elementor-element.elementor-element-ac820fc .elementor-image img{border-radius:0px 0px 0px 0px;}.elementor-86 .elementor-element.elementor-element-2fc5cf4{text-align:center;}.elementor-86 .elementor-element.elementor-element-2fc5cf4 .elementor-heading-title{color:#000000;font-family:"Poppins", Sans-serif;font-size:15px;font-weight:400;}</style>		<div data-elementor-type="section" data-elementor-id="86" class="elementor elementor-86" data-elementor-settings="[]">
<div class="elementor-section-wrap">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-7b4ef5f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7b4ef5f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
        @foreach(App\Category::orderBy('name','asc')->where('parent_id',0)->get() as $parent)
        @foreach(App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-9da7d81" data-id="9da7d81" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-437e996 elementor-widget elementor-widget-image" data-id="437e996" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="#">
      <img width="174" height="300" src="{{asset('images/backend_images/categories/medium/'.$child->image)}}" class="attachment-large size-large" alt="" loading="lazy" />								</a>
              </div>
</div>
</div>

<div class="elementor-element elementor-element-8d4038d elementor-widget elementor-widget-heading" data-id="8d4038d" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">
  <a href="#">{{$child->name}}</a>
</h2>
	</div>
</div>

    </div>
  </div>
</div>
@endforeach
@endforeach

        </div>
  </div>
</section>
</div>
</div>
            </div>
                    </div>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-f99ffc7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f99ffc7" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88d45ff" data-id="88d45ff" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-7efb061 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="7efb061" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-1714e026 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1714e026" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3862838b" data-id="3862838b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-269d5ce6 elementor-widget elementor-widget-text-editor" data-id="269d5ce6" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p>Customer Favorites</p></div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-1f270fd7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f270fd7" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
          @foreach(App\Category::orderBy('id','asc')->where('parent_id',0)->get() as $parent)
          @foreach(App\Category::orderBy('id','asc')->where('parent_id',$parent->id)->get() as $child)
  <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-d15e2c6" data-id="d15e2c6" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-579c91eb elementor-widget elementor-widget-image" data-id="579c91eb" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="{{asset('products/'.$parent->url)}}">
      <img width="101" height="175" src="{{asset('images/backend_images/categories/medium/'.$child->image)}}" class="attachment-large size-large" alt="" loading="lazy" />								</a>
              </div>
</div>
</div>

<div class="elementor-element elementor-element-2eeecd7b elementor-widget elementor-widget-heading" data-id="2eeecd7b" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default"><a href="{{asset('products/'.$parent->url)}}">{{$parent->name}} {{$child->name}}</a></h2>		</div>
</div>

    </div>
  </div>
</div>
@endforeach
@endforeach

        </div>
  </div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-269362e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="269362e" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d28eee2" data-id="d28eee2" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-8c02acf elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8c02acf" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-1d1e7095 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d1e7095" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-40b755f9" data-id="40b755f9" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-2f21fbfb elementor-widget elementor-widget-text-editor" data-id="2f21fbfb" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p>1000+ Brands in Stock! <a href="{{route('frontend.brand.show')}}"><span style="font-size: 18px;">Shop All &gt;</span></a></p></div>
</div>
</div>
<div class="elementor-element elementor-element-deed6b3 gallery-spacing-custom elementor-widget elementor-widget-image-gallery" data-id="deed6b3" data-element_type="widget" data-widget_type="image-gallery.default">
<div class="elementor-widget-container">
  <div class="elementor-image-gallery">
<div id='gallery-1' class='gallery galleryid-5 gallery-columns-6 gallery-size-thumbnail'>

@foreach($brands as $brand )

  <figure class='gallery-item'>

<div class='gallery-icon portrait'>
<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="deed6b3" data-elementor-lightbox-title="american-journey" href='{{asset('/'.$brand->url)}}'><img width="150" height="150" src="{{asset('admin/brand/'.$brand->logo)}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{asset('admin/brand/'.$brand->logo)}} 150w, {{asset('admin/brand/'.$brand->logo)}} 100w, {{asset('admin/brand/'.$brand->logo)}} 200w" sizes="(max-width: 150px) 100vw, 150px" /></a>
</div>
</figure>

@endforeach


</div>
</div>
</div>
</div>

    </div>
  </div>
</div>
        </div>
  </div>
</section>
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-719d083 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="719d083" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0e3d023" data-id="0e3d023" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-c00e447 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c00e447" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-9797778 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="9797778" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43a359" data-id="f43a359" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-2fc1ba0 elementor-widget elementor-widget-image" data-id="2fc1ba0" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
            <img width="1024" height="176" src="wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-1024x176.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-1024x176.jpg 1024w, http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-600x103.jpg 600w, http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-300x51.jpg 300w, http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-768x132.jpg 768w, http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large-1536x263.jpg 1536w, http://drollypets.com/wp-content/uploads/2020/11/Holiday-Shop-2020-update-large.jpg 1750w" sizes="(max-width: 1024px) 100vw, 1024px" />											</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-00e5e39 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="00e5e39" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13d05cc" data-id="13d05cc" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-8b2df0f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="8b2df0f" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-782bedb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="782bedb" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f511844" data-id="6f511844" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-44aa8d66 elementor-widget elementor-widget-text-editor" data-id="44aa8d66" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p>Picked by Our Pet Experts</p></div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-5674ee63 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5674ee63" data-element_type="section">
    <div class="elementor-container elementor-column-gap-wide">
      <div class="elementor-row">

        @foreach($fev_products as $fev_product)
  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-55d5acf6" data-id="55d5acf6" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-72ed302 elementor-widget elementor-widget-image" data-id="72ed302" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="{{route('frontend.product',$fev_product->id)}}">
      <img width="300" height="220" src="{{asset('images/backend_images/products/medium/'.$fev_product->image)}}" class="attachment-medium size-medium" alt="" loading="lazy" srcset="{{asset('images/backend_images/products/medium/'.$fev_product->image)}} 300w, {{asset('images/backend_images/products/medium/'.$fev_product->image)}} 200w, {{asset('images/backend_images/products/medium/'.$fev_product->image)}} 410w" sizes="(max-width: 300px) 100vw, 300px" />								</a>
              </div>
</div>
</div>
  <a href="{{route('frontend.product',$fev_product->id)}}">
<div class="elementor-element elementor-element-4a68cdd3 elementor-widget elementor-widget-text-editor" data-id="4a68cdd3" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p> <strong>{{$fev_product->product_name}}</strong> Bully Stick 6&#8243; Dog Treats, 6&#8230;</p></div>
</div>
</div>
<div class="elementor-element elementor-element-3cd19f96 elementor-widget elementor-widget-text-editor" data-id="3cd19f96" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p><strong>${{$fev_product->selling_price}}</strong></p></div>
</div>
</div>

<div class="elementor-element elementor-element-1d3e62d3 elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="1d3e62d3" data-element_type="widget" data-widget_type="star-rating.default">
<div class="elementor-widget-container">

<div class="elementor-star-rating__wrapper">
    <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>		</div>
</div>
</div>
</a>
    </div>
  </div>
</div>
@endforeach
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-ec27969 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec27969" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-297c405" data-id="297c405" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-5566b68 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5566b68" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-1afee297 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1afee297" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78875431" data-id="78875431" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-6d00264 elementor-widget elementor-widget-text-editor" data-id="6d00264" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><p>Most Popular Brand <a href="{{route('frontend.brand.show')}}"><span style="font-size: 18px;">Shop All &gt;</span></a></p></div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-54c48e3b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="54c48e3b" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
        @foreach($topbrands as  $topbrand)
  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3ea567f9" data-id="3ea567f9" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">

    <div class="elementor-element elementor-element-3e9aa069 elementor-widget elementor-widget-image" data-id="3e9aa069" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
              <a href="{{asset('/'.$topbrand->url)}}">
      <img width="140" height="160" src="{{asset('admin/brand/'.$topbrand->logo)}}" class="attachment-medium size-medium" alt="" loading="lazy" />								</a>
              </div>
</div>
</div>

    </div>
  </div>
</div>
@endforeach


        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-c7295aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c7295aa" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-059b487" data-id="059b487" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-53ca254 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="53ca254" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-50c463e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="50c463e" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-de5bc5b" data-id="de5bc5b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-1f4623e elementor-widget elementor-widget-image" data-id="1f4623e" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
            <img width="227" height="148" src="wp-content/uploads/2020/11/products.20181005.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="http://drollypets.com/wp-content/uploads/2020/11/products.20181005.jpg 227w, http://drollypets.com/wp-content/uploads/2020/11/products.20181005-200x130.jpg 200w" sizes="(max-width: 227px) 100vw, 227px" />											</div>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-03fe911" data-id="03fe911" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-f3dded1 elementor-widget elementor-widget-text-editor" data-id="f3dded1" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
  <div class="elementor-text-editor elementor-clearfix"><h2 class="cw-type__h2" tabindex="-1">New Puppy or Kitten?</h2>
<p style="font-size: 18px;" tabindex="-1">Find everything you need to welcome them home!</p>
<p tabindex="-1" style="font-size:16px;">        <a href="#">Shop Puppy</a>                        <a href="#">Shop Kitten</a></p>

<h3 class="cw-type__body cw-display__inline"></h3></div>
</div>
</div>
    </div>
  </div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ee47466" data-id="ee47466" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-f6c4cf0 elementor-widget elementor-widget-image" data-id="f6c4cf0" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
  <div class="elementor-image">
            <img width="199" height="98" src="wp-content/uploads/2020/11/puppy-kitten.jpg" class="attachment-full size-full" alt="" loading="lazy" />											</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-5d1d4ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d1d4ff" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-row">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2701611" data-id="2701611" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
      <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-d85622f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d85622f" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
  <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
</div>
</div>
</div>
    </div>
  </div>
</div>
        </div>
  </div>
</section> -->
@endsection
