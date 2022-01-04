<!DOCTYPE html>
<html>
<head>
		<title>Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid mt-2">
	<div class="row">
		<div class="col-md-6">
			<div class="card-header" id="Package" style="color:white;background-color:#d9913f">
                       <div class="card-title">
                           <h5>Register</h5>
                       </div>
                   </div>
         <div class="card-body shadow" style="background-color:#faf7f9">
         	<form method="post" action="submission.php" enctype="multipart/form-data">
         	<div class="row">
			<div class="col-sm-12 mt-2">
				<input type="text" name="animal" id="animal" placeholder="Enter Name of the animal" class="form-control" required>
			</div>
			<div class="col-sm-12 mt-2">
				<select id="cat" name="cat" class="form-control" required>
					<option value="" disabled selected>--Select Category--</option>
					<option value="Herbivores">Herbivores</option>
					<option value="Omnivores">Omnivores</option>
					<option value="Carnivores">Carnivores</option>
					
				</select>
			</div>
			<div class="col-sm-12 mt-2">
				<input type="file" name="img" id="img" class="form-control" required accept="image/x-png,image/gif,image/jpeg">
			</div>
			<div class="col-sm-12 mt-2">
				<textarea class="form-control" name="des" placeholder="Enter Description" required></textarea>
			</div>
			<div class="col-sm-12 mt-2">
				<select id="life" name="life" class="form-control" required>
					<option value="" disabled selected>--Select Life Expectancy--</option>
					<option value="0-1 Year">0-1 Year</option>
					<option value="1-5 Years">1-5 Years</option>
					<option value="5-10 Years">5-10 Years</option>
					<option value="10+ Years">10+ Years</option>
				</select>
			</div>
		</div>
			<div class="row">
			<div class="col-sm-12 mt-2">
				<img src="captha.php">
			</div>
			<div class="col-sm-12">
				<input type="text" name="captha" id="captha" placeholder="Enter Captha" class="form-control" required>
			</div>
			<div class="col-sm-12 mt-2">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">&nbsp&nbsp
				<input type="reset" name="submit" class="btn btn-danger" value="Reset">
			</div>
			</div>
		</div>
	</form>

		</div>
	</div>
</div>
</body>
</html>