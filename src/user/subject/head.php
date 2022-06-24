<?php
function headSub() {

    $menu_header =  function (){
        $content = "";
        $menu = [
          ["name"=>"ประเมินครูผู้ช่วย", "path"=>"/techer-help"],
          ["name"=> "ประเมินครูไม่มีวิทยฐานะ", "path"=> '/techer-no'],
          ["name"=> "ครูชำนาญการ", "path"=> '/techer-pro'],
          ["name"=> "ครูชำนาญการพิเศษ", "path"=> '/techer-pro-special'],
          // ['name'=> 'ผู้บริหารชำนาญการ', 'path'=> '/manager-pro'],
          // ['name'=> 'ผู้บริหารชำนาญการพิเศษ', 'path'=> '/manager-pro-special'],
          ['name'=>'รายงานครูพิเศษสอน', 'path'=>'/report-techer-special']
        ];
        for ($i=0; $i<sizeof($menu);$i++){ 
          $content = $content . '<a class="dropdown-item" href="'. $menu[$i]['path'] .'">' . $menu[$i]['name'] . '</a>';
        }
        return $content;
      };

    $user_menu = $menu_header();
    return <<<HTML
    <nav style="position: fixed; width: 100%;top:0;" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links --> 
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contact" class="nav-link">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Docs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          {$user_menu}
        </div>
      </li>
    </ul>
  
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <a href="/logout"><li><button style="background-color: #1877f2; color: white;" class="btn">Logout</button></li></a>
    </ul>
  </nav>
  HTML;
}
