<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assesment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "SELECT * FROM Bio";
    $result = $conn->query($sql);

    foreach($results as $re){
        echo $re["user_id"];
        echo $re["biography"];
    };



?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>assesment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <nav>
        <img src="img/logo1.png" alt="logo" id="logo">
        <div id="socials">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></i></a>
        </div>
    </nav>
    <div id="center">
        <img src="img/passport.jpg" alt="image" id="image">
        <p id="header-top">Ejike michael nnamdi</p>
        <p id="header-top">Web Developer at OlotuSquare</p>
    </div>
    <div class="section3">
          <img src="img/marshall.jpg" alt="" class="inner">
          <div class="p2">
            <h2 style="color:blue; text-align:center;">BIO</h2>
            <p>web developer working with OlotuSquare.I have a passion for technology and am open for more development.
            you can connect with me on
            <p></p>
            <h2 style="color:blue; text-align:center;">SKILL SET</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JAVASCRIPT</li>
                <li>PHP</li>
                <li>MYSQL</li>
            </ul>
          </div>
    </div>

    <footer>
    <p style="color:blue; text-align:center;">&copy 2018 All right Reversed.</p>
    </footer>
          
</body>
</html>