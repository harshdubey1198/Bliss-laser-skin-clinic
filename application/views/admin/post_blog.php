<?php 
	require_once('inc/head.php');
	require_once('inc/header.php');
	require_once('inc/side_bar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1> New Post</h1>
			<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active">Post blog</li>
		</ol>
	</section>

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">
                <p>
                  <?php
                    if($this->session->flashdata('error'))
                    {
                      echo '<font color="red">'.$this->session->flashdata('error').'</font>';
                    }
                  ?>
                </p>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="<?=base_url('Admin_panel/post_blog_action');?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Category</label>
                  <select type="text" class="form-control" name="cat">
                    <option>Select category</option>
                    <?php
                      foreach ($d as $res) {

                    ?>
                    <option value="<?=$res['cat_name'];?>"><?= $res['cat_name'];?></option>
                    <?php
                  }
                    ?>
                  </select> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Image, Video Post</label>
                  <input type="file" id="exampleInputFile" name="img">
                  
                </div>
                <label for="exampleInputFile">Message</label>
                <textarea id="editor1" name="msg" rows="10" cols="80" required></textarea>
               

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>          
        </div>
        <div class="col-md-2">&nbsp;</div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
</div>

<?php require_once('inc/footer.php');?>