@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Wednesday Feb 14th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Fierce Eagles
					</div>
					<h1 class="page-heading__title h2">Striker Go Tournament</h1>
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
													<div class="match-team__country ">USA</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--detailed">
											<span class="match-result__score--sm"><span class="team-cyan">12</span> - <span class="team-yellow">4</span></span>
											<span class="match-result__score">16 : 12</span>
											<span class="match-result__score--sm"><span class="team-cyan">5</span> - <span class="team-yellow">7</span></span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-5" role="group">
												<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">FEG</div>
													<div class="match-team__country ">FRA</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Map / Level</span><span>Downpass</span></li>
									<li><span>Duration</span><span>32:29</span></li>
									<li class="team-blue">
										<figure class="match-player  match-player--small" role="group">
											<figure class="match-player__avatar">
													<svg role="img" class="df-icon df-icon--medal">
														<use xlink:href="assets/img/necromancers.svg#medal"/>
													</svg>
											</figure>
											<figcaption>
												<span class="match-player__nickname">Sam-X-99</span>
												<span class="match-player__name color-primary">Match MVP</span>
											</figcaption>
										</figure>
										<span>5.2<span class="color-primary">KDA R</span></span>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--kills">
												<use xlink:href="assets/img/necromancers.svg#kills"/>
											</svg>
											<div class="match-stats-progress__label">Kills</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">34</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 80%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">29</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--deaths">
												<use xlink:href="assets/img/necromancers.svg#deaths"/>
											</svg>
											<div class="match-stats-progress__label">Deaths</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 70%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">14</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">21</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--assists">
												<use xlink:href="assets/img/necromancers.svg#assists"/>
											</svg>
											<div class="match-stats-progress__label">Assists</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">26</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 45%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">10</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--ratio">
												<use xlink:href="assets/img/necromancers.svg#chart"/>
											</svg>
											<div class="match-stats-progress__label">KDR.R</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.67</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 75%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.14</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<table class="match-stats-widget-table nano">
									<thead>
										<tr>
											<th>
												Team
												<span>
													<span class="team-yellow">T</span> - <span class="team-cyan">CT</span>
												</span>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-1" role="group">
													<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
												</figure>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-5" role="group">
													<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
												</figure>
											</th>
										</tr>
									</thead>
									<tbody class="nano-content">
										<tr>
											<td>Round 1</td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 2</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 3</td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-cyan">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 4</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-cyan">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 5</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-yellow">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 6</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-cyan">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 7</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-yellow">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 8</td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-cyan">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 9</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 10</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
									</tbody>
								</table>
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
													<div class="match-team__country ">USA</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--detailed">
											<span class="match-result__score--sm"><span class="team-cyan">4</span> - <span class="team-yellow">6</span></span>
											<span class="match-result__score">10 : 13</span>
											<span class="match-result__score--sm"><span class="team-cyan">6</span> - <span class="team-yellow">7</span></span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-5" role="group">
												<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">FEG</div>
													<div class="match-team__country ">FRA</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Map / Level</span><span>Downpass</span></li>
									<li><span>Duration</span><span>29:51</span></li>
									<li class="team-blue">
										<figure class="match-player  match-player--small" role="group">
											<figure class="match-player__avatar">
													<svg role="img" class="df-icon df-icon--medal">
														<use xlink:href="assets/img/necromancers.svg#medal"/>
													</svg>
											</figure>
											<figcaption>
												<span class="match-player__nickname">The Destroy</span>
												<span class="match-player__name color-primary">Match MVP</span>
											</figcaption>
										</figure>
										<span>5.2<span class="color-primary">KDA R</span></span>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--kills">
												<use xlink:href="assets/img/necromancers.svg#kills"/>
											</svg>
											<div class="match-stats-progress__label">Kills</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 80%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">29</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">34</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--deaths">
												<use xlink:href="assets/img/necromancers.svg#deaths"/>
											</svg>
											<div class="match-stats-progress__label">Deaths</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">21</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 70%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">14</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--assists">
												<use xlink:href="assets/img/necromancers.svg#assists"/>
											</svg>
											<div class="match-stats-progress__label">Assists</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 45%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">10</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">26</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--ratio">
												<use xlink:href="assets/img/necromancers.svg#chart"/>
											</svg>
											<div class="match-stats-progress__label">KDR.R</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 75%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.14</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.67</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<table class="match-stats-widget-table nano">
									<thead>
										<tr>
											<th>
												Team
												<span>
													<span class="team-yellow">T</span> - <span class="team-cyan">CT</span>
												</span>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-1" role="group">
													<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
												</figure>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-5" role="group">
													<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
												</figure>
											</th>
										</tr>
									</thead>
									<tbody class="nano-content">
										<tr>
											<td>Round 1</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-cyan">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 2</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-yellow">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 3</td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-cyan">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 4</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 5</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 6</td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 7</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 8</td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-cyan">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 9</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-cyan">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 10</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-yellow">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
									</tbody>
								</table>
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
													<div class="match-team__country ">USA</div>
											</figcaption>
										</figure>
										<div class="match-result match-result--detailed">
											<span class="match-result__score--sm"><span class="team-cyan">8</span> - <span class="team-yellow">7</span></span>
											<span class="match-result__score">14 : 11</span>
											<span class="match-result__score--sm"><span class="team-cyan">6</span> - <span class="team-yellow">4</span></span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-5" role="group">
												<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">FEG</div>
													<div class="match-team__country ">FRA</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Map / Level</span><span>Downpass</span></li>
									<li><span>Duration</span><span>35:07</span></li>
									<li class="team-blue">
										<figure class="match-player  match-player--small" role="group">
											<figure class="match-player__avatar">
													<svg role="img" class="df-icon df-icon--medal">
														<use xlink:href="assets/img/necromancers.svg#medal"/>
													</svg>
											</figure>
											<figcaption>
												<span class="match-player__nickname">DaVikinger90</span>
												<span class="match-player__name color-primary">Match MVP</span>
											</figcaption>
										</figure>
										<span>5.2<span class="color-primary">KDA R</span></span>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--kills">
												<use xlink:href="assets/img/necromancers.svg#kills"/>
											</svg>
											<div class="match-stats-progress__label">Kills</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">34</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 67%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">24</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--deaths">
												<use xlink:href="assets/img/necromancers.svg#deaths"/>
											</svg>
											<div class="match-stats-progress__label">Deaths</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 70%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">14</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">21</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--assists">
												<use xlink:href="assets/img/necromancers.svg#assists"/>
											</svg>
											<div class="match-stats-progress__label">Assists</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">26</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 65%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">16</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress match-stats-progress--icon">
											<svg role="img" class="match-stats-progress__icon df-icon df-icon--ratio">
												<use xlink:href="assets/img/necromancers.svg#chart"/>
											</svg>
											<div class="match-stats-progress__label">KDR.R</div>
											<div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-1" style="width: 100%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.67</div>
												</div>
												<div class="match-stats-progress__bar-group">
													<div class="match-stats-progress__bar">
														<span class="team-5" style="width: 82%">&nbsp;</span>
													</div>
													<div class="match-stats-progress__score">1.36</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<table class="match-stats-widget-table nano">
									<thead>
										<tr>
											<th>
												Team
												<span>
													<span class="team-yellow">T</span> - <span class="team-cyan">CT</span>
												</span>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-1" role="group">
													<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
												</figure>
											</th>
											<th>
												<figure class="match-team-logo match-team-logo--team-5" role="group">
													<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
												</figure>
											</th>
										</tr>
									</thead>
									<tbody class="nano-content">
										<tr>
											<td>Round 1</td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 2</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 3</td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-cyan">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 4</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-yellow">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 5</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-yellow">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 6</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-cyan">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 7</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--pliers team-cyan">
													<use xlink:href="assets/img/necromancers.svg#pliers"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 8</td>
											<td>
												<svg role="img" class="df-icon df-icon--stopwatch team-yellow">
													<use xlink:href="assets/img/necromancers.svg#stopwatch"/>
												</svg>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Round 9</td>
											<td></td>
											<td>
												<svg role="img" class="df-icon df-icon--skull team-cyan">
													<use xlink:href="assets/img/necromancers.svg#skull"/>
												</svg>
											</td>
										</tr>
										<tr>
											<td>Round 10</td>
											<td>
												<svg role="img" class="df-icon df-icon--explosion team-yellow">
													<use xlink:href="assets/img/necromancers.svg#explosion"/>
												</svg>
											</td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection

