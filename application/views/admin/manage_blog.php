<?php 
	require_once('inc/head.php');
	require_once('inc/header.php');
	require_once('inc/side_bar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>Total Blog</h1>
			<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		    <li class="active">Edit & Delete</li>
		</ol>
	</section>
	<!-- Main content -->
    <section class="content">
      	<div class="row">
      		<div class="col-xs-12">
      			<div class="box">
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
                  <th width="70">Sr. No</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Img/Video</th>
                  <th>Message</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $i = '1';

                    foreach ($d as $res) {

                    $img_arr = array("jpg", "jpeg", "png"); 
                    $a = explode('.',$res['imgPath']);
                    $type = end($a);
                    if(in_array($type, $img_arr))
                    {

                    $imgpath = 0;
                    }
                    else
                    {
                      $imgpath = 1;
                    }
                     
                  ?>
                <form action="<?=base_url('Admin_panel/edit_blog');?>" method="post">
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $res['cat'];?></td>
                    <td><?= $res['name'];?></td>
                    <td><?= substr($res['title'], 0,35);?></td>
                    <td>
                      <?php if($imgpath==0){ ?>
                      <?php
                      if(!empty($res['imgPath']))
                        {echo '<img src="'.base_url().'uploads/blog/'.$res['imgPath'].'" width="60">';}
                      else{echo 'NA';}
                      ?>
                      <?php
                    }
                    else
                    {
                      ?>
                    <video width="60" controls>
                      <source src="<?=base_url();?>uploads/blog/<?= $res['imgPath'];?>" type="video/mp4" >
                      <source src="<?=base_url();?>uploads/blog/<?= $res['imgPath'];?>" type="video/ogg">
                      Your browser does not support the video tag.
                    </video> 

                      <?php
                    }
                    ?>
                    </td>
                    <td><?= substr($res['msg'], 0,40);?></td>
                    <td>
                      <a href="<?= base_url('admin/edit-blog/').$res['id'];?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                      <a href="<?=base_url('Admin_panel/delete_blog/'). $res['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                </form>
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