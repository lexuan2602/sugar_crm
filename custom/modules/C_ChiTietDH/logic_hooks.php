<?php
$hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'Update Gia Ban', 'custom/modules/C_ChiTietDH/UpdateProductAmount.php','UpdateProductAmount', 'updateGiaBan');
