<?php
$module_name = 'C_DonHang';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'GIATRI' => 
  array (
    'type' => 'int',
    'label' => 'LBL_GIATRI',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYTAODON_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_NGAYTAODON',
    'width' => '10%',
  ),
);
?>
