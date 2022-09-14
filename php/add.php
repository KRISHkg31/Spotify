<html>
    <head>
        <title>adding data</title>
    </head>
        <body>
            <?php
                session_start();
                $fname=$_GET['fname'];
                $s=$_GET['fdata'];
                $a="$s.\r\n";
                $_SESSION['file']=$fname;
                $f=fopen($fname,'a');
                fwrite($f,$a);
                echo "Contents have been saved successfully<br>";
                fclose($f);
            ?>
                <a href="more.php">Click here to display data</a><br>
                <a href="index.php">Click here to go back to homepage </a>
        </body>
</html>
