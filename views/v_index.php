<?php
if($_POST['send']){
	insertComment($_POST['login'], $_POST['comment']);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Future</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<div class="main-container">

	<div class="headcontent">
		<img  src="img/logo.png" class="logo" alt="">
		<div class="row">
				Телефон: (499) 340-94-71	
		</div>
		<div class="row">
				Email: info@future-group.ru	
		</div>
		<br><br>
		 <div class="row">
			<h1>Комментарии</h1>
		</div> 
	</div>
	<div class="content-container">
		<div class="container">
			<?php
				$rows[] = showAllComments();

				foreach($rows as $row => $value){ 
					foreach($value as $val){ ?>
					<div class="comment ">
						<div class=" dop_margin ">
							<b><?=$val['name']?></b> <i><?=$val['data']?></i>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<?=$val['comment']?>	
						</div>
							
					</div><hr>
					
			<?} } ?>
		
	</div>



	
	<h3>Оставить комментарий:</h3>
	<form action="#" method="post">

		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Ваше имя</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="Введите имя" name="login" required>
		    </div>
		  </div>
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputComment5">Ваш комментарий</label>
		      <textarea  type="email" class="form-control send-form" id="inputComment5" placeholder="Введите имя" name="comment" required></textarea>
		    </div>
		</div>
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <input type="submit" class="send" name="send">
		    </div>
		</div>
	</form>


</div>   

	<div class="footer">
		<img  src="img/logo.png" class="logo-small" alt="">
		
	    <div class="row">
			<b>Телефон: (499) 340-94-71</b>
	    </div>
		 <div class="row">
			<b>Email: info@future-group.ru</b> 	
		 </div>
		<div class="row">
			<b>Адрес: 115088 Москваб ул 2-я Машиностроения, д. 7 стр. 1</b> 	
		 </div>
		
		<div class="row">
			&copy;2010-2014 Future. Все права под защитой.	
		 </div>
			
	</div>


</div>	



	

	    
	



	
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>