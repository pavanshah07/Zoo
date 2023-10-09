<?php

require_once "config.php";
// Check connection
if(isset($_POST['id'])){

    $id = $_POST['id'];

    $query = "delete from product where id=$id";
    $run = mysqli_query($link,$query);
    echo '
      <script type = "text/javascript">
	      alert("Delete Image Successfully");
				window.location = "admin.php";
			</script>
		  ';
}
else{
  echo '
			<script type = "text/javascript">
				alert("All Fields Are Required");
				window.location = "contact.php";
			</script>
		';

}
?>