<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ffffff">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="manifest.json">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
	<script type="text/javascript">

		window._wpemojiSettings = {
				"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/",
				"ext": ".png",
				"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/",
				"svgExt": ".svg",
				"source": {
						"concatemoji": "https:\/\/airbnb.design\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.3"
				}
		};

		!function(a, b, c) {
				function d(a) {
						var b, c, d, e, f = String.fromCharCode;
						if (!k || !k.fillText) return !1;
						switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
								case "flag":
										return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
								case "emoji4":
										return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
						}
						return !1
				}

				function e(a) {
						var c = b.createElement("script");
						c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
				}

				var f, g, h, i, j = b.createElement("canvas"),
						k = j.getContext && j.getContext("2d");
				for (i = Array("flag", "emoji4"), c.supports = {
								everything: !0,
								everythingExceptFlag: !0
						}, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
				c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
						c.DOMReady = !0
				}, c.supports.everything || (g = function() {
						c.readyCallback()
				}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
						"complete" === b.readyState && c.readyCallback()
				})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
		}(window, document, window._wpemojiSettings);

	</script>

	<style type="text/css">
		img.wp-smiley,
		img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 .07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
		}
	</style>

</head>
<body <?php body_class(); ?>>
<header>
	<div id="header-container">
		<a id="AirBnBLogo" href="/" title="Airbnb Design" rel="home">
				<h1 class="logo">
					<span>Airbnb Design</span>
				</h1>
		</a>
		<nav>
			<div class="menu-main-menu-container">
				<ul id="menu-main-menu" class="menu">
					<li id="menu-item-4537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4537">
						<a href="/articles">Articles</a>
					</li>
					<li id="menu-item-4375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4375">
						<a href="/upcoming-events">Events</a>
					</li>
					<li id="menu-item-4608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4608">
						<a href="/videos">Videos</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-search">
						<a id="search" href="/?s">
							<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" style="fill: #2b2b2b;height: 17px;width: 17px;">
								<path fill-rule="evenodd" d="M23.53 22.47l-6.807-6.808A9.455 9.455 0 0 0 19 9.5 9.5 9.5 0 1 0 9.5 19c2.353 0 4.502-.86 6.162-2.277l6.808 6.807a.75.75 0 0 0 1.06-1.06zM9.5 17.5a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path>
							</svg>
							<span class="screen-reader-text">&nbsp&nbspSearch</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div id="hamburger">
			<div id="lines">
				<span></span>
				<span></span>
			</div>
			<div id="thex">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</header>