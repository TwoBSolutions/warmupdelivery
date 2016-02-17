<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Warmup</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Quero receber promoções no meu email!</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Sucesso!</strong> Seu email foi adicionado com sucesso!
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Receber Promoções!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						{{-- <div class="col-md-3">
							<h4>Ultimos Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div> --}}
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contato</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> Rio de Janeiro</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> (21)  96804-9748</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contato@warmupdelivery.com.br">contato@warmupdelivery.com.br</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<h4>Redes Sociais</h4>
							<div class="row">
								<div class="col-md-2">
								<ul class="social-icons">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/warmupdelivery/?fref=ts" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-instagran"><a href="https://www.instagram.com/warmupdelivery/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
							
							</ul>
						</div>
						<div class="col-md-10">
								<div class="fb-page" data-href="https://www.facebook.com/warmupdelivery/?fref=ts" data-tabs="events,messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/warmupdelivery/?fref=ts"><a href="https://www.facebook.com/warmupdelivery/?fref=ts">WarmUp Delivery</a></blockquote></div></div>
						
						</div>
								
							</div>
					
						
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row  hidden-sm hidden-xs">
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