@extends('layouts.app')
@section('title')
Send a Parcel
@endsection
@php
    $append_ = env('MY_ASSET_URL');
@endphp
@section('content')
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background=" {{asset($append_ .'assets2/img/hero/parcelbox.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Send a Parcel</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">    
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="contact-title text-center">Send a parcel from £2.45 (£2.05 + VAT) </h2>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="{{route('send-parcel.store')}}" method="post">
                            @csrf
                            <div class="row">
                                 <div class="col-12">
                                    <h2 class="contact-title">Your Address</h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('sender_name') is-invalid @enderror border border-secondary" name="sender_name" id="sender_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Name'" placeholder="Enter your Name">
                                         @error('sender_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                      <div class="form-group">
                                        <input class="form-control valid @error('sender_email') is-invalid @enderror border border-secondary" name="sender_email" id="sender_email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Email'" placeholder="Enter your Email Address">
                                         @error('sender_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <input class="form-control valid @error('sender_phone') is-invalid @enderror border border-secondary" name="sender_phone" id="sender_phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your sender_phone'" placeholder="Enter your Phone Number">
                                         @error('sender_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                      <label class="font-weight-bold">Address:</label>
                                       <textarea class="form-control w-100 @error('sender_phone') is-invalid @enderror border border-secondary" name="sender_address" id="sender_address" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Home Address'" placeholder=" Enter Home Address">
                                       </textarea>  
                                         {{-- @error('sender_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror                                        --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <input class="form-control valid @error('parcel') is-invalid @enderror border border-secondary" name="parcel" id="parcel" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Parcel'" placeholder="Enter your Parcel Item">
                                         @error('parcel')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <input class="form-control valid @error('weight') is-invalid @enderror border border-secondary" name="weight" id="weight" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Item Weight'" placeholder="Enter your Item Weight ">
                                         @error('weight')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Receiver Address</h2>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('receiver_name') is-invalid @enderror border border-secondary" name="receiver_name" id="receiver_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Receiver Name'" placeholder="Enter Receiver Name">
                                         @error('receiver_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid @error('receiver_email') is-invalid @enderror border border-secondary" name="receiver_email" id="receiver_email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Receiver Email'" placeholder="Enter Receiver Email">
                                         @error('receiver_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid @error('receiver_phone') is-invalid @enderror border border-secondary" name="receiver_phone" id="receiver_phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Receiver Phone Number'" placeholder="Enter Receiver Phone Number">
                                         @error('receiver_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                      <label class="font-weight-bold">Address:</label>
                                       <textarea class="form-control w-100 @error('receiver_address') is-invalid @enderror border border-secondary" name="receiver_address" id="receiver_address" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Receiver Home Address'" placeholder=" Enter Receiver Home Address">
                                       </textarea>  
                                         {{-- @error('sender_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror                                        --}}
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
            </div>
            </form>
        </section>
@endsection