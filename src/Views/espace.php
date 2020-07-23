<?php
 require_once ('UserMapper.php');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Application </title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <style>
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        padding-top: 5px;
        text-align: center;
      } 
    </style>
    </head>
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
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
            <li><a style="color: white" href="index.php"> старт</a></li>
            <li><a style="color: white" href="insert.php"> создание новой задачи</a></li>
        </ul></b>
        </div>
      </div>
    </div>
    <br></br>
   <br></br>
   <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4 padding-right">
          <div class="signup-form">
            <p style="padding-top: 15px"><h3> Администрация</h3> </p>  
            <form class="form-inline" action="espace.php" method="post" style="margin-top: 25px"> 
              <P><label class="sr-only" for="inlineFormInput">Логин</label></P>
              <P><input type="text" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" value="" placeholder="Логин"></P>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <input type="password" name="password" class="form-control" id="inlineFormInputGroup" value="" placeholder="Пароль">
              </div>
              <br></br>
              <button type="submit" name="submit" class="btn btn-primary btn-lg">войти</button>
            </form> 
            <b><span style="color: red"><?php echo $Error; ?></span></b>
          </div>
        </div>
      </div>
    </div>
   </section>    
   <br/><br/>
  </body>
</html>