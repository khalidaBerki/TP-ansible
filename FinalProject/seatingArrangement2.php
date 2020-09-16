<?php

 session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{?>
    <!doctype html>
    <html>
<head>
    <title>
        Exam Seat Plan Print
    </title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="custom.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <!--header-->
        <div class="navbar-header">
            <img src="https://daffodilvarsity.edu.bd/template/images/diulogoside.png" style="max-width:150px"/>
            <a href="homepage.php" class="navbar-brand" style="font-size:25px">EXAM SEATING ARRANGEMENT SYSTEM</a>
        </div>
    </div>
</nav>
<section>
<div class="container">
    <div class="col-md-4 col-md-push-4">
        <div class="data">
            <h1>Seat Plan is Ready For Print </h1>
        </div>
        <button name="Print" id="Print" onclick="printSeatArrangement()" class="btn btn-dark btn-block">Print</button><br/>
      <button name="TeacherAllot" id="TeacherAllot" onclick="move()" class="btn btn-primary btn-block" disabled>Seating Arrangement</button>
    </div>
</div>
<!-- Button For Seating Arrangement-->

</section>
<script>
    function move()
    {
        alert("Moving Teacher Allocation chart");
        window.location.assign("teacherTime.php");
    }
    
    function printSeatArrangement()
    {
    
        document.getElementById('TeacherAllot').removeAttribute("disabled");
        window.location.assign("SeatingArrangementFormatting.php");
    }
</script>
</body>
</body>
</html>

<?php
}
?>