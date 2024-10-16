<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
	require_once('inc/side_bar.php');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Now </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header">
              <p>
                <?php
                  if($this->session->flashdata('error'))
                  {
                    echo '<font color="red">'.$this->session->flashdata('error').'</font>';
                  }
                ?>
              </p>
              <h3>Edit Your Password</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="<?=base_url('Admin_panel/change_pass');?>" method="post">
                <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Old Password</label>
                    <input type="password" class="form-control" name="old_pass" placeholder="Enter Old Password" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">New Password</label>
                  <input type="password" class="form-control" name="new_pass" placeholder="Enter New Password" required >
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Re Enter New Password</label>
                  <input type="password" class="form-control" name="passconf" placeholder="Re Enter Password" required>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Edit Now</button>
                </div>
              </form>
            </div>
          </div>          
        </div>
        <div class="col-md-3">&nbsp;</div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    
  </div>

<?php
	require_once('inc/footer.php');
?>