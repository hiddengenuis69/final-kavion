<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
  }
  input[type=text] {
      width: 130px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('Magnifier-512');
      background-position: 10px 10px; 
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
}
</style>
</head>


<body background_dcolor="black">
 
<ul>
<li>DA HYPE</li>

  
  <li><a href="yamsaynpt2.html">Home</a></li>
  <li><a href="sells.html">Sells</a></li>
  <li><a href= "contactpt2.php">contact</a></li>
  <li><a href="aboutpt3.html">About</a></li>
  <li><a href="chart.html">chart</a></li>
  <li><a href="acount.php">account</a></li>

  </ul>
<style>
h2{color: red ;}
form{color:red;}
 li{color: red ;}
  li{font-size: 170%}
  form{font-size: 190%}
</style>
<div>
<center>
<form action="#" method="POST" >
First Name:<br>
<input type="text" name="Firstname"><br>
Last Name:<br>
<input type="text" name="Lastname"><br>
E-mail:<br>
<input type="text" name="mail"><br>
Comment:<br>
<input type="text" name="comment" size="50"><br><br>
<button  type="submit" name="submit" >Send</button>
<input type="reset" value="Reset">
</form>
</center
</div>

<?php
if (isset($_POST['submit'])) {
  insert();
}


function insert(){
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dahype";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO dahype.contact ( firstname, Lastname, email, comment )
VALUES ('"  . $_POST['Firstname'] .   "', '"    . $_POST['Lastname'] . "', '"  . $_POST['mail'] .   "', '"  . $_POST['comment'] .   "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dahype";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM dahype.contact ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Firstname"]. " " . $row["Lastname"]. $row["mail"]. " " . $row["comment"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
