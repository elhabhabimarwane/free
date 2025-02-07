<?php
    require_once "./select.php";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>idfree</th>
                <th>username</th>
                <th>password</th>

            </tr>
        </thead>
        <tbody>
        <?php
        foreach($free as $freetable ){
 $ligne = <<<HTML
        <tr>
             <td>{$freetable["idfree"]}</td>
             <td>{$freetable["username"]}</td>
             <td>{$freetable["password"]}</td>

        </tr>
        HTML;
   echo $ligne;
        }

 ?>
        </tbody>
    </table>
</body>
</html>
