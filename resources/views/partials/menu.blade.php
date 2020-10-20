@php
    $append_ = env('MY_ASSET_URL');
@endphp
<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                          <div style="display: flex;
   align-items:center;">
                            <a href="/"><img 
                                src="{{ asset($append_ .'assets2/fonts/truck-solid.svg') }}" 
                                alt="triangle with all three sides equal"
                               style="margin-right:5;display:inline;vertical-align:middle;position:relative;height:60px;"
                                width="40" /><h2 style="font-weight: 900;font-size:30px;display:inline;position:relative;margin-bottom:0px;height:30px;vertical-align:middle">Cargobes</h2></a>
                          </div>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/track-parcel">Track Parcel</a></li>
                                        <li><a href="/about-us">About</a></li>
                                        <li><a href="/services">Our Services</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                {{--  <a href="#" class="btn head-btn1">Register</a>  --}}
                                <a href="/send-parcel"  class="btn head-btn2" style="font-weight:900;">Send a Parcel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>