<?php
function slideBar(){
      $path = '/admin/' . getParams(1);

      function checkActive($path, $from_path){
        if($path == $from_path){
          return "active";
        }

      }

      function menu($path){
        $content = "";
        $menu = [
          ["name"=>"Home", "path"=>"/admin/"],
          ["name"=>"Contact", "path"=>"/admin/contact"],
          ["name"=>"Member", "path"=>"/admin/member"],
        ];
        for ($i=0; $i<sizeof($menu);$i++){ 
          $content = $content . '<li class="nav-item">
            <a href="'. $menu[$i]['path'].'" class="nav-link '.checkActive($menu[$i]['path'], $path) .'">
              <i class="far fa-circle nav-icon"></i>
              <p>'. $menu[$i]['name'].'</p>
            </a>
          </li>';
        }
        return $content;
      }

      function getUserInformation(){
        $user = [
          "name"=>"Alexander Pierce",
          "img"=>"https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg",
        ];
        $img = $user['img'];
        $name = $user['name'];
        return  <<<HTML
                  <div class="sidebar">
                   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="$img" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                      <a href="/account" class="d-block" title="my account" >$name</a>
                    </div>
                    </div>
                  </div>
                  HTML;
      }

  
      $user_information = getUserInformation();
      $user_memu_path = menu($path);
      $check_active_link = checkActive('/admin/link', $path);
    return <<<HTML
    <aside style="position: fixed;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/images/icon.png" alt="Warin Logo" class="mymove brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">Admin</span>
    </a>
  
    <!-- Sidebar -->
      $user_information
      <!-- Sidebar Menu -->
      <div class="scroll">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
          $user_memu_path    
          <li class="nav-item">
            <a href="/admin/link" class="nav-link $check_active_link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="/logout" class="nav-link">
            <p>
             <div style="text-align: center;">Logout</div>
            </p>
          </a>
        </li>
        </ul>
      </nav>
    </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <br>
  <div style="margin: 20px 0;"></div>
  HTML;
  }