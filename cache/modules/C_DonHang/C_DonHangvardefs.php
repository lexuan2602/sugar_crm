<?php 
 $GLOBALS["dictionary"]["C_DonHang"]=array (
  'table' => 'c_donhang',
  'audited' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'c_donhang_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'c_donhang_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'c_donhang_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'ngaytaodon_c' => 
    array (
      'labelValue' => 'Ngay Tao Don',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'ngaytaodon_c',
      'vname' => 'LBL_NGAYTAODON',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'C_DonHangngaytaodon_c',
      'custom_module' => 'C_DonHang',
    ),
    'madh' => 
    array (
      'name' => 'madh',
      'type' => 'varchar',
      'label' => 'LBL_MADH',
      'requited' => true,
    ),
    'giatri' => 
    array (
      'name' => 'giatri',
      'type' => 'int',
      'label' => 'LBL_GIATRI',
      'len' => 10,
    ),
    'ChonDonHang' => 
    array (
      'name' => 'ChonDonHang',
      'vname' => 'Chon Don Hang',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'studio' => false,
    ),
    'contact_id' => 
    array (
      'name' => 'contact_id',
      'rname' => 'id',
      'vname' => 'LBL_CONTACT_ID',
      'type' => 'id',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'dbType' => 'id',
    ),
    'contact_name' => 
    array (
      'source' => 'non-db',
      'name' => 'contact_name',
      'vname' => 'LBL_CONTACT_ID',
      'type' => 'relate',
      'rname' => 'name',
      'id_name' => 'contact_id',
      'join_name' => 'Contacts',
      'link' => 'contact_link',
      'table' => 'contacts',
      'module' => 'Contacts',
    ),
    'contact_link' => 
    array (
      'name' => 'contact_link',
      'type' => 'link',
      'relationship' => 'contact_donhang',
      'module' => 'Contacts',
      'bean_name' => 'Contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACT_ID',
    ),
    'discount' => 
    array (
      'name' => 'discount',
      'type' => 'int',
      'label' => 'LBL_DISCOUNT',
      'len' => 3,
    ),
    'disamount' => 
    array (
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
      'full_text_search' => 
      array (
        'enabled' => true,
        'searchable' => true,
        'boost' => 1.5,
      ),
    ),
    'DonHangDetail' => 
    array (
      'name' => 'DonHangDetail',
      'vname' => 'Chi Tiet Don Hang',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'studio' => false,
    ),
  ),
  'relationships' => 
  array (
    'c_donhang_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'C_DonHang',
      'rhs_table' => 'c_donhang',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'c_donhang_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'C_DonHang',
      'rhs_table' => 'c_donhang',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'c_donhang_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'C_DonHang',
      'rhs_table' => 'c_donhang',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'chitietdh_donhang' => 
    array (
      'lhs_module' => 'C_DonHang',
      'lhs_table' => 'c_donhang',
      'lhs_key' => 'id',
      'rhs_module' => 'C_ChiTietDH',
      'rhs_table' => 'c_chitietdh',
      'rhs_key' => 'donhang_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'c_donhangpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);