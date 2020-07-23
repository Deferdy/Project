<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Application </title>
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
          <b><ul class="nav navbar-nav">
            <li><a style="color: white "  href="admin.php">Кабинет администрации</a></li>
            <li><a style="color: white" href="index.php">Выход из профиля админа </a></li>   
        </ul></b>
        </div>
      </div>
    </div>
    <br></br>                            
    <div id="view">
      <div class="previeww"><br></br>
        <div class='add' style='padding-left: 25px;'>
          <h3 style="margin-bottom: 75px;"> Отредактировать текст задачи</h3>
          <form class="form" role="form"  action="<?php echo 'update.php?id=' .$id;?>" method="POST" >
            <p> <strong> Имя :</strong> <br><input name='name' type='text' size='19' maxlength='125' value="<?php echo $name; ?>"  placeholder="Имя"></p> 
            <span class="help-inline" style="color: red"><?php echo $nameError;?></span>
            <p><strong>Email : </strong><br><input name='email' type='email' size='19' maxlength='125' value="<?php echo $email; ?>"  placeholder="Емайл"></p> 
            <span class="help-inline" style="color: red"><?php echo $emailError;?></span>
            <p><strong>Задача: </strong><br /> <textarea name='trud' id='trud' cols='30' rows='5' value="<?php echo $trud; ?>"><?php echo $trud; ?></textarea></p> 
            <span class="help-inline" style="color: red"><?php echo $trudError;?></span>
            <p><strong>Статус задачи :</strong></p>
            <select name="is_corrected">
                <option value="выполнено" >выполнено</option>  
                <!--  <option value="отредактировано администратором"><?php echo $admin; ?></option> -->           </select>
             <p> <p> <input type='submit' name='submit' id='submit' value='Отредактировать'></p> </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

 