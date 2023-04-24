
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">
<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body>

	<script type="text/javascript">

	swal({
		icon: "success",
	    title: 'Successful registration!',
		text: "You may now login",
	    type: "success"}).then(okay => {
	    if (okay) {
	    location.replace('../index.php');

		}
	});
	</script>


				<!-- 	<div class="row">
						<a href="index.php" style="text-decoration: none;"><div class="btn">Back Home</div></a><br>
						<a href="careers.php" style="text-decoration: none;"><div class="btn">See more jobs</div></a>
					</div> -->

</body>
</html>

