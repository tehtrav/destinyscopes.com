<!DOCTYPE html>
<?php 
function stripFormatting($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
?>
<head>
	<title></title>
	<link rel="stylesheet" href="public/stylesheets/main.min.css">
</head>
<!-- !Body -->
<body>

	<header id="global-header">
		<h1>Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend">Legend</a>
	</header>

	<div class="layout">
		<div class="primary-column">
			

			<?php 
				/*			
				$scopeName      = "Torch HS2";
				$scopeImg       = "public/images/red-dot-oes.jpg";
				$scopeIcon      = "public/images/red-dot-oes.jpg";
				$scopeDesc      = "Omolon close quarters combat sights. CQ optics, improved target acquisition.";
				$scopeZoom      = .1;
				$scopeRange     = 2;
				$scopeStability = -3;
				$scopeHandling  = 4;
				include("scope-item.php"); 
				*/
			?>

			<?php 
			/*
				$scopeName      = "Red Dot OES";
				$scopeImg       = "public/images/red-dot-oes.jpg";
				$scopeIcon      = "public/images/red-dot-oes.jpg";
				$scopeDesc      = "Omolon close quarters combat sights. CQ optics, improved target acquisition.";
				$scopeZoom      = -.3;
				$scopeRange     = "0.2";
				$scopeStability = "0.3";
				$scopeHandling  = "0.4";
				include("scope-item.php"); */
			?>



			<!-- Item -->
			<!-- <article class="item" id="torch-hs2">
			    <div class="visual">
			        <img src="public/images/red-dot-oes.jpg">
			        <div class="details">
			            <div class="icon"></div>
			            <h2 class="name">Torch HS2</h2>
			            <p class="description">Omolon close quarters combat sights. CQ optics, improved target acquisition.</p>
			        </div>
			    </div>
			    <ul class="stats">
			        <li class="stats-zoom">
			            <span class="label">Zoom</span>
			            <div class="graph">
			                <div class="plot positive" data-size="0.2" style="width: 1px;"></div>
			            </div>
			            <span class="amount">+0.2</span>
			        </li>
			        <li class="stats-range">
			            <span class="label">Range</span>
			            <div class="graph">
			                <div class="plot positive" data-size="2" style="width: 10px;"></div>
			            </div>
			            <span class="amount">+2</span>
			        </li>
			        <li class="stats-stability">
			            <span class="label">Stability</span>
			            <div class="graph">
			                <div class="plot positive" data-size="12" style="width: 60px;"></div>
			            </div>
			            <span class="amount">+12</span>
			        </li>
			    </ul>
			</article> -->

		</div>
		<div class="secondary-column">
			<div id="legend" class="legend">
				<h4>Iron Sites</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h4>Red Dot Sites</h4>
				<ul>
					<li><a href="#">Red Dot</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h5>Omolon</h5>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h5>Suros</h5>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h5>Hakke</h5>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h4>Ranged Scopes</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
				<h4>Sniper Scopes</h4>
				<ul>
					<li><a href="#">SteadyHand IS</a></li>
					<li><a href="#">QuickDraw IS</a></li>
					<li><a href="#">SureShot IS</a></li>
				</ul>
			</div>
		</div>
	</div><!-- layout -->
	<footer id="global-footer">

		<p>A hobby project by @tehtrav. Contact me on <a href="http://twitter.com/tehtrav">Twitter</a> or by

		<script type="text/javascript" language="javascript">
		<!--
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
		//-->
		</script><noscript>Email</noscript> for questions or comments.</p>

	</footer>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="resources/scripts/scopes.js"></script>
	<!-- 
	<script src="resources/scripts/scripts.js"></script>
	-->
	
	

</body>
</html>
