<?php

$dictionary["C_ChiTietDH"]["fields"]["donhang_id"] = array(
    'name'              => 'donhang_id',
    'rname'             => 'id',
    'vname'             => 'LBL_DONHANG_ID',
    'type'              => 'id',
    'table'             => 'c_donhang',
    'isnull'            => 'true',
    'module'            => 'C_DonHang',
    'dbType'            => 'id',
);
$dictionary["C_ChiTietDH"]["fields"]["donhang_name"] = array(
    'source'     => 'non-db',
    'name'       => 'donhang_name',
    'vname'      => 'LBL_DONHANG_ID',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'donhang_id',
    'join_name'  => 'C_DonHang',
    'link'       => 'donhang_link',
    'table'      => 'c_donhang',
    'module'     => 'C_DonHang',
);
$dictionary["C_ChiTietDH"]["fields"]["donhang_link"] = array(
    'name'          => 'contact_link',
    'type'          => 'link',
    'relationship'  => 'chitietdh_donhang',
    'module'        => 'C_DonHang',
    'bean_name'     => 'C_DonHang',
    'source'        => 'non-db',
    'vname'         => 'LBL_DONHANG_ID',
);
//////////////////////////////////////////////////////////////////
$dictionary["C_ChiTietDH"]["fields"]["sanpham_id"] = array(
    'name'              => 'sanpham_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SANPHAM_ID',
    'type'              => 'id',
    'table'             => 'c_sanpham',
    'isnull'            => 'true',
    'module'            => 'C_SanPham',
    'dbType'            => 'id',
);
$dictionary["C_ChiTietDH"]["fields"]["sanpham_name"] = array(
    'source'     => 'non-db',
    'name'       => 'sanpham_name',
    'vname'      => 'LBL_SANPHAM_ID',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'sanpham_id',
    'join_name'  => 'C_SanPham',
    'link'       => 'sanpham_link',
    'table'      => 'c_sanpham',
    'module'     => 'C_SanPham',
);
$dictionary["C_ChiTietDH"]["fields"]["sanpham_link"] = array(
    'name'          => 'sanpham_link',
    'type'          => 'link',
    'relationship'  => 'chitietdh_sanpham',
    'module'        => 'C_SanPham',
    'bean_name'     => 'C_SanPham',
    'source'        => 'non-db',
    'vname'         => 'LBL_SANPHAM_ID',
);
////////////////////////////////////////////////////////////////
$dictionary['C_ChiTietDH']['fields']['soluong'] = array( 'name' => 'soluong' , 'type' => 'int', 'label' => 'LBL_SOLUONG', 'len' => 10, );
$dictionary['C_ChiTietDH']['fields']['giaban'] = array( 'name' => 'giaban' , 'type' => 'int', 'label' => 'LBL_GIABAN', 'len' => 10, );
