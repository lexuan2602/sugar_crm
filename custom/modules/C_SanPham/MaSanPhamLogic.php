<?php
class MaSanPhamLogic {
    function assignMaSP(&$bean, $event,$args)
    {
        if($bean->masp=="") {
        $lastRecord = $bean->db->query("SELECT masp FROM c_sanpham WHERE masp LIKE 'SP%' ORDER BY masp DESC LIMIT 1")->fetch_assoc();
        if ($lastRecord) {
            $lastValue = substr($lastRecord['masp'], 2, 3);
            $newValue = str_pad($lastValue + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newValue = '001';
        }
        $bean->masp = 'SP'.$newValue;
        }
    }
}