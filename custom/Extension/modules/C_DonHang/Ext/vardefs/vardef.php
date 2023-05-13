<?php
$dictionary['C_DonHang']['fields']['madh'] = array( 'name' => 'madh', 'type' => 'varchar', 'label' => 'LBL_MADH', 'requited' => true, );
$dictionary['C_DonHang']['fields']['giatri'] = array( 'name' => 'giatri' , 'type' => 'int', 'label' => 'LBL_GIATRI', 'len' => 10, );
$dictionary["C_DonHang"]["relationships"]["chitietdh_donhang"] = array (
    'lhs_module' => 'C_DonHang',
    'lhs_table' => 'c_donhang',
    'lhs_key' => 'id',
    'rhs_module' => 'C_ChiTietDH',
    'rhs_table' => 'c_chitietdh',
    'rhs_key' => 'donhang_id',
    'relationship_type' => 'one-to-many'
);
$dictionary['C_DonHang']['fields']['ChonDonHang'] = array (
    'name' => 'ChonDonHang',
    'vname' => 'Chon Don Hang',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'studio' => false,
);
//////////////////////////////////////////////////////////////////////////////
$dictionary["C_DonHang"]["fields"]["contact_id"] = array(
    'name'              => 'contact_id',
    'rname'             => 'id',
    'vname'             => 'LBL_CONTACT_ID',
    'type'              => 'id',
    'table'             => 'contacts',
    'isnull'            => 'true',
    'module'            => 'Contacts',
    'dbType'            => 'id',
);
$dictionary["C_DonHang"]["fields"]["contact_name"] = array(
    'source'     => 'non-db',
    'name'       => 'contact_name',
    'vname'      => 'LBL_CONTACT_ID',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'contact_id',
    'join_name'  => 'Contacts',
    'link'       => 'contact_link',
    'table'      => 'contacts',
    'module'     => 'Contacts',
);
$dictionary["C_DonHang"]["fields"]["contact_link"] = array(
    'name'          => 'contact_link',
    'type'          => 'link',
    'relationship'  => 'contact_donhang',
    'module'        => 'Contacts',
    'bean_name'     => 'Contacts',
    'source'        => 'non-db',
    'vname'         => 'LBL_CONTACT_ID',
);
$dictionary['C_DonHang']['fields']['discount'] = array( 'name' => 'discount' , 'type' => 'int', 'label' => 'LBL_DISCOUNT', 'len' => 3, );
$dictionary['C_DonHang']['fields']['disamount'] = array(
    'name' => 'disamount',
    'vname' => 'LBL_DISAMOUNT',
    'type' => 'decimal',
    'precision' => '2',
    'scale' => '2',
    'default' => '',
    'len' => '18',
    'audited' => true,
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'merge_filter' => 'enabled',
    'unified_search' => true,
    'full_text_search' => array(
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.5,
    ),
);
$dictionary['C_DonHang']['fields']['DonHangDetail'] = array (
    'name' => 'DonHangDetail',
    'vname' => 'Chi Tiet Don Hang',
    'type' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'studio' => false,
);