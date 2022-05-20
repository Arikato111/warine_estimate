<?php
function HomePage(){

    return '<div id="head" class="head">
    <button onclick="openMenu(false)">Close</button>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    <a herf="#">menu 1</a>
    </div>
    <div class="btn-fixed"><button onclick="openMenu(true)">open</button></div>
    '
    . Content()
    ;
}

function Content(){
    return '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam perferendis sunt, voluptatibus ipsam mollitia autem optio aperiam repudiandae totam harum. Ullam quisquam necessitatibus voluptatem expedita et aperiam ex odit consequuntur autem? Ab ipsam deleniti optio! Eveniet, necessitatibus ea ut voluptatem nemo velit hic pariatur asperiores vel, dolores quisquam repellendus ratione facere dolor assumenda sint esse itaque minus nihil nam eos. Quia iusto vitae, veritatis expedita quam tempora nostrum inventore nam ex temporibus, numquam quae corrupti beatae tempore nisi vero. Rerum quisquam modi delectus, sequi recusandae ex vel quos dicta, adipisci repellat corporis neque voluptatibus cumque minus tempora doloremque vitae animi?</div>';
}

