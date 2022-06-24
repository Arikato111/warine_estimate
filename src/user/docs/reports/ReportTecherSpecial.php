<?php
styleImport('./src/user/docs/techer.css');

function ReportTecherSpecial()
{

    $form_input_component = function ($value_data) {
        $content = "";

        foreach($value_data as $cop){

            $option = '';
            foreach($cop['option'] as $op) {
                $option .= '<div style="margin-bottom:15px;border-bottom: 1px black dashed;" value="'.$op['point'] .'">'. $op['title'].' '. $op['point'] .'คะแนน</div>';
            }

            $title = $cop['title'];
            // $name = $cop['name'];
            // $namePB = $cop['name'] . "PB";
            $content = $content .
         <<<HTML
         <div class="content">
             <div class="m-3 table-input p-3">
                <div class="p-b" style="font-size: 20px;">{$title}</div>
                <div class="selected" name="" id="">
                    {$option}
                </div>
                <label for="">คะแนนที่ได้</label>
                <input type="number" name="" id="">
                <label for="">หมายเหตุ</label>
                <input type="text" name="" id="">
                </div>
            </div>
        HTML;
        }
        return $content;

    };
    
    $conponent_1 = $form_input_component([
        [
            'title'=>'การจัดทำแผนการเรียนรู้/สื่อการเรียนรู้',
            'name'=>'name',
            'option'=> [
                ['title'=>'มีการจัดทำแผนการเรียนูสื่อการเรียนรู้ครบทุกวิชาตามเวลาที่กำหนด', 'point'=>10, 'name'=>''],
                ['title'=>'มีการจัดทำแผนการเรียนหรือสื่อการเรียนรู้ครบอย่างใดอย่างหนึ่งภำยในกำหนดเวลา', 'point'=>8, 'name'=>''],
                ['title'=>'มีการจัดทำแผนการเรียน/สื่อการเรียนรู้ครบทุกรายวิชาแต่เลยกำหนดเวลา', 'point'=>7, 'name'=>''],
            ]
        ],
        [
            'title'=>'การวัดผลและประเมินบุคลากรการเรียนรู้',
            'name'=>'name',
            'option'=> [
            ['title'=>'ส่งผลการเรียนรู้ครบทุกรายวิชาภายในเวลาที่กำหนด', 'point'=>5, 'name'=>''],
            ['title'=>'ส่งผลการเรียนไม่ครบตามรายวิชาที่สอนแต่ทันภายในเวลาที่กำหนด', 'point'=>4, 'name'=>''],
            ['title'=>'ส่งผลการเรียนช้าเกินเวลาที่กำหนด', 'point'=>3, 'name'=>''],
            ]
        ],
        [
            'title'=>'บันทึกหลังการสอน',
            'name'=>'name',
            'option'=> [
            ['title'=>'ส่งบันทึกหลังสอนครบทุกรายวิชาภายในเวลาที่กำหนด', 'point'=>5, 'name'=>''],
            ['title'=>'ส่งบันทึกหลังสอนไม่ครบตามรายวิชาที่สอนแต่ทันภายในเวลาที่กำหนด', 'point'=>4, 'name'=>''],
            ['title'=>'ส่งบันทึกหลังสอนช้าเกินเวลาที่กำหนด', 'point'=>3, 'name'=>''],
            ]
        ],
        [
            'title'=>'ผลงานที่เกิดจากการเรียนการสอนร่วมกับผู้เรียน',
            'name'=>'name',
            'option'=> [
            ['title'=>'ระดับชาติ', 'point'=>5, 'name'=>''],
            ['title'=>'ระดับภาค', 'point'=>4, 'name'=>''],
            ['title'=>'ระดับจังหวัด', 'point'=>3, 'name'=>''],
            ['title'=>'ระดับสถานศึกษา', 'point'=>1, 'name'=>''],
            ['title'=>'ไม่มี', 'point'=>0, 'name'=>''],
            ],
        ],
        [
            'title'=>'ผลงานที่เกิดจากการเรียนการสอนร่วมกับผู้เรียน',
            'name'=>'name',
            'option'=> [
                ['title'=>'ระดับชาติ', 'point'=>5, 'name'=>''],
                ['title'=>'ระดับภาค', 'point'=>4, 'name'=>''],
                ['title'=>'ระดับจังหวัด', 'point'=>3, 'name'=>''],
                ['title'=>'ระดับสถานศึกษา', 'point'=>1, 'name'=>''],
                ['title'=>'ไม่มี', 'point'=>0, 'name'=>''],
            ],
        ],

        [
            'title'=>'การวิจัยเพื่อพัฒนาผู้เรียน',
            'name'=>'name',
            'option'=> [
            ['title'=>'มีการจัดทำ และส่งภายในเวลาที่กำหนด', 'point'=>5, 'name'=>''],
            ['title'=>'มีการจัดทำ แต่ส่งไม่ทันตามเวลาที่กำหนด', 'point'=>3, 'name'=>''],
            ['title'=>'ไม่มีการจัดทำ', 'point'=>0, 'name'=>''],
            ],
        ],
        [
            'title'=>'หน้าที่พิเศษที่ได้รับมอบหมายจากวิทยาลัย',
            'name'=>'name',
            'option'=> [
            ['title'=>'หัวหน้างาน', 'point'=>10, 'name'=>''],
            ['title'=>'ผู้ช่วยงานตั้งแต่ 2 งานขึ้นไป', 'point'=>7, 'name'=>''],
            ['title'=>'ผู้ช่วยงานน้อยกว่า 2 งาน', 'point'=>5, 'name'=>''],
            ['title'=>'คำสั่งปฏิบัติงานตามคำสั่งทางวิทยาลัยฯ (ไม่ได้เป็นหัวหน้างานหรือผู้ช่วยงาน)', 'point'=>2, 'name'=>''],
            ],
        ],
        [
            'title'=>'การเข้าร่วมกิจกรรมหน้าเสาธง',
            'name'=>'name',
            'option'=> [
            ['title'=>'เข้าร่วมกิจกรรมหน้าเสาธง 80% ขึ้นไป', 'point'=>5, 'name'=>''],
            ['title'=>'เข้าร่วมกิจกรรมหน้าเสาธง 70 - 79%', 'point'=>4, 'name'=>''],
            ['title'=>'เข้าร่วมกิจกรรมหน้าเสาธง 60 - 69%', 'point'=>3, 'name'=>''],
            ['title'=>'เข้าร่วมกิจกรรมหน้าเสาธง 50 - 59%', 'point'=>2, 'name'=>''],
            ['title'=>'เข้าร่วมกิจกรรมหน้าเสาธงน้อยกว่า 50%', 'point'=>0, 'name'=>''],
            ],
        ],
        [
            'title'=>'การเข้าร่วมกิจกรรม ชาติ ศาสนา พระมหากษัตริย์หรือวันสำคัญต่างๆ ตามที่ทางวิทยาลัยฯ กำหนด',
            'name'=>'name',
            'option'=> [
            ['title'=>'เข้าร่วมครบทุกกิจกรรม', 'point'=>5, 'name'=>''],
            ['title'=>'เข้าร่วมไม่ครบทุกกิจกรรม', 'point'=>3, 'name'=>''],
            ['title'=>'ไม่เข้าร่วมกิจกรรม', 'point'=>0, 'name'=>''],
            ],
        ],
        [
            'title'=>'การพัฒนาตนเองให้มีความรู้ ทักษะ ประสบการณ์ ในวิชาชีพเพิ่มมากขึ้น',
            'name'=>'name',
            'option'=> [
            ['title'=>'ได้รับเชิญให้เป็นวิทยากร', 'point'=>10, 'name'=>''],
            ['title'=>'ได้รับการอบรมหรือพัฒนาวิชาชีพ 16 ชม. ขึ้นไป', 'point'=>10, 'name'=>''],
            ['title'=>'ได้รับการอบรมหรือพัฒนาวิชาชีพน้อยกว่า 16 ชม. ', 'point'=>8, 'name'=>''],
            ['title'=>'ได้เข้าศึกษาดูงาน/บริการชุมชน', 'point'=>5, 'name'=>''],
            ['title'=>'เชิญผู้เชี่ยวชาญ/ภูมิปัญญาท้องถิ่นร่วมถ่ายทอดความรู้ ในการบริหารจัดการชั้นเรียน', 'point'=>5, 'name'=>''],
            ],
        ],
        [
            'title'=>'จรรยาบรรณต่อตนเอง',
            'name'=>'name',
            'option'=> [
            ['title'=>'มีวินัยในตนเอง พัฒนาตนเอง ด้านวิชาชีพ บุคลิกภาพ และวิสัยทัศน์ ให้ทันต่อการพัฒนาทางวิทยาการ เศรษฐกิจ สังคมและการเมืองอยู่เสมอ', 'point'=>2, 'name'=>''],
            ],
        ],
        [
            'title'=>'จรรยาบรรณต่อวิชาชีพ',
            'name'=>'name',
            'option'=> [
            ['title'=>'รัก ศรัทธา ซื่อสัตย์สุจริต รับผิดชอบต่อวิชาชีพ และเป็นสมาชิก ที่ดีขององค์กรวิชาชีพ', 'point'=>3, 'name'=>''],
            ],
        ],
        [
            'title'=>'จรรยาบรรณต่อผู้รับบริการ',
            'name'=>'name',
            'option'=> [
            ['title'=>'รัก เมตตา เอาใจใส่ ช่วยเหลือ ส่งเสริมให้กำลังใจแก่ศิษย์และผู้รับบริการ ตามบทบาทหน้าที่โดยเสมอหน้า ส่งเสริมให้เกิดการเรียนรู้ ทักษะและนิสัยที่ถูกต้องแก่ลูกศิษย์และผู้รับบริการตามบทบาทหน้าที่อย่างเต็มความสามารถ ด้วยความบริสุทธิ์ใจ', 'point'=>2, 'name'=>''],
            ],
        ],
        [
            'title'=>'จรรยาบรรณต่อผู้ร่วมวิชาชีพ',
            'name'=>'name',
            'option'=> [
            ['title'=>'ช่วยเหลือเกื้อกูลซึ่งกันและกันอย่างสร้างสรรค์ โดยยึดมั่นในคุณธรรม สร้างความสามัคคีในหมู่คณะ', 'point'=>3, 'name'=>''],
            ],
        ],[
            'title'=>'จรรยาบรรณต่อสังคม',
            'name'=>'name',
            'option'=> [
            ['title'=>'ประพฤติปฏิบัติตนเป็นผู้นำในการอนุรักษ์และพัฒนาเศรษฐกิจ สังคม ศาสนา ศัลปวัฒนธรรม ภูมิปัญญา สิ่งแวดล้อม รักษาผลประโยชน์ของส่วนรวม และยึดมั่นในการปกครองระบอบประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข', 'point'=>2, 'name'=>''],
            ],
        ],
        [
            'title'=>'การประพฤติปฏิบัติตนตามงานในหน้าที่ความรับผิดชอบและการเสียสละและอุทิศเวลาให้ราชการ',
            'name'=>'name',
            'option'=> [
            ['title'=>'', 'point'=>3, 'name'=>''],
            ],
        ],
    ]);

    return title('Report | techer special') .
        <<<HTML
            <div>
                <div class="content">
                    <div>ประเมินประสิทธิภาพและประสิทธิภาพการปฏิบัติงาน</div>
                    <div>ของราชการครูและบุคลากรทางการศึกษา</div>
                    <div>( ตำแหน่งครูพิเศษสอน )</div>
                    <div>ระหว่างวันที่ 1 ตุลาคม พ.ศ.2564 - 31 มีนาคม พ.ศ.2565</div>
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
                        <div>ครูพิเศษสอน เลขที่ใบประกอบวิชาชีพ 
                            <input type="number">
                        </div>
                        <div>วันที่ออกบัตร <input type="date"></div>
                        <div>หมดอายุวันที่ <input type="date" name="" id=""></div>
                        <div>เงินเดือน <input type="number" name="" id=""> บาท</div>
                        <div>แผนกวิชา <input type="text" name="" id=""></div>
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

                <!-- component 2  -->
                <div class="content">
                    <div>ด้านที่ 1 กระบวนการจัดการเรียนการสอน</div>
                </div>
                {$conponent_1}
                <div style="height: 100px;"></div>
            </div>
        HTML;
}
