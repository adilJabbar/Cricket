@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Please Select A</span>
					</div>
					<h1 class="page-heading__title h2">Game Squad</h1>
				</div>
				<div class="row mt-sm-auto mb-sm-auto">
					<div class="col-sm-6 col-lg-3">
						<div class="team-selection-item team-selection-item--style-2 team-1 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-01.jpg')}}" alt="">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-team.png')}}" alt="">
								</div>
							</a>
							<img class="team-selection-item__logo team-selection-item__logo--bottom" src="{{ asset('assets/img/team-selection-logo-01-70.png')}}" srcset="assets/img/team-selection-logo-01-140.png 2x" alt="">
							<span class="team-selection-item__subtitle h6">Necromancers</span>
							<h2 class="team-selection-item__title">Xenowatch</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="team-selection-item team-selection-item--style-2 team-2 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-02.jpg" alt="">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-team.png" alt="">
								</div>
							</a>
							<img class="team-selection-item__logo team-selection-item__logo--bottom" src="{{ asset('assets/img/team-selection-logo-02-70.png" srcset="assets/img/team-selection-logo-02-140.png 2x" alt="">
							<span class="team-selection-item__subtitle h6">Necromancers</span>
							<h2 class="team-selection-item__title">League of Heroes</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="team-selection-item team-selection-item--style-2 team-3 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-03.jpg" alt="">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-team.png" alt="">
								</div>
							</a>
							<img class="team-selection-item__logo team-selection-item__logo--bottom" src="{{ asset('assets/img/team-selection-logo-03-70.png" srcset="assets/img/team-selection-logo-03-140.png 2x" alt="">
							<span class="team-selection-item__subtitle h6">Necromancers</span>
							<h2 class="team-selection-item__title">Striker Go</h2>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="team-selection-item team-selection-item--style-2 team-4 text-center">
							<a href="team-overview.html" class="team-selection-item__thumbnail">
								<div class="team-selection-item__thumbnail-inner">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-04.jpg" alt="">
									<img src="{{ asset('assets/img/samples/team-selection-thumb-team.png" alt="">
								</div>
							</a>
							<img class="team-selection-item__logo team-selection-item__logo--bottom" src="{{ asset('assets/img/team-selection-logo-04-70.png" srcset="assets/img/team-selection-logo-04-140.png 2x" alt="">
							<span class="team-selection-item__subtitle h6">Necromancers</span>
							<h2 class="team-selection-item__title">Fortdaite</h2>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection

