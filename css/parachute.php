<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	*
	{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body
	{
		overflow: hidden;
		height: 100vh;

	}
	span{
		position: absolute;
		background: url(images/google.jpg);
		background-size: cover;
		transform: translate(-50%,-50%);
		border-radius: 50%;
		animation: animate 4s linear infinite;
		pointer-events: none;
	}
	@keyframes animate{
		0%{
		transform: translate(-50%,-50%);
		opacity: 1;
		}
		100%{
		transform: translate(-50%,-1000%);
		opacity: 0;
		}
	}
</style>
<body>
	<script type="text/javascript">
		document.addEventListener("mousemove",function(e){
			var body = document.querySelector('body');
			var bubbles = document.createElement("span");
			var x = e.offsetX;
			var y = e.offsetY;
			bubbles.style.left = x+'px';
			bubbles.style.top = y+'px';
			var size = Math.random()*100;
			bubbles.style.width = 20+size+'px';
			bubbles.style.height = 20+size+'px';
			body.appendChild(bubbles);

			setTimeout(function(){
				bubbles.remove();
			},4000)
		})
	</script>
</body>
</html>