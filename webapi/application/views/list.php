<html>
<head>
	<title>Web API Application</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>"></link>
</head>

<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">Web API Application</a>
		</div>
	</div>
	<div class="container" style="padding-top:10px ">
		<hr>
		<div class="row">
			<table class="table table-striped">
				<tr>
					<th>Edit</th></th>
					<th>Flag</th>
					<th>Name</th>
					<th>Capital</th>
					<th>NativeName</th>
					<th>Region</th>
				</tr>
				<?php if(!empty($api_details))
				{
					foreach($api_details as $api_detail)
					{
					?>
						<tr>
							<td>
								<a href="<?php echo base_url().'index.php/Webapi/edit/'.$api_detail['id'] ?>" class="btn btn-primary">Edit</a>
							</td>
							<td><?php echo $api_detail['flag'] ?></td>
							<td><?php echo $api_detail['name'] ?></td>
							<td><?php echo $api_detail['capital'] ?></td>
							<td><?php echo $api_detail['nativeName'] ?></td>
							<td><?php echo $api_detail['region'] ?></td>
						</tr>
					<?php
					}
				}
				else
				{
				?>
					<tr>
						<td colspan="5">Records not found</td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</body>
</html>
