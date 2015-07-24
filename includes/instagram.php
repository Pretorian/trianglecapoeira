<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.instagram.min.js"></script>
	<style type="text/css">
	div.instagram img.instagram-image {width:200px;height:auto;}
	</style>
</head>
<body>
	<h1>jQuery Instagram Demo</h1>
	<div class="instagram"></div>
	<script type="text/javascript">
		$(".instagram").instagram({
		//search: {lat: 48.858844,lng: 2.294351,distance: 2000},
  		//hash: 'trianglecapo',
  		userId: 25511536,
	     //tagName: '#trianglecapoeira',
	        clientId: 'abd6a62cd99b444cbdfe12f0efacc76b',
	        accessToken:'25511536.abd6a62.cfc59d29d443448b93977f77bf6b966e',
			image_size:'standard_resolution'
	    });
	</script>
</body>
</html>