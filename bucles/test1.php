<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formularios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="prueba.php" method="POST">                
                <select>
                <?php    
                    for ($index = 1900; $index < 2000; $index++) {
                    echo '<option value = "$index">$index</option>';
                } ?>   
                </select>
                     
            </form>      
        </div>        
    </body>
</html>



             



