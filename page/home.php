<?php
function HomePage()
{
  $content = "";
  for ($i = 0; $i < 100; $i++) {
    $div_style = "
    ";
    if($i % 2 == 0){
      $div_style = "
      background-color: red;
    ";
    }
    $content = $content
      . '<div class="box-people">'
      . '<a href="#">
   <div class="people" style="' . $div_style . '">
   <div class="box-img">
        <img src="https://register.rmutsb.ac.th/th/userfiles/images/img-student/2560/600712/600707-2.jpg" alt="image profile">
   </div>
   <div style="color: pink;">{name}</div>
   <div style="color: lightgreen;">{vote status}</div>
   </div>
   </a></div>';
  }
  return title("Home") . '<div class="box">'
    . $content
    . '</div>';
}
