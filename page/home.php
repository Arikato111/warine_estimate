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
      . '<a href="#">
   <div class="people" style="' . $div_style . '">'.$i.'</div>
   </a>';
  }

  return title("Home") . '<div class="box">'
    . $content
    . '</div>';
}
