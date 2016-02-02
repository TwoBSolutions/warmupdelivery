	@include('site.layout.header')
	<body>

			<div class="body">
			@include('site.pages.head')
			</div>
			<div role="main" class="main">

			@include('site.pages.slider')

			{{-- 	<div class="home-intro" id="home-intro">
					<div class="container">

						<div class="row">
							<div class="col-md-8">
								<p>
									The fastest way to grow your business with the leader in <em>Technology</em>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-md-4">
								<div class="get-started">
									<a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>

					</div>
				</div>
 --}}
				@include('site.pages.page1')
				@include('site.pages.page2')
				@include('site.pages.page3')

					
	

		

				<section class="parallax section section-text-light section-parallax section-center mt-none" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-image.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options='{"items": 1, "loop": false}'>
									
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												{{-- <div class="testimonial-author">
													<img src="/site/img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
												</div> --}}
												<blockquote>
													<p>Nossa missão é garantir a excelência na entrega de produtos, oferecendo um serviço de delivery com rapidez, qualidade  e preço justo. Nossa atividade está voltada principalmente aos jovens cariocas que frequentam festas e que sem reúnem para confraternizar, por isso nosso aplicativo possui conteúdos específicos e diferenciados como uma aba com os melhores eventos da cidade e playlists para deixar os encontros e festas ainda melhores.</p>
												</blockquote>
												<div class="testimonial-author">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-none word-rotator-title mt-lg">
								Trabalhamos com								<strong>
									<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
										<span class="word-rotate-items">
											<span>As Melhores</span>
											<span>Marcas</span>
										</span>
									</span>
								</strong>
								
							</h2>
							<p class="lead">Temos os melhores produtos, para garantir o sucesso da sua festa.</p>
						</div>
					</div>
					<div class="row center mt-xl">
						<div class="owl-carousel owl-theme logo-brands" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
							<div>
								<img class="img-responsive" src="/site/img/logos/camel-logo.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/jack-logo-open-graph.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/johnnie_walker_keep_walking.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/bohemia1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/heineken.svg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/stella.gif" alt="">
							</div>
							<div>
								<img class="img-responsive" src="/site/img/logos/New_Doritos_Logo.png" alt="">
							</div>
							
						</div>
					</div>
				</div>

				<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
					<div class="container">
						<div class="row text-center">
							<div class="col-md-12">
								<div class="">
									<h3>Tudo que <strong>precisa</strong> para garantir o sucesso de sua <strong>Festa!!</strong>!</h3>
									<p>A <strong>Melhor</strong> opção para comprar conveniencias na <strong>madrugada</strong>!</p>
								</div>
								
							</div>

									<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Baixe Agora!!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
								
						</div>
					</div>
				</section>

			</div>

			@include('site.layout.footer')
		</div>

		@include('site.layout.scripts')

	</body>
</html>
