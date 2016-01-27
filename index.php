<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="public/stylesheets/main.min.css">
	<meta name="description" content="A website for viewing screenshots of the many scopes and sights available in the game Destiny, made by Bungie" />
	<meta name="keywords" content="Destiny, Bungie, Destiny The Game, Scopes, Weapons, Sights, Screenshots, Shortgaze, Ambush, Red Dot Sight, ACOG" />

	<title>Destinyscopes.com</title>

</head>
<body data-spy="scroll" data-target="#legend">
	<header id="global-header">
		<h1>Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend"><span>Legend</span></a>
	</header>

	<div class="container">
		<div class="row">
			<div class="secondary-column col-sm-3 col-lg-2">
				<div id="legend" class="legend">
					<div class="filters">
						<h4>Manufacturers</h4>
                        <div class="checkbox">
						    <label><input type="checkbox" value="sm-classic" checked> Classic</label>
						</div>
                        <div class="checkbox">
						    <label><input type="checkbox" value="sm-omolon" checked> Omolon</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="sm-hakke" checked> Hakke</label>
						</div>
						<div class="checkbox">
						    <label><input type="checkbox" value="sm-suros" checked> Suros</label>
						</div>
					</div>
				</div>
			</div>
			<div class="primary-column col-sm-9 col-lg-10">
			</div>
		</div>
	</div>

	<footer id="global-footer">
		<p>A hobby project by <a href="https://github.com/tehtrav">@tehtrav</a>. Contribute on <a href="https://github.com/tehtrav/destinyscopes.com">Github</a>. Contact me on <a href="http://twitter.com/tehtrav">Twitter</a>, by
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
	<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
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
