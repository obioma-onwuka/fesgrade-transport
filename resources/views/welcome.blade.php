<x-front_layout>

    @section('title', 'FesGrade')
    @include('layouts.front_nav')

    @include('layouts.front_slider')


    <section id="ft-booking-form" class="ft-booking-form-section">
		<div class="container">
			<div class="ft-booking-form-content position-relative">
				<form action="{{ route('guest.tracking') }}">
					@csrf
					<div class="booking-form-input-wrapper d-flex flex-wrap">
						<label class="booking-form-input position-relative">
							<span class="booking-form-icon">
                                <i class="fa fa-briefcase"></i>
                            </span>
							<input type="text" placeholder="Your Tracking  ID Now">
						</label>
						<label class="booking-form-input position-relative">
							<span class="booking-form-icon">
                                <i class="fa fa-envelope"></i>
                            </span>
							<input type="text" placeholder="Your Email Address">
						</label>
						<button class="ft-sb-button" type="submit">Track Order Now</button>
					</div>
				</form>
			</div>
		</div>
	</section>

    <section id="ft-about" class="ft-about-section">
		<div class="container">
			<div class="ft-about-content">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="ft-about-img-exp position-relative">
							<div class="ft-about-exp-area headline pera-content position-absolute">
								<div class="ft-about-exp-img">
									<img src="{{ asset('/front/assets/img/shape/exp-sh1.png') }}" alt="">
								</div>
								<div class="ft-about-exp-text position-absolute">
									<h3><span class="counter">25</span><b>+</b> Years</h3>
									<p>Of active service to humanity and beyond
									</p>
								</div>
							</div>
							<div class="ft-about-img">
								<img src="{{ asset('/front/assets/img/about/ab1.png') }}" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-about-text-wrapper">
							<div class="ft-section-title headline pera-content">
								<span class="sub-title">About Company</span>
								<h2>Digital & Trusted
									Transport And Logistic Company
								</h2>
								<p>FesGrade is a Nigerian technology-driven transport and logisticts company, providing seamless mobility services to commuters across Nigeria and beyond.</p>
							</div>
							<div class="ft-about-feature-list-warpper">
								<div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
										<i class="fa fa-kite"></i>
									</div>
									<div class="ft-about-feature-text headline pera-content">
										<h3>Logistics Service</h3>
										<p>Send and receive packages to and from any part of the world. FesGrade is your best choice for cargo and logistics.
										</p>
									</div>
								</div>
								<div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
									<div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
										<i class="fa fa-thumbs-up"></i>
									</div>
									<div class="ft-about-feature-text headline pera-content">
										<h3>Safe Travels</h3>
										<p>Traveling with FesGrade gives peace of mind. Our carefully sorted expert drivers are here to ensure you move safely across Nigerian states and beyond.
										</p>
									</div>
								</div>
								<div class="ft-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
									<a class="d-flex justify-content-center align-items-center" href="about.html">Explore More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start of Fun fact section
	============================================= -->
	<section id="ft-funfact-2" class="ft-funfact-section-2" data-background="{{ asset('/front/assets/img/bg/shape-bg.jpg') }}">
		<div class="container">
			<div class="ft-section-title-3 headline text-center">
				<span class="text-uppercase">We specialise in the transportation</span>
				<h2>Together, we have your logistical
				challenges covered.</h2>
			</div>
			<div class="ft-funfact-content-2 position-relative">
				<span class="map-bg position-absolute text-center"><img src="{{ asset('/front/assets/img/bg/map.png') }}" alt=""></span>
				<div class="ft-funfact-inner-items-wrapper position-relative">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="fa fa-home"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3>
										<span class="counter">
											1656
										</span>
									</h3>
									<p>Terminals</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="fa fa-users"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">1250</span></h3>
									<p>Drivers</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="fa fa-bus"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">30</span>+</h3>
									<p>Vehicles</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="ft-funfact-inner-items text-center">
								<div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
									<i class="fa fa-globe"></i>
								</div>
								<div class="ft-funfact-inner-text headline pera-content">
									<h3><span class="counter">5</span>+</h3>
									<p>Available Countries</p>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Fun fact section
	============================================= -->




    @include('layouts.front_foot')

</x-front_layout>