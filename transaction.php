<!DOCTYPE HTML>
<html>

<head>
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
    label{
        width: 180px;
        display: inline-block;
        margin-left: 60px;
        font-size: 22px;
    }
    #form{
        border-radius: 10px;
        background-image: linear-gradient(to right, #ffe600,#ff9f20);
        color: black;
        width: 600px;
        height: 480px;
        padding: 10px;
        border: 5px solid black;
        text-align: left;
        margin: 120px;
    }
    h1{
        text-align: center;
        color: rgb(0, 0, 0);
    }
    #btn{
        font-size: 25px;
        width: 150px;
        height: 50px;
        margin-left: 90px;
        border-radius: 8px;
        border: 2px solid black;
        background-color: rgba(255, 179, 0, 0.678);
    }
    input{
        border: 2px solid black;
        border-radius: 4px;
        padding: 4px;
        margin-left: 8px;
        
    }
    #navbarNav{
        font-weight: 500;
        font-size: 25px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sname = $_POST['sname'];
        $rname = $_POST['rname'];
        $amount = $_POST['amount'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "bank";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `users` (`sname`, `rname`, `amount`) VALUES ('$sname', '$rname', '$amount')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
      }
    }
?>
    <center>
       
    <div id="form">
        <br>
        <h1>Transaction Form</h1>
        <br><br>
    <form action="transaction.php" method="POST">
        <label for="sname">Sender's Name :</label>
        <input type="text" style="width: 250px;height: 35px;" name="sname" id="sname" placeholder="Enter Sender's Name">
        <br>
        <br>
        <label for="rname">Receiver's Name :</label>
        <input type="text" style="width: 250px;height: 35px;" name="rname" id="rname" placeholder="Enter Receiver's Name">
        <br>
        <br>
        <label for="amount">Transfer Amount :</label>
        <input type="number" style="width: 250px;height: 35px;" name="amount" id="amount" placeholder="Enter Transaction Amount">
        <br>
        <br>
        <br>
       <button type="submit" value="Submit" id="btn">Submit</button>
        <input type="reset" value="Reset" id="btn"><br><br><br>
        <center><a href="history.php" style="text-decoration:none;color:black;"><h2>View Transaction History</h2></a></center>
        <br>
        <center><a href="customer.php" style="text-decoration:none;color:black;"><h2>View All Customers</h2></a></center>
    </form>
</div>
</center>

</body>

</html>