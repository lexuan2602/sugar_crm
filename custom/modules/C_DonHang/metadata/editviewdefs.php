<?php
$module_name = 'C_DonHang';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          0 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'CHONDONHANG',
            'label' => 'LBL_CHONDONHANG',
            'customCode' => '{include file="custom/modules/C_DonHang/tpls/chondh.tpl"}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ngaytaodon_c',
            'label' => 'LBL_NGAYTAODON',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
      ),
    ),
  ),
);
?>
