<?php
$module_name = 'C_DonHang';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'giatri',
            'label' => 'LBL_GIATRI',
          ),
          1 => 
          array (
            'name' => 'ngaytaodon_c',
            'label' => 'LBL_NGAYTAODON',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'DONHANGDETAIL',
            'label' => 'LBL_DONHANGDETAIL',
            'customCode' => '{include file="custom/modules/C_DonHang/tpls/donhangdetail.tpl"}',
          ),
        ),
      ),
    ),
  ),
);
?>
