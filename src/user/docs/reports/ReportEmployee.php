<?php
styleImport('./src/user/docs/techer.css');

function ReportEmployee() {
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
    $form_input_component_2 = function ($value_data) {
        $content = "";

        foreach($value_data as $cop){
            $title = $cop['title'];
            $point = $cop['point'];
            // $name = $cop['name'];
            // $namePB = $cop['name'] . "PB";

            $lst = '';
            foreach($cop['list'] as $l) {
                $lst .= '<li>'. $l . '</li>';
            }
            $content = $content .
         <<<HTML
         <div class="content">
             <div class="m-3 table-input p-3">
                <h5>{$title}</h5>
                <ul>
                    {$lst}
                </ul>
                <div>ค่าคะแนน {$point} </div>
                <label for="">คะแนนที่ได้</label>
                <input type="number" name="" id="">
                </div>
            </div>
        HTML;
        }
        return $content;
    };

    $component_1 = $form_input_component([
        ['title'=> '1 ปริมาณผลงาน (โดยพิจารณาจากปริมาณผลงานเปรียบเทียบกับเป้าหมายที่ได้กำหนดไว้)', 'point'=> 25, 'name'=>''],
        ['title'=> '2 คุณภาพงาน (โดยพิจารณาจากความถูกต้อง ความครบถ้วน ความสมบูรณ์ และความประณีต หรือคุณภาพอื่นๆ )', 'point'=> 25, 'name'=>''],
        ['title'=> '3 ความรวดเร็วหรือความตรงต่อเวลา (โดยพิจารณาจากเวลาที่ใช้ปฏิบัติเปรียบเทียบกับเวลาที่กำหนดไว้สำหรับการปฏิบัติงานในภารกิจนั้น)', 'point'=> 25, 'name'=>''],
        ['title'=> '4 การใช้ทรัพยากรอย่างคุ้มค่า (โดยพิจารณาจากการใช้เท่าที่มีความจำเป็น เพือให้มีทรัพยากรไว้ใช้ได้นานและเกิดประโยชน์อย่างคุ้มค่ามากที่สุด)', 'point'=> 25, 'name'=>''],
    ]);
    $component_2 = $form_input_component_2([
        ['title'=> 'การมุ่งผลสัมฤทธิ์', 'point'=> 20, 'name'=> '', 'list'=>[
            'แสดงออกถึงความพยายามทำงานในหน้าที่ให้ถูกต้อง และพยายามทำงาน ให้แล้วเสร็จตามกําหนดเวลา รวมทั้ง มานะอดทน ขยันหมั่นเพียรในการทำงาน',
            'แสดงออกว่าต้องการทำงานให้ได้ดีขึ้น หรือแสดงความเห็นในเชิงปรับปรุงพัฒนา เมื่อเห็นว่าประสิทธิภาพในงานลดลง',
            'ทำงานได้ตามเป้าหมายที่ผู้บังคับบัญชากำหนด หรือเป้าหมายของหน่วยงานที่รับผิดชอบ',
            'มีความละเอียดรอบคอบ เอาใจใส่ตรวจตราความถูกต้องของงาน เพื่อให้ได้งานที่มีคุณภาพ',
            'ติดตามและประเมินผลงานของตนเอง เพื่อรักษามาตรฐานในการทำงานหรือปรับปรุงงานให้ดีขึ้น',
        ]],
        ['title'=> 'การบริการที่ดี', 'point'=> 20, 'name'=> '', 'list'=>[
            'ให้บริการที่สุภาพ ยิ้มแย้ม เอาใจใส่เห็นอกเห็นใจผู้มารับบริการ',
            'ให้บริการอย่างรวดเร็ว ทันใจ ไม่ล่าช้า',
            'ให้บริการอย่างดีด้วยความอ่อนน้อม ให้เกียรติผู้รับบริการ',
            'ให้บริการด้วยความมุ่งมั่น ตั้งใจ และเต็มอกเต็มใจ',
            'ช่วยแก้ไขปัญหาให้กับผู้รับบริการได้อย่างรวดเร็วและมีประสิทธิภาพ ',
            'พูดคุยกับผู้รับบริการทั้งภายในหรือภายนอกเพื่อค้นหาความต้องการ และแนวทางการให้บริการที่จะเป็นไปตามความต้องการ และสร้างความประทับใจให้กับผู้รับบริการ',
            'ให้บริการโดยยึดความต้องการของผู้รับบริการเป็นหลัก',
            'พยายามทำให้ผู้รับบริการรับรู้ได้ถึงความตั้งใจในการให้บริการ ',
            'ให้บริการเกินความคาดหวัง แม้ต้องใช้เวลา หรือความพยายามอย่างมาก',
            'ติดตามและประเมินความพึงพอใจของผู้รับบริการเพื่อนำมาใช้ในการปรับปรุงการให้บริการที่ดีขึ้น',
        ]],
        ['title'=> 'การสั่งสมความเชี่ยวชาญในอาชีพ', 'point'=> 20, 'name'=> '', 'list'=>[
            'ับประเด็น หรือแยกแยะประเด็น ออกเป็นรายการอย่างง่ายๆ ได้โดยไม่เรียงลำดับความสำคัญ',
            'วางแผนงานโดยแตกประเด็นออกเป็นส่วนๆ หรือกำหนดเป็นกิจกรรมต่างๆ ได้',
            'เข้าใจความสัมพันธ์ขั้นพื้นฐานของงาน หรือปัญหาเช่น สามารถอธิบายหรือระบุเหตุและผลในสถานการณ์ต่างๆ หรือ ข้อดีข้อเสียของประเด็นต่างๆได้ เป็นต้น',
            'จัดลำดับความสำคัญหรือความเร่งด่วนของงานหรือกิจกรรมได้ ',
            'เข้าใจและสามารถเชื่อมโยงเหตุปัจจัยที่มีความซับซ้อนของงานหรือปัญหาในแต่ละสถานการณ์ หรือเหตุการณ์ได้ ',
            'วางแผนงานโดยกำหนดกิจกรรม ขั้นตอนการดําเนินงานต่างๆ ที่ มีผู้เกี่ยวข้องหลายฝ่ายได้อย่างมีประสิทธิภาพ และสามารถคาดการณ์เกี่ยวกับปัญหา หรืออุปสรรคที่อาจเกิดขึ้นได้',
        ]],
        ['title'=> 'การยึดมั่นในความถูกต้องชอบธรรม และจริยธรรม', 'point'=> 20, 'name'=> '', 'list'=>[
            'ปฏิบัติหน้าที่ด้วยความซื่อสัตย์ สุจริต ถูกต้องตามระเบียบ กฎหมาย จรรยาบรรณวิชาชีพ และวินัยที่กำหนด',
            'ปฏิบัติงานโดยไม่เลือกปฏิบัติอย่าง ไม่เป็นธรรมให้ความร่วมมือกับผู้อื่น ในกิจการงานใดๆ โดยปราศจากอคติ ',
            'ไม่แสวงหาผลประโยชน์อันมิควรได้จากการปฏิบัติงาน',
            'ไม่ให้คำแนะนําใดๆ หรือสร้างโอกาส ให้เกิดการดำเนินการอันเป็นการหลบเลี่ยงระเบียบหรือกฎหมาย',
            'ใช้เวลาราชการ เงิน ทรัพยากรของทางราชการอย่างประหยัดและคุ้มค่า รวมทั้ง ไม่นําไปใช้เพื่อประโยชน์แก่ตนเองหรือผู้อื่น',
            'ไม่เปิดเผยความลับของทางราชการและข้อมูลส่วนบุคคลอันไม่ควรเปิดเผย ',
            'ปฏิบัติตนและปฏิบัติงานอย่างมีเหตุผล โปร่งใส และเป็นธรรม',
            ' รักษาคําพูด มีสัจจะ และเชื่อถือได้',
        ]],
        ['title'=> 'การทำงานเป็นทีม', 'point'=> 20, 'name'=> '', 'list'=>[
            'เล็งเห็นโอกาสและไม่รีรอที่จะนําโอกาสนั้นมาใช้ประโยชน์ในงาน ',
            'เล็งเห็นปัญหา อุปสรรค และหาวิธีแก้ไขโดยไม่รอช้า',
            'ลงมือทันทีเมื่อเกิดปัญหาเฉพาะหน้าหรือในเวลาวิกฤติ โดยอาจไม่มีใครร้องขอและ ไม่ย่อท้อ',
            'วางแผนงานล่วงหน้า อย่างละเอียด รอบคอบ',
            'แก้ไขปัญหาอย่างเร่งด่วนในขณะที่คนส่วนใหญ่จะวิเคราะห์สถานการณ์ก่อนและรอให้ปัญหาคลี่คลายไปเอง',
            'รู้จักพลิกแพลง ยืดหยุ่น ประนีประนอมเมื่อเผชิญอุปสรรค',
        ]],
    ]);
    return title('รายงานผลปฏิบัติงานพนักงานราชการ') . 
    <<<HTML
    <div>
        <div class="content">
            <h3>รายงานผลปฏิบัติงานของพนักงานราชการทั่วไป</h3>
        </div>
        <div class="content">
            <div>
                <label for="">รอบการประเมินครั้งที่</label>
                <input type="number" name="" id="">
            </div>
            <div>
                <label for="">ระหว่างวันที่</label>
                <input type="date" name="" id="">
            </div>
            <div>
                <label for="">ถึงวันที่</label>
                <input type="date" name="" id="">
            </div>
            <hr>
            <div>
                <label for="">ชื่อผู้รับการประเมิน</label>
                <input type="text" name="" id="">
            </div>
            <div>
                <label for="">วันเริ่มสัญญาจ้าง</label>
                <input type="date" name="" id="">
            </div>
            <div>
                <label for="">วันสิ้นสุดสัญญาจ้าง</label>
                <input type="date" name="" id="">
            </div>
            <div>
                <label for="">ชื่องาน/โครงการ</label>
                <input type="text" name="" id="">
            </div>
            <div>
                <label for="">ตำแหน่ง</label>
                <input type="text" name="" id="">
                <label for="">สังกัด</label>
                <input type="text" name="" id="">
            </div>
        </div>
            {$component_1} 
            {$component_2}
            <div class="void" style="height:100px;"></div>
    </div>
    HTML;
}