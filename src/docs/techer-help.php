<?php 
function TecherHelpPage(){
    $component_one = componentOneSubject();
    return title("แบบประเมินครูผู้ช่วย") . <<<HTML
    <style>
        .doc-input {
            display: inline-block;
            text-align: left;
            margin-bottom: 100px;
            width: 100%
        }
        .content {
            margin:40px 10vw 0 10vw;
            background-color: wheat;
            text-align: left;
        }
    </style>
    <form method="post" action="">
    <div class="content">
        
        <div style="text-align: center;font-size: 20px;margin-bottom: 12px;">
            <div>แบบประเมินผลการปฏิบัติงานของข้าราชการครูและบุคลากรทางการศึกษา</div>
            <div>ตำแหน่งครูผู้ช่วย</div>
        </div>


        <div style="text-align: center;">
            <div>ส่วนที่ 1 : ข้อมูลของผู้รับประเมิน</div>
            <div>รอบการประเมิน</div>
            <div class="doc-input">
                <div>
                    <input required type="radio" name="radio1" id="">
                    <label for="">ครั้งที่ 1 ( 1 ดุลาคม ... - 31 มีนาคม ... )</label>
                </div>
                <div>
                    <input required type="radio" name="radio1" id="">
                    <label for="">ครั้งที่ 2 ( 1 เมษายน ... - 30 กันยายน ... )</label>
                </div>
                <div>
                    <div>
                        <td><label for="">ชื่อผู้รับการประเมิน</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">ตำแหน่ง</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">เงินเดือน</label></td>
                        <td><input required type="number" placeholder="ป้อนข้อมูลเป็นตัวเลข"></td>
                    </div>
                    <div>
                        <td><label for="">สถานศึกษา</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">สังกัด</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">สอนระดับชั้น</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">วิชา</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">ชั่วโมงการสอน ต่อสัปดาห์</label></td>
                        <td><input required type="text" name="" id=""></td>
                    </div>
                    <div>
                        <td><label for="">จำนวนวันลาในรอบการประเมิน (วัน) </label></td>
                        <td><input required type="number" name="" id=""></td>
                    </div>
                    <div>
                        <td>ประกอบด้วย
                            <ul>
                                <li><div>
                                <label for="">1. ลาป่วยจำนวน</label>
                                <input required type="number" placeholder="ครั้ง">
                                <label for="">ครั้ง ใน</label>
                                <input required type="number" name="" id=""> วัน
                                </div></li>
                                <li><div>
                                    <label for="">2. ลากิจจำนวน</label>
                                    <input required type="number" name="" placeholder="ครั้ง" id="">
                                    <label for="">ครั้ง ใน </label>
                                    <input required type="number" name="" id=""> วัน
                                </div></li>
                                <li><div>
                                    <label for="">3. ลาอื่นๆ (โปรดระบุ )</label>
                                    <input required type="text" name="" id="">
                                    <label for="">จำนวน</label>
                                    <input required type="number" name="" id="">
                                    <label for="">ครั้ง ใน</label>
                                    <input required type="number" name="" id=""> วัน
                                </div></li>
                            </ul>
                        </td>
                    </div>
                    <div class="m-3">
                        <div>
                            <label for="">ชื่อผู้ประเมิน</label>
                            <input required type="text" name="" placeholder="ชื่อ-สกุล" id="" required>
                        </div>

                        <div>
                            <label for="">ตำแหน่ง</label>
                            <input required type="text" name="" id="" required>
                        </div>
                    </div>
                    <div>
                        <td></td>
                    </div>
                </div>
            </div>
        </div>
        <div>ส่วนที่สอง : สรุปผลการประเมิน</div>
        <div class="doc-input">
            <div>องด์ประกอบการประเมิน</div>
            <div>องด์ประกอบที่ 1 การประเมินประสิทธิภาพและประสิทธิผล การปฏิบัติงานมาตรฐานตำแหน่ง</div>
            <div>
                <label>คะแนนประเมินตนเอง</label>
                <input type="number" min="0" max="80" name="" placeholder="คะแนนเต็ม 80" required>
            </div>
            <div>
                <label>คะแนนประเมินของผู้บังคับบัญชา</label>
                <input type="number" min="0" max="80" name="" placeholder="คะแนนเต็ม 80" required>
            </div>

            <div>องด์ประกอบที่ 2 การประเมินการมีส่วนร่วมในการพัฒนาการศึกษา</div>
            <div>
                <label>คะแนนประเมินตนเอง</label>
                <input type="number" min="0" max="10" name="" placeholder="คะแนนเต็ม 10" required>
            </div>
            <div>
                <label>คะแนนประเมินของผู้บังคับบัญชา</label>
                <input type="number" min="0" max="10" name="" placeholder="คะแนนเต็ม 10" required>
            </div>
            

            <div>องด์ประกอบที่ 3 การประเมินการปฏิบัติตนในการรักษาวินัย คุณธรรม จริยธรรม และจรรยาบรรณวิชาชีพ</div>
            <div>
                <label>คะแนนประเมินตนเอง</label>
                <input type="number" min="0" max="10" name="" placeholder="คะแนนเต็ม 10" required>
            </div>
            <div>
                <label>คะแนนประเมินของผู้บังคับบัญชา</label>
                <input type="number" min="0" max="10" name="" placeholder="คะแนนเต็ม 10" required>
            </div>
            <div>
                <label>รวม</label>
                <input type="number" min="0" max="100" placeholder="คะแนนเติม 100" >
            </div>
        </div>

        <div class="doc-input">
            <div>ผลการประเมิน</div>
            <div>
                <div>ผลการประเมิน และความเห็นของผู้บังคับบัญชา</div>
                <div>
                    <input type="radio" name="point">
                    <label>ดีเด่น (ร้อยละ 90 ขึ้นไป )</label>
                </div>
                <div>
                    <input type="radio" name="point">
                    <label>ดีมาก (ร้อยละ 80 - 89.99 )</label>
                </div>
                <div>
                    <input type="radio" name="point">
                    <label>ดี (ร้อยละ 70 - 79.99 )</label>
                </div>
                <div>
                    <input type="radio" name="point">
                    <label>พอใช้ (ร้อยละ 60 - 69.99 )</label>
                </div>
                <div>
                    <input type="radio" name="point">
                    <label>ปรับปรุง (น้อยกว่า ร้อยละ 60 )</label>
                </div>
                <div>
                    <label>ความเห็นของผู้บังคับบัญชา</label>
                    <div>
                        <textarea style="width: 90%;margin: 0 10px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        $component_one

    </div>
    </form>

    HTML;
}


function componentOneSubject(){

    $form_input_component = function ($value_data) {
        $content = "";

        foreach($value_data as $cop){
            $title = $cop['title'];
            $name = $cop['name'];
            $namePB = $cop['name'] . "PB";
            $content = $content .
         <<<HTML
         <div class="m-3">
             <div>$title</div>
             <label for="">ประเมินตนเอง</label>
             <select name="$name" id="">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                </select>
                <label for="">ของผู้บังคับบัญชา</label>
                <select name="$namePB" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        HTML;
    }
    return $content;

    };

    $input_component_1 = $form_input_component([
        ["title"=>"1.1 นําผลการวิเคราะห์ หลักสูตร มาจัดทํารายวิชาและ หน่วยการเรียนรู้", "name"=>""],
        ["title"=>"1.2 ปฏิบัติการสอน โดยออกแบบการจัดการเรียนรู้", "name"=>""],
        ["title"=>"1.3  จัดกิจกรรมการเรียนรู้", "name"=>""],
        ["title"=>"1.4 เลือกและใช้สื่อ เทคโนโลยี และแหล่งเรียนรู้", "name"=>""],
        ["title"=>"1.5 วัดและประเมินผลการเรียนรู้", "name"=>""],
        ["title"=>"1.6 จัดบรรยากาศที่ส่งเสริมและพัฒนาผู้เรียน", "name"=>""],
        ["title"=>"1.7 อบรมบ่มนิสัยให้ผู้เรียน มีคุณธรรม จริยธรรม", "name"=>""],
    ]);
    $input_component_2 = $form_input_component([
        ["title"=>"2.1 จัดทำข้อมูลสารสนเทศของผู้เรียนและรายวิชา", "name"=>""],
        ["title"=>"2.2 ดำเนินการตามระบบดูแลช่วยเหลือผู้เรียน", "name"=>""],
        ["title"=>"2.3 ร่วมปฏิบัติงานทางวิชาการ และงานอื่นๆ ของสถานศึกษา", "name"=>""],
        ["title"=>"2.4 ประสานความร่วมมือกับผู้ปกครอง หรือผู้ที่เกี่ยวข้อง", "name"=>""],
    ]);
    $input_component_3 = $form_input_component([
        ["title"=>"3.1 พัฒนาตนเองอย่างเป็นระบบและต่อเนื่อง", "name"=>""],
        ["title"=>"3.2 มีส่วนร่วมในการแลกเปลี่ยนเรียนรู้ทางวิชาชีพ", "name"=>""],
        ["title"=>"3.3 นำความรู้ความสามารถ ทักษะ ที่ได้จากการพัฒนาตนเองและวิชาชีพมาใช้", "name"=>""],

    ]);
    $input_component_4 = $form_input_component([
        ["title"=>"1 ยึดมั่นในสถาบันหลักของประเทศ อันได้แก่ ชาติ ศาสนา พระมหากษัตริย๋ และการปกครองระบอบประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข", "name"=>""],
        ["title"=>"2 มีความซื่อสัตย์ สุจริต มีจิตสำนึกที่ดี มีความรับผิดชอบต่อหน้าที่และต่อผู้เก่ียวข้องในฐานะข้อราชการครูและบุดลากรทางการศึกษา", "name"=>""],
        ["title"=>"3 มีความกล้าคิด กล้าตัดสินใจ กล้าแสดงออก และกระทำในสิ่งที่ถูกต้อง ชอบธรรม", "name"=>""],
        ["title"=>"4 มีจิตอาสา จิตสาธารณะ มุ่งประโยชน์ส่วนรวม โดยไม่คำนึงถึงประโยชน์ส่วนตน หรือพวกพ้อง", "name"=>""],
        ["title"=>"5 มุ่งผลสัมฤทธิ๋ของงาน มุ่งมั่นในการปฏิบัติงานอย่างเต็มกำลังความสามารถโดยคำนึงถึงคุณภาพการศึกษาเป็นสำคัญ", "name"=>""],
        ["title"=>"6 ปฏิบัติหน้าที่อย่างเป็นธรรมและไม่เลือกปฏิบัติ", "name"=>""],
        ["title"=>"7 ดำรงตนเป็นแบบอย่างที่ดีและรักษาภาพลักษณ์ของราชการครูและบุคคลากรทางการศึกษา", "name"=>""],
        ["title"=>"8 เคารพศักดิ๋ศรีความเป็นมนุษย๋ คำนึงถึงสิทธิเด็ก และยอมรับความแตกต่างของบุคคล", "name"=>""],
        ["title"=>"9 ยึดถือและปฏิบัติตามจรรยาบรรณของวิชาชีพ", "name"=>""],
        ["title"=>"10 มีวินัยและการรักษาวินัย", "name"=>""],
    ]);
    return <<<HTML
    <div>
        <div style="text-align: center">
            <div>แบบประเมินองค์ประกอบที่ 1</div>
            <div>การประเมินประสิทธิภาพและประสิทธิผลกาปฏิบัติงานตามมาตรฐานตำแหน่ง</div>
            <div>ตำแหน่งครูผู้ช่วย</div>
            <div>ทุกลังกัด</div>
            <div class="doc-input">
               <div>
                   <div>ระดับการประเมิน</div>
                   <div>ระดับ 1 หมายถึง ต่ำกว่าที่คาดหวังมาก คิดเป็น 1 คะแนน</div>
                   <div>ระดับที่ 2 หมายถึง ต่ำกว่าที่คาดหวัง คิดเป็น 2 คะแนน</div>
                   <div>ระดับที่ 3 ได้ตามที่คาดหวัง คิดเป็น 3 คะแนน</div>
                   <div>ระดับที่ 4 หมายถึง สูงกว่าที่คาดหวัง คิดเป็น 4 คะแนน</div>
               </div>
               <div>**คะแนนประเมิน = คะแนนรวม x 80 หารด้วย 56</div>
                <br>
                <div>ด้านการเรียนรู้</div>
                $input_component_1
                <div>ด้านการส่งเสริมและ สนับสนุนการจัดการเรียนรู้</div>
                $input_component_2
                <div>ด้านการพัฒนาตนเอง</div>
                $input_component_3
                <div>
                    <label for="">คะแนนรวม</label>
                    <input type="number" name="" id="">
                </div>

            </div>

            <div>แบบประเมินองค์ประกอบที่ 2</div>
            <div>การประเมินการมีส่วนร่วมในการพัฒนาการศึกษา</div>
            <div>ตำแหน่งครูผู้ช่วย</div>
            <div>ทุกสังกัด</div>
            <div class="doc-input">
                <div>ระดับ 1 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 19.99 ลงมา</div>
                <div>ระดับ 2 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 20.00 - 39.99</div>
                <div>ระดับ 3 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 40.00 - 59.99</div>
                <div>ระดับ 4 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 60.00 - 79.99</div>
                <div>ระดับ 5 หมายถึง ปฏิบัติงานที่ผู้บังคับบัญชามอบหมายแล้วเสร็จ ร้อยละ 80 ขึ้นไป</div>

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
            </div>

            <div>แบบประเมินองด์ประกอบที่ 3</div>
            <div>การประเมินการปฏิบัติตนในการรักษาวินัย คุณธรรม จริยธรรม และจรรยาบรรณวิชาชีช</div>
            <div>ตำแหน่งครูผู้ช่วย</div>
            <div class="doc-input">
                $input_component_4
                <div>
                    <label for="">คะแนนรวม</label>
                    <input type="number" name="" id="">
                </div>
            </div>
        </div>
    </div>
    HTML;
}