<?php
$module_name = 'C_NhaCungCap';
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
            'name' => 'tencungcap_c',
            'label' => 'LBL_TENCUNGCAP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'diachi_c',
            'label' => 'LBL_DIACHI',
          ),
          1 => 
          array (
            'name' => 'sodt_c',
            'label' => 'LBL_SODT',
          ),
        ),
      ),
    ),
  ),
);
?>
