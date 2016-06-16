<!DOCTYPE html>
<html>
	<head>
		<title>HackRU - Worker</title>
		 <meta charset="UTF-8">

		<!-- BOOTSTRAP -->
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS\style.css">

		<!-- ANGULARJS -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.js"></script>
		<script src="app.js"></script>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>

   <body>
      <?php
      $nameErr="";
      $emp_address1 = $emp_address0 = $emp_address = $emp_address2 = $emp_address3= $expl= $cause = $emp_name="";


         if(isset($_POST['add']))
         {
         if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
            	$dbhost = 'www.db4free.net';
							$dbuser = 'monmon_2007';
							$dbpass = 'marina_zoom';
							$dbname = 'mina';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname); // Create connection
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            if(! get_magic_quotes_gpc() )
            {


            	if (empty($_POST["emp_name"]))
            	{
            		$nameErr = "Name is required";
            	}
            	else
            	{
            			$emp_name 		= addslashes ($_POST['emp_name']);
               		$emp_address  	= addslashes ($_POST['emp_address']);

               }
            }
            }//checks when you hit submit for verivication.


            $sql ="SELECT FROM info (first) WHERE first=$emp_name";
            $result = $conn->query($sql);
						if($result->num_rows >=1)
							{
							 echo"name already exists";
							}
						else
							 {
								 echo"name dose not exist";
							 }
				//header("Location: http://www.google.com");
            //echo "Entered data successfully\n";
            $conn->close();
         }
         else
         {
            ?>

<!-- HTML CODE STARTS HERE -->
            <div class="col-md-6 col-md-offset-3">
		<div class="page-header">
				<h1>Client Form</h1>
		</div>

		<div class="row col-md-offset-0">
			<h3>Login</h3>
			<br /><br />
		</div>

		<form ng-submit="addOffer()" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<!-- FIRST AND LAST NAME -->
		<div class="row">

			<div class="col-md-5">
				<input type="text" input name="emp_address" class="form-control" placeholder="User ID" ng-model="last" id = "emp_address" />
			</div>
		</div>
											<br>
		<!-- ADDRESS -->
			<div class="row">
				<div class="col-md-5">
					<input type="text" input name="emp_address0" class="form-control" placeholder="Password" ng-model="street" id = "emp_address0" />
				</div>
			</div>

			<div class="row">
							<div class="col-md-2" style="margin-top: 20px;">
								<button type="submit" name = "add" class="btn btn-primary" id = "add"
												value = "Submit" ng-click="submit">Submit Offer </button>
							</div>
							<div class="col-md-3" style="margin-top: 20px;">
								<button type="reset" class="btn btn-primary" ng-click="clear">Clear Form</button>
							</div>
						</div>

		</form>


		</div>

            <?php
         }
      ?>

   </body>
</html>
