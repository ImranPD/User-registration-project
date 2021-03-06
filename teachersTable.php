
<?php 

	include_once"vendor/autoload.php";

	use App\controler\Teacher;

	$teacher=new Teacher;

	if(isset($_GET['delete_id'])){

		$id=$_GET['delete_id'];

		$mess=$teacher->teacherDelete($id);
		header('location:teachersTable.php');

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>
	.user{
		width: 1000px;
		margin: 50px auto 0px;
	}
	.user table tr td{
		vertical-align: middle;
		padding: 3px 5px;
	}
	 .user table tr td img{
	 	width: 50px;
	 	height: 50px;
	 	vertical-align: middle;
	 }
	 .user table tbody tr td:first-child{
	 	width: 30px;
	 }
	 .user table tbody tr td:last-child{

	 	text-align: right;
	 	width: 180px;

	 }
</style>
<body>	

	<div class="user">
		<?php 

		if(isset($mess)){
			echo $mess;
		}



		 ?>
		<a class="btn btn-primary" href="index.php">Create new</a>
		<div class="card">
			<div class="card-header">
				<h3>Teachers Table</h3>
			</div>
			<div class="card-body">
				<table class="table table-striped text-center">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 

							$data=$teacher->allteacher();
							$i=1;

						    while($single_te=$data->fetch_assoc()):

						 ?>
						<tr>
							<td><?php echo $i;$i++; ?></td>
							<td><?php echo $single_te['name']; ?></td>
							<td><?php echo $single_te['email']; ?></td>
							<td><?php echo $single_te['cell']; ?></td>
							<td><?php echo $single_te['uname']; ?></td>
							<td>

									<a class="btn btn-sm btn-success" href="teachersEdit.php?edit_id=<?php echo $single_te['id']; ?>">Edit</a>
								    <a id="delete"class="btn btn-sm btn-danger" href="?delete_id=<?php echo $single_te['id']; ?>">Delete</a>
								    <a class="btn btn-sm btn-primary" href="teachersProfile.php?profile_id=<?php echo $single_te['id']; ?>">View</a>
								
							</td>
						<?php endwhile; ?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	
	<br>
	<br>
	<br>
	<br>

		
		

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script>
		$('a#delete').click(function(){
			let conf=confirm('Are you sure ??');

			if(conf==true){
				return true
			}else{
				return false;
			}
		});
	</script>
</body>
</html>