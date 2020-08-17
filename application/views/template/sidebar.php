

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url('assets');?>/img/icon.png" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">IPNU CILACAP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- query menu -->


          <?php 
                
            $querysubmenu = " SELECT * FROM `user_menu_admin`
                            ORDER BY `user_menu_admin`. `title`, `url`, `icon`, `in_active` ASC ";
            $submenu = $this->db->query($querysubmenu)->result_array();
               
           ?>
          
          <?php foreach ($submenu as $sm):?>
            <?php if ($title == $sm['title']): ?>
              <li class="nav-item active">
              <?php else:?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
            <?php endif;?>
              <a class="nav-link" href="<?= base_url($sm['url']);?>">
                <i class="<?= $sm['icon'];?>"></i>
                <span><?= $sm['title'];?></span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php endforeach; ?>  
      

      <!-- Heading -->
      <div class="sidebar-heading">
        Profile
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Base</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('user/enter');?>">New</a>
            <a class="collapse-item" href="<?= base_url('user/database');?>">All Data Base</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-pen-square"></i>
          <span>Post Artikel</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">New</a>
            <a class="collapse-item" href="utilities-border.html">All Post</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->