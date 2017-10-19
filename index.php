<?php
$FOX_NUM = (int)file_get_contents('https://randomfox.ca/script/script.js', NULL, NULL, 16, 3);
if (isset($_GET['i'])) {
    if (ctype_digit($_GET['i'])) {
        $random_fox_index = $_GET['i'];
    } else {
        $random_fox_index = rand(1, $FOX_NUM);
    }
} else {
    $random_fox_index = rand(1, $FOX_NUM);
}
?>

<html>
<head>
	<title>RandomFox</title>
    <meta charset="utf-8">
    <meta type="author" content="xinitrc" />
    <meta type="description" content="Displaying pictures of random foxes with every click!" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FF6600" />
	<meta http-equiv="Cache-Control" content="max-age=1" />

    <meta property="og:image" content="http://randomfox.ca/images/<?= $random_fox_index ?>.jpg" />
    <meta property="og:title" content="randomfox.ca" />
    <meta property="og:description" content="Random fox on every click!" />
    <meta property="og:url" content="http://m.randomfox.ca" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./script/script.js"></script>

	<style>
		body {
			font-family: "Lato", sans-serif;
			text-align: center;
			overflow-x: hidden;
		}

		.sidenav {
			height: 0;
			width: 100%;
			position: fixed;
			z-index: 3;
			bottom: 0;
			left: 0;
			background-color: #111;
			overflow-y: hidden;
			transition: 0.5s;
			color: #818181;
		}

		.sidenav a, #down-btn {
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a-test {
			padding: 8px 8px 8px 32px;
		}

		#down-btn:hover {
			color: #111;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.sidenav .closebtn {
			font-size: 36px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
		
		#fox-container, #down-btn {
			max-height: calc(100% - 40px);
			max-width: calc(100% - 16px);
			}

		#fox-container {
			position: relative;
			width: auto;
			min-height: 1px;
			display: inline-block;
			border: 2px solid #ccc;
			
			background-image: url('https://randomfox.ca/images/1.jpg');
			background-repeat: no-repeat;
			background-size: contain;
		}

		#fox-img {
			height: 100%;
			position: relative;
			z-index: 1;
			visibility: hidden;
		}

		#fox-link {
			position: absolute;
			z-index: 2;
			top: 0px;
			left: 0px;
			height: 100%;
			width: 100%;
		}
	</style>
</head>
<body>
	<div id="fox-container">
		<img src="https://randomfox.ca/images/<?= $random_fox_index ?>.jpg" alt="" title="" id="fox-img" />
		<a href="http://m.randomfox.ca/?i=<?= $random_fox_index ?>" id="fox-link"></a>
	</div>

	<a href="javascript:void(0)" id="down-btn" tyle="font-size:30px;cursor:pointer" onclick="openNav()">&#709; &#751; &#8964;</a>

	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#708; &#752; &#8963;</a>
	  <p>STUFF 'N' MORE THINGS</p>
	</div>

	<script>
	function openNav() {
		document.getElementById("mySidenav").style.height = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.height = "0";
	}
	</script>
     
</body>
</html> 