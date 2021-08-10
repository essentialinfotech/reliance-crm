<?php use App\Product; ?>
<form  action="{{url('/products/filter')}}" method="post">
  @csrf
  @if(!empty($url))
  <input type="hidden" name="url" value="{{$url}}">
  @endif


  @if(!empty($url))

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Product categories</h2>



<ul class="product-categories">
  @foreach($colorArray as $color)
  @if(!empty($_GET['color']))
  <?php $colorArr = explode('-', $_GET['color']); ?>
  @if(in_array($color,$colorArr))
  <?php  $colorcheck = "checked"; ?>
  @else
    <?php  $colorcheck = ""; ?>
    @endif
    @else
      <?php  $colorcheck = ""; ?>
   @endif
<li class="cat-item cat-item-34">
  <input name="colorFilter[]" onchange="javascript:this.form.submit();"
    id="{{ $color}}" type="checkbox" value="{{$color}}"
     {{$colorcheck}}>&nbsp;&nbsp;
     <span class="products-colors">{{$color}}</span>

   </li>
@endforeach
</ul>
</div>
@endif
<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>

<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h2 class="widget-title">Brands</h2>
<ul class="product-categories">

<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
<li class="cat-item cat-item-34"><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">	<span>Brand</span> <span class="count">(2)</span></li>
</ul>
</div>
</form>
