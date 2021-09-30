<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form nộp bài Kiểm tra</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="box-upload">
		<h2>Nộp bài Kiểm tra</h2>
				<form action ="upload.php" method="POST" enctype="multipart/form-data" id="formUpload" onsubmit="return false;">
				<div class   ="progress">
				<div class   ="progress-bar">0%</div>
				</div>
				<div class   ="form-group">
				<input type  ="text" name="hssv" class="form-control" placeholder="Nhập tên học sinh">
			</div>
				<input type  ="file" class="form-control" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
				<div class   ="box-preview-img"></div>
				<button type ="reset" class="btn-reset">Làm mới</button>
				<button type ="submit" class="btn-submit">Nộp bài</button>
				<div class   ="output"></div>
				</form>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/main.js"></script>
</body>
</html>