<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<script type="text/javascript">
    if (window.location.protocol == "http:") {
        var restOfUrl = window.location.href.substr(5);
        window.location = "https:" + restOfUrl;
    }
</script>
<?php session_start(); ?>
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/jquery.scrolly.min.js"></script>
		<script src="/js/jquery.scrollgress.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-layers.min.js"></script>
		<script src="/js/init.js"></script>
			<link rel="stylesheet" href="/css/skel.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/style-wide.css" />
			<link rel="stylesheet" href="/css/style-noscript.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/css/ie/v9.css" /><![endif]-->
<style>
.message:empty {display: none;}
.message {background: rgba(255, 0, 0, 0.45); width: 100%; height: 100px; padding: 10px;}
.index {background: #333333;}

</style>
<link href="data:image/png;base64,
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
" rel="icon" type="image/x-icon">
<!-- End -->



<title>HOME - Secure Proxy Service</title>
<meta name="description" content="<!--[meta_description]-->">
<meta name="keywords" content="<!--[meta_keywords]-->">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
<script src="/src/jquery.idletimer.js" type="text/javascript"></script>
<script src="/src/jquery.idletimeout.js" type="text/javascript"></script>
<script> var proxyauthkey = 'aWxpa2V0b3N0cm9sbG9udGhlYmVhY2g='; </script>
<script>
function Admin() {
  window.location.href = '/admin.php?settings';
}
</script>
<?=injectionJS();?>
</head>
<body class="index" style="overflow: hidden;" style="width: 100%; height: 100%;">
	<!-- Header -->
			<header id="header" class="alt">
				<h1 id="logo"><a href="/">SSL<span> Proxy</span> Server</a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="/">Home</a></li>
						<?php $ip = $_SERVER['REMOTE_ADDR'];
            if($ip == '80.192.143.114') {echo "<li><a href='/admin.php?settings'>Admin Area</a></li>";}
            else if($ip == '51.254.127.127') {echo '';} ?>
					</ul>
				</nav>
			</header>
		<!-- Banner -->
			<section id="banner">

				<!--
					".inner" is set up as an inline-block so it automatically expands
					in both directions to fit whatever's inside it. This means it won't
					automatically wrap lines, so be sure to use line breaks where
					appropriate (<br />).
				-->
				<div class="inner">
					<div id="message" class="message"><!--[error]--></div>
					<header>
						<h2>Enter URL</h2>
					</header>
					<div id="urlform" class="urlform" >
		<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
			<input type="text" name="u" id="input" size="40" class="textbox" autofocus="false" style="border: 1px solid #ffffff;" value="http://dayt.se/">
			<button type="submit" value="GO!" class="button bg-blue tall" style="color:white; width: 19%;">GO!</button>
			<ul id="options">
				<?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'><label for="'.$option['name'].'" class="tooltip" onmouseover="tooltip(\''.$option['escaped_desc'].'\')" onmouseout="exit();">'.$option['title'].'</label></li>';?>
			</ul>
			<div id="ftr hidden" style="display: none;" type="hidden">
				Your IP Connection is supplied by <u><b><?php echo $_SERVER['HTTP_HOST'];?></u></b>.
			</div>
			<br style="clear: both;">
		</form>
	 </div>
				</div>

			</section>
	<div id="footer" style="display:none;">
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	</div>

<link rel="stylesheet" href="/css/font-awesome.css">
</body>
</html>