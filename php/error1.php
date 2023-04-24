<!DOCTYPE html>
<html lang="en">
<head>
<title>error1</title>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body>

						<script type="text/javascript">

					swal({
	icon: "error",
   title: 'Password not match!',
   dangerMode: true,
   type: "warning"}).then(okay => {
   if (okay) {
   	window.history.back();

   

  }
});


					</script>

				<!-- 	<div class="row">
						<a href="index.php" style="text-decoration: none;"><div class="btn">Back Home</div></a><br>
						<a href="careers.php" style="text-decoration: none;"><div class="btn">See more jobs</div></a>
					</div> -->

</body>
</html>
