<?php 
include 'crear.php';
?>
<div class="container">
    <form name="form1" method="post" action="crear.php">
        <input class="btn btn-info" name="respaldo" type="submit" id="respaldo" Value="Genera Backup de Base de datos">
    </form>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-users"></i> Backup Generados
            <a data-toggle="modal" data-target="#myModal" class="pull-right"><i class="fa fa-user-plus"></i></a>
        </div>
        <div class="panel-body">
            <div class="panel-body manager-archives">
                <div class="user-panel col-md-2">
                    <div class="panel panel-info">   
                        <i class="fa fa-times"></i>
                        <br>
                        <center><i class="fa fa-file-pdf-o"><img src="../../../img/backup-solutecsa.png"  width='50' height='50'></i></center>
                     
                        <br>
                        <?php

                        function listar_archivos($carpeta) {
                            if (is_dir($carpeta)) {
                                if ($dir = opendir($carpeta)) {
                                    while (($archivo = readdir($dir)) !== false) {
                                        if ($archivo != '.' && $archivo != '..'&&$archivo!= 'index.php'&&$archivo!= 'crear.php') {
                                            echo '<table border="1"><tr>';
                                           
                                            echo '<td align="center">' . $archivo . '</td>';
                                            echo '</tr></table>';
                                        }
                                    }
                                    closedir($dir);
                                }
                            }
                        }

                        echo listar_archivos('c:\xampp\htdocs\MDP\modulos\seguridad\backup');
                        ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
