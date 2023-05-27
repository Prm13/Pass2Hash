<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pass2Hash</title>
</head>
<style>
	* {
		font-size: 20px;
		text-align: center;
	}
	body {
		background-color: #000;
		color: #fff;
		padding: 50px;
	}
	#pass {
		display: block;
		width: 600px;
		height: 30px;
		margin: 0 auto 60px;
	}
	#hash {
		cursor: pointer;
	}
</style>
<body>
	<input type="text" id="pass" placeholder="Password">
	<p id="hash" title="Copy hash"></p>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
	$(document).keyup(function() {
		$.post('convert.php', {'pass': $('#pass').val()}, response);
		function response(data) {
			$('#hash').text(data);
		}
	});
	$('#hash').click(function(){
		let temp = $('<input>');
	    $('body').append(temp);
	    temp.val($(this).text().trim()).select();
	    document.execCommand('copy');
	    temp.remove();
	});
</script>
</body>
</html>