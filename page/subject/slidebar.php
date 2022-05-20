<?php
function slideBar(){
      $path = CheckPath();

      function checkActive($path, $from_path){
        if($path == $from_path){
          return "active";
        }

      }

      function menu($path){
        $content = "";
        $menu = [
          ["name"=>"Home", "path"=>"/"],
          ["name"=>"About", "path"=>"/about"],
          ["name"=>"Contact", "path"=>"/contact"],
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
        return "";
        $user = [
          "name"=>"Alexander Pierce",
          "img"=>"https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg",
        ];
        return  '<div class="sidebar">
                   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="'.$user['img'].'" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                      <a href="/account" class="d-block" title="my account" >'.$user['name'].'</a>
                    </div>
                    </div>
                  </div>';
      }

  

    return '<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/images/icon.png" alt="Warin Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">warinice</span>
    </a>
  
    <!-- Sidebar -->'
      . getUserInformation()
      . '<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
          '
          . menu($path)
          .'         
          <li class="nav-item">
            <a href="/link" class="nav-link '.checkActive('/link', $path).'">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>';
  }