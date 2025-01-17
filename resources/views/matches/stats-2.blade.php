@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->

        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Friday Jan 4th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Ice Panthers
					</div>
					<h1 class="page-heading__title h2">League of Heroes World Cup</h1>
				</div>

				<ul class="match-stats-links match-stats-links--main match-stats-links--color-light">
					<li>
						<a href="./matches-overview-1.html">
							<svg role="img" class="df-icon df-icon--overview">
								<use xlink:href="assets/img/necromancers.svg#overview"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="active">
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
						<a href="./matches-replay.html">
							<svg role="img" class="df-icon df-icon--replay">
								<use xlink:href="assets/img/necromancers.svg#replay"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="matches-tabs mt-sm-auto mb-sm-auto">
					<ul class="matches-tabs__navigation matches-tabs__navigation--color-light nav" role="tablist">
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
						<div class="match-stats-container tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result team-blue">team 01</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--winner-left">
											<span class="match-result__score">7 : 4</span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-4" role="group">
												<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">ICP</div>
													<div class="match-team__result team-red">team 02</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Duration</span><span>33:06</span></li>
									<li><span>Status</span><span>Final Score</span></li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
										</ul>
										<span>Picks</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
										</ul>
									</li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
										</ul>
										<span>Bans</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">36</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Kills</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 80%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">27</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">29</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 65%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Deaths</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">41</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">70</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Assists</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 48%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">33</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">64.2</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Gold (K)</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 85%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">49.7</div>
										</div>
									</li>
									<li class="match-stats-widget__details">
										<ul>
											<li>
												<svg role="img" class="df-icon df-icon--towers-destroyed">
													<use xlink:href="assets/img/necromancers.svg#towers-destroyed"/>
												</svg>
												<span class="team-blue">5</span> - <span class="team-red">2</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--inhibitors-destroyed">
													<use xlink:href="assets/img/necromancers.svg#inhibitors-destroyed"/>
												</svg>
												<span class="team-blue">0</span> - <span class="team-red">2</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--baron-kills">
													<use xlink:href="assets/img/necromancers.svg#baron-kills"/>
												</svg>
												<span class="team-blue">1</span> - <span class="team-red">1</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--dragon-kills">
													<use xlink:href="assets/img/necromancers.svg#dragon-kills"/>
												</svg>
												<span class="team-blue">0</span> - <span class="team-red">0</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--rift-heralds-killed">
													<use xlink:href="assets/img/necromancers.svg#rift-heralds-killed"/>
												</svg>
												<span class="team-blue">1</span> - <span class="team-red">2</span>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<div class="match-stats-widget-tabs">
									<ul class="match-stats-widget-tabs__header nav list-unstyled " role="tablist">
										<li><a href="#match-stats-widget-tab-01" role="tab" data-toggle="tab" class="active">Damage</a></li>
										<li><a href="#match-stats-widget-tab-02" role="tab" data-toggle="tab">KDA</a></li>
										<li><a href="#match-stats-widget-tab-03" role="tab" data-toggle="tab">Gold</a></li>
										<li><a href="#match-stats-widget-tab-04" role="tab" data-toggle="tab">CS</a></li>
									</ul>
									<div class="match-stats-widget-tabs__body tab-content">
										<ul class="list-unstyled tab-pane fade show active" id="match-stats-widget-tab-01" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">13.014</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">12.870</div>
													<div class="match-stats-progress__bar">
														<span style="width: 76%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-tab-02" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">14.976</div>
													<div class="match-stats-progress__bar">
														<span style="width: 95%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.542</div>
													<div class="match-stats-progress__bar">
														<span style="width: 54%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-tab-03" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">115</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">75</div>
													<div class="match-stats-progress__bar">
														<span style="width: 64%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">38</div>
													<div class="match-stats-progress__bar">
														<span style="width: 36%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-tab-04" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.9</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">7.7</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">3.1</div>
													<div class="match-stats-progress__bar">
														<span style="width: 40%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="match-stats-container tab-pane fade" id="tab-2" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result team-blue">team 01</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--winner-right">
											<span class="match-result__score">3 : 5</span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-4" role="group">
												<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">ICP</div>
													<div class="match-team__result team-red">team 02</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Duration</span><span>29:53</span></li>
									<li><span>Status</span><span>Final Score</span></li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
										</ul>
										<span>Picks</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
										</ul>
									</li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
										</ul>
										<span>Bans</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">27</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 80%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Kills</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 100%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">36</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">41</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Deaths</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 65%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">29</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">33</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 48%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Assists</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 100%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">70</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">49.7</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 85%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Gold (K)</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 100%">&nbsp;&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">64.2</div>
										</div>
									</li>
									<li class="match-stats-widget__details">
										<ul>
											<li>
												<svg role="img" class="df-icon df-icon--towers-destroyed">
													<use xlink:href="assets/img/necromancers.svg#towers-destroyed"/>
												</svg>
												<span class="team-blue">2</span> - <span class="team-red">1</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--inhibitors-destroyed">
													<use xlink:href="assets/img/necromancers.svg#inhibitors-destroyed"/>
												</svg>
												<span class="team-blue">2</span> - <span class="team-red">0</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--baron-kills">
													<use xlink:href="assets/img/necromancers.svg#baron-kills"/>
												</svg>
												<span class="team-blue">1</span> - <span class="team-red">1</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--dragon-kills">
													<use xlink:href="assets/img/necromancers.svg#dragon-kills"/>
												</svg>
												<span class="team-blue">0</span> - <span class="team-red">0</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--rift-heralds-killed">
													<use xlink:href="assets/img/necromancers.svg#rift-heralds-killed"/>
												</svg>
												<span class="team-blue">2</span> - <span class="team-red">5</span>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<div class="match-stats-widget-tabs">
									<ul class="match-stats-widget-tabs__header nav list-unstyled " role="tablist">
										<li><a href="#match-stats-widget-02-tab-01" role="tab" data-toggle="tab">Damage</a></li>
										<li><a href="#match-stats-widget-02-tab-02" role="tab" data-toggle="tab">KDA</a></li>
										<li><a href="#match-stats-widget-02-tab-03" role="tab" data-toggle="tab" class="active">Gold</a></li>
										<li><a href="#match-stats-widget-02-tab-04" role="tab" data-toggle="tab">CS</a></li>
									</ul>
									<div class="match-stats-widget-tabs__body tab-content">
										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-02-tab-01" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">13.014</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">12.870</div>
													<div class="match-stats-progress__bar">
														<span style="width: 76%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-02-tab-02" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">14.976</div>
													<div class="match-stats-progress__bar">
														<span style="width: 95%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.542</div>
													<div class="match-stats-progress__bar">
														<span style="width: 54%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade show active" id="match-stats-widget-02-tab-03" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">115</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">75</div>
													<div class="match-stats-progress__bar">
														<span style="width: 64%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">38</div>
													<div class="match-stats-progress__bar">
														<span style="width: 36%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-02-tab-04" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.9</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">7.7</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">3.1</div>
													<div class="match-stats-progress__bar">
														<span style="width: 40%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="match-stats-container tab-pane fade" id="tab-3" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result team-blue">team 01</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--winner-left">
											<span class="match-result__score">4 : 3</span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-4" role="group">
												<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">ICP</div>
													<div class="match-team__result team-red">team 02</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Duration</span><span>22:08</span></li>
									<li><span>Status</span><span>Final Score</span></li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
										</ul>
										<span>Picks</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
										</ul>
									</li>
									<li>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-06-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-07-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-08-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-09-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-10-sm.jpg" alt=""></li>
										</ul>
										<span>Bans</span>
										<ul class="match-team-list">
											<li><img src="assets/img/samples/match-hero-avatar-01-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-02-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-03-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-04-sm.jpg" alt=""></li>
											<li><img src="assets/img/samples/match-hero-avatar-05-sm.jpg" alt=""></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">36</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Kills</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 90%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">32</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">34</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 75%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Deaths</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">41</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">70</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Assists</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 65%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">58</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--double">
											<div class="match-stats-progress__score">64.2</div>
											<div class="match-stats-progress__bar">
												<span class="team-blue" style="width: 100%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__label">Gold (K)</div>
											<div class="match-stats-progress__bar">
												<span class="team-red" style="width: 85%">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">49.7</div>
										</div>
									</li>
									<li class="match-stats-widget__details">
										<ul>
											<li>
												<svg role="img" class="df-icon df-icon--towers-destroyed">
													<use xlink:href="assets/img/necromancers.svg#towers-destroyed"/>
												</svg>
												<span class="team-blue">5</span> - <span class="team-red">2</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--inhibitors-destroyed">
													<use xlink:href="assets/img/necromancers.svg#inhibitors-destroyed"/>
												</svg>
												<span class="team-blue">0</span> - <span class="team-red">2</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--baron-kills">
													<use xlink:href="assets/img/necromancers.svg#baron-kills"/>
												</svg>
												<span class="team-blue">1</span> - <span class="team-red">1</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--dragon-kills">
													<use xlink:href="assets/img/necromancers.svg#dragon-kills"/>
												</svg>
												<span class="team-blue">0</span> - <span class="team-red">0</span>
											</li>
											<li>
												<svg role="img" class="df-icon df-icon--rift-heralds-killed">
													<use xlink:href="assets/img/necromancers.svg#rift-heralds-killed"/>
												</svg>
												<span class="team-blue">1</span> - <span class="team-red">2</span>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<div class="match-stats-widget-tabs">
									<ul class="match-stats-widget-tabs__header nav list-unstyled " role="tablist">
										<li><a href="#match-stats-widget-03-tab-01" role="tab" data-toggle="tab">Damage</a></li>
										<li><a href="#match-stats-widget-03-tab-02" role="tab" data-toggle="tab">KDA</a></li>
										<li><a href="#match-stats-widget-03-tab-03" role="tab" data-toggle="tab">Gold</a></li>
										<li><a href="#match-stats-widget-03-tab-04" role="tab" data-toggle="tab" class="active">CS</a></li>
									</ul>
									<div class="match-stats-widget-tabs__body tab-content">
										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-03-tab-01" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">13.014</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">12.870</div>
													<div class="match-stats-progress__bar">
														<span style="width: 76%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-03-tab-02" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">15.235</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">14.976</div>
													<div class="match-stats-progress__bar">
														<span style="width: 95%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.542</div>
													<div class="match-stats-progress__bar">
														<span style="width: 54%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade" id="match-stats-widget-03-tab-03" role="tabpanel">
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">115</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">75</div>
													<div class="match-stats-progress__bar">
														<span style="width: 64%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">38</div>
													<div class="match-stats-progress__bar">
														<span style="width: 36%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>

										<ul class="list-unstyled tab-pane fade show active" id="match-stats-widget-03-tab-04" role="tabpanel">
											<li class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">mid | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">8.9</div>
													<div class="match-stats-progress__bar">
														<span style="width: 100%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">jungle</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">7.7</div>
													<div class="match-stats-progress__bar">
														<span style="width: 85%">&nbsp;</span>
													</div>
												</div>
											</li>
											<li class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Arrowhead</span>
														<span class="match-player__name">top | solo</span>
													</figcaption>
												</figure>
												<div class="match-stats-progress">
													<div class="match-stats-progress__score">3.1</div>
													<div class="match-stats-progress__bar">
														<span style="width: 40%">&nbsp;</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
@endsection

