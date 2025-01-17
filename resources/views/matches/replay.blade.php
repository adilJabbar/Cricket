@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Saturday Jan 5th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Raging Rhinos
					</div>
					<h1 class="page-heading__title h2">Xenowatch West League</h1>
				</div>

				<ul class="match-stats-links match-stats-links--main">
					<li>
						<a href="./matches-overview-1.html">
							<svg role="img" class="df-icon df-icon--overview">
								<use xlink:href="assets/img/necromancers.svg#overview"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-stats-1.html">
							<svg role="img" class="df-icon df-icon--stats">
								<use xlink:href="assets/img/necromancers.svg#stats"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-lineups-1.html">
							<svg role="img" class="df-icon df-icon--lineups">
								<use xlink:href="assets/img/necromancers.svg#lineups"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="active">
							<svg role="img" class="df-icon df-icon--replay">
								<use xlink:href="assets/img/necromancers.svg#replay"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="matches-tabs mt-sm-auto mb-sm-auto">
					<ul class="matches-tabs__navigation nav" role="tablist">
						<li class="nav-item">
							<a href="#tab-1" role="tab" data-toggle="tab" class="active">Game 01</a>
						</li>
						<li class="nav-item">
							<a href="#tab-2" role="tab" data-toggle="tab" class="">Game 02</a>
						</li>
						<li class="nav-item">
							<a href="#tab-3" role="tab" data-toggle="tab" class="">Game 03</a>
						</li>
					</ul>
					<div class="matches-tabs__content tab-content">
						<div class="match-replay-container tab-pane fade show active" id="tab-1" role="tabpanel">
							<figure class="match-replay lightbox lightbox--video">
								<a href="https://www.youtube.com/watch?v=XE0fU9PCrWE" class="mp_iframe">
									<img src="assets/img/samples/match-replay-video-thumbnail-01.jpg" alt="">
									<span class="lightbox__icon"><!----></span>
								</a>
							</figure>
						</div>
						<div class="match-replay-container tab-pane fade" id="tab-2" role="tabpanel">
							<figure class="match-replay lightbox lightbox--video">
								<a href="https://www.youtube.com/watch?v=XE0fU9PCrWE" class="mp_iframe">
									<img src="assets/img/samples/stream-img-01.jpg" alt="">
									<span class="lightbox__icon"><!----></span>
								</a>
							</figure>
						</div>
						<div class="match-replay-container tab-pane fade" id="tab-3" role="tabpanel">
							<figure class="match-replay lightbox lightbox--video">
								<a href="https://www.youtube.com/watch?v=XE0fU9PCrWE" class="mp_iframe">
									<img src="assets/img/samples/stream-img-04.jpg" alt="">
									<span class="lightbox__icon"><!----></span>
								</a>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection

