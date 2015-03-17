<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CMS - Call Operator</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
		
		<!-- Bootstrap & jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
		<script src="/CMS/UI/js/bootstrap.min.js"></script>
		<script src="/CMS/UI/js/getEventList.js"></script>
		<script src="/CMS/UI/js/createform.js"></script>

	    <link href="/CMS/UI/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/CMS/UI/css/bootstrap-theme.min.css" rel="stylesheet">
	    <link href="/CMS/UI/css/style.css" rel="stylesheet">
		

	</head>

	<body>

		<div class="container theme-showcase" role="main">

			<div class="jumbotron">
				<h1>CMS</h1>
				<p>Call Operator</p>
			</div>

			<div class="container-fluid"> <div class = "row">
				<div id = "event-container" class = "col-sm-4"> 
					<div class="page-header">
			        	<h1>Event List
			        		<button id ="add-event" type="button" class="btn btn-default btn-lg">+</button>
			        	</h1>
			        	
			      	</div>

			      	<div class="panel panel-info">
				      	<div class="panel-body" id ="event-list">

							<table class="table table-striped">
								<tbody>
								<tr>
									<td>Event 1</td>
								</tr>
								<tr>
									<td>Event 2</td>
								</tr>
								<tr>
									<td>Event 3</td>
								</tr>
								
								</tbody>
							</table>
						</div>
					</div>

				</div>

				<div id = "form-container" class = "col-sm-8"> 

					<form id="event-form" class="form-horizontal" role="form" action="" method="">

						<div class="page-header">
			        		<h1>Report Details</h1>
			      		</div>

			      		<div class="panel panel-info">
					      	<div class="panel-body">

					      		<div class="form-group">
									<label for="name" class="control-label col-sm-3" > Name: </label>	
									<div class="col-sm-9"> 
										<input type="text" id="fullname"  class="form-control" value="">
									</div>
								</div>

								<div class="form-group">
									<label for="mobile" class="control-label col-sm-3" > Mobile Number: </label>
									<div class="col-sm-9"> 
										<input type="text" id="mobile" value=""  class="form-control" >
									</div>
								</div> 

								<div class="form-group">
									<label for="address" class="control-label col-sm-3" > Address: </label>
									<div class="col-sm-9"> 
										<input type="text" id="address" value=""  class="form-control" >
									</div>
								</div> 

								<div class="form-group">
									<label for="nric" class="control-label col-sm-3" > NRIC: </label>
									<div class="col-sm-9"> 
										<input type="text" id="nric" value=""  class="form-control" >
									</div>
								</div> 
								

								<div class="form-group">
									<label for="event-type" class="control-label col-sm-3" > Event type: </label>
									<div class="col-sm-9"> 
										<label class="radio-inline"><input type="radio" name="event-type" value ="fire">Fire</label>
										<label class="radio-inline"><input type="radio" name="event-type" value ="haze">Haze</label>
									</div>
								</div> 

								<div class="form-group">
									<label for="event-location" class="control-label col-sm-3" > Event location:</label>
									<div class="col-sm-9"> 
										<select class="form-control" id="event-location">
											<option>District 1</option>
											<option>District 2</option>
											<option>District 3</option>
											<option>District 4</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="event-location" class="control-label col-sm-3" > Other details:</label>
									<div class="col-sm-9"> 
										<textarea class="form-control" rows="3" id="other-details"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="assistance-request" class="control-label col-sm-3" > Assistance request:</label>
									<div class="col-sm-9"> 
										<div class="checkbox">
										  <label><input type="checkbox" value="">Ambulance</label>
										</div>
										<div class="checkbox">
										  <label><input type="checkbox" value="">Fire fighter</label>
										</div>
									</div>
								</div>

								<center><button type="submit" class="btn btn-lg btn-success wide-button">Save</button></center>
							</div>
						</div>
					</form>
				</div>
			</div> </div>

		</div>

	</body>

</html>