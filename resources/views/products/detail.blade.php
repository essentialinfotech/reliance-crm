<?php
$current_month = date('M');
$last_month = date('M',strtotime("-1 month"));
 $last_to_last_month = date('M',strtotime("-2 month"));

// $dataPoints = array(
// array("y" => $last_to_last_month_orders, "label" => $last_to_last_month),
// array("y" => $last_month_orders, "label" => $last_month),
// array("y" => $current_month_orders, "label" => $current_month),
//
// );
?>

@extends('layouts.frontLayout.front_design')


@section('content')
<?php
use App\Product;
 ?>
 <section class="productdetails">
   <div class="container">
				 @include('errorMessage.message')
     <div class="row">

<div class="col-md-6">
            <div class="product-images">
              <div class="mySlides">
                <img
                  id="productImageBig"
                  src="{{asset('images/backend_images/products/medium/'.$productDetails->image)}}"
                  style="width: 100%"
                />
              </div>

              <div class="row mt-2">
                @php
                $i=1;
                @endphp
                 @foreach($productDetails->images as $image)
                <div class="column">
                  <img
                    id="img{{$i}}";
                    class="demo cursor"
                    src="{{asset('images/backend_images/products/thumbanil/medium/'.$image->thumbnail)}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
                @php
                $i++;
                @endphp
                @endforeach
               <!--  <div class="column">
                  <img
                    id="img2"
                    class="demo cursor"
                    src="{{asset('frontend/product02.png')}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
                <div class="column">
                  <img
                    id="img3"
                    class="demo cursor"
                    src="{{asset('frontend/product03.png')}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
                <div class="column">
                  <img
                    id="img4"
                    class="demo cursor"
                    src="{{asset('frontend/product04.png')}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
                <div class="column">
                  <img
                    id="img5"
                    class="demo cursor"
                    src="{{asset('frontend/product05.png')}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
                <div class="column">
                  <img
                    id="img6"
                    class="demo cursor"
                    src="{{asset('frontend/product06.png')}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div> -->
              </div>
            </div>
          </div>

       <!-- <div class="col-md-6">

         <div class="product-images">
           <div class="mySlides">
             <img
               id="productImageBig"
               src="{{asset('images/backend_images/products/medium/'.$productDetails->image)}}"
               style="width: 500px;height: 300px"
             />
           </div>
           
           <div class="row mt-2">
            @foreach($productDetails->images as $image)
             
         <div class="column">
                  <img
                    id="img1"
                    class="demo cursor"
                    src="{{asset('images/backend_images/products/thumbanil/medium/'.$image->thumbnail)}}"
                    style="width: 100%"
                    onclick="imgProductChoose(this.id)"
                    alt="The Woods"
                  />
                </div>
              @endforeach
       
           </div>
          
         </div>

       </div> -->
       <div class="col-md-6">
         <form name="addtocart" id="addtocart" action="{{route('add-cart')}}" method="POST">
                       @csrf
               <input type="hidden" name="product_id" value="{{$productDetails->id}}">
               <input type="hidden" name="product_name" value="{{$productDetails->product_name}}">
               <input type="hidden" name="product_code" value="{{$productDetails->product_code}}">
               <input type="hidden" name="product_color" value="{{$productDetails->product_color}}">
              <input type="hidden" name="price" value="{{$productDetails->selling_price}}">
               <input type="hidden" name="product_id" value="{{$productDetails->id}}">
         <div class="indiv-product-title">
           <h2 class="mt-4">Product Name: {{$productDetails->product_name}}</h2>
           <a href="">Brand Name: {{$productDetails->brand->name}}</a>
           <p>
                  <select name="size" id="getPrice" product-id="{{$productDetails->id}}" style="width: 150px">
                    <option value="">Select Size</option>
                     @foreach($productDetails->attributes as $sizes)
                     <option value="{{$sizes->size}}">{{$sizes->size}}</option>
                    @endforeach
                  </select>
               </p>
           <div class="sold_stars ml-auto">
             <i class="fa fa-star"></i> <i class="fa fa-star"></i>
             <i class="fa fa-star"></i> <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
           </div>

           <a href="#">{{$total_review}} Reviews</a><span> | </span
           ><a href="#">{{$total_question}} Answered Questions</a>
         </div>
         <div class="indiv-product-price">
           @php($sPrice = false)
             @if($productDetails->special_start <= date('Y-m-d') && $productDetails->special_end >= date('Y-m-d'))
             @php($sPrice = true)
             @endif
           <table>
             <tr>
               <td>List Price</td>
               <td width="20%"></td>
               <td class="getAttriPrice">$ {{$productDetails->selling_price}}</td>
             </tr>
             <tr>
               
               <td>Sale Price</td>
               <td width="20%"></td>
               <td>${{ $sPrice ? $productDetails->special_price:$productDetails->selling_price}}</td>
              
             </tr>
             <tr>
               <td>You Save</td>
               <td width="20%"></td>
               <td>${{$productDetails->selling_price - $productDetails->special_price }} ({{sprintf('%.2f',(($productDetails->selling_price -$productDetails->special_price)/$productDetails->selling_price)*100)}}%) off</td>
             </tr>
           </table>
           <p>Availablety:@if($total_stock>0) In Stock @else Out of Stock @endif</p>
         </div>
         <div class="indiv-add">
           <form class="form-group">
             <div class="row">
               <div class="col-6">
                 <input
                   type="number"
                   class="form-control"
                    name="quantity"
                   value="1"
                   width="100%"
                 />
               </div>
               <div class="col-6">
                 	@if($total_stock>0)
                 <button
                   type="submit"

                   class="form-control btn btn-primary"
                   width="100%"
                 >
                   Add to Cart
                 </button>
                 @endif
               </div>
             </div>
           </form>
         </div>
          </from>
       </div>

     </div>

     <hr />
     <div class="row">
       <div class="tab">
         <button class="tablinks" onclick="openCity(event, 'Description')">
           Description
         </button>
         <button class="tablinks" onclick="openCity(event, 'Ingredients')">
           Ingredients
         </button>
         <button class="tablinks" onclick="openCity(event, 'Instructions')">
           Instructions
         </button>
       </div>

       <div id="Description" class="col-md-8 col-sm-12 tabcontent" style="display: block">
         <h3>Description</h3>
         <p>
            {{ $productDetails->description}}
         </p>
       </div>

       <div id="Ingredients" class="col-md-8 col-sm-12 tabcontent">
         <h3>Ingredients</h3>
         <p>Active Ingredients: Fipronil 9.8%, (S)-Methoprene 8.8%.</p>
       </div>

       <div id="Instructions" class="col-md-8 col-sm-12 tabcontent">
         <h3>Instructions</h3>
         <p>
           To apply Onguard Plus Flea & Tick for Dogs: Your dog needs to be
           dry at the time of application and remain dry for 24 hours after
           application. Place applicator tip through dog's hair to the skin
           level between the shoulder blades. Squeeze applicator, applying
           entire contents in a single spot to the dog's skin. Avoid
           superficial application to the dog's hair. Allow area to dry
           before touching treated area. Do not apply more than one
           applicator per dog per treatment regardless of the dog's weight.
           Fleas: Kills fleas, flea eggs and flea larvae. Prevents all flea
           stages (eggs, larvae, pupae) from developing. Kills newly emerged
           fleas before they lay eggs. Kills fleas which may cause flea
           allergy dermatitis. Lice: Rapidly controls infestations of chewing
           lice. Mites: Aids in control of sarcoptic mange mite infestations.
           Ticks: Kills all stages of ticks (larva, nymph, and adult): Brown
           dog ticks (Rhipicephalus sanguineus), American dog ticks
           (Dermacentor variabilis), Lone Star ticks (Amblyomma americanum),
           Deer ticks (Ixodes scapularis) which may carry Lyme disease.
           Frequency of Application Fleas: When used monthly, Onguard Plus
           Flea & Tick for Dogs breaks the flea life cycle and controls
           fleas, flea eggs, and flea larva on your dog for up to three
           months. Although Onguard Plus Flea & Tick for Dogs can control
           fleas for up to three months, if there is a high risk of
           re-infestation of fleas on your dog or if the dog has fleas which
           may cause flea allergy dermatitis, apply this product once a
           month. Ticks: Onguard Plus Flea & Tick for Dogs kills larva, nymph
           and adult ticks that may transmit Lyme disease, Rocky Mountain
           Spotted Fever, ehrlichiosis, babesiosis, and anaplasmosis for at
           least one month. For best control of ticks, apply once every
           month. Chewing Lice: Onguard Plus Flea & Tick for Dogs kills
           chewing lice for at least one month. For best control of chewing
           lice, apply once every month. Sarcoptic Mites: Applied once a
           month, Onguard Plus Flea & Tick for Dogs aids in the control of
           sarcoptic mange mite infestations. Do not reapply Onguard Plus
           Flea & Tick for Dogs for 30 days.
         </p>
       </div>
     </div>
     <hr />
     <div class="row">
       <div class="col-8">
         <h2>Questions &amp; Answers</h2>
       </div>
       <div class="col-4">
         <button
           type="button"
           onclick="askquestion()"
           class="btn btn-outline-primary"
         >
           Ask a Question
         </button>
       </div>
       <div id="ask-question" style="display: none">
         <form class="form-group" method="POST" action="{{route('product.question')}}">
           @csrf
           <input type="hidden" name="product_id" value="{{$productDetails->id}}">

           <input
             class="w-100 mt-2"
             type="text"
             name="message"
             placeholder="Ask your Question"
           />
           <input
             class="w-100 mt-2"
             type="text"
             name="name"
             placeholder="Choose a nickname"
           />
           <button type="submit" class="btn btn-primary mt-2">
             Submit Question
           </button>
           <button
             type="button"
             class="btn btn-outline-primary mt-2"
             onclick="askquestionhide()"
           >
             Cancel
           </button>
         </form>
       </div>

       <div class="product-qa mt-2">
 @foreach($question_answer as $answer)
         <div class="single-question mb-1">
           <h5>
             {{$answer->message}}
           </h5>
           <div class="row">
             <form class="" action="index.html" method="post">
               <div class="col-1">
                 <div class="qa-liked">
                   <div class="row">
                     <div class="col-6">3</div>
                     <div class="col-6">
                       <i
                         id="likeicon"
                         onclick="liked()"
                         class="far fa-thumbs-up"
                       ></i>
                     </div>
                   </div>
                 </div>
               </div>
             </form>

             <div class="col-11">
               <p>
                 @foreach($answer->answer as $sizes)
              {{$sizes->answer}}
                @endforeach
               </p>
             </div>
           </div>
         </div>
@endforeach
       </div>

     </div>

     <div class="row">
       <div class="col-md-6">
         <h2>Filter review by star rating</h2>
         <div class="row mb-2">
           <div class="col-2"><span>5 star</span></div>
           <div class="col-8">
             <div class="progress" style="height: 30px">
               <div
                 class="progress-bar"
                 role="progressbar"
                 style="width: 60%"
                 aria-valuenow="60"
                 aria-valuemin="0"
                 aria-valuemax="100"
               ></div>
             </div>
           </div>
           <div class="col-2">
             <span>60%</span>
           </div>
         </div>
         <div class="row mb-2">
           <div class="col-2"><span>4 star</span></div>
           <div class="col-8">
             <div class="progress" style="height: 30px">
               <div
                 class="progress-bar"
                 role="progressbar"
                 style="width: 30%"
                 aria-valuenow="30"
                 aria-valuemin="0"
                 aria-valuemax="100"
               ></div>
             </div>
           </div>
           <div class="col-2">
             <span>30%</span>
           </div>
         </div>
         <div class="row mb-2">
           <div class="col-2"><span>3 star</span></div>
           <div class="col-8">
             <div class="progress" style="height: 30px">
               <div
                 class="progress-bar"
                 role="progressbar"
                 style="width: 75%"
                 aria-valuenow="75"
                 aria-valuemin="0"
                 aria-valuemax="100"
               ></div>
             </div>
           </div>
           <div class="col-2">
             <span>75%</span>
           </div>
         </div>
         <div class="row mb-2">
           <div class="col-2"><span>2 star</span></div>
           <div class="col-8">
             <div class="progress" style="height: 30px">
               <div
                 class="progress-bar"
                 role="progressbar"
                 style="width: 13%"
                 aria-valuenow="13"
                 aria-valuemin="0"
                 aria-valuemax="100"
               ></div>
             </div>
           </div>
           <div class="col-2">
             <span>13%</span>
           </div>
         </div>
         <div class="row mb-2">
           <div class="col-2"><span>1 star</span></div>
           <div class="col-8">
             <div class="progress" style="height: 30px">
               <div
                 class="progress-bar"
                 role="progressbar"
                 style="width: 12%"
                 aria-valuenow="12"
                 aria-valuemin="0"
                 aria-valuemax="100"
               ></div>
             </div>
           </div>
           <div class="col-2">
             <span>12%</span>
           </div>
         </div>
       </div>
       <div class="col-md-6 text-center">
         <p>83% Recommended this product</p>
         <a href="{{route('product.review',$productDetails->id)}}" class="btn btn-outline-primary mb-4">Write a review</a>
         <canvas
           id="reviewChart"
           style="width: 150%; max-width: 700px"
         ></canvas>
       </div>
       <div class="col-md-12 d-none d-md-block mt-4">
          <h6>{{$total_review}} Reviews</h6>
          @foreach($review as $view)
         <div class="single-review mt-4">

           <div class="sold_stars ml-auto">
             <i class="fa fa-star"></i> <i class="fa fa-star"></i>
             <i class="fa fa-star"></i> <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
           </div>
           <p class="m-0">{{$view->title}}</p>
           <small>by {{$view->name}}</small>
           <p>
            {{$view->message}}
           </p>
         </div>
         @endforeach


       </div>
     </div>
   </div>
 </section>



@endsection
@push('custom-scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
  Chart.pluginService.register({
    beforeDraw: function (chart) {
      if (chart.config.options.elements.center) {
        // Get ctx from string
        var ctx = chart.chart.ctx;

        // Get options from the center object in options
        var centerConfig = chart.config.options.elements.center;
        var fontStyle = centerConfig.fontStyle || "Arial";
        var txt = centerConfig.text;
        var color = centerConfig.color || "#000";
        var maxFontSize = centerConfig.maxFontSize || 75;
        var sidePadding = centerConfig.sidePadding || 20;
        var sidePaddingCalculated =
          (sidePadding / 100) * (chart.innerRadius * 2);
        // Start with a base font of 30px
        ctx.font = "30px " + fontStyle;

        // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
        var stringWidth = ctx.measureText(txt).width;
        var elementWidth = chart.innerRadius * 2 - sidePaddingCalculated;

        // Find out how much the font can grow in width.
        var widthRatio = elementWidth / stringWidth;
        var newFontSize = Math.floor(30 * widthRatio);
        var elementHeight = chart.innerRadius * 2;

        // Pick a new font size so it will not be larger than the height of label.
        var fontSizeToUse = Math.min(
          newFontSize,
          elementHeight,
          maxFontSize
        );
        var minFontSize = centerConfig.minFontSize;
        var lineHeight = centerConfig.lineHeight || 25;
        var wrapText = false;

        if (minFontSize === undefined) {
          minFontSize = 20;
        }

        if (minFontSize && fontSizeToUse < minFontSize) {
          fontSizeToUse = minFontSize;
          wrapText = true;
        }

        // Set font settings to draw it correctly.
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        var centerX = (chart.chartArea.left + chart.chartArea.right) / 2;
        var centerY = (chart.chartArea.top + chart.chartArea.bottom) / 2;
        ctx.font = fontSizeToUse + "px " + fontStyle;
        ctx.fillStyle = color;

        if (!wrapText) {
          ctx.fillText(txt, centerX, centerY);
          return;
        }

        var words = txt.split(" ");
        var line = "";
        var lines = [];

        // Break words up into multiple lines if necessary
        for (var n = 0; n < words.length; n++) {
          var testLine = line + words[n] + " ";
          var metrics = ctx.measureText(testLine);
          var testWidth = metrics.width;
          if (testWidth > elementWidth && n > 0) {
            lines.push(line);
            line = words[n] + " ";
          } else {
            line = testLine;
          }
        }

        // Move the center up depending on line height and number of lines
        centerY -= (lines.length / 2) * lineHeight;

        for (var n = 0; n < lines.length; n++) {
          ctx.fillText(lines[n], centerX, centerY);
          centerY += lineHeight;
        }
        //Draw text in center
        ctx.fillText(line, centerX, centerY);
      }
    },
  });

  var config = {
    type: "doughnut",
    data: {
      labels: ["Rated", "Unrated"],
      datasets: [
        {
          data: [300, 50],
          backgroundColor: ["#ffa500", "#bcbcbc"],
          hoverBackgroundColor: ["#e69500", "#a6a6a6"],
        },
      ],
    },
    options: {
      legend: false,
      cutoutPercentage: 75,
      elements: {
        center: {
          text: "83% Recommended",
          color: "#e69500", // Default is #000000
          fontStyle: "Arial", // Default is Arial
          sidePadding: 20, // Default is 20 (as a percentage)
          minFontSize: 12, // Default is 20 (in px), set to false and text will not wrap.
          lineHeight: 12, // Default is 25 (in px), used for when text wraps
        },
      },
    },
  };

  var ctx = document.getElementById("reviewChart").getContext("2d");
  var reviewChart = new Chart(ctx, config);
</script>

<script src="{{asset('assets/frontend/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/index.js')}}"></script>
<script>
  function openCity(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  function liked() {
    document
      .getElementById("likeicon")
      .setAttribute("class", "fas fa-thumbs-up");
  }

  function askquestion() {
    var askQ = document.getElementById("ask-question");
    askQ.style.display = "block";
  }

  function askquestionhide() {
    var askQ = document.getElementById("ask-question");
    askQ.style.display = "none";
  }

  function imgProductChoose(id) {
    var imgsrc = document.getElementById("productImageBig");
    var imgsrcNew = document.getElementById(id).getAttribute("src");
    document
      .getElementById("productImageBig")
      .setAttribute("src", imgsrcNew);
  }
</script>

@endpush
