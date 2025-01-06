<?php
include'includes/header.php';
include'includes/sidebar.php';

?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
         <div class="col-lg-12">
         <a class="btn btn-info">Add User</a>
            <br>
            <br>
         <table class="table table-hover table=striped">
            <thead>
             <tr>
             <th>id</th>
             <th>username</th>
             <th>phone</th>
             <th>email</th>
             <th>privliges</th>
             <th>address</th>
             <th>gender</th>
             <th>Controls</th>



                </tr>
            </thead>
            <tbody>
                <?php
               include 'functions/connect.php';
               $select_users="SELECT*FROM users";
               $query=$conn -> query($select_users);
               foreach($query as $user )
               {
                ?>
                <tr>
              <td><?php echo $user['id']?></td>
              <td><?php echo $user['username']?></td>
              <td><?php echo $user['phone']?></td>
              <td><?php echo $user['email']?></td>   
              <td><?php echo $user['priv']== 0 ? 'admin' : 'user'?></td>
              <td><?php echo $user['address']?></td>
              <td><?php echo $user['gender']== 0 ? 'Male' : 'Female'?></td>
              <td>
                <a class="btn btn-primary">edit</a>
                <a class="btn btn-danger">delete</a>
               </td>


                </tr>
                <?php } ?>
            </tbody>
          </table>  
         </div>
        </div>
		
	</div>	<!--/.main-->
	<?php
	include'includes/footer.php';
	?>

	
	