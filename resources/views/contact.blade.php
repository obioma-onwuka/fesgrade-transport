<x-front_layout>

    @section('title', 'Contact Us')
    @include('layouts.front_nav')

   
    <!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{ asset('/front/assets/img/bg/bread-bg.jpg') }}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{ asset('/front/assets/img/shape/tmd-sh.png') }}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Contact</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{ route('guest.welcome') }}">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<!-- End of Breadcrumb section
	============================================= -->


    <!-- Start of contact page section
	============================================= -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Get a Quote</span>
								<h2>Get in Touch And We’ll  Help
									Your Business
								</h2>
							</div>
							<div class="ft-contact-page-contact-info">
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Office address</h3>
										<p>Digital Agency Network 20 Eastbourne
										Terrace London W2 6LG</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Telephone number</h3>
										<p>(408) 389-5470</p>
										<p>(408) 456-5470</p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<p>help@envato.com</p>
										<p>help@support.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Get a Quote</h3>
							<form action="contact.php">
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="name" placeholder="Your Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Your Email">
									</div>
									<div class="col-lg-6">
										<input type="text" name="affi" placeholder="Affiliation">
									</div>
									<div class="col-lg-6">
										<input type="text" name="number" placeholder="Number">
									</div>
									<div class="col-lg-6">
										<input type="text" name="department" placeholder="Inquiry Department">
									</div>
									<div class="col-lg-6">
										<input type="text" name="date" placeholder="Date">
									</div>
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button> Book An Appointmet</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
	<!-- End of contact page section
	============================================= -->	


    



    @include('layouts.front_foot')

</x-front_layout>