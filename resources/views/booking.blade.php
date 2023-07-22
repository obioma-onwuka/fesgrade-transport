<x-front_layout>

    @section('title', 'Booking')
    @include('layouts.front_nav')

   
    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('/front/assets/img/bg/bread-bg.jpg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('/front/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Booking</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('guest.welcome') }}">Home</a></li>
						<li>Booking</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Breadcrumb section
	============================================= -->


    <!-- Steps Section -->
    <section class="ft1-steps-section" style="background-image:url({{ asset('/front/assets/images/background/pattern-3.png') }})">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">How It Work</div>
                <h2>Easy 1,2, 3 Step To Task</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> Tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="inner-container">
                <div class="row clearfix">
                
                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-product"></span>
                                </div>
                            </div>
                            <h5>Enter Your & Product Details</h5>
                        </div>
                    </div>
                    
                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-wallet"></span>
                                </div>
                            </div>
                            <h5>Pay Your Service Tag</h5>
                        </div>
                    </div>
                    
                    <!-- Step Block -->
                    <div class="step-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="icon-box">
                                    <span class="icon flaticon-tick"></span>
                                </div>
                            </div>
                            <h5>Ready To Go Your Goods</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Steps Section -->
		
    <!-- Tracking Section -->
    <section class="ft1-tracking-section-two">
        <div class="auto-container">
            <div class="inner-container">
                
                <!-- Tracking Info Tabs -->
                <div class="tracking-info-tabs">
                    <!-- Track Tabs -->
                    <div class="ft1-track-tabs tabs-box">
                    
                        
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            
                            <!-- Tab / Active Tab -->
                            <div class="tab active-tab">
                                <div class="content">
                                    <div class="row clearfix">
                                        
                                        <!-- Form Column -->
                                        <div class="form-column col-lg-8 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                
                                                <!-- Default Form -->
                                                <div class="ft1-default-form">
                                                    <form method="post" action="blog.html">
                                                    
                                                        <fieldset>
                                                            <label>Personal Data</label>
                                                            <div class="row clearfix">
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="name" value="" placeholder="Name" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="email" value="" placeholder="Email" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                                                </div>
                                                                
                                                            </div>
                                                        </fieldset>
                                                        
                                                        <fieldset>
                                                            <label>Shipment Data</label>
                                                            <div class="row clearfix">
                                                            
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="type" value="" placeholder="Freight Type" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="city" value="" placeholder="City of Depture" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="delivery" value="" placeholder="Delivery City" required>
                                                                </div>
                                                                
                                                            </div>
                                                        </fieldset>
                                                        
                                                        <fieldset>
                                                            <div class="row clearfix">
                                                            
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                                                    <input type="text" name="type" value="" placeholder="Incoterms" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                                    <input type="text" name="weight" value="" placeholder="Weight" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                                    <input type="text" name="height" value="" placeholder="Height" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                                    <input type="text" name="width" value="" placeholder="Width" required>
                                                                </div>
                                                                
                                                                <!-- Form Group -->
                                                                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                                                    <input type="text" name="length" value="" placeholder="length" required>
                                                                </div>
                                                                
                                                            </div>
                                                        </fieldset>
                                                        
                                                        <fieldset>
                                                            
                                                            <!-- CheckBox -->
                                                            <div class="check-box">
                                                                <input type="checkbox" name="remember-password" id="type-1"> 
                                                                <label for="type-1">Incoterms</label>
                                                            </div>
                                                            
                                                            <!-- CheckBox -->
                                                            <div class="check-box">
                                                                <input type="checkbox" name="remember-password" id="type-2"> 
                                                                <label for="type-2">Express Delivery</label>
                                                            </div>
                                                            
                                                            <!-- CheckBox -->
                                                            <div class="check-box">
                                                                <input type="checkbox" name="remember-password" id="type-3"> 
                                                                <label for="type-3">Insurance</label>
                                                            </div>
                                                            
                                                            <!-- CheckBox -->
                                                            <div class="check-box">
                                                                <input type="checkbox" name="remember-password" id="type-4"> 
                                                                <label for="type-4">Packaging</label>
                                                            </div>
                                                            
                                                        </fieldset>
                                                        
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="theme-btn submit-btn"><span class="txt">Request For A Quote</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!--End Default Form-->
                                                
                                            </div>
                                        </div>
                                        
                                        <!-- Career Column -->
                                        <div class="career-column col-lg-4 col-md-12 col-sm-12">
                                            <div class="inner-column" style="background-image:url(assets/images/background/1.jpg)">
                                                <h4>Take Your Career <br> To Next Level</h4>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </div>
                                                <div class="btn-box">
                                                    <a href="#" class="theme-btn btn-style-three">Apply Now <span class="icon fas fa-angle-double-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Tracking Section Two -->
		
    <!-- Clients Section -->
    <section class="ft1-feature-section" style="background-image:url({{ asset('/front/assets/images/background/2.jpg') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">Our Features</div>
                <h2>Why Choose Us!</h2>
                <div class="text">Quis ipsum suspendisse ultrices gravida. Risus commodo <br> maecenas accumsan lacus vel facilisis.</div>
            </div>
            <div class="row clearfix">
            
                <!-- Feature Block Two -->
                <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-package"></div>
                        <h6>Safe Packing</h6>
                        <div class="text">Do eiusmod tempor incididunt ut labore et dolore aliqua.</div>
                    </div>
                </div>
                
                <!-- Feature Block Two -->
                <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="fa fa-wallet"></div>
                        <h6>Transparent Pricing</h6>
                        <div class="text">Do eiusmod tempor incididunt ut labore et dolore aliqua.</div>
                    </div>
                </div>
                
                <!-- Feature Block Two -->
                <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-delivery"></div>
                        <h6>Right Time Delivery</h6>
                        <div class="text">Do eiusmod tempor incididunt ut labore et dolore aliqua.</div>
                    </div>
                </div>
                
                <!-- Feature Block Two -->
                <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="icon flaticon-package"></div>
                        <h6>Fastest Shipping</h6>
                        <div class="text">Do eiusmod tempor incididunt ut labore et dolore aliqua.</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Clients Section -->



	


    



    @include('layouts.front_foot')

</x-front_layout>