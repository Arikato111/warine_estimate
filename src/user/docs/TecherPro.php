<?php
styleImport('./src/user/docs/techer.css');

function TecherPro () {

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
        ["title"=> "1.1 สร้างและหรือพัฒนาหลักสูตร", 'name'=>''],
        ["title"=> "1.2 ออกแบบการจัดการเรียนรู้", 'name'=>''],
        ["title"=> "1.3 จัดกิจกรรมการเรียนรู้", 'name'=>''],
        ["title"=> "1.4 สร้างและหรือพัฒนาสื่อ นวัตกรรม เทคโนโลยี และ แหล่งการเรียนรู้", 'name'=>''],
        ["title"=> "1.5 วัดและประเมินผลการเรียนรู้", 'name'=>''],
        ["title"=> "1.6 มีการศึกษา วิเคราะห์ และสังเคราะห์ เพื่อแก้ปัญหาหรือพัฒนาการเรียนรู้", 'name'=>''],
        ["title"=> "1.7 จัดบรรยากาศที่ส่งเสริมและพัฒนาผู้เรียน", 'name'=>''],
        ["title"=> "1.8 อบรมและพัฒนาคุณลักษณะที่ดีของผู้เรียน", 'name'=>''],
        ["title"=> "2.1 จัดทำข้อมูลสารสนเทศของผู้เรียนและรายวิชา", 'name'=>''],
        ["title"=> "2.2 ดำเนินการตามระบบดูและช่วยเหลือผู้เรียน", 'name'=>''],
        ["title"=> "2.3 ปฏิบัติงานวิชาการและงานอื่นๆ ของสถานศึกษา", 'name'=>''],
        ["title"=> "2.4 ประสานความร่วมมือกับผู้ปกครอง ภาคิเครือข่ายและหรือสถานประกอบการ", 'name'=>''],
        ["title"=> "3.1 พัฒนาตนเองอย่างเป็นระบบและต่อเนื่อง", 'name'=>''],
        ["title"=> "3.2 มีส่วนร่วมในการแลกเปลี่ยนเรียนรู้ทางวิชาชีพ", 'name'=>''],
        ["title"=> "3.3 นำความรู้ความสามารถ ทักษะ ที่ได้จากการพัฒนาตนเองและวิชาชีพมาใช้", 'name'=>''],
    ]);
    $input_component_2 = $form_input_component([
        ["title"=> "1.1 วิธีดำเนินงาน ( 20 คะแนน ) พิจารณาการดำเนินการที่ถูกต้อง ครบถ้วน เป็นไปตามระยะเวลาที่กำหนดไว้ในข้อตกลง และสะท้อนให้เห็นถึงระดับการปฏิบัติที่คาดหวังตามตำแหน่งและวิทยฐานะ", "name"=> ""],
        ["title"=> "1 เชิงประมาณ ( 10 คะแนน ) พิจารณาจากการบรรลุเป้าหมายเชิงปริมาณได้ครบถ้วน ตามข้อตกลงและมีความถูกต้อง เชื่อถือได้", "name"=> ""],
        ["title"=> "2 เชิงคุณภาพ (10 คะแนน ) พิจารณาจากการบรรลุเป้าหมายเชิงคุณภาพได้ครบถ้วน ถูกต้อง เชื่อถือได้ และปรากฎผลต่อคุณภาพผู้เรียนได้ตามข้อตกลง", "name"=> ""],
    ]);
    $input_component_3 = $form_input_component([
        ["title"=>"1 ยึดมั่นในสถาบันหลักของประเทศ อันได้แก่ ชาติ ศาสนา พระมหากษัตริย์ และการปกครองระบอบประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข", "name"=>""],
        ["title"=>"2 มีความซื่อสัตย์ สุจริต มีจิตสำนึกที่ดี มีความรับผิดชอบต่อหน้าที่และต่อผู้เก่ียวข้องในฐานะข้อราชการครูและบุดลากรทางการศึกษา", "name"=>""],
        ["title"=>"3 มีความกล้าคิด กล้าตัดสินใจ กล้าแสดงออก และกระทำในสิ่งที่ถูกต้อง ชอบธรรม", "name"=>""],
        ["title"=>"4 มีจิตอาสา จิตสาธารณะ มุ่งประโยชน์ส่วนรวม โดยไม่คำนึงถึงประโยชน์ส่วนตน หรือพวกพ้อง", "name"=>""],
        ["title"=>"5 มุ่งผลสัมฤทธิ์ของงาน มุ่งมั่นในการปฏิบัติงานอย่างเต็มกำลังความสามารถโดยคำนึงถึงคุณภาพการศึกษาเป็นสำคัญ", "name"=>""],
        ["title"=>"6 ปฏิบัติหน้าที่อย่างเป็นธรรมและไม่เลือกปฏิบัติ", "name"=>""],
        ["title"=>"7 ดำรงตนเป็นแบบอย่างที่ดีและรักษาภาพลักษณ์ของราชการครูและบุคคลากรทางการศึกษา", "name"=>""],
        ["title"=>"8 เคารพศักดิ์ศรีความเป็นมนุษย์ คำนึงถึงสิทธิเด็ก และยอมรับความแตกต่างของบุคคล", "name"=>""],
        ["title"=>"9 ยึดถือและปฏิบัติตามจรรยาบรรณของวิชาชีพ", "name"=>""],
        ["title"=>"10 มีวินัยและการรักษาวินัย", "name"=>""],
    ]);
    return title("ครูชำนาญการ") . 
    <<<HTML
        <form action="/techer-pro" method="post">
        <div class="content">
            <div class="head">
                <div class="head-title">แบบประเมินผลการปฏิบัติงานของข้าราชการครูและบุคลากรทางการศึกษา</div>
                <div class="head-title">ตำแหน่งครูชำนาญการ</div>
                <div>( ทุกสังกัด )</div>
            </div>
        </div>

        <div class="content">
            <div class="m-l-3 t-c t-3 p-3">
                <div>แบบประเมินองค์ประกอบที่ 1</div>
                <div>การประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานตามมาตรฐานตำแหน่ง</div>
                <div>ตำแหน่งครูชำนาญการ</div>
            </div>
        </div>

        <div class="content p-3">
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
            <div class="p-3">
                <div>เกณฑ์การให้คะแนน</div>
                <div>ระดับที่ 1 หมายถึง ต่ำกว่าคาดหวังมาก</div>
                <div>ระดับที่ 2 หมายถึง ต่ำกว่าคาดหวัง</div>
                <div>ระดับที่ 3 หมายถึง ตามที่คาดหวัง</div>
                <div>ระดับที่ 4 หมายถึง สูงกว่าที่คาดหวัง</div>
            </div>
        </div>
        
        {$input_component_1}

        <div class="content p-3">
            <div>ตอนที่ 2 ระดับความสำเร็จในการพัฒนางานที่เสนอฯ</div>
            <div style="text-align:center;" class="o-f">
                <table>
                    <thead>
                        <tr>
                            <th>ระดับ</th>
                            <th>คะแนนเติม 10 </th>
                            <th>คะแนนเติม 20</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4</td>
                            <td>10.00</td>
                            <td>20.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>7.50</td>
                            <td>15.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>5.00</td>
                            <td>10.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2.50</td>
                            <td>5.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        {$input_component_2}


        <hr>
        <div class="content p-3">
            <div class="head">
                <div class="head-title">แบบประเมินองค์ประกอบที่ 2 </div>
                <div class="head-title">การประเมินการมีส่วนร่วมในการพัฒนาการศึกษา</div>
            </div>
            <hr>
                <div>ระดับ 1 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 19.99 ลงมา</div>
                <div>ระดับ 2 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 20.00 - 39.99</div>
                <div>ระดับ 3 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 40.00 - 59.99</div>
                <div>ระดับ 4 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 60.00 - 79.99</div>
                <div>ระดับ 5 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 80 ขึ้นไป</div>
                <hr>
                <div>
                    <div>ความสำเร็จของงานที่ได้รับมอบหมาย</div>
                    <label for="">ประเมินตนเอง</label>
                    <select name="" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label for="">ของผู้บังคับบัญชา</label>
                    <select name="" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            {$input_component_3}

            <div class="content">
                <div class="p-3">
                    <label for="">คะแนนรวม</label>
                    <input type="number" name="" id="">
                </div>
            </div>

            <div class="content t-c m-b-5">
                <button class="bc-blue">Send</button>
            </div>
        </form>
        <!-- <div style="width: 500px; text-align: center;">::void</div> -->
    HTML;
}