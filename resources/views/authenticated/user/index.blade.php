<x-user_layout>
    @section('title', 'Dashboard')

    @include('layouts.usernavbar')
    @include('layouts.usertopbar')



    <div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Home</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href = "#"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="{{ route('logged.check.role') }}">Dashboard</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">

                                <div class="col-md-8 col-xl-8">
									<div class="card user-card">
										<div class="card-header">
											<h5>Welcome <span class="text-success text-capitalize"><strong>{{ $userCheck->first_name }}</strong></span></h5>
										</div>
										<div class="card-body text-center">
											
											<p class = "mt-3 mb-3">Joined: <strong>{{date('D jS M, Y', strtotime(strip_tags($userCheck->created_at)))}}</strong></p>
											<hr>
											<p class="m-t-15">Pet Reunite aims at connecting strayed pets back to their owners. When you register your pet; a printable PET TAG is generated, then attach the tag to the leash of the pet. One can scan the QRCODE on the pet tage, to reveal information about the pet owner, and understand possible means to inform the owner about the strayed pet.</p>
										</div>
									</div>
								</div>

								
								<div class="col-xl-4 col-md-4">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Pets</h6>
													<h3 class="m-b-0 text-white">#</h3>
												</div>
												<div class="col-auto">
													<i class="fa fa-cat text-c-blue f-18"></i>
												</div>
											</div>
											<p class="m-b-0 text-white"><a href="#" style = "color:aqua">Details</a></p>
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

    
</x-user_layout>