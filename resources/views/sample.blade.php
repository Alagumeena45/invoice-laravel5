<html>
	<head>
		<title>Laravel</title>
		
		<!---link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style-->
                <script>
              function testing()
              {
                  alert("success");
              }
            </script>
	</head>
	<body>
             <form  action = "/create" method = "post">
                   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<div class="container">
			<div class="content">
                            <h1>Registration Form</h1>
                            <div class="form-group"><div class="row">User Name:<input type="text" name="username" id="username"></div></div>
                            <div class="form-group"><div class="row">Password:<input type="text" name="password" id="password"></div></div>
                            <div class="form-group"><div class="row">Confirm Password:<input type="text" name="confirm_password" id="confirm_password"></div></div>
                            <div class="form-group"><div class="row"><input type="button" name="submit" id="submit" value="submit" ></div></div><!--onclick="testing();"--->
			</div>
		</div>
             </form>
	</body>
</html>
<!---https://www.tutorialspoint.com/laravel/insert_records.htm
http://www.tamtech.co.in/insert-data-into-mysql-database-table-using-laravel5---->