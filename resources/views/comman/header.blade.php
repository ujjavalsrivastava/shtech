<header class="main-header header-style-two">

<div class="header-top">
<div class="inner-container">
<div class="top-left">

<ul class="list-style-one">
<li><i class="fa fa-envelope"></i> <a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#b1dfd4d4d5d9d4ddc1f1d2dedcc1d0dfc89fd2dedc"><span class="__cf_email__" data-cfemail="37595252535f525b477754585a4756594e1954585a">[email&#160;protected]</span></a></li>
<li><i class="fa fa-map-marker-alt"></i> 88 Broklyn Golden Street. New York</li>
</ul>
</div>
<div class="top-right">
<ul class="useful-links">
<li><a href="#">Help</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
<div class="outer-box">
<ul class="social-icon-one">
<li><a href="#"><span class="fab fa-twitter"></span></a></li>
<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
<li><a href="#"><span class="fab fa-instagram"></span></a></li>
</ul>
</div>
</div>


<div class="header-lower">

<div class="main-box">
<div class="logo-box">
<div class="logo"><a href="index.html"><img src="{{ URL::asset('assets/images/logo-2-yellow.png')}}" alt title="Sotech"></a></div>
</div>

<div class="nav-outer">
<nav class="nav main-menu">

<ul class="navigation">
@foreach($menu as $category)
<li class="current @if(!empty($category->getSubctegory)) dropdown @endif"><a href="javascript:void(0)">{{$category->application_cate_desc}}</a>
<ul>
@foreach($category->getSubctegory as $subcategory)
<li><a href="{{url('/')}}/{{str_replace(' ','-',strtolower($category->application_cate_desc))}}/{{str_replace(' ','-',strtolower($subcategory->application_sub_cate_desc))}}">{{$subcategory->application_sub_cate_desc}}</a></li>
@endforeach
</ul>
</li>
@endforeach
</ul>
</nav>

</div>
<div class="outer-box">
<div class="ui-btn-outer">
<button class="ui-btn ui-btn search-btn">
<span class="icon lnr lnr-icon-search"></span>
</button>
<a href="#" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>
</div>

<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
</div>
</div>
</div>


<div class="mobile-menu">
<div class="menu-backdrop"></div>

<nav class="menu-box">
<div class="upper-box">
<div class="nav-logo"><a href="index.html"><img src="{{ URL::asset('assets/images/logo-yellow.png')}}" alt title></a></div>
<div class="close-btn"><i class="icon fa fa-times"></i></div>
</div>
<ul class="navigation clearfix">

</ul>
<ul class="contact-list-one">
<li>

<div class="contact-info-box">
<i class="icon lnr-icon-phone-handset"></i>
<span class="title">Call Now</span>
<a href="tel:+92880098670">+92 (8800) - 98670</a>
</div>
</li>
<li>

<div class="contact-info-box">
<span class="icon lnr-icon-envelope1"></span>
<span class="title">Send Email</span>
<a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#a7cfc2cbd7e7c4c8cad7c6c9de89c4c8ca"><span class="__cf_email__" data-cfemail="e088858c90a0838f8d90818e99ce838f8d">[email&#160;protected]</span></a>
</div>
</li>
<li>

<div class="contact-info-box">
<span class="icon lnr-icon-clock"></span>
<span class="title">Send Email</span>
Mon - Sat 8:00 - 6:30, Sunday - CLOSED
</div>
</li>
</ul>
<ul class="social-links">
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
</nav>
</div>

<div class="search-popup">
<span class="search-back-drop"></span>
<button class="close-search"><span class="fa fa-times"></span></button>
<div class="search-inner">
<form method="post" action="https://html.kodesolution.com/2024/sotech-html/index.html">
<div class="form-group">
<input type="search" name="search-field" value placeholder="Search..." required>
<button type="submit"><i class="fa fa-search"></i></button>
</div>
</form>
</div>
</div>


<div class="sticky-header">
<div class="auto-container">
<div class="inner-container">

<div class="logo">
<a href="index.html" title><img src="{{ URL::asset('assets/images/logo-2-yellow.png')}}" alt title></a>
</div>

<div class="nav-outer">

<nav class="main-menu">
<div class="navbar-collapse show collapse clearfix">
<ul class="navigation clearfix">

</ul>
</div>
</nav>

<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
</div>
</div>
</div>
</div>
</header>
