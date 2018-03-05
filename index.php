<?php
/**
 * Created by PhpStorm.
 * User: Dominic
 * Date: 05.03.2018
 * Time: 08:16
 */
include ("php/includes/connect.php");

$modul = filter_input(INPUT_GET,"modul");
$file = filter_input(INPUT_GET,"file");


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lib/css/style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <header class="row">
                <nav>
                    <?php
                        include ("php/includes/nav.php");
                    ?>
                </nav>
            </header>
            <section class="row">
                <article class="col-md-9">
                    <?php
                        if($modul == "" || $file == ""){
                            include ("php/views/start.php");
                        }

                        else{
                            include ("php/".$modul."/".$file.".php");
                        }
                    ?>
                </article>
                <aside class="col-md-3">
                    <h3>Alarms</h3>
                </aside>
            </section>
            <footer class="row"></footer>
        </div>
        <?php
        include ("php/includes/libs.php");
        ?>
    </body>
</html>
