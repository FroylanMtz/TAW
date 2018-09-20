<?php
  require_once("db/database_utilities.php");
  //Nombre de las tablas
  $tables=["status","user","user_log","user_type"];
  //Columnas de las tablas
  $cols=[["id","name"],["id","email","password","status_id","user_type_id"],["id","date_logged_in","user_id"],["id","name"]];
  //NUmero de tablas
  $count=0;

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practica 06</title>
    
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <?php require_once('header.php'); ?>

    <div class="row">
      <h1 class="text-center">Ejercicio 1</h1>
      <h3>Dashboard</h3>
      <div class="section-container tabs" data-section>
        <table>
          <thead>
            <th> Usuarios </th>
            <th> Tipos </th>
            <th> Status </th>
            <th> Accesos </th>
            <th> Usuarios Activos </th>
            <th> Usuarios Inactivos </th>
          </thead>
          <tr>
            <td> <?= count_table('user') ?> </td>
            <td> <?= count_table('user_type') ?> </td>
            <td> <?= count_table('status') ?> </td>
            <td> <?= count_table('user_log') ?> </td>
            <td> <?= count_active() ?> </td>
            <td> <?= count_inactive() ?> </td>
          </tr>
        </table>
      </div>
    </div>

      <div class="row">

          <?php
          foreach($tables as $t){
            $r = selectAllFromTable($t);
            echo("Tabla: ".$t);
          ?>
          <table>
            <thead>
              <?php 
                //Se imprime la cabecera de las tablas
                for($i=0; $i<count($cols[$count]); $i++){
                  echo("<th>".$cols[$count][$i]."</th>");
                }
              ?>
            </thead>
            <tbody>
              <?php
                //Se imprimen las filas y columnas
                for($i=0; $i<count($r);$i++){
                  echo("<tr>");
                  for($j=0; $j<count($cols[$count]); $j++){
                    echo("<td>".$r[$i][$j]."</td>");
                  }
                  echo("</tr>");
                }
              ?>
            </tbody>
          </table>
          <?php
          $count++;
          }
          ?>
      </div>


    

    <div class="section-container tabs" data-section>
      <section class="section">
          <center>
            <td><a href="./user_listado.php" class="button radius success">CRUD de usuarios</a></td>
          </center>
      </section>
    </div>

    <?php require_once('footer.php'); ?>
