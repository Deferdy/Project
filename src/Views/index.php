<?php 

require_once("TaskMapper.php");

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="author" content="">
    <meta name="description" content="">
    <title>Application</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
    <script src="../public/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
        </div>
        <div class="collapse navbar-collapse">
          <b><ul class="nav navbar-nav">
            <li><a style="color: white" href="insert.php"><p><b> cоздание новой задачи</b></p></a></li>
            <li><a style="color: white" href="espace.php">авторизация</a></li>     
          </ul></b>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br>
    <form action ="" method = "POST">
      <center><b>Сортировка :</b> 
        <select name ="sort">
          <option value="1"> Имя по возрастанию </option>
          <option value="2"> Имя по убыванию </option>
        </select> 
        <input type="submit" name="submit"  value="Отправить">
      </center>
    </form>    
   <br><br><br>            
    <div class="container">
      <center>
        <table class="table table-striped table-bordered">
         <thead>
           <tr>
             <th width='100'>имя ползователя</th>
             <th width='100'>email</th>
             <th width='100'>текст задачи</th>
             <th width='100'>статус</th>
           </tr>
          </thead>
          <tbody> 
            <?php   
              echo '<tr>';
              echo '<td>'.$row['username'].'</td>'; 
              echo '<td>'.$row['text'].'</td>'; 
              echo '<td>'.$row['statut'].'</td>';
              echo '<td width="100">';
              echo '<a class="btn btn-primary btn-sm" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil btn-xs"></span> Изменить</a>';
              echo'</td>';
              echo'</tr>';
            ?>              
          </tbody>                                   
      </center>
    </div>
   <br><br><br><br><br><br><br>
  </body>
</html>











