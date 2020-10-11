<html>
    <head>
        <title>Welcome to Edit API Details</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>"></link>
    </head>
    <body>
        <div class="container-fluid">
			<form method="post" name="createUser" action="<?php echo base_url().'index.php/Webapi/edit/'.$api_detail['id']; ?>">
            	<div class="card-1">
            		<div class="card" style="height:100% ">
						<div class="navbar navbar-dark bg-dark">
							<div class="container">
								<a href="#" class="navbar-brand">Welcome to Edit API Details</a>
							</div>
						</div>
                		<div class="card-body">
                    		<div class="row">
                        		<div class="column col-md-4">
                            		<div class="form-group">
                                		<label>Flag</label>
										<input type="text" class="form-control" name="flag" id="flag" value="<?php echo set_value('flag',$api_detail['flag']); ?>" readonly="readonly">
									</div>
                       			</div>
								<div class="column col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name',$api_detail['name']); ?>" readonly="readonly">
									</div>
								</div>
								<div class="column col-md-4">
									<div class="form-group">
										<label>Capital</label>
										<input type="text" class="form-control" name="capital" id="capital" value="<?php echo set_value('capital',$api_detail['capital']); ?>">
									</div>
								</div>
								<div class="column col-md-4">
									<div class="form-group">
										<label>Native Name</label>
										<input type="text" class="form-control" name="nativeName" id="nativeName" value="<?php echo set_value('nativeName',$api_detail['nativeName']); ?>" readonly="readonly">
									</div>
								</div>
								<div class="column col-md-4">
									<div class="form-group">
										<label>Region</label>
										<input type="text" class="form-control" name="region" id="region" value="<?php echo set_value('region',$api_detail['region']); ?>">
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="column col-md-5" style="padding-left: 45%; ">
								<div class="form-group">
									<button type="submit" class="btn bt btn-primary" name="submit">Update</button>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</form>
		
	</div>
    </body>
</html>