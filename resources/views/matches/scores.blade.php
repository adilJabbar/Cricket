@extends('layouts.master')

@section('content')

<body class="preloader-is--active bg-image bg-fixed bg--texture-01 bg--dotted-3x3">

	<div class="site-wrapper site-layout--default">
		<!-- Content
		================================================== -->
		<main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">Necromancers</div>
					<h1 class="page-heading__title h2">Match Scores</h1>
				</div>
				<div class="mt-sm-auto mb-sm-auto">
					<ul class="matches-scores__navigation js-filter">
						<li data-filter=".sep-18"><span>2018</span>Sep</li>
						<li data-filter=".oct-18"><span>2018</span>Oct</li>
						<li data-filter=".nov-18"><span>2018</span>Nov</li>
						<li data-filter=".dec-18"><span>2018</span>Dec</li>
						<li data-filter=".jan-19"><span>2019</span>Jan</li>
						<li data-filter=".feb-19"><span>2019</span>Feb</li>
						<li data-filter=".mar-19"><span>2019</span>Mar</li>
						<li data-filter=".apr-19"><span>2019</span>Apr</li>
						<li data-filter=".may-19"><span>2019</span>May</li>
						<li data-filter=".jun-19"><span>2019</span>Jun</li>
						<li data-filter=".jul-19"><span>2019</span>Jul</li>
						<li data-filter=".aug-19"><span>2019</span>Aug</li>
						<li data-filter=".sep-19"><span>2019</span>Sep</li>
						<li data-filter=".oct-19"><span>2019</span>Oct</li>
						<li data-filter=".nov-19"><span>2019</span>Nov</li>
						<li data-filter=".dec-19"><span>2019</span>Dec</li>
					</ul>

					<div class="matches-filter">
						<label class="matches-filter__label">Team filter</label>
						<select class="cs-select">
							<option value="">All Teams</option>
							<option value="" selected>Xenowatch</option>
							<option value="">League of Heroes</option>
							<option value="">Striker Go</option>
							<option value="">Fortdaite</option>
						</select>
					</div>

					<div class="matches-scores row">
						<div class="col-md-12 col-lg-6 sep-18 oct-18 dec-18 jan-19 mar-19 apr-19 jun-19 jul-19 sep-19 oct-19 dec-19">
							<div class="match-score">
								<div class="match-score__header">
									<div class="match-score__competition">Xenowatch West League</div>
									<div class="match-score__date">Thursday, Jan 17th</div>
								</div>
								<div class="match-score__body">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Necromancers</div>
												<div class="match-team__country ">United States</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--live">
										<span class="match-result__score">4 : 2</span>
										<span class="match-result__label">36:24</span>
									</div>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-42.png" srcset="assets/img/samples/logo-rhinos-42@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Raging Rhinos</div>
												<div class="match-team__country ">Japan</div>
										</figcaption>
									</figure>
								</div>
								<div class="match-score__footer">
									<figure class="match-team-logo match-team-logo--team-1" role="group">
										<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
									</figure>
									<ul class="match-stats-links">
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--overview">
													<use xlink:href="assets/img/necromancers.svg#overview"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--stats">
													<use xlink:href="assets/img/necromancers.svg#stats"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--lineups">
													<use xlink:href="assets/img/necromancers.svg#lineups"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--replay">
													<use xlink:href="assets/img/necromancers.svg#replay"/>
												</svg>
											</a>
										</li>
									</ul>
									<figure class="match-team-logo match-team-logo--team-2" role="group">
										<img src="assets/img/samples/logo-rhinos-42.png" srcset="assets/img/samples/logo-rhinos-42@2x.png 2x" alt="Raging Rhinos Logo">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 sep-18 nov-18 dec-18 feb-19 mar-19 may-19 jun-19 aug-19 sep-19 nov-19 dec-19">
							<div class="match-score">
								<div class="match-score__header">
									<div class="match-score__competition">Xenowatch Usa Cup</div>
									<div class="match-score__date">Saturday, Jan 12th</div>
								</div>
								<div class="match-score__body">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Necromancers</div>
												<div class="match-team__country ">United States</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">1 : 3</span>
										<span class="match-result__label">Final score</span>
									</div>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-42.png" srcset="assets/img/samples/logo-bulls-42@2x.png 2x" alt="Angry Bulls Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Angry Bulls</div>
												<div class="match-team__country ">Spain</div>
										</figcaption>
									</figure>
								</div>
								<div class="match-score__footer">
									<figure class="match-team-logo match-team-logo--team-1" role="group">
										<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
									</figure>
									<ul class="match-stats-links">
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--overview">
													<use xlink:href="assets/img/necromancers.svg#overview"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--stats">
													<use xlink:href="assets/img/necromancers.svg#stats"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--lineups">
													<use xlink:href="assets/img/necromancers.svg#lineups"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--replay">
													<use xlink:href="assets/img/necromancers.svg#replay"/>
												</svg>
											</a>
										</li>
									</ul>
									<figure class="match-team-logo match-team-logo--team-3" role="group">
										<img src="assets/img/samples/logo-bulls-42.png" srcset="assets/img/samples/logo-bulls-42@2x.png 2x" alt="Angry Bulls Logo">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 sep-18 oct-18 nov-18 dec-18 jan-19 feb-19 mar-19 apr-19 may-19 jun-19 jul-19 aug-19 sep-19 oct-19 nov-19 dec-19">
							<div class="match-score">
								<div class="match-score__header">
									<div class="match-score__competition">Xenowatch USA Cup</div>
									<div class="match-score__date">Monday, Jan 7th</div>
								</div>
								<div class="match-score__body">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Necromancers</div>
												<div class="match-team__country ">United States</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-left">
										<span class="match-result__score">3 : 1</span>
										<span class="match-result__label">Final score</span>
									</div>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-42.png" srcset="assets/img/samples/logo-panthers-42@2x.png 2x" alt="Ice Panthers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Ice Panthers</div>
												<div class="match-team__country ">Portugal</div>
										</figcaption>
									</figure>
								</div>
								<div class="match-score__footer">
									<figure class="match-team-logo match-team-logo--team-1" role="group">
										<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
									</figure>
									<ul class="match-stats-links">
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--overview">
													<use xlink:href="assets/img/necromancers.svg#overview"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="matches-stats-1.html#tab-2">
												<svg role="img" class="df-icon df-icon--stats">
													<use xlink:href="assets/img/necromancers.svg#stats"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--lineups">
													<use xlink:href="assets/img/necromancers.svg#lineups"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--replay">
													<use xlink:href="assets/img/necromancers.svg#replay"/>
												</svg>
											</a>
										</li>
									</ul>
									<figure class="match-team-logo match-team-logo--team-4" role="group">
										<img src="assets/img/samples/logo-panthers-42.png" srcset="assets/img/samples/logo-panthers-42@2x.png 2x" alt="Ice Panthers Logo">
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 sep-18 nov-18 dec-18 feb-19 mar-19 may-19 jun-19 aug-19 sep-19 nov-19 dec-19">
							<div class="match-score">
								<div class="match-score__header">
									<div class="match-score__competition">Xenowatch West League</div>
									<div class="match-score__date">Friday, Jan 4th</div>
								</div>
								<div class="match-score__body">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Necromancers</div>
												<div class="match-team__country ">United States</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-left">
										<span class="match-result__score">2 : 1</span>
										<span class="match-result__label">Final score</span>
									</div>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-42.png" srcset="assets/img/samples/logo-eagles-42@2x.png 2x" alt="Fierce Eagles Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Fierce Eagles</div>
												<div class="match-team__country ">France</div>
										</figcaption>
									</figure>
								</div>
								<div class="match-score__footer">
									<figure class="match-team-logo match-team-logo--team-1" role="group">
										<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="Necromancers Logo">
									</figure>
									<ul class="match-stats-links">
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--overview">
													<use xlink:href="assets/img/necromancers.svg#overview"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--stats">
													<use xlink:href="assets/img/necromancers.svg#stats"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--lineups">
													<use xlink:href="assets/img/necromancers.svg#lineups"/>
												</svg>
											</a>
										</li>
										<li>
											<a href="#">
												<svg role="img" class="df-icon df-icon--replay">
													<use xlink:href="assets/img/necromancers.svg#replay"/>
												</svg>
											</a>
										</li>
									</ul>
									<figure class="match-team-logo match-team-logo--team-5" role="group">
										<img src="assets/img/samples/logo-eagles-42.png" srcset="assets/img/samples/logo-eagles-42@2x.png 2x" alt="Fierce Eagles Logo">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>



	</div>

</body>

</html>
