<?php
	session_start();
	if (!empty($_COOKIE["uname"]) && !empty($_COOKIE["upass"])) {
		$uname=$_COOKIE["uname"];
		$upass=$_COOKIE["upass"];
		if ($uname==$upass) {
			$_SESSION["uname"]=$uname;
			header("location:main.php");
			return;
		}
	}
?>
<meta charset="utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<body style="margin: 20px">
	<form class="form-horizontal" action="login.php" method="post">
		<div class="container">
			<div class="form-group">
				<label for="uname" class="col-md-2 col-md-offset-2 control-label">Name</label>
				<div class="col-md-3">
					<input class="form-control" id="uname" name="uname" value="<?=isset($_GET["uname"])?$_GET["uname"]:""?>"/>
				</div>
				<label class="col-md-1 control-label" style="color: red">
					<?=isset($_GET["uname_req"])?"Required":""?>
					<?=isset($_GET["login_err"])?"Error":""?>
				</label>
			</div>
			<div class="form-group">
				<label for="upass" class="col-md-2 col-md-offset-2 control-label">Password</label>
				<div class="col-md-3">
					<input class="form-control" id="upass" name="upass" type="password"/>
				</div>
				<label class="col-md-1 control-label" style="color: red">
					<?=isset($_GET["upass_req"])?"Required":""?>
				</label>
			</div>
			<div class="form-group">
				<div class="col-md-4"></div>
				<div class="col-md-3">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="uflag"> Remember me
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4"></div>
				<div class="col-md-3">
					<button type="submit" class="btn btn-default">Sign in</button>
				</div>
			</div>
		</div>
	</form>
</body>