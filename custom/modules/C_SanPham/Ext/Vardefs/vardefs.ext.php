<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['C_SanPham']['fields']['age'] = array( 'name' => 'age' , 'type' => 'int', 'label' => 'LBL_AGE', 'len' => 3, );
$dictionary['C_SanPham']['fields']['gia'] = array( 'name' => 'gia' , 'type' => 'int', 'label' => 'LBL_GIA', 'len' => 6, );
$dictionary['C_SanPham']['fields']['masp'] = array( 'name' => 'masp', 'type' => 'varchar', 'label' => 'LBL_MASP', 'requited' => true, );

$dictionary["C_SanPham"]["relationships"]["chitietdh_sanpham"] = array (
    'lhs_module' => 'C_SanPham',
    'lhs_table' => 'c_sanpham',
    'lhs_key' => 'id',
    'rhs_module' => 'C_ChiTietDH',
    'rhs_table' => 'c_chitietdh',
    'rhs_key' => 'sanpham_id',
    'relationship_type' => 'one-to-many'
);

$dictionary["C_SanPham"]["fields"]["nhacc_id"] = array(
    'name'              => 'nhacc_id',
    'rname'             => 'id',
    'vname'             => 'LBL_NHACC_ID',
    'type'              => 'id',
    'table'             => 'c_nhacungcap',
    'isnull'            => 'true',
    'module'            => 'C_NhaCungCap',
    'dbType'            => 'id',
);
$dictionary["C_SanPham"]["fields"]["nhacc_name"] = array(
    'source'     => 'non-db',
    'name'       => 'nhacc_name',
    'vname'      => 'LBL_NHACC_ID',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'nhacc_id',
    'join_name'  => 'C_NhaCungCap',
    'link'       => 'nhacc_link',
    'table'      => 'c_nhacungcap',
    'module'     => 'C_NhaCungCap',
);
$dictionary["C_SanPham"]["fields"]["nhacc_link"] = array(
    'name'          => 'nhacc_link',
    'type'          => 'link',
    'relationship'  => 'nhacc_sanpham',
    'module'        => 'C_NhaCungCap',
    'bean_name'     => 'C_NhaCungCap',
    'source'        => 'non-db',
    'vname'         => 'LBL_NHACC_ID',
);

?>