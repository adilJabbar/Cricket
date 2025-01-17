@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->

        <main class="site-content team-info-page" id="wrapper">
			<div class="container container--large">
				<div class="row">
					<div class="col-lg-7">
						<div class="team-carousel">
							<div class="team-carousel__content">
								<div class="team-carousel__item" data-icon="team-overview">
									<div class="row">
										<div class="col-lg-11">
											<h3 class="player-info-subtitle h4 text-uppercase">Necromancers</h3>
											<h2 class="player-info-title h1 text-uppercase">Xenowatch</h2>
											<div class="row">
												<div class="col-6 col-md-6 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Country</div>
														<div class="player-info-detail__title">United States</div>
													</div>
												</div>
												<div class="col-6 col-md-6 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Since</div>
														<div class="player-info-detail__title">March 2012</div>
													</div>
												</div>
												<div class="col-6 col-md-6 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Prize earned</div>
														<div class="player-info-detail__title color-primary">U$D 125.360</div>
													</div>
												</div>
											</div>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</p>
										</div>
									</div>
								</div>

								<div class="team-carousel__item" data-icon="stats">
									<div class="row">
										<div class="col-lg-11">
											<h3 class="player-info-subtitle h4 text-uppercase">Necromancers</h3>
											<h2 class="player-info-title h1 text-uppercase">Xenowatch</h2>
											<div class="row row-mb-balance">
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--value">
														<div class="player-info-detail__value h3">9.7</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">AVG Game</div>
															<div class="player-info-detail__title">Kills</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--value">
														<div class="player-info-detail__value h3">6.1</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">Avg Game</div>
															<div class="player-info-detail__title">Deaths</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--value">
														<div class="player-info-detail__value h3">4.2</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">Avg Game</div>
															<div class="player-info-detail__title">Assists</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--value">
														<div class="player-info-detail__value h3">131</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">Games</div>
															<div class="player-info-detail__title">Won</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--value">
														<div class="player-info-detail__value h3">25</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">Games</div>
															<div class="player-info-detail__title">Lost</div>
														</div>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-6 col-xl-4">
													<div class="player-info-detail player-info-detail--bar">
														<div class="player-info-detail__bar" data-value="83.9" data-id="progress-path-1">
															<svg width="61" height="61" viewBox="0 0 61 61">
																<path fill-opacity="0" stroke-width="6" d="M3.008,29.000 L29.009,3.009 L55.009,29.000 L29.009,54.991 L3.008,29.000 Z"/>
																<path fill-opacity="0" id="progress-path-1" stroke-width="6" stroke-linecap="square" d="M3.008,29.000 L29.009,3.009 L55.009,29.000 L29.009,54.991 L3.008,29.000 Z"/>
															</svg>
															<i class="fa fa-star">&nbsp;</i>
														</div>
														<div class="player-info-detail__body">
															<div class="player-info-detail__label">Win ratio</div>
															<div class="player-info-detail__title">83.9%</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="team-carousel__item" data-icon="achievements">
									<div class="row">
										<div class="col-lg-11">
											<h3 class="player-info-subtitle h4 text-uppercase">Necromancers</h3>
											<h2 class="player-info-title h1 text-uppercase">Xenowatch</h2>
											<div class="row">
												<div class="col-md-12 col-xl-8">
													<div class="player-info-carousel" id="player-info-carousel-1">
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--award-medal">
																	<use xlink:href="assets/img/necromancers.svg#award-medal"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Fastest kill in the league</div>
																<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
																<div class="player-info-detail__label">August 28th, 2015</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--achievements-trophy">
																	<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Xenowatch World League</div>
																<div class="player-info-detail__label color-primary">1st place</div>
																<div class="player-info-detail__label">February 14th, 2017</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--award-medal">
																	<use xlink:href="assets/img/necromancers.svg#award-medal"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Fastest kill in the league</div>
																<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
																<div class="player-info-detail__label">August 28th, 2015</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--achievements-trophy">
																	<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Xenowatch World League</div>
																<div class="player-info-detail__label color-primary">1st place</div>
																<div class="player-info-detail__label">February 14th, 2017</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--award-medal">
																	<use xlink:href="assets/img/necromancers.svg#award-medal"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Fastest kill in the league</div>
																<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
																<div class="player-info-detail__label">August 28th, 2015</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--achievements-trophy">
																	<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Xenowatch World League</div>
																<div class="player-info-detail__label color-primary">1st place</div>
																<div class="player-info-detail__label">February 14th, 2017</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--award-medal">
																	<use xlink:href="assets/img/necromancers.svg#award-medal"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Fastest kill in the league</div>
																<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
																<div class="player-info-detail__label">August 28th, 2015</div>
															</div>
														</div>
														<div class="player-info-detail player-info-detail--icon">
															<div class="player-info-detail__icon player-info-detail__icon--lg">
																<svg role="img" class="df-icon df-icon--achievements-trophy">
																	<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
																</svg>
															</div>
															<div class="player-info-detail__body">
																<div class="player-info-detail__title">Xenowatch World League</div>
																<div class="player-info-detail__label color-primary">1st place</div>
																<div class="player-info-detail__label">February 14th, 2017</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row row-mb-balance">
												<div class="col-md-4 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Country</div>
														<div class="player-info-detail__title">United States</div>
													</div>
												</div>
												<div class="col-md-4 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Record</div>
														<div class="player-info-detail__title">Won 8-2</div>
													</div>
												</div>
												<div class="col-md-4 col-xl-4">
													<div class="player-info-detail">
														<div class="player-info-detail__label">Prize</div>
														<div class="player-info-detail__title">U$D 50.2K</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="team-carousel__item" data-icon="overview">
									<div class="row">
										<div class="col-lg-11">
											<h3 class="player-info-subtitle h4 text-uppercase">Necromancers</h3>
											<h2 class="player-info-title h1 text-uppercase">Xenowatch</h2>
											<div class="team-carousel-tabs">
												<div class="team-carousel-tabs__content tab-content">
													<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
														<div class="match-score">
															<div class="match-score__header">
																<div class="match-score__competition">Xenowatch West League</div>
																<div class="match-score__date">Thursday, Jan 17th</div>
															</div>
															<div class="match-score__body">
																<figure class="match-team" role="group">
																	<figure class="match-team-logo match-team-logo--team-1" role="group">
																		<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="NCR Logo">
																	</figure>
																	<figcaption>
																		<div class="match-team__name">NCR</div>
																			<div class="match-team__country ">USA</div>
																	</figcaption>
																</figure>
																<div class="match-result match-result--winner-left">
																	<span class="match-result__score">4 : 2</span>
																	<span class="match-result__label">Final Score</span>
																</div>
																<figure class="match-team" role="group">
																	<figure class="match-team-logo match-team-logo--team-2" role="group">
																		<img src="assets/img/samples/logo-rhinos-42.png" srcset="assets/img/samples/logo-rhinos-42@2x.png 2x" alt="RRH Logo">
																	</figure>
																	<figcaption>
																		<div class="match-team__name">RRH</div>
																			<div class="match-team__country ">JPN</div>
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
													<div class="tab-pane fade" id="tab-2" role="tabpanel">
														<div class="match-score">
															<div class="match-score__header">
																<div class="match-score__competition">Xenowatch West League</div>
																<div class="match-score__date">Thursday, Jan 17th</div>
															</div>
															<div class="match-score__body">
																<figure class="match-team" role="group">
																	<figure class="match-team-logo match-team-logo--team-1" role="group">
																		<img src="assets/img/samples/logo-necromancers-42.png" srcset="assets/img/samples/logo-necromancers-42@2x.png 2x" alt="NRC Logo">
																	</figure>
																	<figcaption>
																		<div class="match-team__name">NRC</div>
																			<div class="match-team__country ">USA</div>
																	</figcaption>
																</figure>
																<div class="match-result match-result--live">
																	<span class="match-result__score">0 : 0</span>
																	<span class="match-result__label">00:00</span>
																</div>
																<figure class="match-team" role="group">
																	<figure class="match-team-logo match-team-logo--team-3" role="group">
																		<img src="assets/img/samples/logo-bulls-42.png" srcset="assets/img/samples/logo-bulls-42@2x.png 2x" alt="ABS Logo">
																	</figure>
																	<figcaption>
																		<div class="match-team__name">ABS</div>
																			<div class="match-team__country ">SPN</div>
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
												</div>
												<ul class="team-carousel-tabs__navigation nav" role="tablist">
													<li class="nav-item">
														<a href="#tab-1" role="tab" data-toggle="tab" class="active">Last Match</a>
													</li>
													<li class="nav-item">
														<a href="#tab-2" role="tab" data-toggle="tab" class="">Next Match</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-player">
				<div class="container container--large">
					<div class="row">
						<div class="col-md-12 col-lg-4 offset-lg-7 team-player__inner">

							<!-- Decoration -->
							<div class="ncr-page-decor">
								<div class="ncr-page-decor__layer-1">
									<div class="ncr-page-decor__layer-bg"></div>
								</div>
								<div class="ncr-page-decor__layer-2">
									<div class="ncr-page-decor__layer-bg"></div>
								</div>
								<div class="ncr-page-decor__layer-3"></div>
								<div class="ncr-page-decor__layer-4"></div>
								<div class="ncr-page-decor__layer-5"></div>
							</div>
							<!-- Decoration / End -->

							<!-- Filter -->
							<ul class="team-player__filter list-unstyled nav">
								<li class="team-player__filter-item">
									<a href="#player-0" role="tab" data-toggle="tab" class="team-player__filter-inner active">
										<img src="assets/img/samples/streams-filter-avatar-02.png" alt="James Spiegel" class="team-player__filter-img">
									</a>
								</li>
								<li class="team-player__filter-item">
									<a href="#player-1" role="tab" data-toggle="tab" class="team-player__filter-inner ">
										<img src="assets/img/samples/streams-filter-avatar-03.png" alt="Julie Rodgers" class="team-player__filter-img">
									</a>
								</li>
								<li class="team-player__filter-item">
									<a href="#player-2" role="tab" data-toggle="tab" class="team-player__filter-inner ">
										<img src="assets/img/samples/streams-filter-avatar-04.png" alt="April Summers" class="team-player__filter-img">
									</a>
								</li>
								<li class="team-player__filter-item">
									<a href="#player-3" role="tab" data-toggle="tab" class="team-player__filter-inner ">
										<img src="assets/img/samples/streams-filter-avatar-05.png" alt="Mark Johnson" class="team-player__filter-img">
									</a>
								</li>
								<li class="team-player__filter-item">
									<a href="#player-4" role="tab" data-toggle="tab" class="team-player__filter-inner ">
										<img src="assets/img/samples/streams-filter-avatar-06.png" alt="Sarah Stacy" class="team-player__filter-img">
									</a>
								</li>
							</ul>
							<!-- Filter / End -->
							<div class="tab-content">

								<div class="tab-pane fade show active" id="player-0" role="tabpanel">
									<div class="team-player__info">
										<div class="team-player__header">
											<h2 class="team-player__name h6 color-primary">James Spiegel</h2>
											<h1 class="team-player__nickname h3">
												<span class="position-relative">DaVikinger90<a class="add-icon" href="team-player-1.html"></a></span>
											</h1>
											<ul class="social-menu social-menu--default">
												<li><a href="https://www.facebook.com/danfisher.dev/" target="_blank"></a></li>
												<li><a href="https://twitter.com/danfisher_dev" target="_blank"></a></li>
												<li><a href="https://twitch.tv" target="_blank"></a></li>
												<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
											</ul>
										</div>
										<div class="team-player__photo">
											<img src="assets/img/samples/team-info-page-player-photo-01.png" alt="James Spiegel aka DaVikinger90">
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="player-1" role="tabpanel">
									<div class="team-player__info">
										<div class="team-player__header">
											<h2 class="team-player__name h6 color-primary">Julie Rodgers</h2>
											<h1 class="team-player__nickname h3">
												<span class="position-relative">JULIE_NOIRE<a class="add-icon" href="team-player-2.html"></a></span>
											</h1>
											<ul class="social-menu social-menu--default">
												<li><a href="https://www.facebook.com/danfisher.dev/" target="_blank"></a></li>
												<li><a href="https://twitter.com/danfisher_dev" target="_blank"></a></li>
												<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
											</ul>
										</div>
										<div class="team-player__photo">
											<img src="assets/img/samples/team-info-page-player-photo-02.png" alt="Julie Rodgers aka JULIE_NOIRE">
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="player-2" role="tabpanel">
									<div class="team-player__info">
										<div class="team-player__header">
											<h2 class="team-player__name h6 color-primary">April Summers</h2>
											<h1 class="team-player__nickname h3">
												<span class="position-relative">G-Huntress<a class="add-icon" href="team-player-3.html"></a></span>
											</h1>
											<ul class="social-menu social-menu--default">
												<li><a href="https://twitter.com/danfisher_dev" target="_blank"></a></li>
												<li><a href="https://twitch.tv" target="_blank"></a></li>
												<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
											</ul>
										</div>
										<div class="team-player__photo">
											<img src="assets/img/samples/team-info-page-player-photo-03.png" alt="April Summers aka G-Huntress">
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="player-3" role="tabpanel">
									<div class="team-player__info">
										<div class="team-player__header">
											<h2 class="team-player__name h6 color-primary">Mark Johnson</h2>
											<h1 class="team-player__nickname h3">
												<span class="position-relative">Crazzzy_80<a class="add-icon" href="team-player-4.html"></a></span>
											</h1>
											<ul class="social-menu social-menu--default">
												<li><a href="https://www.facebook.com/danfisher.dev/" target="_blank"></a></li>
												<li><a href="https://twitter.com/danfisher_dev" target="_blank"></a></li>
												<li><a href="https://twitch.tv" target="_blank"></a></li>
												<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
											</ul>
										</div>
										<div class="team-player__photo">
											<img src="assets/img/samples/team-info-page-player-photo-04.png" alt="Mark Johnson aka Crazzzy_80">
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="player-4" role="tabpanel">
									<div class="team-player__info">
										<div class="team-player__header">
											<h2 class="team-player__name h6 color-primary">Sarah Stacy</h2>
											<h1 class="team-player__nickname h3">
												<span class="position-relative">FAYEDBEBOP<a class="add-icon" href="team-player-5.html"></a></span>
											</h1>
											<ul class="social-menu social-menu--default">
												<li><a href="https://www.facebook.com/danfisher.dev/" target="_blank"></a></li>
												<li><a href="https://twitch.tv" target="_blank"></a></li>
												<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
											</ul>
										</div>
										<div class="team-player__photo">
											<img src="assets/img/samples/team-info-page-player-photo-05.png" alt="Sarah Stacy aka FAYEDBEBOP">
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
@endsection

