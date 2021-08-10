<?php use App\Product; ?>
<form  action="{{url('/products/filter/brand')}}" method="post">
  @csrf
  @if(!empty($url))
  <input type="hidden" name="url" value="{{$url}}">
  @endif

  @if(!empty($url))
<div class="col-md-12 col-sm-6">
  <div class="filter-sidebar">
    <h4>Sub Category:</h4>
    <ul>

      @foreach($categoryArray as $category)
      @if(!empty($_GET['category']))
      <?php $categoryArr = explode('-', $_GET['category']); ?>
      @if(in_array($category,$categoryArr))
      <?php  $categorycheck = "checked"; ?>
      @else
        <?php  $categorycheck = ""; ?>
        @endif
        @else
          <?php  $categorycheck = ""; ?>
       @endif
      <li>
         <input name="categoryFilter[]" onchange="javascript:this.form.submit();"
          id="{{ $category}}" type="checkbox" value="{{$category}}"
           {{$categorycheck}}>&nbsp;&nbsp;
           <span class="products-categorys">{{$category}}</span>

         </li>
    @endforeach
    </ul>
  </div>
</div>
@endif
@if(!empty($url))
<div class="col-md-12 col-sm-6">
<div class="filter-sidebar">
  <h4>Flavour:</h4>
  <ul>

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
    <li>
       <input name="colorFilter[]" onchange="javascript:this.form.submit();"
        id="{{ $color}}" type="checkbox" value="{{$color}}"
         {{$colorcheck}}>&nbsp;&nbsp;
         <span class="products-colors">{{$color}}</span>

       </li>
  @endforeach
  </ul>
</div>
</div>
@endif
