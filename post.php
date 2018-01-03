<?php 
error_reporting(0);
 include "database.php";
 include "func_database.php";
 if ($_POST['submit']) {
 	$result=InsertPost($_POST['featuredimg'],$_POST['altimg'],$_POST['title'],$_POST['content'],$_POST['publisher']);
 	if ($result) {
 		header('location: index.php');
 	}
 	print_r($result);
 }
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP-post</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style type="text/css">
		body { background-color:#ddd; }
		.blog-row {margin-top:50px; }
		.margin_bottom30 { margin-bottom:30px; }
		.margin_left10 {margin-left:10px; }
		.blog-content {padding:10px; }
		.bg-white {background-color:#fff;}
	</style>
</head>
<body>
<div class="container">
	<h2>New POST</h2>
	<div class="row" >
		<div class="col-md-9">
			<form method="POST" action="post.php" id="formpost">
				<div class="form-group">
					<label>Title</label>
					<input class="form-control" type="text" name="title" placeholder="Tulis Judul">
				</div>
				<div class="form-group">
					<label>Title</label>
					<textarea class="form-control" name="content" rows="10" cols="40" placeholder="Tulis Konten"></textarea>
				</div>

				<div class="form-group pull-right" style="padding-top: 5px">
					<input class="btn btn-primary" type="submit" name="submit" value="Simpan">	
				</div>
				
			</form>
		</div>
		<div class="col-md-3">
				<div class="form-group">
					<label>Featured Image</label>
					<input form="formpost" class="form-control" type="text" placeholder="http://i50.tinypic.com/2nbf0ht.jpg" name="featuredimg">
				</div>
				<div class="form-group">
					<label>Alt Image</label>
					<input form="formpost" class="form-control" type="text" placeholder="Alt text untu SEO" name="altimg">
				</div>
				<div class="form-group">
					<label>Publisher</label>
					<input form="formpost" class="form-control" type="text" placeholder="Siapa anda?" name="publisher">
				</div>
		</div>
	</div>
</div>

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>