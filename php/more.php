<html>
    <head>      
        <title>adding more data</title>
    </head>
        <body>
            <?php
            session_start();
            $fn=$_SESSION['file'];
            $len=filesize($fn);
            $f=fopen($fn,"r");
            $s=fread($f,$len);
            $s=str_replace("\n","<br>",$s);
            echo "$s";
            ?>
                <a href="index.php">Homepage</a>
        </body>
</html>
