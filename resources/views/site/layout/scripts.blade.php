<!-- Vendor -->
		<script src="/site/vendor/jquery/jquery.js"></script>
		<script src="/site/vendor/jquery.appear/jquery.appear.js"></script>
		<script src="/site/vendor/jquery.easing/jquery.easing.js"></script>
		<script src="/site/vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="/site/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/site/vendor/common/common.js"></script>
		<script src="/site/vendor/jquery.validation/jquery.validation.js"></script>
		<script src="/site/vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="/site/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="/site/vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="/site/vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="/site/vendor/isotope/jquery.isotope.js"></script>
		<script src="/site/vendor/owl.carousel/owl.carousel.js"></script>
		<script src="/site/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="/site/vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/site/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/site/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/site/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="/site/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="/site/js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="/site/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/site/js/theme.init.js"></script>

		<script>

		sortUnorderedList('listaBairros');
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '464639167070592',
		      xfbml      : true,
		      version    : 'v2.5'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));

		  function sortUnorderedList(ul, sortDescending) {
				  if(typeof ul == "string")
				    ul = document.getElementById(ul);

				  // Idiot-proof, remove if you want
				  if(!ul) {
				    alert("The UL object is null!");
				    return;
				  }

				  // Get the list items and setup an array for sorting
				  var lis = ul.getElementsByTagName("LI");
				  var vals = [];

				  // Populate the array
				  for(var i = 0, l = lis.length; i < l; i++)
				    vals.push(lis[i].innerHTML);

				  // Sort it
				  vals.sort();

				  // Sometimes you gotta DESC
				  if(sortDescending)
				    vals.reverse();

				  // Change the list on the page
				  for(var i = 0, l = lis.length; i < l; i++)
				    lis[i].innerHTML = vals[i];
				}
		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->