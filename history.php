<?phpinclude_once('connection.php');
$query="select * from users";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
  
    h1{
        text-align: center;
        color: rgb(0, 0, 0);
    }
   
    input{
        border: 2px solid black;
        border-radius: 4px;
        padding: 4px;
        
    }
    #navbarNav{
        font-weight: 500;
        font-size: 25px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    table{
        border: 3px solid black;
        border-radius: 10px;
        height: 500px;
        width: 1000px;
        margin-top: -150px;
        background-image: linear-gradient(to right, #ffe600,#ff9f20);
        padding: 15px;
        font-size: 20px;
        margin-bottom: 100px;
    }
    #btt{
        margin-top: 50px;
        margin-right: 50px;
        height: 50px;
    width: 300px;
    font-size: 20px;
    font-weight: bold;
    border-radius:25px;
    border: 2px solid black;
    background-image: linear-gradient(to right, #ffe600,#ff9f20);
    }
    </style>
<body>
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
                <div class="collapse navbar-collapse" id="navbarNav" style="float: right;">
                    <ul class="navbar-nav ml-auto" type="none">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html" style="text-decoration: none;margin-right: 370px;margin-top: 30px;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" style="text-decoration: none;margin-right: 220px;margin-top: -29px;">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" style="text-decoration: none;margin-top: -29px;margin-right: 20px;">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <center>
        
    <a href="transaction.php"><button type="button" id="btt">Transfer Money</button></a>
    <a href="customer.php"><button type="button" id="btt">View All Customers</button></a>

    <table>
    <tr><th colspan=4><h2 style="padding-bottom:20px;">Transfered History</h2></th></tr>
        <tr><th>Sr.No.</th>
             <th>Sender's Name</th>
            <th>Receiver's Namer</th>
            <th>Transfered Amount</th>
        </tr>
    <br>                          
<?php
$sql="SELECT * from users";
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','bank');

$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

 $query = $dbh -> prepare($sql);
 $query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>                                        
        <tr>
            <td> &emsp;&ensp;<?php echo htmlentities($cnt);?></td>
            <td>&emsp;&emsp;&emsp;&emsp;<?php  echo htmlentities($row->sname);?></td>
             <td>&emsp;&emsp;&emsp;&emsp;&emsp;<?php  echo htmlentities($row->rname);?></td>
             <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php  echo htmlentities($row->amount);?></td>                                     
        </tr><br>
       <?php $cnt=$cnt+1;}} ?> 
 </table>
</center>                         
</body>
</html>