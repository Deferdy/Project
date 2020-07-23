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
        <title> Application </title>
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
        <script src="../public/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid" >
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
                       <li><a style="color: white " href="admin.php"> Кабинет администрации</a></li>
                       <li><a style="color: white " href="deconnexion.php">Выход из профиля админа </a></li>
                   </ul></b>
            </div>
           </div>
        </div>
        <br><br><br><br><br><br><br><br>    
        <div class="container-fluid">
            <center>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="100">Имя пользователя</th>
                            <th width="100">email</th>
                            <th width="100">текст задачи</th>
                            <th width="100">статус</th>
                            <th width="100">Отредактировать</th>
                       </tr>
                    </thead>
                    <tbody>
                        <?php   
                            echo '<tr>';
                            echo '<td>'.$row['username'].'</td>'; 
                            echo '<td>'.$row['e-mail'].'</td>';  
                            echo '<td>'.$row['text'].'</td>'; 
                            echo '<td>'.$row['statut'].'</td>';
                            echo '<td width="100">';
                            echo '<a class="btn btn-primary btn-sm" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil btn-xs"></span> Изменить</a>';
                            echo'</td>';
                            echo'</tr>';
                        ?>
                    </tbody>
                 </table>
                 <br><br><br><br><br><br><br><br>
            </center>
        </div>
        <br><br><br><br><br><br><br>
    </body>
</html>


