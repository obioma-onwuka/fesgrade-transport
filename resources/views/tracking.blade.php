<x-front_layout>

    @section('title', 'Tracking')
    @include('layouts.front_nav')

   
    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('/front/assets/img/bg/bread-bg.jpg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('/front/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Tracking</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('guest.welcome') }}">Home</a></li>
						<li>Tracking</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Breadcrumb section
	============================================= -->


    <!-- Start of Project details  section
	============================================= -->
	<section id="ft-project-details" class="ft-project-details-section page-padding">
		<div class="container">
			<div class="ft-project-overview">
				<div class="row">
					<div class="col-lg-8">
						<div class="ft-project-details-img">
							<img src="{{ asset('/front/assets/img/project/prd.jpg') }}" alt="">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="ft-portfolio-overview-text headline">
							<div class="project-title-overview text-center">
								<h3>Project details</h3>
							</div>
							<div class="ft-portfolio-overview-list-value">
								<div class="ft-portfolio-overview-list  ul-li-block">
									<ul>
										<li>Name: <span>Rob’s house</span></li>
										<li>Date: <span>24th March 2022</span></li>
										<li>Author: <span>Marilin De Aragon</span></li>
										<li>Tag:  <span>Cleaning, Plumbing</span></li>
									</ul>
								</div>
								<div class="ft-project-value ul-li">
									<span>Value: $125</span>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ft-project-overview-text-wrapper headline pera-content">
				<h3>Service & Aftermarket Logistics</h3>
				<p>Purchasing from select family farmers who farm organically because they believe in it and so we do. We are conscious of air miles and our carbon footprint so a lot of our produce comes from Egypt. Lorem ipsum is simply free text used by copytyping refreshing.</p>
				<div class="ft-project-overview-comment-list">
					<div class="row">
						<div class="col-lg-5">
							<div class="ft-project-overview-list-item ul-li-block">
								<ul>
									<li>The housekeepers we hired are professionals who take pride in doing excellent work and in exceeding expectations.</li>
									<li>We carefully screen all of our cleaners you can rest assured that your home would receive the absolute highest quality of service providing.</li>
									<li>Your time is precious, and we understand that cleaning is really just one more item on your to-do list.</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="ft-project-overview-comment">
								<div class="ft-project-overview-comment-wrapper d-flex align-items-center position-relative">
									<div class="ft-project-overview-comment-img">
										<img src="{{ asset('/front/assets/img/project/pa.jpg') }}" alt="">
									</div>
									<div class="ft-project-overview-comment-text headline">
										‘’Tempor incididunt ut labore et dolore magna alias
										quat enim veniam quis nostru exercitation ullamco laboris nis aliquip.’’
										<h4>Rob Hunter</h4>
										<span>Managing Director</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Project details section
	============================================= -->

	


    



    @include('layouts.front_foot')

</x-front_layout>