<?php
  include "connection.php";
  if(isset($_GET["bid"])) {
	  $bid=$_GET["bid"];
  mysqli_query($db,"DELETE from books where bid=$bid");
  ?>
  <script type="text/javascript">
            window.location="books.php";
			
          </script>
  <?php
} else {  
 ?>
          <script type="text/javascript">
            alert("Delete Successful.");
          </script>
       
          <?php
  }