<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Warmup</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Assine nossa Newsletter, e receba as nossa novidades e promoções em seu email!</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Sucesso!</strong> Seu email foi adicionado com sucesso!
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Assinar!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Ultimos Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contato</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> (123) 456-789</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contato@warmupdelivery.com.br">contato@warmupdelivery.com.br</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Redes Sociais</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="/site/img/logo_1_pb.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2016. Todos os direitos reservados.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										{{-- <li><a href="sitemap.html">Sitemap</a></li> --}}
										<li><a href="contact-us.html">Contato</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>