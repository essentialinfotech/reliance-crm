<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

Route::post('/autocomplete/fetch', 'Admin\ProductController@fetch')->name('autocomplete.fetch');
//Search Product
Route::post('/search-products', 'Admin\ProductController@SearchProducts')->name('user.searchProducts');

//google Login

Route::get('login/google', 'UsersController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'UsersController@handleGoogleCallback');

//facebook

Route::get('login/facebook', 'UsersController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'UsersController@handleFacebookCallback');

//user login

Route::get('/login-register', 'UsersController@userLoginRegister')->name('user.register');
Route::match(['get','post'],'forgot-password', 'UsersController@forgotPassword')->name('user.forgot-password');

//user Confirm email login

Route::get('confirm/{code}', 'UsersController@confirmAccount')->name('user.confirm');


//User registered
Route::post('/user-register', 'UsersController@register')->name('user.user_register');

//user Login
Route::match(['get','post'],'/user-login-form', 'UsersController@loginForm')->name('user.user_login_form');
Route::post('/user-login', 'UsersController@login')->name('user.user_login');
//User Logout
Route::get('/user-logout', 'UsersController@logout')->name('user.user_logout');



//user Account
Route::group(['middleware' => ['frontlogin']],function(){
Route::match(['get','post'],'account', 'UsersController@account')->name('user.user_account');
Route::get('/check-user-pwd', 'UsersController@chkUserPassword')->name('user.checkPassword');
Route::post('/update-user-pwd', 'UsersController@updateUserPassword')->name('user.updatePassword');
Route::match(['get','post'],'checkout', 'Admin\ProductController@checkout')->name('product.checkout');
//Oreder ReviewPage
Route::match(['get','post'],'/order-review', 'Admin\ProductController@orderReview')->name('user.orderReview');

//Place Order
Route::match(['get','post'],'/place-order', 'Admin\ProductController@placeOrder')->name('user.placeOrder');

//Thanks Page
Route::get('/thanks', 'Admin\ProductController@thanks')->name('user.thanks');

//Paypal Page
Route::get('/paypal', 'Admin\ProductController@paypal')->name('user.paypal');

//payment system
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));
//debit and credit card with strip payment system

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
//Users Orders Page

Route::get('/orders', 'Admin\ProductController@userOrders')->name('user.orders');

//Users Orders Products Page
Route::get('/orders/{id}', 'Admin\ProductController@userOrderDetails')->name('user.orderDetails');

//Question ANd answer
Route::match(['get','post'],'/question', 'Admin\ProductController@question')->name('product.question');
//Review And Rating system
Route::match(['get','post'],'/review/{id}', 'Admin\ProductController@review')->name('product.review');
Route::match(['get','post'],'/review', 'Admin\ProductController@reviewAdd')->name('product.review.add');
// Route::get('/review','Admin\ReviewController@view')->name('product.review');
// Route::match(['get','post'],'/admin/review/edit/{id}', 'Admin\ReviewController@edit')->name('admin.review.edit');
// Route::get('/admin/delete-question/{id}', 'Admin\AnswerController@delete')->name('admin.question.delete');
// Route::get('/admin/Answers/view','Admin\AnswerController@view')->name('admin.Answers.view');
});

//check Email

Route::match(['get','post'],'/check-email', 'UsersController@checkEmail')->name('user.checkemail');
//
// Route::get('/', 'FrontendController@index')->name('frontend.index');

Route::get('/','IndexController@index')->name('frontend.index');

Route::match(['get','post'],'/admin/login', 'Admin\AdminController@login')->name('admin.login');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//listing page
Route::get('/products/{url}', 'Admin\ProductController@products')->name('frontend.products');
Route::get('/brand/show', 'Admin\ProductController@brand')->name('frontend.brand.show');
Route::get('/{url}', 'Admin\ProductController@products_brands')->name('frontend.products.brands');

//Produtc FIlter route
Route::match(['get','post'],'/products/filter', 'Admin\ProductController@filter')->name('products.filter');
//Products Detail page
Route::match(['get','post'],'/products/filter/brand', 'Admin\ProductController@brand_filter')->name('products.filter.brand');
Route::get('/product/{id}', 'Admin\ProductController@product')->name('frontend.product');




//Add to cart


Route::match(['get','post'],'/add-cart', 'Admin\ProductController@addtocart')->name('add-cart');


// cart


Route::match(['get','post'],'user/cart', 'Admin\ProductController@cart')->name('cart');

//cart delete

Route::match(['get','post'],'/cart/delete-product/{id}', 'Admin\ProductController@deleteCartProduct')->name('cart.delete');

//cart delete

Route::get('/cart/update-quantity/{id}/{quantity}', 'Admin\ProductController@updateCartQuantity')->name('cart.update');

//cart delete

Route::post('/cart/apply-coupon', 'Admin\ProductController@applyCoupon')->name('cart.applyCoupon');

//Get Products Attribute price
// Route::any('/get-product-price','ProductsController@getProductPrice');

Route::post('/get-product-price', 'Admin\ProductController@getProductPrice');

Route::group(['middleware' => ['adminlogin']],function(){
Route::get('/admin/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/setting', 'Admin\AdminController@setting')->name('admin.setting');
Route::get('/admin/check-pwd', 'Admin\AdminController@chkPassword')->name('admin.checkPassword');
Route::post('/admin/update-pwd', 'Admin\AdminController@updatePassword')->name('admin.updatePassword');
Route::get('/admin/view-profile', 'Admin\AdminController@viewFrofile')->name('admin.viewFrofile');
Route::post('/admin/update-profile', 'Admin\AdminController@updateFrofile')->name('admin.updateFrofile');


//BrandController
Route::get('/brand','Admin\BrandController@index')->name('brand.index');
Route::post('/brand/create','Admin\BrandController@create')->name('brand.create');
Route::post('/brand/update/{id}','Admin\BrandController@update')->name('brand.update');

Route::post('/brand/delete/{id}','Admin\BrandController@delete')->name('brand.delete');
Route::get('/brand/update-status/{id}/{status}','Admin\BrandController@updateStatus');


//Categories Controllers

Route::match(['get','post'],'/admin/category/add', 'Admin\CategoryController@add')->name('admin.category.add');
Route::match(['get','post'],'/admin/category/edit/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');
Route::match(['get','post'],'/admin/category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
Route::get('/admin/category/view','Admin\CategoryController@view')->name('admin.category.view');

//products Controllers

Route::match(['get','post'],'/admin/product/add', 'Admin\ProductController@add')->name('admin.product.add');
Route::match(['get','post'],'/admin/product/edit/{id}', 'Admin\ProductController@edit')->name('admin.product.edit');
Route::get('/admin/delete-product/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
Route::get('/admin/delete-product-image/{id}', 'Admin\ProductController@deleteProductImage');
Route::get('/admin/product/view','Admin\ProductController@view')->name('admin.product.view');


//product_attributes
Route::match(['get','post'],'/admin/product/add-attributetes/{id}', 'Admin\ProductController@addAttributes')->name('admin.product.addAttributes');
Route::match(['get','post'],'/admin/product/edit-attributetes/{id}', 'Admin\ProductController@editAttributes')->name('admin.product.editAttributes');


Route::match(['get','post'],'/admin/product/add-images/{id}', 'Admin\ProductController@addImages')->name('admin.product.AddImages');

//Coupon ROute
 Route::match(['get','post'],'/admin/coupon/add-coupon', 'Admin\CouponsController@addCoupon')->name('admin.coupon.add');
 Route::get('/admin/coupon/view-coupon', 'Admin\CouponsController@viewCoupon')->name('admin.coupon.view');
 Route::match(['get','post'],'/admin/coupon/edit-coupon/{id}', 'Admin\CouponsController@editCoupon')->name('admin.coupon.edit');
 Route::match(['get','post'],'/admin/coupon/delete-coupon/{id}', 'Admin\CouponsController@deleteCoupon')->name('admin.coupon.delete');


 //Banner ROute
  Route::match(['get','post'],'/admin/banner/add-banner', 'Admin\BannersController@addBanner')->name('admin.banner.add');
 Route::get('/admin/banner/view-banner', 'Admin\BannersController@viewBanner')->name('admin.banner.view');
 Route::match(['get','post'],'/admin/banner/edit-banner/{id}', 'Admin\BannersController@editBanner')->name('admin.banner.edit');
 Route::match(['get','post'],'/admin/banner/delete-banner/{id}', 'Admin\BannersController@deleteBanner')->name('admin.banner.delete');

 //Admin Orders ROute
Route::get('/admin/order/view-orders', 'Admin\ProductController@viewOrders')->name('admin.order.view');

//Admin Orders ROute chart
Route::get('/admin/order/view-orders-charts-day', 'Admin\ProductController@viewOrdersDailyCharts')->name('admin.order.dailyCharts');
Route::get('/admin/order/view-orders-charts', 'Admin\ProductController@viewOrdersMonthCharts')->name('admin.order.monthCharts');
Route::get('/admin/order/view-orders-charts-year', 'Admin\ProductController@viewOrdersYearCharts')->name('admin.order.yearCharts');

//Admin Orders ROute
Route::get('/admin/order/view-order-invoice/{id}', 'Admin\ProductController@viewOrderInvoice')->name('admin.order.invoice');

//Admin Order Details Route

Route::get('/admin/order/view-order/{id}', 'Admin\ProductController@viewOrderDetails')->name('admin.order.view.details');

//update Order status

Route::post('/admin/update-order-status', 'Admin\ProductController@updateOrderStatus')->name('admin.order.update.status');

//Admin User Route charts

Route::get('/admin/view-users-charts-years', 'UsersController@viewUsersChartsYear')->name('admin.users.viewUsersChartsYear');
//Admin User Route charts

Route::get('/admin/view-users-charts', 'UsersController@viewUsersCharts')->name('admin.users.viewUsersCharts');


//Admin User Route

Route::get('/admin/view-users', 'UsersController@viewUsers')->name('admin.users.viewUsers');
Route::match(['get','post'],'/admin/add-admins', 'Admin\AdminController@addAdmins')->name('admin.addAdmins');
Route::get('/admin/view-admins', 'Admin\AdminController@viewAdmins')->name('admin.viewAdmins');

// Route::get('/admin/total-users', 'UsersController@totalUsers')->name('admin.users.totalUsers');

//CMS ROute
 Route::match(['get','post'],'/admin/cms/add-cms-page', 'CmsController@addCmsPage')->name('admin.cms.add');
 Route::get('/admin/cms/view-cms-page', 'CmsController@viewCmsPage')->name('admin.cms.view');
 Route::match(['get','post'],'/admin/cms/edit-cms-page/{id}', 'CmsController@editCmsPage')->name('admin.cms.edit');
  Route::match(['get','post'],'/admin/cms/delete-cms-page/{id}', 'CmsController@deleteCmsPage')->name('admin.cms.delete');


  //Question  Controllers


  Route::match(['get','post'],'/admin/question/edit/{id}', 'Admin\AnswerController@edit')->name('admin.question.edit');
  Route::get('/admin/delete-question/{id}', 'Admin\AnswerController@delete')->name('admin.question.delete');
  Route::get('/admin/Answers/view','Admin\AnswerController@view')->name('admin.Answers.view');
//Answer
  Route::match(['get','post'],'/admin/question/add-answer/{id}', 'Admin\AnswerController@addAnswer')->name('admin.question.addanswer');
  Route::match(['get','post'],'/admin/question/edit-answer/{id}', 'Admin\AnswerController@editAnswer')->name('admin.question.editanswer');
  Route::match(['get','post'],'/admin/question/delete-answer/{id}', 'Admin\AnswerController@deleteAnswer')->name('admin.question.deleteanswer');
  

  //Review  Controllers


  Route::match(['get','post'],'/admin/review/edit/{id}', 'Admin\ReviewController@edit')->name('admin.review.edit');
  Route::get('/admin/delete-review/{id}', 'Admin\ReviewController@delete')->name('admin.review.delete');
  Route::get('/admin/Reviews/view','Admin\ReviewController@view')->name('admin.review.view');


 });





Route::get('logout', 'Admin\AdminController@logout')->name('admin.logout');

//Display Contact Page

Route::match(['get','post'],'/page/contact', 'CmsController@contact')->name('admin.contact');
//Display CMS Page
Route::match(['get','post'],'/page/{url}', 'CmsController@cmsPage')->name('admin.cms');
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
Route::get('/produc/view-products-charts', 'Admin\ProductController@viewProductCharts')->name('product.charts');
//SSLCOMMERZ END
