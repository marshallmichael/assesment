<?php
require("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Admin</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="img/logo1.png" alt="logo" id="logo">
    </nav>
    <div class="container">
        <h1>EDIT PROFILE</h1>
        <form method="post" action="formsubmit.php">  
            <div class="form-group">
                <label for="exampleInputEmail1">Biography</label>
                <input name="biography" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter biography">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter biography">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>