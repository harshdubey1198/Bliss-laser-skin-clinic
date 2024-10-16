<?php 
	require_once('inc/head.php');
	require_once('inc/header.php');
	require_once('inc/side_bar.php');
  //require_once('inc/modal.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>Blog Category</h1>
			<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active">Manage blog category</li>
		</ol>
	</section>
	<!-- Main content -->
    <section class="content">
      	<div class="row">
      		<div class="col-xs-12">
      			<div class="box">
              <div class="box-footer">
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Category</button>
                </div>
            <div class="box-header">
              	<h3 class="box-title">
                  <?php if($this->session->flashdata('error'))
                  {
                    echo '<font color="red">'.$this->session->flashdata('error').'</font>';
                  }
                 ?> 
                </h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100">Sr. No</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach ($d as $res) {
                  ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td><?= $res['cat_name'];?></td>
                    <td>
                      <a href="<?= base_url('admin/category-edit/').$res['id'];?>" class="btn btn-primary">Edit</a>
                      <a href="<?= base_url('Admin_panel/category_delete/').$res['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php
                  $i++;
                }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			</div>
        	<!-- /.col -->
      	</div>
      	<!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<?php require_once('inc/footer.php');?>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Blog Category Page</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('Admin_panel/add_blog_category');?>" method="post">
          <div class="box-body">
          <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="cat_name" placeholder="Enter category Name" required>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>