<!DOCTYPE html>
<html>
<head>
	<title>Show Animal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	 <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">
	 <table class="table table-hover"  id="table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Expectancy</th>
        <th>Insert Date</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	require('conn.php');
    	$rs=mysqli_query($con,"select * from ani_info order by name ASC,insert_date DESC");
    	$i=1;
    	while($row=mysqli_fetch_array($rs))
    	{
    	?>
      <tr>
      	<td><?php echo $i++?> </td>
        <td><img src="<?php echo "files/".$row['image'] ?>" height='50px'></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['cat'] ?></td>
        <td><?php echo $row['des'] ?></td>
         <td><?php echo $row['life'] ?></td>
         <td><?php echo $row['insert_date'] ?></td>

      </tr>
      <?php
  }
  ?>
    </tbody>
  </table>
</div>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready( function () {
    $('#table').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        
    });
    
} );
    </script>
</body>
</html>