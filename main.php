<?php
  $host_name = '---';
  $database = '---';
  $user_name = '---';
  $password = '---'; 


  $con = new mysqli($host_name, $user_name, $password, $database);

  if ($con->connect_error) {
    die('<p>Verbindung zum MySQL Server fehlgeschlagen: '. $con->connect_error .'</p>');
  } else {
    echo'<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p> <a href="index.html"><button>Back</button></a>';
  }

  $check="SELECT * FROM user WHERE email = '$_POST[email]'";
  $rs = mysqli_query($con,$check);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['nummer'];

  if($data[0] > 1) {
    echo "Diese Email wurde schon Verwendet!<br/>";
}else{
  $sql = "INSERT INTO user (email, name, number) Values('$email', '$name', '$number')";
  if(mysqli_query($con, $sql)){
  echo "Erfollgreich Daten eingetragen!";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }
}
  mysqli_close($con)
?>
