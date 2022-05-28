<?php
session_start();
require_once "../databases/conexion_db.php";

$name = $_SESSION['name'];
$espe = $_SESSION['especi'];
$edad = $_SESSION['edad'];
$telefono = $_SESSION['telefono'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/mostrar-datos-doctor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet"> 

</head>
<body>
    
    <div class="padre">

            <div class="card-user">
                <img src="../icons/usuario.png" alt="">
                <h3><?= $name ?></h3>
                    <div class="campo">
                        <p><b>Especializacíon:</b> <br>
                          <?= $espe?>
                          </p>
                        <p><b>Edad:</b> <br>
                        <?= $edad?>
                        </p>
                        <p><b>Telefono:</b> <br>
                        <?= $telefono?>
                      </p>
              </div>
              <button class="btn-editar" onclick="location='./edit.php'"> Editar </button>
            </div>
        <div class="table">
            <table class="default" BORDER CELLPADDING=10 CELLSPACING=0>

                <tr>
              
                  <th class="c n">N</th>
                  <th class="c paciente">Paciente</th>
                  <th class="c fecha">Fecha</th>
                  <th class="c hora">Hora</th>
                  <th class="c btn"></th>
              
                </tr>
              
                <tr>
              
                  <td>1</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>2</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>3</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>4</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value=""><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
                  
                </tr>
              
                <tr  >
              
                  <td>5</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>6</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>7</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>8</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>9</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>10</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>

                <tr  >
              
                  <td>11</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>12</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>13</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>14</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
                <tr  >
              
                  <td>15</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>16</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>17</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>18</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>19</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
                <tr  >
              
                  <td>20</td>
              
                  <td></td>
              
                  <td></td>

                  <td></td>

                  <td id="btns"><button name="accion" value="correcto"><img src="../icons/marca-de-verificacion.png" alt="Correcto"></button></button></ion-icon>
                <button name="accion" value="correcto"><img src="../icons/cancelar.png" alt="Correcto"></button>
              
                </tr>
              
              
              </table>

        </div>

    </div>
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>