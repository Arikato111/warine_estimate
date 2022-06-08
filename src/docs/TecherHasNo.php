<?php
styleImport('./src/docs/techerhasno.css');

function TecherHasNo () {

    $form_input_component = function ($value_data) {
        $content = "";

        foreach($value_data as $cop){
            $title = $cop['title'];
            // $name = $cop['name'];
            // $namePB = $cop['name'] . "PB";
            $content = $content .
         <<<HTML
         <div class="content">
             <div class="m-3 table-input p-3">
                <div class="p-b" style="font-size: 20px;">$title</div>
                <label for="">ประเมินตนเอง</label>
                <select class="m-select">
                    <option value="1" id="">1
                    <option value="2" id="">2
                    <option value="3" id="">3
                    <option value="4" id="">4
                </select>
                <label for="">ของผู้บังคับบัญชา</label>
                    <select class="m-select">
                        <option value="1" id="">1
                        <option value="2" id="">2
                        <option value="3" id="">3
                        <option value="4" id="">4
                    </select>
                </div>
            </div>
        HTML;
    }
    return $content;

    };
    

    $input_component_1 = $form_input_component([
        ["title"=> "1.1 สร้างและหรือพัฒนาหลักสูตร", "name", ""],
        ["title"=> "1.2 ออกแบบการจัดการเรียนรู้", "name", ""],
        ["title"=> "1.3 จัดกิจกรรมการเรียนรู้", "name", ""],
        ["title"=> "1.4 สร้างและหรือพัฒนาสื่อ นวัตกรรม เทคโนโลยี และ แหล่งการเรียนรู้", "name", ""],
        ["title"=> "1.5 วัดและประเมินผลการเรียนรู้", "name", ""],
        ["title"=> "1.6 มีการศึกษา วิเคราะห์ และสังเคราะห์ เพื่อแก้ปัญหาหรือพัฒนาการเรียนรู้", "name", ""],
        ["title"=> "1.7 จัดบรรยากาศที่ส่งเสริมและพัฒนาผู้เรียน", "name", ""],
        ["title"=> "1.8 อบรมและพัฒนาคุณลักษณะที่ดีของผู้เรียน", "name", ""],
        ["title"=> "2.1 จัดทำข้อมูลสารสนเทศของผู้เรียนและรายวิชา", "name", ""],
        ["title"=> "2.2 ดำเนินการตามระบบดูและช่วยเหลือผู้เรียน", "name", ""],
        ["title"=> "2.3 ปฏิบัติงานวิชาการและงานอื่นๆ ของสถานศึกษา", "name", ""],
        ["title"=> "2.4 ประสานความร่วมมือกับผู้ปกครอง ภาคิเครือข่ายและหรือสถานประกอบการ", "name", ""],
        ["title"=> "1 พัฒนาตนเองอย่างเป็นระบบและต่อเนื่อง", "name", ""],
        ["title"=> "2 มีส่วนร่วมในการแลกเปลี่ยนเรียนรู้ทางวิชาชีพ", "name", ""],
        ["title"=> "3 นำความรู้ความสามารถ ทักษะ ที่ได้จากการพัฒนาตนเองและวิชาชีพมาใช้", "name", ""],
        ["title"=> "4 ", "name", ""],
        ["title"=> "", "name", ""],
        ["title"=> "", "name", ""],
    ]);
    return title("ครูไม่มีวิทยฐานะ") . 
    <<<HTML
        <div class="content">
            <div class="head">
                <div class="head-title">แบบประเมินผลการปฏิบัติงานของข้าราชการครูและบุคลากรทางการศึกษา</div>
                <div class="head-title">ตำแหน่งครู ยังไม่มีวิทยฐานะ</div>
                <div>( ทุกสังกัด )</div>
            </div>
        </div>

        <div class="content">
            <div class="m-l-3 t-c">
                <div>แบบประเมินองค์ประกอบที่ 1</div>
                <div>การประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานตามมาตรฐานตำแหน่ง</div>
                <div>ตำแหน่งครู ยังไม่มีวิทยฐานะ</div>
            </div>
        </div>

        <div class="content">
            <div class="p-t">
                <label for="">ชื่อผู้รับประเมิน</label>
                <input type="text" name="" id="">
            </div>
            <div>
                <label for="">ตำแหน่ง</label>
                <input type="text">
            </div>
            <div>
                <label for="">สังกัด</label>
                <input type="text">
            </div>
            <div>
                <label for="">ชื่อผู้ประเมิน</label>
                <input type="text">
            </div>
            <div>
                <label for="">ตำแหน่ง</label>
                <input type="text">
            </div>
            <div>
                <label for="">สังกัด</label>
                <input type="text">
            </div>
        </div>

        <div class="content">
            <div>
                <div>เกณฑ์การให้คะแนน</div>
                <div>ระดับที่ 1 หมายถึง ต่ำกว่าคาดหวังมาก</div>
                <div>ระดับที่ 2 หมายถึง ต่ำกว่าคาดหวัง</div>
                <div>ระดับที่ 3 หมายถึง ตามที่คาดหวัง</div>
                <div>ระดับที่ 4 หมายถึง สูงกว่าที่คาดหวัง</div>
            </div>
        </div>
        
        {$input_component_1}

        <div style="width: 100px"></div>
    HTML;
}