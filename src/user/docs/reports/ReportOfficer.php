<?php
styleImport('./src/user/docs/techer.css');

function ReportOfficer()
{

    $form_input_component = function ($value_data) {
        $content = "";

        foreach($value_data as $cop){
            $title = $cop['title'];
            $point = $cop['point'];
            // $name = $cop['name'];
            // $namePB = $cop['name'] . "PB";
            $content = $content .
         <<<HTML
         <div class="content">
             <div class="m-3 table-input p-3">
                <h5>{$title}</h5>
                <div>ค่าคะแนน {$point} </div>
                <label for="">คะแนนที่ได้</label>
                <input type="number" name="" id="">
                </div>
            </div>
        HTML;
        }
        return $content;
    };


    $coponent_1 = $form_input_component([
        ['title'=> '1 การมีวินัยในตนเอง', 'point'=>5 , 'name'=> ''],
        ['title'=> '2 การรักษาวินัยตามระเบียบแบบแผนของทางราชการอย่างเคร่งครัด', 'point'=> 5, 'name'=> ''],
        ['title'=> '3 รักษาประโยช์ของทางราชการเห็นแก่ประโยชน์ส่วนรามมากกว่าส่วนตน', 'point'=> 5, 'name'=> ''],
        ['title'=> '4 ปฏิบัติตามคำสั่งของผู้บังคับบัญชาโดยเคร่งครัด', 'point'=> 5, 'name'=> ''],
        ['title'=> '5 มีความสุภาพเรียบร้อย ขยัน ประหยัด', 'point'=> 5, 'name'=> ''],
        ['title'=> '6 รักษาชื่อเสียงเกียรติภูมิ ของหมู่คณะและหน่วยงาน', 'point'=> 5, 'name'=> ''],
        ['title'=> '7 ปฏิบัติหน้าที่ด้วยความมุ่งมั่น ตั้งใจ กระตือรือร้นเอาใจใส่งานในหน้าที่', 'point'=> 5, 'name'=> ''],
        ['title'=> '8 รับฟังความคิดเห็นของผู้อื่น แม้จะไม่เห็นด้วยกับความคิดเห็นนั้นๆ ', 'point'=> 5, 'name'=> ''],
        ['title'=> '9 มีความวิริยะ อุตสาหะ และอดทน', 'point'=> 5, 'name'=> ''],
        ['title'=> '10 รักษาความลับทางราชการ', 'point'=> 5, 'name'=> ''],
        ['title'=> '11 ปฏิบัติงานรวมกับผู้อื่นได้', 'point'=> 5, 'name'=> ''],
        ['title'=> '12 มีความรับผิดชอบในหน้าที่และวิชาชีพ', 'point'=> 5, 'name'=> ''],
        ['title'=> '13 ประพฤติตนตามหลักศาสนา ประเพณี และวัฒนธรรม', 'point'=> 5, 'name'=> ''],
        ['title'=> '14 มีความรักและศรัทธาในวิชาชีพ', 'point'=> 5, 'name'=> ''],
        ['title'=> '15 ปฏิบัติงานให้บริการอย่างเติมความสามารถ', 'point'=> 5, 'name'=> ''],
    ]);
    $coponent_2 = $form_input_component([
        ['title'=> '1.1 ผลสำเร็จของงาน (โดยพิจารณาจากความสามารถในการปฏิบัติงานให้สำเร็จ ตามที่ได้รับมอบหมาย โดยคำนึงถึงความถูกต้อง ความครบถ้วน สมบูรณ์ และเสร็จทันเวลา)', 'point'=> 5, 'name'=> ''],
        ['title'=> '1.2 ความสามารถในการปฏิบัติงาน (โดยพิจารณาจากความสามารถในการแก้ปัญหา ความสามารถในการป้องกันปัญหา และความสามารถในการพัฒนาเชาว์ปัญญา และความถนัดเฉพาะงาน)', 'point'=> 5, 'name'=> ''],
        ['title'=> '2.1 มีวิสัยทัศน์ในการปฏิบัติงาน (โดยพิจารณาจากสิ่งที่สามารถกำหนด กรอบการทำงานที่จะนำไปสู่การปฏิบัติงาน)', 'point'=> 5, 'name'=> ''],
        ['title'=> '2.2 มีความคิดริเริ่มสร้างสรรค์ในการปฏิบัติงาน (โดยพิจารณาจากความลสามารถในการแก้ปัญหาอย่างเป็นขั้นเป็นตอนและเป็นระบบ)', 'point'=> 5, 'name'=> ''],
        ['title'=> '2.3 เป็นประโยชน์ต่อผู้เรียน ครู บุคลากรทางการศึกษา การจัดการศึกษาหน่วยงานการศึกษาและชุมชน (โดยพิจารณาจากการสนับสนุนส่งเสริมการจัดการศึกษา ทั้งทางตรงและทางอ้อม)', 'point'=> 5, 'name'=> ''],
    ]);
    return title('รายงานผลการปฏิบัติงานเจ้าหน้าที่') . <<<HTML
        <div>
        <div class="content t-c">
            <div>รายงานผลการปฏิบัติงาน</div>
            <div>ประกอบการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงาน</div>
            <div>ของข้าราชการครูและบุคลากรทางการศึกษา</div>
            <div>( ตำแหน่งเจ้าหน้าที่ธุรการ )</div>
            <div>ระหว่างวันที่ 1 ตุลาคม พ.ศ. 2564 - 31 มีนาคม พ.ศ.2565</div>
        </div>
        <div class="content">
            <div>ข้อมูลทั่วไป</div>
            <div>1. ประวัติส่วนตัว</div>
            <div>
                <label for="fname-lastname">ชื่อ-สกุล</label>
                <input type="text" name="" id="">
            </div>
            <div>
                <label for="">เริ่มปฏิบัติงานเมื่อวันที่</label>
                <input type="date" name="" id="">
            </div>
            <div class="mt-3">2. ตำแหน่ง</div>
            <div>
                <div>เจ้าหน้าที่ธุรการ งาน
                    <input type="number">
                </div>
                <div>เงินเดือน <input type="number" name="" id=""> บาท</div>
            </div>
            <div class="mt-3">3. ประวัติการศึกษา</div>
            <div style="overflow-x: scroll">
                <table>
                    <thead>
                        <th>วุฒิการศึกษา</th>
                        <th>ปีที่สำเร็จการศึกษา</th>
                        <th>สถานศึกษา/สถาบัน</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-3">4. ที่อยู่ปัจจุบัน (ที่สามารถติดต่อได้)</div>
            <div>
                <div>
                    บัานเลขที่ <input type="number">  <br>
                    หมู่ที่ <input type="number" name="" id="">  <br>
                    ถนน <input type="text" name="" id=""> <br>
                    ตำบล <input type="text" name="" id=""> <br>
                    อำเภอ <input type="text" name="" id=""> <br>
                    จังหวัด <input type="text" name="" id=""> <br>
                    รหัสไปรษณีย์ <input type="number" name="" id=""> <br>
                    เบอร์โทร <input type="text" name="" id=""> <br>
                    e-mail <input type="email" name="" id=""> <br>
                </div>
            </div>
            <div>
                <div>5. ประวัติการหยุดราชการในรอบ 6 เดือน</div>
                <div>ลาป่วย <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
                <div>ลากิจ <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
                <div>ลาคลอด/อุปสมบท <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
                <div>ลาศึกษาต่อ <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
                <div>มาสาย <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
                <div>ขาดราชการ <input type="number" name="" id=""> ครั้ง <input type="number" name="" id=""> วัน</div>
            </div>
        </div>
        <div class="content">
            <h3>ด้านที่ 1 การประเมินผลการปฏิบัติงาน</h3>
        </div>
        {$coponent_1}
        <div class="content">
            <h3>ด้านที่ 2 อุณภาพของผลงานที่ปฏิบัติและแนวคิดเพื่อพัฒนางาน</h3>
        </div>
        {$coponent_2}
        <div class="void" style="height:100px;"></div>
        </div>
    HTML;
}
