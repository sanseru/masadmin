  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/vendor/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('first_name') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU NAVIGATION</li>


      
        <?php
        // chek settingan tampilan menu
            // cari level user
            $id_user = $this->session->userdata('user_id');
            // $id_user = 1055;
            // var_dump($id_user);
            $sql_menu = "SELECT * 
            FROM tbl_menu 
            WHERE id_menu in (select id_menu from tbl_hak_akses where id_user=$id_user) and is_main_menu=0 and is_aktif='y'";
            // $sql_menu = "select * from tbl_menu where is_aktif='y' and is_main_menu=0";

        $main_menu = $this->db->query($sql_menu)->result();

        // var_dump($main_menu);
        foreach ($main_menu as $menu){
            // chek is have sub menu
            $sql_sub_menu = "SELECT * 
            FROM tbl_menu 
            WHERE id_menu in (select id_menu from tbl_hak_akses where id_user=$id_user) and is_main_menu=$menu->id_menu and is_aktif='y'";
            $submenu = $this->db->query($sql_sub_menu);
            // $this->db->where_in('id_menu',2);
            // $this->db->where('is_main_menu',$menu->id_menu);
            // $this->db->where('is_aktif','y');
            // $submenu = $this->db->get('tbl_menu')->result();

            if($submenu->num_rows()>0){
                    echo "<li class='active treeview'>
                    <a href='#'>
                      <i class='".$menu->icon."'></i> <span>".strtoupper($menu->title)."</span>
                      <span class='pull-right-container'>
                        <i class='fa fa-angle-left pull-right'></i>
                      </span>
                    </a>
                    <ul class='treeview-menu'>";
                    foreach ($submenu->result() as $sub){
                      // echo "<li class='active'><a href=".$sub->url."><i class='".$sub->icon."'></i>".strtoupper($sub->title)."</a></li>";
                      echo "<li class='active'>".anchor($sub->url,"<i class='$sub->icon'></i> ".strtoupper($sub->title))."</li>";
                      // echo "<li class='active'>".anchor($sub->url,"<i class='$sub->icon'></i> ".strtoupper($sub->title))."</li>"; 

                    }
                    echo "</ul>
                  </li>";
            }else{
                // display main menu
                echo "<li>";
                echo anchor($menu->url,"<i class='".$menu->icon."'></i> ".strtoupper($menu->title));
                echo "</li>";
                echo "<li>
                <a href=".$menu->url.">
                  <i class='fa fa-th'></i> <span>".strtoupper($menu->title)."</span>
                  <span class='pull-right-container'>
                    <small class='label pull-right bg-green'>new</small>
                  </span>
                </a>
              </li>";
            }
        }
        ?>
        <li><a href="<?php echo site_url('Auth/logout');?>"><i class="fa fa-book"></i> <span>LOGOUT</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>