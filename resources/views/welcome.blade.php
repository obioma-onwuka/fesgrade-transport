<x-front_layout>

    @section('title', 'FesGrade')
    @include('layouts.front_nav')

    @include('layouts.front_slider')


    <section id="ft-booking-form" class="ft-booking-form-section">
		<div class="container">
			<div class="ft-booking-form-content position-relative">
				<form action="#">
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
									<p>We have more than years of experience
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
									Transport Logistic Company
								</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							</div>
							<div class="ft-about-feature-list-warpper">
								<div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon-worldwide"></i>
									</div>
									<div class="ft-about-feature-text headline pera-content">
										<h3>Global Service</h3>
										<p>We always provide people a complete solution focused of any business.
										</p>
									</div>
								</div>
								<div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
									<div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
										<i class="flaticon-place"></i>
									</div>
									<div class="ft-about-feature-text headline pera-content">
										<h3>Local  Service</h3>
										<p>We always provide people a complete solution focused of any business.
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




    @include('layouts.front_foot')

</x-front_layout>