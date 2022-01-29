<!doctype html>
<html lang="ru">
  <head>
      
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link type="text/css" href="/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>
</head>

<body>

<form class="form" action="">
    <input class="form-control" type="text" name="name" placeholder="Имя"> <br>
    <input class="form-control" type="tel" name="tel" placeholder="Телефон"> <br>
    <input class="form-control" type="email" name="email"  placeholder="Email"> <br>
    <textarea class="form-control" name='text' cols='60' rows='5' placeholder="Введите сообщение"></textarea><br><br>
    <button class="btn btn-primary">Отправить сообщение</button>
</form>

</body>
</html> 
 
<?php
//mail('prog@it-delta.ru', 'Сообщение из блога', $_POST['name'].'|'. $_POST['tel']$_POST['email'].'|'.$_POST['text']);
?>