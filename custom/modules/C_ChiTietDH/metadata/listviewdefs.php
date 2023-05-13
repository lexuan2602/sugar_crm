<?php
$module_name = 'C_ChiTietDH';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SANPHAM_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SANPHAM_ID',
    'id' => 'SANPHAM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'SOLUONG' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
  ),
  'GIABAN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_GIABAN',
    'width' => '10%',
    'default' => true,
  ),
  'DONHANG_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DONHANG_ID',
    'id' => 'DONHANG_ID',
    'width' => '10%',
    'default' => true,
  ),
);
?>
