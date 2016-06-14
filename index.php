<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="build/css/main.min.css">
	<meta name="description" content="A website for viewing screenshots of the many scopes and sights available in the game Destiny, made by Bungie" />
	<meta name="keywords" content="Destiny, Bungie, Destiny The Game, Scopes, Weapons, Sights, Screenshots, Shortgaze, Ambush, Red Dot Sight, ACOG" />


	<link rel="apple-touch-icon" href="/public/images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/public/images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/public/images/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/public/images/touch-icon-ipad-retina.png">

	<title>Destinyscopes.com</title>

</head>
<body class="no-js" data-spy="scroll" data-target="#legend">
	<header class="global-header">
		<h1 class="logo">Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend"><span>Legend</span></a>
	</header>

    <?php /*
    <div class="inspect">
        <div class="inspect--window">
            <a class="inspect--close" href="#"></a>

            <div class="inspect--container">
                <div class="inspect--image">
                    <div class="visual">
                        <img class="scope-ads" src="resources/images/scope-images/quickdraw-is-ads.jpg">
                        <img class="scope-hip" src="resources/images/scope-images/quickdraw-is.jpg">
                        <p class="zoom">+ 0x</p></div>
                    </div>
                    <div class="inspect--info">
                        <h2 class="scope--title">QuickDraw IS</h2>
                        <p class="scope--desc">SUROS threat evaluation. Highlights enemy Guardians who have charged Supers, and powerful Minions of Darkness.</p>
                        <ul class="scope--stats stats"><li class="stats-range"><span class="label">Range</span><div class="graph"><div class="plot positive" data-size="6" style="width: 18px;"></div></div><span class="amount">+6</span></li><li class="stats-stability"><span class="label">Stability</span><div class="graph"><div class="plot positive" data-size="9" style="width: 27px;"></div></div><span class="amount">+9</span></li><li class="stats-reload"><span class="label">Reload</span><div class="graph"><div class="plot positive" data-size="4" style="width: 12px;"></div></div><span class="amount">+4</span></li><li class="stats-handling"><span class="label">Handling</span><div class="graph"><div class="plot positive" data-size="4" style="width: 12px;"></div></div><span class="amount">+4</span></li></ul>
                    </div>
            </div>
        </div>
    </div>
    */ ?>

	<div class="container">
		<div class="row">
            <div class="secondary-column">
				<div id="legend" class="legend box">
                    <div class="box-section js-only">
                        <div class="search">
                            <input autofocus class="form-control" type="text" placeholder="Search..." data-list=".scope-list">
                        </div>
                        <div class="filters js-only">
                            <div class="checkbox">
                                <label><input type="checkbox" value="sm-classic" checked name="show-Classic"> Classic</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="sm-omolon" checked name="show-Omolon"> Omolon</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="sm-hakke" checked name="show-Hakke"> Hakke</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="sm-suros" checked name="show-Suros"> Suros</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="sm-exotic" checked name="show-Exotics"> Exotics</label>
                            </div>
                        </div>
                        <br>

                        <label>
                            <input type="checkbox" id="show-stats-preference" name="show-stats-preference"> Show stats in list view
                        </label>
                    </div>
                    <div class="box-section site-notes">
                        <h5>Aim Assist</h5>
                        <p class="small">Credit goes to <a href="">suinoq</a> and <a>maniacgreek</a> from Reddit. Lots of info on how they came to the numbers that they did can be found in <a>this reddit post</a>.</p>
                        <h5>Stat Values</h5>
                        <p class="small">If stat values (including aim assist) are not shown it’s because either the scope doesn’t affect any or I don’t know them.</p>
                    </div>
                    <?php include 'resources/php/noscript-scope-nav.php' ?>
				</div>
                <div class="footer">
                    <p class="small">
                        This site is a hobby project by <a href="http://travislehman.com">Travis&nbsp;Lehman</a>
                    </p>
                    <ul class="social-icons">
                        <li><a class="git" href="http://github.com/tehtrav">Github</a></li>
                        <li><a class="twitter" href="http://twitter.com/tehtrav">Twitter</a></li>
                        <li>
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
                    			document.write("<a class='mail' href='mailto:"+link+"'>Email</a>")
                    		}
                    		</script>
                        </li>



                    </ul>
                </div>

			</div>
			<div class="primary-column">

                <div id="scope-list" class="scope-list">
                    <article class="item scope st-iron-sights sm-classic" id="quickdraw-is"><div class="visual"><img class="scope-ads" src="resources/images/scope-images/quickdraw-is-ads.jpg"><img class="scope-hip" src="resources/images/scope-images/quickdraw-is.jpg"><p class="zoom">+ 0x</p></div><div class="details"><div class="icon" style="background-image: url(&quot;resources/images/scope-icons/iron-sites.png&quot;);"></div><h2 class="name">QuickDraw IS</h2><p class="description">Agile sight. Lightning fast handling.</p></div><ul class="stats"><li class="stats-reload"><span class="label">Reload</span><div class="graph"><div class="plot positive" data-size="15" style="width: 45px;"></div></div><span class="amount">+15</span></li><li class="stats-handling"><span class="label">Handling</span><div class="graph"><div class="plot positive" data-size="15" style="width: 45px;"></div></div><span class="amount">+15</span></li></ul></article>


                </div>

                <?php /*
                <div class="placeholder-block">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="https://docs.google.com/spreadsheets/d/1L7FV9l4hXo2tHD3XlFUp854XvJIwTKFIPvASLduPPS4/edit#gid=0">PVP weapons spreadsheet</a> by <a href="http://reddit.com/u/exxtrooper">u/exxtrooper</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/1L7FV9l4hXo2tHD3XlFUp854XvJIwTKFIPvASLduPPS4/edit#gid=0">PVP weapons spreadsheet</a> by <a href="http://reddit.com/u/exxtrooper">u/exxtrooper</a></li>
                    </ul>
                </div>
                */ ?>
                <?php include 'resources/php/noscript-scope-list.php' ?>
			</div>
		</div>
	</div>

	<footer id="global-footer">


	</footer>
	<!--
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
	-->
	<script src="build/js/all.js"></script>

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
