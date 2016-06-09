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
	</head>

	<body ng-app="hackRU">
		<div class="col-md-6 col-md-offset-3">
			<div class="page-header">
				<h1>Client Form</h1>
			</div>

			<div class="row col-md-offset-0">
			Please enter your information to place your job.
			<br /><br />
			</div>

			<form ng-submit="addOffer()">

			<!-- FIRST AND LAST NAME -->
			<div class="row">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="First Name" ng-model="first" />
				</div>

				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Last Name" ng-model="last" />
				</div>
			</div>

			<!-- ADDRESS -->
			<div class="row">
				<div class="col-md-5">
					<span style="margin-top: 20px; margin-bottom: 10px; display: block;">Address:</span>
					<input type="text" class="form-control" placeholder="Street Address" ng-model="street" />
				</div>

				<div class="col-md-3" style="margin-top:50px;">
					<input type="text" class="form-control" placeholder="City" ng-model="city" />
				</div>

				<div class="col-md-2" style="margin-top:50px;">
					<input type="text" class="form-control" placeholder="State" ng-model="state" />
				</div>

				<div class="col-md-2" style="margin-top:50px;">
					<input type="text" class="form-control" placeholder="Zip Code" ng-model="zip" />
				</div>
			</div>

        <div class="row">
          <div class="col-md-5 " style="margin-top:30px;">
            <p>Choose one from the following:</p>
          <select>

            <option type="text" class="form-control" placeholder="None" ng-model="none" />Select From the folowing</option>
            <option type="text" class="form-control" placeholder="HouseWare" ng-model="house" />HouseWare</option>
            <option type="text" class="form-control" placeholder="Car Problem" ng-model="car" />Car Problem</option>
            <option type="text" class="form-control" placeholder="Technology" ng-model="tech" />Technology</option>
            <option type="text" class="form-control" placeholder="Other" ng-model="other" />Other</option>

          </select>
        </div>
        </div>

			<div class="row">
				<div class="col-md-12">
					<span style="margin-top: 20px; margin-bottom: 10px; display: block;">Problem Description:</span>
					<textarea class="form-control" rows="5"></textarea>
				</div>
			</div>

      <div class="row">
      				<div class="col-md-2" style="margin-top: 20px;">
      					<button type="submit" class="btn btn-primary" ng-click="submit">Submit Offer</button>
      				</div>

      				<div class="col-md-3" style="margin-top: 20px;">
      					<button type="reset" class="btn btn-primary" ng-click="clear">Clear Form</button>
      				</div>
      			</div>

				</form>


		</div>
	</body>
</html>
