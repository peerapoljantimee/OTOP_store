<?php
function uploadImage($inputName, $targetDirectory) {
        // ตรวจสอบว่ามีการอัปโหลดไฟล์เข้ามาหรือไม่
        if(!isset($_FILES[$inputName])) {
            return "กรุณาเลือกไฟล์ที่ต้องการอัปโหลด";
        }
        
        // ตรวจสอบว่าเกิดข้อผิดพลาดระหว่างอัปโหลดไฟล์หรือไม่
        if($_FILES[$inputName]["error"] !== UPLOAD_ERR_OK) {
            return "เกิดข้อผิดพลาดในการอัปโหลดไฟล์: ".$_FILES[$inputName]["error"];
        }
        
        // ตรวจสอบประเภทของไฟล์ว่าเป็นไฟล์รูปภาพหรือไม่
        $allowedTypes = array("image/jpeg", "image/png", "image/gif");
        if(!in_array($_FILES[$inputName]["type"], $allowedTypes)) {
            return "รูปแบบไฟล์ไม่ถูกต้อง (ต้องเป็นไฟล์รูปภาพเท่านั้น)";
        }
        
        // กำหนด path ของไฟล์ที่จะบันทึก
        $filename = basename($_FILES[$inputName]["name"]);
        $targetPath = $targetDirectory . "/" . $filename;
        
        // ย้ายไฟล์จาก temporary directory ไปยัง directory ปลายทาง
        if(move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetPath)) {
            return "อัปโหลดไฟล์เรียบร้อยแล้ว";
        } else {
            return "เกิดข้อผิดพลาดในการบันทึกไฟล์";
        }
    }
    ?>