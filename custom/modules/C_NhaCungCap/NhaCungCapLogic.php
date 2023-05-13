<?php
class NhaCungCapLogic {
    function assignMaNhaCC(&$bean, $event,$args)
    {
        if($bean->name=="") {

            $lastRecord = $bean->db->query("SELECT name FROM c_nhacungcap WHERE name LIKE 'NCC%' ORDER BY name DESC LIMIT 1")->fetch_assoc();
            if ($lastRecord) {
                $lastValue = substr($lastRecord['name'], 3, 3);
                $newValue = str_pad($lastValue + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newValue = '001';
            }
            $bean->name = 'NCC' . $newValue;
        }
    }
}