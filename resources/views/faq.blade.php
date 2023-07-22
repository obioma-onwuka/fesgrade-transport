<x-front_layout>

    @section('title', 'Faq')
    @include('layouts.front_nav')

   
    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('/front/assets/img/bg/bread-bg.jpg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('/front/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>FAQ</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('guest.welcome') }}">Home</a></li>
						<li>FAQ</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Breadcrumb section
	============================================= -->


    <!-- Start of faq  section
	============================================= -->
	<section id="ft-faq-page" class="ft-faq-page-section page-padding">
		<div class="container">
			<div class="ft-faq-page-top-content d-flex justify-content-between align-items-end flex-wrap">
				<div class="ft-section-title-2 headline pera-content">
					<h2>Discover Frequently
						Asked Questions from
						<span>Our Support</span>
					</h2>
				</div>
				<div class="ft-btn-3">
					<a class="d-flex justify-content-center align-items-center" href="{{ route('guest.contact.show') }}">Contact Support <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="ft-faq-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="accordion" id="accordionExample">
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Can i specify a delivery date when ordering?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										What payment methods are supported?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										What is Federation of International Trade Association?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										How can I Track My Shipments?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="accordion" id="accordionExampl2">
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingOne2">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
										Can i specify a delivery date when ordering?
									</button>
								</h2>
								<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingTwo2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
										What payment methods are supported?
									</button>
								</h2>
								<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingThree2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
										What is Federation of International Trade Association?
									</button>
								</h2>
								<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
							<div class="accordion-item headline pera-content">
								<h2 class="accordion-header" id="headingFour2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
										How can I Track My Shipments?
									</button>
								</h2>
								<div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour2" data-bs-parent="#accordionExampl2">
									<div class="accordion-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus commodo viverra. 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>	
	<!-- End of faq section
	============================================= -->



    @include('layouts.front_foot')

</x-front_layout>