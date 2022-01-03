<?php
  include "connection.php";
  if(isset($_GET["bid"])) {
	  $bid=$_GET["bid"];
  mysqli_query($db,"DELETE from fine where bid=$bid");
  ?>
  <script type="text/javascript">
            window.location="paid.php";
			
          </script>
  <?php
} else {  
 ?>
          <script type="text/javascript">
            alert("Paid Successful.");
          </script>
       
          <?php
  }