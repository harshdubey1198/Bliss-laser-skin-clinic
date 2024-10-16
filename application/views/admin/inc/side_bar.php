<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"></li>
      <li class="active">
        <a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Blog</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?=base_url('admin/blog-category')?>"><i class="fa fa-plus-square-o"></i><span>Add Blog Category</span></a></li>
          <li><a href="<?=base_url('admin/post_blog')?>"><i class="fa fa-plus-circle"></i><span>Post New Blog</span></a></li>
          <li><a href="<?=base_url('admin/manage-blog')?>"><i class="fa fa-pencil-square-o"></i><span>Manage Blog</span></a></li>
        </ul>
      </li>
      <li><a href="<?=base_url('admin/edit_pass')?>"><i class="fa fa-pencil-square-o"></i><span>Change Password</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>