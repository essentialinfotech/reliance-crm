@extends('layouts.adminLayout.admin_design')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>


<!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Dashboar Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">

              <ul class="site-stats">
                
              </ul>

          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box-->

  </div>
</div>
@endsection
