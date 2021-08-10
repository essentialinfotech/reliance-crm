@extends('layouts.frontLayout.front_design')
@push('plugin-styles')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
  />
  <link
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
  crossorigin="anonymous"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
/>
<link rel="stylesheet" href="{{asset('assets/frontend/owl.carousel.min.css')}}" />
<link
  rel="stylesheet"
  href="{{asset('assets/frontend/owl.theme.default.min.css')}}"
/>
<link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
@endpush
@section('content')
<section class="review-section">
    <div class="container">
      <h2>Write Review</h2>
      <hr />
      <div class="row">
        <div class="col-md-2">
          <div class="review-image">
            <img src="{{asset('images/backend_images/products/medium/'.$productDetails->image)}}" alt="" />
          </div>
        </div>
        <div class="col-md-7">
          <div class="review-product-info">
            <p>
              {{$productDetails->product_name}}
            </p>
          </div>
          <form class="form-group" method="post" action="{{route('product.review.add')}}">
          @csrf
          <input type="hidden" name="product_id" value="{{$productDetails->id}}">
          <input type="hidden" name="user_id" value="">
            <div class="row">
              <div class="col-6">
                <p style="margin: 0" class="mt-4">Rate this item:</p>
                <div class="rate">
                  <i class="fa fa-star" aria-hidden="false"></i>
                  <i class="fa fa-star" aria-hidden="false"></i>
                  <i class="fa fa-star" aria-hidden="false"></i>
                  <i class="fa fa-star" aria-hidden="false"></i>
                  <i class="fa fa-star" aria-hidden="false"></i>
                </div>
              </div>
              <div class="col-6">
                <p style="margin: 0" class="mt-4">
                  Do you recommend this item?
                </p>

                <div class="form-check mt-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="gridCheck"
                  />
                  <label class="form-check-label" for="gridCheck">
                    Yes, I recommend this item
                  </label>
                </div>
              </div>
              <div class="container">
                <input
                  class="form-control mt-2"
                  placeholder="name"
                  type="text"
                  name="name"
                />
                <input
                  class="form-control mt-3"
                  placeholder="Headline for your review"
                  type="text"
                  name="title"
                />
                <textarea
                  class="form-control mt-3"
                  placeholder="Your review"
                  name="message"
                  id="review-content"
                  cols="30"
                  rows="3"
                ></textarea>
              </div>
            </div>



            <input
              type="file"
              class="
                form-control
                btn btn-outline-primary
                d-none d-md-block
                mt-4
              "
              name="image"
              accept="image/*"
            />
            <button class="form-control btn btn-primary mt-4" type="submit">
              Preview
            </button>
            <small>6 images max, 5MB max per image</small>
          </form>
        </div>

        <div class="col-md-3">
          <div class="guideline">
            <h6>Writing Guidelines:</h6>
            <ul>
              <li>
                Please refrain from mentioning competitors or the specific
                price you paid for the product
              </li>
              <li>
                Do not include any personally identifiable information, such
                as full names
              </li>
            </ul>

            <h6>Media Guidelines</h6>
            <ul>
              <li>Confirm you hold the copyright for the media</li>
              <li>Images must be at least 533 pixels in width and height</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@push('custom-scripts')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
  crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="plugins/rater.min.js" charset="utf-8"></script>
  <script>
    $(document).ready(function () {
      var options = {
        max_value: 5,
        step_size: 1,
      };
      $(".rate").rate(options);
    });
  </script>
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

  function currentSlide(id) {
    var imgsrc = document.getElementById("productImageBig");
    var imgsrcNew = document.getElementById(id).getAttribute("src");
    document
      .getElementById("productImageBig")
      .setAttribute("src", imgsrcNew);
  }
</script>

@endpush
