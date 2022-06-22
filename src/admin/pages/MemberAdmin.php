<?php
styleImport('./src/admin/pages/globle.css');

function MemberAdmin(){
    return title('Member | admin') . 
    <<<HTML
        <div class="content">
            <div>Member</div>
        </div>
    HTML;
}