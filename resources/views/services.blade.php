<x-front_layout>

    @section('title', 'Services')
    @include('layouts.front_nav')

   
    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('/front/assets/img/bg/bread-bg.jpg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('/front/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Services</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('guest.welcome') }}">Home</a></li>
						<li>Services</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Breadcrumb section
	============================================= -->


    <!-- Start of Service page section
	============================================= -->
	<section id="ft-service-page" class="ft-service-page-section page-padding">
		<div class="container">
			<div class="ft-section-title-2 headline pera-content text-center">
				<span class="sub-title">Featured</span>
				<h2>We are optimists who Love 
					to <span>work together</span>.
				</h2>
			</div>
			<div class="ft-service-page-items">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="ft-service-innerbox-2 position-relative">
							<div class="ft-service-img text-center">
								<img src="{{ asset('/front/assets/img/service/ser4.2.jpg') }}" alt="">
							</div>
							<div class="ft-service-text position-relative headline">
								<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
									<i class="fa fa-car"></i>
								</div>
								<h3><a href="#">Road Freight</a></h3>
								<div class="ft-btn-2">
									<a href="service-single.html">
										<i class="icon-first fa fa-plus"></i>
										<span>Book Now</span>
									</a>
								</div>
							</div>
							<div class="ft-service-serial position-absolute">
								1
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">	
						<div class="ft-service-innerbox-2 position-relative">
							<div class="ft-service-img text-center">
								<img src="{{ asset('/front/assets/img/service/ser4.3.jpg') }}" alt="">
							</div>
							<div class="ft-service-text position-relative headline">
								<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
									<i class="fa fa-plane"></i>
								</div>
								<h3><a href="#">International Logistics</a></h3>
								<div class="ft-btn-2">
									<a href="service-single.html">
										<i class="icon-first fa fa-plus"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
							<div class="ft-service-serial position-absolute">
								2
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-service-innerbox-2 position-relative">
							<div class="ft-service-img text-center">
								<img src="{{ asset('/front/assets/img/service/ser4.4.jpg') }}" alt="">
							</div>
							<div class="ft-service-text position-relative headline">
								<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
									<i class="fa fa-cars"></i>
								</div>
								<h3><a href="#">Bss Charter</a></h3>
								<div class="ft-btn-2">
									<a href="service-single.html">
										<i class="icon-first fa fa-plus"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
							<div class="ft-service-serial position-absolute">
								3
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-service-innerbox-2 position-relative">
							<div class="ft-service-img text-center">
								<img src="{{ asset('/front/assets/img/service/ser4.2.jpg') }}" alt="">
							</div>
							<div class="ft-service-text position-relative headline">
								<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
									<i class="fa fa-map-pin"></i>
								</div>
								<h3><a href="#">Movers</a></h3>
								<div class="ft-btn-2">
									<a href="service-single.html">
										<i class="icon-first fa fa-plus"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
							<div class="ft-service-serial position-absolute">
								4
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- End of Service page section
	============================================= -->



    @include('layouts.front_foot')

</x-front_layout>