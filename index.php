<?php
//echo '<p>This is PHP!</p>';

if(isset($_GET["First Name"])){//show feedback
  echo $_GET["First Name"]
}else{//show form
  echo '
  <form action ="">
  First Name <input typr="text" name="First Name" />
  <br />
  <input type="submit">
  
  </form>
  ';
}


?>





