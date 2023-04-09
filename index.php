<!DOCTYPE html>
<html>
<head>
	<title>1cbyc - Random Quote Generator</title>
	<style type="text/css">
		body {
			background-color: #F9F9F9;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			padding: 16px;
			box-sizing: border-box;
		}

		.quote {
			background-color: #FFFFFF;
			border-radius: 50px;
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
			padding: 16px 32px;
			text-align: center;
			width: 80%;
			max-width: 600px;
		}

		.quote-text {
			font-size: 24px;
			font-weight: bold;
			margin: 0 0 16px 0;
		}

		.quote-author {
			font-size: 18px;
			font-style: italic;
			margin: 0;
		}
	</style>
    <script>
		function generateQuote() {
			document.getElementById('quote-text').innerHTML = "<?php echo $random_quote ?>";
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="quote">
			<p class="quote-text"><?php echo $random_quote ?></p>
			<p class="quote-author">- Author Name</p>
		</div>
        <button onclick="generateQuote()">Generate</button>
	</div>


    
</body>
</html>
