

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

      <?php 

        $queryusermenu="SELECT * FROM `user_menu` ORDER BY `user_menu`.`id`,'title','url','icon','in_active' ASC";
        $usermenu = $this->db->query($queryusermenu)->result_array();
    
       ?>
      
          <?php foreach ($usermenu as $um):?>
            <?php if ($title == $um['title']): ?>
              <li class="nav-item active">
              <?php else:?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
            <?php endif;?>
              <a class="nav-link" href="<?= base_url($um['url']);?>">
                <i class="<?= $um['icon'];?>"></i>
                <span><?= $um['title'];?></span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php endforeach; ?>  
    

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->