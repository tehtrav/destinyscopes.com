<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="build/css/main.min.css">
    <meta name="description" content="A website for viewing screenshots of the many scopes and sights available in the game Destiny, made by Bungie" />
	<meta name="keywords" content="Destiny, Bungie, Destiny The Game, Scopes, Weapons, Sights, Screenshots, Shortgaze, Ambush, Red Dot Sight, ACOG" />
    <link rel="shortcut icon" href="resources/images/favicon.ico">
    <link rel="icon" type="image/png" href="resources/images/favicon-16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="resources/images/favicon-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="resources/images/favicon-96.png" sizes="96x96">
	<link rel="apple-touch-icon" sizes="152x152" href="resources/images/favicon-152.png">
	<title>Destinyscopes.com</title>
</head>
<body class="no-js" data-spy="scroll" data-target="#legend">
	<header class="global-header">
		<h1 class="logo">Destiny Scopes</h1>
		<a class="jump-to-legend" href="#legend"><span>Legend</span></a>
	</header>
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
                        <div class="checkbox">
                            <label><input type="checkbox" id="show-stats-preference" name="show-stats-preference"> Show stats in list view</label>
                        </div>
                    </div>
                    <div class="box-section site-notes">
                        <h5>Aim Assist</h5>
                        <p class="small">Credit goes to <a href="http://www.reddit.com/user/suinoq">suinoq</a> and <a href="http://www.reddit.com/user/maniacgreek">maniacgreek</a> from Reddit. Lots of info on how they came to the numbers that they did can be found in <a>this reddit post</a>.</p>
                        <h5>Stat Values</h5>
                        <p class="small">If stat values (including aim assist &amp; zoom) are not shown it's because either the scope doesn't affect any or I don't know them.</p>
                        <h5>Zoom Numbers</h5>
                        <p class="small">Each weapon type has a different base zoom. The numbers you see on this site with an plus sign are additive to the weapon's base zoom.</p>
                        <table class="table table-condensed small">
                            <tr>
                                <td>Hand Cannons</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>Auto Rifles</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>Pulse Rifles</td>
                                <td>1.7</td>
                            </tr>
                            <tr>
                                <td>Scout Rifles</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>Fusion Rifles</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>Shotguns</td>
                                <td>1.2</td>
                            </tr>
                            <tr>
                                <td>Machine Guns</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>Rocket Launchers</td>
                                <td>2.0</td>
                            </tr>
                        </table>
                        <p class="small">See this amazing Reddit post by <a href="http://www.reddit.com/user/suinoq">suinoq</a> for more info on how the resulting zoom is calculated.</p>
                    </div>
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
                </div>
                <?php include 'resources/php/noscript-scope-list.php' ?>
			</div>
		</div>
	</div>
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
