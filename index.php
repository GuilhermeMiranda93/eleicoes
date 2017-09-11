<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet">
</head>


<body>

	<div class="block-vote">
		<h1 class="title">Selecione o seu candidato:</h1>


		<div class="radio-group">
			
			<div>
				<input type="radio" name="imagem" id="pedro" value="1"/>
				<label for="pedro"><img src="pedro.jpg" alt="Pedro Botelho" id="pedro-img"></label>
				<h1 style="text-align: center">Pedro Botelho</h1>
			</div>

			<div>
				<input type="radio" name="imagem" id="silvia" value="2"/>
				<label for="silvia"><img src="silvia.jpg" alt="Silvia Fernanda" id="silvia-img"></label>
				<h1 style="text-align: center">Silvia Fernanda</h1>
			</div>

		</div>
		
		<a href="#" class="btn" id="vote"><span>CONFIRMA</span></a>

	</div>

	<div class="sucesso" id="sucesso">
		<div>
			<img class="like" src="like.png">
			<h1>Voto computado!</h1>
		</div>
		
	</div>

	<div class="erro" id="erro">
		<div>
			<img class="like" src="like.png">
			<h1>Voto não computado!</h1>
		</div>
		
	</div>


<div id="logo-dbv">
	<img src="logo.png">
</div>
	






	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

</body>

</html>