
<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
use App\Product;
$cartCount = Product::cartCount();

 ?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from drollypets.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 04:45:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">


<link rel="profile" href="https://gmpg.org/xfn/11">

<title>@yield('title')</title>

  @stack('plugin-styles')


<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Chewy Landing Page &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Chewy Landing Page &raquo; Comments Feed" href="comments/feed/index.html" />
		<script>
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/drollypets.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.4"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='astra-theme-css-css'  href="{{asset('assets/frontend/wp-content/themes/astra/assets/css/minified/style.minc141.css?ver=2.6.1')}}" media='all' />
<style id='astra-theme-css-inline-css'>
html{font-size:93.75%;}a,.page-title{color:#0274be;}a:hover,a:focus{color:#3a3a3a;}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-weight:inherit;font-size:15px;font-size:1rem;}blockquote{color:#000000;}.site-title{font-size:35px;font-size:2.3333333333333rem;}header .site-logo-img .custom-logo-link img{max-width:230px;}.astra-logo-svg{width:230px;}.ast-archive-description .ast-archive-title{font-size:40px;font-size:2.6666666666667rem;}.site-header .site-description{font-size:15px;font-size:1rem;}.entry-title{font-size:40px;font-size:2.6666666666667rem;}.comment-reply-title{font-size:24px;font-size:1.6rem;}.ast-comment-list #cancel-comment-reply-link{font-size:15px;font-size:1rem;}h1,.entry-content h1{font-size:40px;font-size:2.6666666666667rem;}h2,.entry-content h2{font-size:30px;font-size:2rem;}h3,.entry-content h3{font-size:25px;font-size:1.6666666666667rem;}h4,.entry-content h4{font-size:20px;font-size:1.3333333333333rem;}h5,.entry-content h5{font-size:18px;font-size:1.2rem;}h6,.entry-content h6{font-size:15px;font-size:1rem;}.ast-single-post .entry-title,.page-title{font-size:30px;font-size:2rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:15px;font-size:1rem;}::selection{background-color:#0274be;color:#ffffff;}body,h1,.entry-title a,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6,.wc-block-grid__product-title{color:#3a3a3a;}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:#0274be;background-color:#0274be;}.main-header-menu .menu-link,.ast-header-custom-item a{color:#3a3a3a;}.main-header-menu .menu-item:hover > .menu-link,.main-header-menu .menu-item:hover > .ast-menu-toggle,.main-header-menu .ast-masthead-custom-menu-items a:hover,.main-header-menu .menu-item.focus > .menu-link,.main-header-menu .menu-item.focus > .ast-menu-toggle,.main-header-menu .current-menu-item > .menu-link,.main-header-menu .current-menu-ancestor > .menu-link,.main-header-menu .current-menu-item > .ast-menu-toggle,.main-header-menu .current-menu-ancestor > .ast-menu-toggle{color:#0274be;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:#0274be;}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:#0274be;background-color:#0274be;box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:#0274be;border-color:#0274be;}.footer-adv .footer-adv-overlay{border-top-style:solid;border-top-color:#7a7a7a;}.ast-comment-meta{line-height:1.666666667;font-size:12px;font-size:0.8rem;}.single .nav-links .nav-previous,.single .nav-links .nav-next,.single .ast-author-details .author-title,.ast-comment-meta{color:#0274be;}.entry-meta,.entry-meta *{line-height:1.45;color:#0274be;}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *{color:#3a3a3a;}.ast-404-layout-1 .ast-404-text{font-size:200px;font-size:13.333333333333rem;}.widget-title{font-size:21px;font-size:1.4rem;color:#3a3a3a;}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:#0274be;}.secondary .calendar_wrap #today,.ast-progress-val span{background:#0274be;}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:#0274be;border-color:#0274be;}.calendar_wrap #today > a{color:#ffffff;}.ast-pagination a,.page-links .page-link,.single .post-navigation a{color:#0274be;}.ast-pagination a:hover,.ast-pagination a:focus,.ast-pagination > span:hover:not(.dots),.ast-pagination > span.current,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:#3a3a3a;}.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle{background:transparent;color:#0274be;}.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle{background:transparent;border:1px solid #0274be;color:#0274be;}.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle{background:#0274be;}.wp-block-buttons.aligncenter{justify-content:center;}@media (min-width:1200px){.ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignfull,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignfull{margin-left:-6.67em;margin-right:-6.67em;max-width:unset;width:unset;}.ast-separate-container.ast-right-sidebar .entry-content .wp-block-image.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-image.alignwide,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignwide{margin-left:-20px;margin-right:-20px;max-width:unset;width:unset;}.wp-block-group .has-background{padding:20px;}}@media (min-width:1200px){.ast-separate-container.ast-right-sidebar .entry-content .wp-block-group.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-group.alignwide,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignwide,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignwide,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignwide,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignwide{margin-left:-20px;margin-right:-20px;padding-left:20px;padding-right:20px;}.ast-separate-container.ast-right-sidebar .entry-content .wp-block-group.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-group.alignfull,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-group.alignfull,.ast-separate-container.ast-right-sidebar .entry-content .wp-block-cover.alignfull,.ast-separate-container.ast-left-sidebar .entry-content .wp-block-cover.alignfull,.ast-no-sidebar.ast-separate-container .entry-content .wp-block-cover.alignfull{margin-left:-6.67em;margin-right:-6.67em;padding-left:6.67em;padding-right:6.67em;}.ast-plain-container.ast-right-sidebar .entry-content .wp-block-group.alignwide,.ast-plain-container.ast-left-sidebar .entry-content .wp-block-group.alignwide,.ast-plain-container.ast-right-sidebar .entry-content .wp-block-group.alignfull,.ast-plain-container.ast-left-sidebar .entry-content .wp-block-group.alignfull{padding-left:20px;padding-right:20px;}.ast-plain-container.ast-no-sidebar .entry-content .alignwide .wp-block-group__inner-container,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .wp-block-group__inner-container,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .wp-block-cover__inner-container,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .wp-block-cover__inner-container{max-width:1240px;margin-left:auto;margin-right:auto;padding-left:20px;padding-right:20px;}.ast-plain-container.ast-no-sidebar .entry-content .alignwide .wp-block-cover__inner-container,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .wp-block-cover__inner-container{width:1240px;}.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-group.alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-group.alignfull{margin-left:0;margin-right:0;}.wp-block-cover-image.alignwide .wp-block-cover__inner-container,.wp-block-cover.alignwide .wp-block-cover__inner-container,.wp-block-cover-image.alignfull .wp-block-cover__inner-container,.wp-block-cover.alignfull .wp-block-cover__inner-container{width:100%;}.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignwide,.ast-page-builder-template.ast-left-sidebar .entry-content .wp-block-cover.alignwide,.ast-page-builder-template.ast-right-sidebar .entry-content .wp-block-cover.alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignfull,.ast-page-builder-template.ast-left-sidebar .entry-content .wp-block-cover.alignfull,.ast-page-builder-template.ast-right-sidebar .entry-content .wp-block-cover.alignful{padding-right:0;padding-left:0;}}.ast-plain-container.ast-no-sidebar #primary{margin-top:0;margin-bottom:0;}@media (max-width:921px){.ast-theme-transparent-header #primary,.ast-theme-transparent-header #secondary{padding:0;}}.wp-block-columns{margin-bottom:unset;}.wp-block-image.size-full{margin:2rem 0;}.wp-block-separator.has-background{padding:0;}.wp-block-gallery{margin-bottom:1.6em;}.wp-block-group{padding-top:4em;padding-bottom:4em;}.wp-block-group__inner-container .wp-block-columns:last-child,.wp-block-group__inner-container :last-child,.wp-block-table table{margin-bottom:0;}.blocks-gallery-grid{width:100%;}.wp-block-navigation-link__content{padding:5px 0;}.wp-block-group .wp-block-group .has-text-align-center,.wp-block-group .wp-block-column .has-text-align-center{max-width:100%;}.has-text-align-center{margin:0 auto;}@media (min-width:1200px){.wp-block-cover__inner-container,.alignwide .wp-block-group__inner-container,.alignfull .wp-block-group__inner-container{max-width:1200px;margin:0 auto;}.wp-block-group.alignnone,.wp-block-group.aligncenter,.wp-block-group.alignleft,.wp-block-group.alignright,.wp-block-group.alignwide,.wp-block-columns.alignwide{margin:2rem 0 1rem 0;}}@media (max-width:1200px){.wp-block-group{padding:3em;}.wp-block-group .wp-block-group{padding:1.5em;}.wp-block-columns,.wp-block-column{margin:1rem 0;}}@media (min-width:921px){.wp-block-columns .wp-block-group{padding:2em;}}@media (max-width:544px){.wp-block-cover-image .wp-block-cover__inner-container,.wp-block-cover .wp-block-cover__inner-container{width:unset;}.wp-block-cover,.wp-block-cover-image{padding:2em 0;}.wp-block-group,.wp-block-cover{padding:2em;}.wp-block-media-text__media img,.wp-block-media-text__media video{width:unset;max-width:100%;}.wp-block-media-text.has-background .wp-block-media-text__content{padding:1em;}}@media (max-width:921px){.ast-plain-container.ast-no-sidebar #primary{padding:0;}}@media (min-width:544px){.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content{padding:0 8% 0 0;}.entry-content .wp-block-media-text .wp-block-media-text__content{padding:0 0 0 8%;}.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right > *,.ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left > *{margin:0;}}@media (max-width:544px){.entry-content .wp-block-media-text .wp-block-media-text__content{padding:8% 0;}.wp-block-media-text .wp-block-media-text__media img{width:auto;max-width:100%;}}@media (max-width:921px){#secondary.secondary{padding-top:0;}.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 2.14em;}.ast-separate-container #primary,.ast-separate-container #secondary{padding:1.5em 0;}.ast-separate-container.ast-right-sidebar #secondary{padding-left:1em;padding-right:1em;}.ast-separate-container.ast-two-container #secondary{padding-left:0;padding-right:0;}.ast-page-builder-template .entry-header #secondary{margin-top:1.5em;}.ast-page-builder-template #secondary{margin-top:1.5em;}#primary,#secondary{padding:1.5em 0;margin:0;}.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}.ast-author-box img.avatar{margin:20px 0 0 0;}.ast-pagination{padding-top:1.5em;text-align:center;}.ast-pagination .next.page-numbers{display:inherit;float:none;}}@media (max-width:921px){.ast-page-builder-template.ast-left-sidebar #secondary{padding-right:20px;}.ast-page-builder-template.ast-right-sidebar #secondary{padding-left:20px;}.ast-right-sidebar #primary{padding-right:0;}.ast-right-sidebar #secondary{padding-left:0;}.ast-left-sidebar #primary{padding-left:0;}.ast-left-sidebar #secondary{padding-right:0;}.ast-pagination .prev.page-numbers{padding-left:.5em;}.ast-pagination .next.page-numbers{padding-right:.5em;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.ast-separate-container.ast-right-sidebar #secondary,.ast-separate-container.ast-left-sidebar #secondary{border:0;margin-left:auto;margin-right:auto;}.ast-separate-container.ast-two-container #secondary .widget:last-child{margin-bottom:0;}.ast-separate-container .ast-comment-list li .comment-respond{padding-left:2.66666em;padding-right:2.66666em;}.ast-author-box{-js-display:flex;display:flex;}.ast-author-bio{flex:1;}.error404.ast-separate-container #primary,.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}@media (min-width:922px){.ast-right-sidebar #primary{border-right:1px solid #eee;}.ast-right-sidebar #secondary{border-left:1px solid #eee;margin-left:-1px;}.ast-left-sidebar #primary{border-left:1px solid #eee;}.ast-left-sidebar #secondary{border-right:1px solid #eee;margin-right:-1px;}.ast-separate-container.ast-two-container.ast-right-sidebar #secondary{padding-left:30px;padding-right:0;}.ast-separate-container.ast-two-container.ast-left-sidebar #secondary{padding-right:30px;padding-left:0;}}.wp-block-button .wp-block-button__link,{color:#ffffff;}.wp-block-button .wp-block-button__link{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;border-color:#0274be;background-color:#0274be;color:#ffffff;font-family:inherit;font-weight:inherit;line-height:1;border-radius:2px;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:#ffffff;background-color:#3a3a3a;border-color:#3a3a3a;}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"]{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;color:#ffffff;border-color:#0274be;background-color:#0274be;border-radius:2px;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;font-family:inherit;font-weight:inherit;line-height:1;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.button:hover,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus{color:#ffffff;background-color:#3a3a3a;border-color:#3a3a3a;}@media (min-width:921px){.ast-container{max-width:100%;}}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container #secondary{padding-top:0;}.ast-separate-container.ast-two-container #secondary .widget{margin-bottom:1.5em;padding-left:1em;padding-right:1em;}.ast-separate-container .comments-count-wrapper{padding:1.5em 1em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 1em;margin-bottom:1.5em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}.ast-separate-container .comment-respond{padding:1.5em 1em;}}@media (max-width:544px){.ast-comment-list .children{margin-left:0.66666em;}.ast-separate-container .ast-comment-list .bypostauthor li{padding:0 0 0 .5em;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.comments-area{margin-top:1.5em;}.ast-separate-container .comments-count-wrapper{padding:2em 2.14em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 2.14em;}.ast-separate-container .comment-respond{padding:2em 2.14em;}}@media (max-width:921px){.ast-header-break-point .main-header-bar .ast-search-menu-icon.slide-search .search-form{right:0;}.ast-header-break-point .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon.slide-search .search-form{right:-1em;}.ast-comment-avatar-wrap{margin-right:0.5em;}}@media (min-width:545px){.ast-page-builder-template .comments-area,.single.ast-page-builder-template .entry-header,.single.ast-page-builder-template .post-navigation{max-width:1240px;margin-left:auto;margin-right:auto;}}@media (max-width:921px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:30px;}h2,.entry-content h2{font-size:25px;}h3,.entry-content h3{font-size:20px;}.ast-single-post .entry-title,.page-title{font-size:30px;}}@media (max-width:544px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:30px;}h2,.entry-content h2{font-size:25px;}h3,.entry-content h3{font-size:20px;}.ast-single-post .entry-title,.page-title{font-size:30px;}}@media (max-width:921px){html{font-size:85.5%;}}@media (max-width:544px){html{font-size:85.5%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@font-face {font-family: "Astra";src: url(wp-content/themes/astra/assets/fonts/astra.woff) format("woff"),url(http://drollypets.com/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"),url(http://drollypets.com/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");font-weight: normal;font-style: normal;font-display: fallback;}@media (max-width:921px) {.main-header-bar .main-header-bar-navigation{display:none;}}.ast-desktop .main-header-menu.submenu-with-border .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper{border-color:#0274be;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu{border-top-width:2px;border-right-width:0px;border-left-width:0px;border-bottom-width:0px;border-style:solid;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu{top:-2px;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu .menu-link,.ast-desktop .main-header-menu.submenu-with-border .children .menu-link{border-bottom-width:0px;border-style:solid;border-color:#eaeaea;}@media (min-width:922px){.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu{margin-left:-0px;}}.ast-small-footer{border-top-style:solid;border-top-width:1px;border-top-color:#7a7a7a;}.ast-small-footer-wrap{text-align:center;}@media (max-width:920px){.ast-404-layout-1 .ast-404-text{font-size:100px;font-size:6.6666666666667rem;}}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}.elementor-widget-heading .elementor-heading-title{margin:0;}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.ast-safari-browser-less-than-11 .main-header-menu .menu-item, .ast-safari-browser-less-than-11 .main-header-bar .ast-masthead-custom-menu-items{display:block;}.main-header-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > .menu-link{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-primary-menu-disabled .main-header-bar .ast-masthead-custom-menu-items{flex:unset;}
</style>
<link rel='stylesheet' id='astra-menu-animation-css'  href="{{asset('assets/frontend/wp-content/themes/astra/assets/css/minified/menu-animation.minc141.css?ver=2.6.1')}}" media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href="{{asset('assets/frontend/wp-includes/css/dist/block-library/style.min7e15.css?ver=5.5.4')}}" media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-styleaf6c.css?ver=3.6.0')}}" media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/styleaf6c.css?ver=3.6.0')}}" media='all' />
<link rel='stylesheet' id='photoswipe-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min1849.css?ver=4.7.0')}}" media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min1849.css?ver=4.7.0')}}" media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href="{{asset('assets/frontend/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout.minc141.css?ver=2.6.1')}}" media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{asset('assets/frontend/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen.minc141.css?ver=2.6.1')}}" media='only screen and (max-width: 921px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href="{{asset('assets/frontend/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce.minc141.css?ver=2.6.1')}}" media='all' />
<style id='woocommerce-general-inline-css'>
.woocommerce span.onsale, .wc-block-grid__product .wc-block-grid__product-onsale{background-color:#0274be;color:#ffffff;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit, .woocommerce button.button.alt.disabled, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link, .wc-block-grid__product-onsale{color:#ffffff;border-color:#0274be;background-color:#0274be;}.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce input.button:hover, .woocommerce button.button.alt.disabled:hover, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover{color:#ffffff;border-color:#3a3a3a;background-color:#3a3a3a;}.woocommerce-message, .woocommerce-info{border-top-color:#0274be;}.woocommerce-message::before,.woocommerce-info::before{color:#0274be;}.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_layered_nav_filters ul li.chosen a, .woocommerce-page ul.products li.product .ast-woo-product-category, .wc-layered-nav-rating a{color:#3a3a3a;}.woocommerce nav.woocommerce-pagination ul,.woocommerce nav.woocommerce-pagination ul li{border-color:#0274be;}.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background:#0274be;color:#ffffff;}.woocommerce-MyAccount-navigation-link.is-active a{color:#3a3a3a;}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:#0274be;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce-cart table.cart td.actions .button, .woocommerce form.checkout_coupon .button, .woocommerce #respond input#submit, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link{border-radius:2px;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;}.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{color:#0274be;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{background:#0274be;}.ast-site-header-cart a{color:#3a3a3a;}.ast-site-header-cart a:focus, .ast-site-header-cart a:hover, .ast-site-header-cart .current-menu-item a{color:#0274be;}.ast-cart-menu-wrap .count, .ast-cart-menu-wrap .count:after{border-color:#0274be;color:#0274be;}.ast-cart-menu-wrap:hover .count{color:#ffffff;background-color:#0274be;}.ast-site-header-cart .widget_shopping_cart .total .woocommerce-Price-amount{color:#0274be;}.woocommerce a.remove:hover, .ast-woocommerce-cart-menu .main-header-menu .woocommerce-custom-menu-item .menu-item:hover > .menu-link.remove:hover{color:#0274be;border-color:#0274be;background-color:#ffffff;}.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce .widget_shopping_cart .woocommerce-mini-cart__buttons .checkout.wc-forward{color:#ffffff;border-color:#3a3a3a;background-color:#3a3a3a;}.site-header .ast-site-header-cart-data .button.wc-forward, .site-header .ast-site-header-cart-data .button.wc-forward:hover{color:#ffffff;}.below-header-user-select .ast-site-header-cart .widget, .ast-above-header-section .ast-site-header-cart .widget a, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a{color:#3a3a3a;}.below-header-user-select .ast-site-header-cart .widget_shopping_cart a:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a:hover, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a.remove:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a.remove:hover{color:#0274be;}@media (min-width:545px) and (max-width:921px){.woocommerce.tablet-columns-6 ul.products li.product, .woocommerce-page.tablet-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.tablet-columns-5 ul.products li.product, .woocommerce-page.tablet-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.tablet-columns-4 ul.products li.product, .woocommerce-page.tablet-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.tablet-columns-3 ul.products li.product, .woocommerce-page.tablet-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.tablet-columns-2 ul.products li.product, .woocommerce-page.tablet-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.tablet-columns-1 ul.products li.product, .woocommerce-page.tablet-columns-1 ul.products li.product{width:100%;}.woocommerce div.product .related.products ul.products li.product{width:calc(33.33% - 14px);}}@media (min-width:545px) and (max-width:921px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(33.33% - 14px);margin-right:20px;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(3n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(3n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n){margin-right:0;clear:right;}.woocommerce.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.tablet-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.tablet-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.tablet-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.tablet-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.tablet-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.tablet-columns-6 ul.products li.product:nth-child(6n+1){clear:left;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n){margin-right:0;clear:right;}.woocommerce div.product .related.products ul.products li.product:nth-child(3n+1){clear:left;}}@media (min-width:922px){.woocommerce #reviews #comments{width:55%;float:left;}.woocommerce #reviews #review_form_wrapper{width:45%;float:right;padding-left:2em;}.woocommerce form.checkout_coupon{width:50%;}}@media (max-width:921px){.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart{padding-right:0;padding-left:0;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar{text-align:center;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons{display:inline-block;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding{flex:auto;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding{flex:0 0 100%;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container{display:flex;justify-content:center;}.woocommerce-cart .woocommerce-shipping-calculator .button{width:100%;}.woocommerce div.product div.images, .woocommerce div.product div.summary, .woocommerce #content div.product div.images, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.images, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.images, .woocommerce-page #content div.product div.summary{float:none;width:100%;}.woocommerce-cart table.cart td.actions .ast-return-to-shop{display:block;text-align:center;margin-top:1em;}}@media (max-width:544px){.ast-separate-container .ast-woocommerce-container{padding:.54em 1em 1.33333em;}.woocommerce-message, .woocommerce-error, .woocommerce-info{display:flex;flex-wrap:wrap;}.woocommerce-message a.button, .woocommerce-error a.button, .woocommerce-info a.button{order:1;margin-top:.5em;}.woocommerce.mobile-columns-6 ul.products li.product, .woocommerce-page.mobile-columns-6 ul.products li.product{width:calc(16.66% - 16.66px);}.woocommerce.mobile-columns-5 ul.products li.product, .woocommerce-page.mobile-columns-5 ul.products li.product{width:calc(20% - 16px);}.woocommerce.mobile-columns-4 ul.products li.product, .woocommerce-page.mobile-columns-4 ul.products li.product{width:calc(25% - 15px);}.woocommerce.mobile-columns-3 ul.products li.product, .woocommerce-page.mobile-columns-3 ul.products li.product{width:calc(33.33% - 14px);}.woocommerce.mobile-columns-2 ul.products li.product, .woocommerce-page.mobile-columns-2 ul.products li.product{width:calc(50% - 10px);}.woocommerce.mobile-columns-1 ul.products li.product, .woocommerce-page.mobile-columns-1 ul.products li.product{width:100%;}.woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering{float:none;margin-bottom:2em;width:100%;}.woocommerce ul.products a.button, .woocommerce-page ul.products a.button{padding:0.5em 0.75em;}.woocommerce div.product .related.products ul.products li.product{width:calc(50% - 10px);}.woocommerce table.cart td.actions .button, .woocommerce #content table.cart td.actions .button, .woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button{padding-left:1em;padding-right:1em;}.woocommerce #content table.cart .button, .woocommerce-page #content table.cart .button{width:100%;}.woocommerce #content table.cart .product-thumbnail, .woocommerce-page #content table.cart .product-thumbnail{display:block;text-align:center !important;}.woocommerce #content table.cart .product-thumbnail::before, .woocommerce-page #content table.cart .product-thumbnail::before{display:none;}.woocommerce #content table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon{float:none;}.woocommerce #content table.cart td.actions .coupon .button, .woocommerce-page #content table.cart td.actions .coupon .button{flex:1;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a{display:block;}}@media (max-width:544px){.woocommerce[class*="columns-"].columns-3 > ul.products li.product, .woocommerce[class*="columns-"].columns-4 > ul.products li.product, .woocommerce[class*="columns-"].columns-5 > ul.products li.product, .woocommerce[class*="columns-"].columns-6 > ul.products li.product{width:calc(50% - 10px);margin-right:20px;}.woocommerce-page[class*=columns-] ul.products li.product:nth-child(n), .woocommerce[class*=columns-] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce-page[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce-page[class*=columns-].columns-6>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-3>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-4>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-5>ul.products li.product:nth-child(2n), .woocommerce[class*=columns-].columns-6>ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce[class*="columns-"].columns-3 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-4 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-5 > ul.products li.product:nth-child(2n+1), .woocommerce[class*="columns-"].columns-6 > ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce[class*="columns-"] ul.products li.product:nth-child(n), .woocommerce-page[class*="columns-"] ul.products li.product:nth-child(n){margin-right:20px;clear:none;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n), .woocommerce div.product .related.products ul.products li.product:nth-child(2n){margin-right:0;clear:right;}.woocommerce.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce-page.mobile-columns-6 ul.products li.product:nth-child(6n+1), .woocommerce.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce-page.mobile-columns-5 ul.products li.product:nth-child(5n+1), .woocommerce.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce-page.mobile-columns-4 ul.products li.product:nth-child(4n+1), .woocommerce.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce-page.mobile-columns-3 ul.products li.product:nth-child(3n+1), .woocommerce.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce-page.mobile-columns-2 ul.products li.product:nth-child(2n+1), .woocommerce div.product .related.products ul.products li.product:nth-child(2n+1){clear:left;}.woocommerce ul.products a.button.loading::after, .woocommerce-page ul.products a.button.loading::after{display:inline-block;margin-left:5px;position:initial;}.woocommerce.mobile-columns-1 ul.products li.product:nth-child(n), .woocommerce-page.mobile-columns-1 ul.products li.product:nth-child(n){margin-right:0;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li{display:block;margin-right:0;}}@media (min-width:922px){.woocommerce #content .ast-woocommerce-container div.product div.images, .woocommerce .ast-woocommerce-container div.product div.images, .woocommerce-page #content .ast-woocommerce-container div.product div.images, .woocommerce-page .ast-woocommerce-container div.product div.images{width:50%;}.woocommerce #content .ast-woocommerce-container div.product div.summary, .woocommerce .ast-woocommerce-container div.product div.summary, .woocommerce-page #content .ast-woocommerce-container div.product div.summary, .woocommerce-page .ast-woocommerce-container div.product div.summary{width:46%;}.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2{float:none;width:auto;}}.woocommerce a.button , .woocommerce button.button.alt ,.woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button , .woocommerce a.button.alt ,.woocommerce .woocommerce-message a.button , .ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce button.button.alt.disabled , .wc-block-grid__products .wc-block-grid__product .wp-block-button__link {border:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;border-color:#0274be;}.woocommerce a.button:hover , .woocommerce button.button.alt:hover , .woocommerce-page table.cart td.actions .button:hover, .woocommerce-page #content table.cart td.actions .button:hover, .woocommerce a.button.alt:hover ,.woocommerce .woocommerce-message a.button:hover , .ast-site-header-cart .widget_shopping_cart .buttons .button.checkout:hover , .woocommerce button.button.alt.disabled:hover , .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover{border-color:#3a3a3a;}@media (min-width:922px){.woocommerce.woocommerce-checkout form #customer_details.col2-set, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set{width:55%;float:left;margin-right:4.347826087%;}.woocommerce.woocommerce-checkout form #order_review, .woocommerce.woocommerce-checkout form #order_review_heading, .woocommerce-page.woocommerce-checkout form #order_review, .woocommerce-page.woocommerce-checkout form #order_review_heading{width:40%;float:right;margin-right:0;clear:right;}}
</style>
<style id='woocommerce-inline-inline-css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='megamenu-css'  href="{{asset('assets/frontend/wp-content/uploads/maxmegamenu/style54b0.css?ver=3a37fe')}}" media='all' />
<link rel='stylesheet' id='dashicons-css'  href="{{asset('assets/frontend/wp-includes/css/dashicons.min7e15.css?ver=5.5.4')}}" media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min74e5.css?ver=5.9.1')}}" media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/animations/animations.min2a45.css?ver=3.0.13')}}" media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/css/frontend-legacy.min2a45.css?ver=3.0.13')}}" media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/css/frontend.min2a45.css?ver=3.0.13')}}" media='all' />
<link rel='stylesheet' id='elementor-post-8-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-86e46.css?ver=1606311201')}}" media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor-pro/assets/css/frontend.min7c45.css?ver=3.0.6')}}" media='all' />
<link rel='stylesheet' id='elementor-global-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/global45c3.css?ver=1606311205')}}" media='all' />
<link rel='stylesheet' id='elementor-post-5-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-5e985.css?ver=1606373282')}}" media='all' />
<link rel='stylesheet' id='elementor-post-7-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-77e70.css?ver=1606752967')}}" media='all' />
<link rel='stylesheet' id='elementor-post-179-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-179e3a4.css?ver=1606471389')}}" media='all' />
<link rel='stylesheet' id='ecs-styles-css'  href="{{asset('assets/frontend/wp-content/plugins/ele-custom-skin/assets/css/ecs-style6e0e.css?ver=3.0.0')}}" media='all' />
<link rel='stylesheet' id='elementor-post-324-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-324b9a3.css?ver=1606453744')}}" media='all' />

<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.5.4' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.minb683.css?ver=5.12.0')}}" media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.minb683.css?ver=5.12.0')}}" media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.minb683.css?ver=5.12.0')}}" media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.minb683.css?ver=5.12.0')}}" media='all' />
<!--[if IE]>
<script src='http://drollypets.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=2.6.1' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
<script src="{{asset('assets/frontend/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp')}}" id='jquery-core-js'></script>
<script id='ecs_ajax_load-js-extra'>
var ecs_ajax_params = {"ajaxurl":"http:\/\/drollypets.com\/wp-admin\/admin-ajax.php","posts":"{\"error\":\"\",\"m\":\"\",\"p\":\"5\",\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":\"5\",\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination6e0e.js?ver=3.0.0')}}" id='ecs_ajax_load-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/ele-custom-skin/assets/js/ecs6e0e.js?ver=3.0.0')}}" id='ecs-script-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="{{asset('assets/frontend/wp-json/wp/v2/pages/5.json')}}" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.5.4" />
<meta name="generator" content="WooCommerce 4.7.0" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed3f80.json?url=http%3A%2F%2Fdrollypets.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embede8c7?url=http%3A%2F%2Fdrollypets.com%2F&amp;format=xml" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<link rel="icon" href="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-1-32x32.png')}}" sizes="32x32" />
<link rel="icon" href="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-1-192x192.png')}}" sizes="192x192" />
<link rel="apple-touch-icon" href="{{asset('assets/frontend/wp-content/uploads/2020/11/cropped-DrollyPets-1-180x180.png')}}" />
<meta name="msapplication-TileImage" content="http://drollypets.com/wp-content/uploads/2020/11/cropped-DrollyPets-1-270x270.png" />
		<style id="wp-custom-css">
			.elementor-7 .elementor-element.elementor-element-4ec24ac .elementor-menu-cart__toggle .elementor-button { font-size:26px
}
.elementor-7 .elementor-element.elementor-element-7c87a14b .elementor-image img{
	width:230px !important;
}
.woocommerce ul.products li.product a img, .woocommerce-page ul.products li.product a img{
	height:220px;
	width:140px
}
.elementor-element .elementor-wc-products .woocommerce[class*=columns-] ul.products li.product{
	border:1px solid #f1f1f1;
	padding:10px 0px 10px 20px;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
	background-color:#dc0001;
}
.woocommerce .widget_price_filter .price_slider_amount .button{
	background-color:black;
}
.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{
	color:#FDCC0D;
}
.woocommerce .elementor-299 .elementor-element.elementor-element-e3b9703 .price{
	color:#dc0001;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{
	background:#dc0001!important;
}
.woocommerce a.button, .woocommerce button.button.alt, .woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button, .woocommerce a.button.alt, .woocommerce .woocommerce-message a.button, .ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce button.button.alt.disabled, .wc-block-grid__products .wc-block-grid__product .wp-block-button__link{
	background-color:#dc0001;
}
		</style>
		<style type="text/css">/** Mega Menu CSS: fs **/</style>


    <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {background-size: cover;
}

/* Slideshow container */
.slideshow-container {
max-width: 100%;
max-height: 100%;
position: relative;
margin: auto;
background-size: cover;
}

/* Next & previous buttons */
.prev, .next {
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 18px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}
</style>
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="home page-template-default page page-id-5 wp-custom-logo theme-astra woocommerce-no-js mega-menu-primary ast-desktop ast-page-builder-template ast-no-sidebar astra-2.6.1 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-kit-8 elementor-page elementor-page-5">
@include('layouts.frontLayout.front_header')
    @yield('content')

@include('layouts.frontLayout.front_footer')



<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
@stack('custom-scripts')
@stack('plugin-scripts')

<script src="{{asset('assets/frontend/wp-includes/js/comment-reply.min7e15.js?ver=5.5.4')}}" id='comment-reply-js'></script>
<script id='astra-theme-js-js-extra'>
var astra = {"break_point":"921","isRtl":""};
</script>
<script src="{{asset('assets/frontend/wp-content/themes/astra/assets/js/minified/style.minc141.js?ver=2.6.1')}}" id='astra-theme-js-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70')}}" id='jquery-blockui-js'></script>
<script id='wc-add-to-cart-js-extra'>
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/drollypets.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<link rel='stylesheet' id='elementor-post-216-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-2160d36.css?ver=1606372501')}}" media='all' />
<link rel='stylesheet' id='elementor-post-86-css'  href="{{asset('assets/frontend/wp-content/uploads/elementor/css/post-86d149.css?ver=1606372502')}}" media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min5fc8.css?ver=4.0.4')}}" media='all' />
<link rel='stylesheet' id='premium-addons-css'  href="{{asset('assets/frontend/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-css/premium-addons.min5fc8.css?ver=4.0.4')}}" media='all' />
<link rel='stylesheet' id='photoswipe-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min1849.css?ver=4.7.0')}}" media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min1849.css?ver=4.7.0')}}" media='all' />
<script id='astra-theme-js-js-extra'>
var astra = {"break_point":"921","isRtl":""};
</script>
<script src="{{asset('assets/frontend/wp-content/themes/astra/assets/js/minified/style.minc141.js?ver=2.6.1')}}" id='astra-theme-js-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70')}}" id='jquery-blockui-js'></script>
<script id='wc-add-to-cart-js-extra'>
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/drollypets.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min1849.js?ver=4.7.0')}}" id='wc-add-to-cart-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4')}}" id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min1849.js?ver=4.7.0')}}" id='woocommerce-js'></script>
<script id='wc-cart-fragments-js-extra'>
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_1b9cb13bf4b937e42a7ccd0f71c7179e","fragment_name":"wc_fragments_1b9cb13bf4b937e42a7ccd0f71c7179e","request_timeout":"5000"};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min1849.js?ver=4.7.0')}}" id='wc-cart-fragments-js'></script>
<script src="{{asset('assets/frontend/wp-includes/js/hoverIntent.minc245.js?ver=1.8.1')}}" id='hoverIntent-js'></script>
<script id='megamenu-js-extra'>
var megamenu = {"timeout":"300","interval":"100"};
</script>

<script src="{{asset('assets/frontend/wp-content/plugins/megamenu/js/maxmegamenuab7d.js?ver=2.9.2')}}" id='megamenu-js'></script>
<script src="{{asset('assets/frontend/wp-includes/js/wp-embed.min7e15.js?ver=5.5.4')}}" id='wp-embed-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1')}}" id='smartmenus-js'></script>
<script src="{{asset('assets/frontend/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}" id='imagesloaded-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/slick/slick.minc245.js?ver=1.8.1')}}" id='jquery-slick-js'></script>
<script id='premium-addons-js-extra'>
var PremiumSettings = {"ajaxurl":"http:\/\/drollypets.com\/wp-admin\/admin-ajax.php","nonce":"abf17892c5"};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-addons.min5fc8.js?ver=4.0.4')}}" id='premium-addons-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}" id='elementor-waypoints-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min5a35.js?ver=1.7.21')}}" id='zoom-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.mineed8.js?ver=2.7.2')}}" id='flexslider-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min0235.js?ver=4.1.1')}}" id='photoswipe-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min0235.js?ver=4.1.1')}}" id='photoswipe-ui-default-js'></script>
<script src="{{asset('assets/frontend/wp-includes/js/underscore.min4511.js?ver=1.8.3')}}" id='underscore-js'></script>
<script id='wp-util-js-extra'>
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
</script>
<script src="{{asset('assets/frontend/wp-includes/js/wp-util.min7e15.js?ver=5.5.4')}}" id='wp-util-js'></script>
<script id='wc-add-to-cart-variation-js-extra'>
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min1849.js?ver=4.7.0')}}" id='wc-add-to-cart-variation-js'></script>
<script id='wc-single-product-js-extra'>
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
</script>

<script src="{{asset('assets/frontend/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min1849.js?ver=4.7.0')}}" id='wc-single-product-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/js/frontend-modules.min2a45.js?ver=3.0.13')}}" id='elementor-frontend-modules-js'></script>
<script src="{{asset('assets/frontend/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4')}}" id='jquery-ui-position-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1')}}" id='elementor-dialog-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6')}}" id='swiper-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/share-link/share-link.min2a45.js?ver=3.0.13')}}" id='share-link-js'></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.13","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"http:\/\/drollypets.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":5,"title":"Chewy%20Landing%20Page","excerpt":"","featuredImage":false}};
</script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/js/frontend.min2a45.js?ver=3.0.13')}}" id='elementor-frontend-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/ele-custom-skin-pro/assets/js/ecspro6e0e.js?ver=3.0.0')}}" id='ecspro-js'></script>
<script src="{{asset('assets/frontend/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min7c45.js?ver=3.0.6')}}" id='elementor-sticky-js'></script>


@yield('js_script')


<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"http:\/\/drollypets.com\/wp-admin\/admin-ajax.php","nonce":"79e27f751f","i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"http:\/\/drollypets.com\/cart\/","checkout_page_url":"http:\/\/drollypets.com\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"http:\/\/drollypets.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>

<script src="{{asset('assets/frontend/wp-content/plugins/elementor-pro/assets/js/frontend.min7c45.js?ver=3.0.6')}}" id='elementor-pro-frontend-js'></script>
			<script>
			/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
			</script>


      <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
      </script>

      <script>
          (function (window, document) {
              var loader = function () {
                  var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                  script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                  tag.parentNode.insertBefore(script, tag);
              };

              window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
          })(window, document);
      </script>
   <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

	</body>

<!-- Mirrored from drollypets.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 04:49:08 GMT -->
</html>
