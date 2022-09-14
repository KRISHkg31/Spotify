<html>
    <head>
        <title>
            insert
        </title>
        <style>
        @keyframes first
        {
            0% {background-color:red; left:0px; top:0px;}
            25% {background-color:yellow; left:200px; top:0px;}
            50% {background-color:blue; left:200px; top:200px;}
            75% {background-color:green; left:0px; top:200px;}
            100% {background-color:red; left:0px; top:0px;}
        }
        div
        {
            align-items: center;
            width: 500px;
            height: 100px;
            font-size: 29px;
            animation-name: first;
            animation-duration: 4s;
            position: relative;
        }
        </style>
</head>
<body>
    <center>
    <?php
        $sname="localhost";
        $username="root";
        $password="root";
        $dbname="assig1";
        
        $name=$_POST['f1'];
        $roll=$_POST['f2'];
        $number=$_POST['f3'];
        $email=$_POST['f4'];
        $con=new mysql($sname,$username,$password,$dbname);
            if($con->connect_error)
        {
            die("Connection failed $con->connect_error");
        }
            $sql="INSERT INTO reg 
            VALUES('".$name."','".$roll."','".$number."','".$email."')";
            if($con->query($sql) === TRUE)
        { 
            echo "<div>Your Data has been stored</div>";
        }
            else
        {
            echo "<div>Error. Data couldn't be stored.</div>";
        }
            $con->close();
        ?>
        <br>
        <a href="index.php">Go back to homepage</a>
    </body>
</html>
