<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2023-05-09 11:00:08
$dictionary['C_NhaCungCap']['fields']['diachi_c']['labelValue']='DiaChi';

 

 // created: 2023-05-09 10:57:28
$dictionary['C_NhaCungCap']['fields']['sodt_c']['labelValue']='SoDT';

 

 // created: 2023-05-09 11:06:40
$dictionary['C_NhaCungCap']['fields']['tencungcap_c']['labelValue']='TenCungCap';

 

$dictionary["C_NhaCungCap"]["relationships"]["nhacc_sanpham"] = array (
    'lhs_module' => 'C_NhaCungCap',
    'lhs_table' => 'c_nhacungcap',
    'lhs_key' => 'id',
    'rhs_module' => 'C_SanPham',
    'rhs_table' => 'c_sanpham',
    'rhs_key' => 'nhacc_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['C_NhaCungCap']['fields']['TenNhaCungCap'] = array(
    'name' => 'TenNhaCungCap',
    'type' => 'varchar',
    'label' => 'LBL_TENNHACUNGCAP',
);

?>