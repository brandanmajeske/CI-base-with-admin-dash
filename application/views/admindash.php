<?php $error = isset($error)? $error :  null; ?>
<h3 class="page-header"><?php echo ucfirst($user_data['username']);?>'s Admin Dashboard</h3>
<div class="row">
<div class="col-4 pull-right">
<?php 
	echo "<p>Username: ".ucfirst($profile[0]['username'])."</p>";
	echo "<p>Name: ".ucwords($profile[0]['name'])."</p>";
	echo "<p>Joined: ".$profile[0]['join_date']."</p>";
	echo '<p><a href="'.base_url().'password_reset">Change Password</a></p>';
?>
	</div>
<div class="col-8">
<?php 
if(!is_null($error )){
	echo $error['error'];
	}
?>
</div>
</div> <!-- End ROW -->

