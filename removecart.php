<?php

require_once "config.php";
// Check connection
if(isset($_POST['id'])){

    $id = $_POST['id'];

    $query = "delete from cart where cart_id=$id";
    $run = mysqli_query($link,$query);
    echo '
      <script type = "text/javascript">
	      alert("Product Remove Form Cart Successfully");
				window.location = "addcart.php";
			</script>
		  ';
}
else{
  echo '
			<script type = "text/javascript">
				alert("failed");
			</script>
		';

}
?>