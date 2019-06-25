<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

	
	
<nav class="navbar navbar-light bg-dark justify-content-between fixed-top">
    <a class="navbar-brand bg-light" href=""><img src="img/logo.png" alt=""></a>

    

    <div class="container">

    	Телефон: (499) 340-94-71
	Email^ info@future-group.ru

	<h1>Комментарии</h1>
        <div class="btn-group">
            <div class="btn-group dropleft">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Тренировка</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/training/base">Базовая</a></li>
                    <li><a class="dropdown-item" href="/training/power">Силовая</a></li>
                    <li><a class="dropdown-item" href="/training/fat_loss">Жиросжигание</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WarFace</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/databots/warface/add">Добавить</a></li>
                    <li><a class="dropdown-item"  href="/warface/list">Список</a></li>
                    <li><a class="dropdown-item" href="/warface/edit">Редактор</a></li>
                    <div class="dropdown-divider"></div>
                </ul>
            </div>
           
            <div class="btn-group dropright">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Информация</button>
                <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="/info/help_changers">Помощь обменника</a></li>
                    <li><a class="dropdown-item" href="/info/case_winners">Победители кейсов</a></li>
                
                </ul>
            </div>
        </div>
    </div>
    
</nav>
<br>
<br>
<br>
<hr>



<div class="container ">
    <?php
    // 1- Подписан  0- Нет)
//    echo '<pre>';
//    var_dump($_SESSION['user']);
//    echo '</pre>';
    if($_SESSION['user']){ ?>
        <div class="card">
            <h5 class="card-header">Добро пожаловать, <?=$_SESSION['user']['first_name']?> </h5>
            <div class="card-body">
                <h5 class="card-title"> </h5>
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?=$content?>
</div>
<hr>
<br>
<br>
<br>
<br>
<br>

Телефон: (499) 340-94-71 <br>
	Email: info@future-group.ru<br>
	<b>Адрес: 115088 Москваб ул 2-я Машиностроения, д. 7 стр. 1</b> 
<nav class="navbar navbar-light bg-dark fixed-bottom text-center">
    <p >Тестовый вариант функционирования сайта!</p>
    <hr>
</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>