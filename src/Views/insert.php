<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
    <script src="../public/js/bootstrap.min.js"></script>

  </head>
  <body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
         <b> <ul class="nav navbar-nav">
              <li><a style="color: white" href="index.php">cтарт</a></li>
              <li><a  style="color: white" href="espace.php"> авторизоваться </a></li>     
          </ul></b>
        </div>
      </div>
  </div>
  <br></br><br>                              
  <div id="view">
    <div class="previeww">    
      <div class='add' style='padding-left: 25px;'>
        <h3 style="margin-bottom: 70px;"><strong> Создание новой задачи </strong> </h3>
        <form class="form" role="form"  action="insert.php" method="POST" >
        <p> <strong> Имя пользователя :</strong> <br> <input name='name' type='text' size='19' maxlength='125' value="<?php echo $name; ?>"  placeholder = "Имя" ></p> 
        <span class="help-inline" style="color: red"><?php echo $errors ;?></span>
        <p><strong>Email :</strong>  <br><input name='email' type='email' size='19' maxlength='125' value="<?php echo $email; ?>"  placeholder="Емайл"></p> 
        <span class="help-inline" style="color: red"><?php echo $errors ;?></span>
        <p><strong>Задача:</strong><br /> <textarea name='text' id='text' cols='30' rows='5'  placeholder = "текст задачи" ><?php echo $text; ?></textarea></p> 
        <span class="help-inline" style="color: red"><?php echo $errors ;?></span>
        <p><strong>Статус задачи :</strong></p>
        <select name="is_corrected">                        
          <option value="не выполнено"  selected="selected">не выполнено</option>
        </select>
        <input type='submit' name='submit' id='submit' value='сохранить задачу'>
        <span class="help-inline" style="color: green"></span>
        </form>
      </div>
    </div>
  </div>
  </body>       
</html>

 