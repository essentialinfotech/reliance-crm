
$(document).ready(function(){
$("#copyAddress").click(function(){
  if (this.checked) {
    $("#shipping_name").val($("#billing_name").val());
    $("#shipping_address").val($("#billing_address").val());
    $("#shipping_city").val($("#billing_city").val());
    $("#shipping_state").val($("#billing_state").val());
    $("#shipping_country").val($("#billing_country").val());
    $("#shipping_pincode").val($("#billing_pincode").val());
    $("#shipping_mobile").val($("#billing_mobile").val());

  }else {
    $("#shipping_name").val('');
    $("#shipping_address").val('');
    $("#shipping_city").val('');
    $("#shipping_state").val('');
    $("#shipping_country").val('');
    $("#shipping_pincode").val('');
    $("#shipping_mobile").val('');
  }

});

//shorting Product
 $("#sort").on('change',function(){
   this.form.submit();
 });

// $("#sort").on('change',function(){
//    var sort = $(this).val();
//    var url = $("#url").val();
//    $.ajax({
//      url:url,
//      method:"post",
//      data:{sort:sort,url:url},
//      success:function(resp){
//           $('.filter_products').html(resp);
//      }
//    })
//  });

});
$(document).ready(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#getPrice").change(function(){
    var size = $(this).val();
    var product_id = $(this).attr("product-id");
    $.ajax({
      url:'/get-product-price',
      data:{size:size,product_id:product_id},
      type:'post',
      success:function(resp){
        $(".getAttriPrice").html(resp);
      },error:function(){
        alert("Error");
      }
    });

  });


});
function selectPaymentMethod(){
if ($('#Paypal').is(':checked') || $('#Payoneer').is(':checked')|| $('#Debit-credit').is(':checked') || $('#Bitcoin').is(':checked') || $('#Square').is(':checked') || $('#Transwise').is(':checked') || $('#COD').is(':checked') ) {
  // alert("checked");
}else {
  alert("Please Select Payment Method");
  return false;
}

}
