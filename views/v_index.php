<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Future</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<br>
<br>
<br>
<br>

<nav class="navbar navbar-light bg-light justify-content-between fixed-top">
    
<div class="headcontent">
	<div class="row">
		
			Телефон: (499) 340-94-71	
		
	</div>
	<div class="row">
		
			Email: info@future-group.ru	
		
	</div>
	 <div class="row">
		<h1>Комментарии</h1>
	</div> 
</div>
    <img  src="img/logo.png" class="logo" alt="">
</nav>

<div class="main-container">
<br>
<br>
<br>
<hr>
<div class="container">
	<div class="row">
		<?php
			$rows[] = showAllComments();

			foreach($rows as $row => $value){ 
				// echo '<pre>';
				// var_dump($value);
				// echo '</pre>';
				

				foreach($value as $val){ ?>

					

				<div class="row">
					
						<b><?=$val['name']?></b> <br>	
					
				</div>
				<div class="row">
					
						<i><?=$val['data']?></i>	
					
				</div>

				
				<?=$val['comment']?>
				


				
			<?} } ?>
	</div>
</div>



<hr>
<h3>Оставить комментарий:</h3>
<form action="">

	<div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="inputEmail4">Ваше имя</label>
	      <input type="email" class="form-control" id="inputEmail4" placeholder="Введите имя">
	    </div>
	  </div>
	<div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="inputComment5">Ваш комментарий</label>
	      <textarea  type="email" class="form-control" id="inputComment5" placeholder="Введите имя"></textarea>
	    </div>
	</div>
	<div class="form-row">
	    <div class="form-group col-md-6">
	      <input type="submit" class="send">
	    </div>
	</div>
</form>
<br>
<br>
<br>
<br>
<br>
</div>	
	<nav class="navbar navbar-light bg-light fixed-bottom ">

	    <img  src="img/logo.png" class="logo-small" alt="">
	    <div class="row">
			Телефон: (499) 340-94-71
	    </div>
		 <div class="row">
			Email: info@future-group.ru 	
		 </div>
		<br>
		<b>Адрес: 115088 Москваб ул 2-я Машиностроения, д. 7 стр. 1</b> 
	    <hr>
	</nav>



	
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>