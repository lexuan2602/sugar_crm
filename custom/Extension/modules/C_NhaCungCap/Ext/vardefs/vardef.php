<?php
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
