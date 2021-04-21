<!DOCTYPE html>
<html>
<head>
	<title>Admin Informations</title>
	<style type="text/css">
		body
		{
			margin:0;
			padding: 0;
			min-height: 100vh;
			background:#1b1b1b;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: consolas;

		}
		img{
			filter: invert(1);
		}
		.container
		{
			width: 1200px;
			position: relative;
			display: flex;
			justify-content: space-around;

		}
		.container .card
		{
			position: relative;

		}
		.container .card .face
		{
			width: 300px;
			height: 200px;
			transition: 0.5s;
		}
		.container .card .face.face1
		{
			position: relative;
			background: #1b1b1b;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 1;
			transform: translateY(100px);
		}
		.container .card:hover .face.face1
		{
			background: #ff0057;
			transform: translateY(0);
		}
		.container .card .face.face1 .content
		{
			opacity: 0.2;
			transition: 0.5s;
		}

		.container .card:hover .face.face1 .content
		{
			opacity: 1;
		}
		.container .card .face.face1 .content img
		{
			max-width: 100px;
		}
		.container .card .face.face1 .content h3
		{
			margin: 10px 0 0;
			padding: 0;
			color: #fff;
			text-align: center;
			font-size: 1.5em;
		}
		.container .card .face.face2
		{
			position: relative;
			background: #fff;
			display:flex;
			justify-content:center;
			align-items: center;
			padding: 20px;
			box-sizing: border-box;
			box-shadow: 0 20px 40px rgba(0,0,0,0.8);

			transform: translateY(-100px);

		}

		.container .card:hover .face.face2
		{
			transform: translateY(0);
		}
		.container .card .face.face2 .content p
		{
			margin: 0;
			padding: 0;

		}
		.container .card .face.face2 .content a
		{
			margin: 15px 0 0;
			display: inline-block;
			text-decoration: none;
			font-weight: 900;
			color: #1b1b1b;
			padding: 5px;
			border:1px solid #1b1b1b;
		}
		.container .card .face.face2 .content a:hover
		{
			background: #1b1b1b;
			color: #fff;

		}
		
		.cursor {
		    width: 80px;
		    height: 80px;
		    border: 1px solid white;
		    border-radius: 50%;
		    position: absolute;
		    transition-duration: 500ms;
		    transition-timing-function: ease-out;
		    animation: cursorAnim .5s infinite alternate;
		    pointer-events: none;
		}






		</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="face face1">
				<div class="content">
					<img src="images/project.png">
					<h3>Saithi</h3>
				</div>
			</div>
			<div class="face face2">
				<div class="content">
					<p>Name: M.Satya Saithi<br>
					   Email:S160610@rguktsklm.ac.in</p>
					<a href="#">Read more</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="face face1">
				<div class="content">
					<img src="images/data.png">
					<h3>Niharika</h3>
				</div>
			</div>
			<div class="face face2">
				<div class="content">
					<p>Name: P.Nihrika Prem Agnes<br>
					   Email:S160405@rguktsklm.ac.in</p>
					<a href="#">Read more</a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="face face1">
				<div class="content">
					<img src="images/startup.png">
					<h3>Pavitra</h3>
				</div>
			</div>
			<div class="face face2">
				<div class="content">
					<p>Name: K.Pavitra Lahari<br>
					   Email:S160989@rguktsklm.ac.in</p>
					<a href="#">Read more</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="face face1">
				<div class="content">
					<img src="images/sketch.png">
					<h3>Kiran</h3>
				</div>
			</div>
			<div class="face face2">
				<div class="content">
					<p>Name: T.Kiran Siva Sai<br>
					   Email:S160078@rguktsklm.ac.in</p>
					<a href="#">Read more</a>
				</div>
			</div>
		</div>
	</div>
	<div class="cursor"></div>
	<script type="text/javascript">
		 const cursor = document.querySelector('.cursor');

        document.addEventListener('mousemove', e => {
            cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
        })

        document.addEventListener('click', () => {
            cursor.classList.add("expand");

            setTimeout(() => {
                cursor.classList.remove("expand");
            }, 500)
        })
	</script>
</body>
</html>