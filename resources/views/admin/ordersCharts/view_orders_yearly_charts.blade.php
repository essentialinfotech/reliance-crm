@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Orders</a> <a href="#" class="current">View Order Repoting</a> </div>
    <h1> Order</h1>
    @include('errorMessage.message')
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Orders Reporting</h5>
          </div>
          <div class="widget-content nopadding">
            <?php
            $current_year = date('Y');
            $last_year = date('Y',strtotime("-1 year"));
             $last_to_last_year = date('Y',strtotime("-2 year"));

          $dataPoints = array(
            array("y" => $last_to_last_year_orders, "label" => $last_to_last_year),
            array("y" => $last_year_orders, "label" => $last_year),
            array("y" => $current_year_orders, "label" => $current_year),

          );
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
        <script>
        window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
        	animationEnabled: true,
        	theme: "light2",
        	title:{
        		text: "Orders Products"
        	},
        	axisY: {
        		title: "Number of Order Products "
        	},
        	data: [{
        		type: "column",
        		yValueFormatString: "#,##0.## products Orders",
        		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        	}]
        });
        chart.render();

        }
        </script>
        </head>
        <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </body>
        </html>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
