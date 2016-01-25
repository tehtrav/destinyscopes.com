<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- All CSS -->
	<link rel="stylesheet" href="public/stylesheets/main.min.css">

</head>
<body data-spy="scroll" data-target="#legend">
	<header id="global-header">
		<h1>Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend"><span>Legend</span></a>
	</header>

	<div class="container-fluid">
		<div class="row">
			<div class="secondary-column col-md-3 col-lg-2">
				<div id="legend" class="legend">
				</div>
			</div>
			<div class="primary-column col-md-9 col-lg-10">
			</div>
		</div>
	</div>

	<footer id="global-footer">
		<p>A hobby project by @tehtrav. Contact me on <a href="http://twitter.com/tehtrav">Twitter</a> or by
		<script type="text/javascript" language="javascript">
		// Email obfuscator script 2.1 by Tim Williams, University of Arizona
		// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
		// This code is freeware provided these four comment lines remain intact
		// A wizard to generate this code is at http://www.jottings.com/obfuscator/
		{ coded = "nus95crr55nNzz@i6spr.IW6"
			key = "fYXSRUcqhN1TLVMwisKy9EmrzPCtboIQ23Z74Ajxp5D0eB6uGJOnHWga8kvFdl"
			shift=coded.length
			link=""
			for (i=0; i<coded.length; i++) {
				if (key.indexOf(coded.charAt(i))==-1) {
					ltr = coded.charAt(i)
					link += (ltr)
				}
				else {
					ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
					link += (key.charAt(ltr))
				}
			}
			document.write("<a href='mailto:"+link+"'>Email</a>")
		}
		</script><noscript>Email</noscript> for questions or comments.</p>

	</footer>

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.min.js"></script>
	<script src="resources/scripts/scopes.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-72752759-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
