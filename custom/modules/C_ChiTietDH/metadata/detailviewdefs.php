<?php
$module_name = 'C_ChiTietDH';
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
            'name' => 'donhang_name',
            'label' => 'LBL_DONHANG_ID',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sanpham_name',
            'label' => 'LBL_SANPHAM_ID',
          ),
          1 => 
          array (
            'name' => 'soluong',
            'label' => 'LBL_SOLUONG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'giaban',
            'label' => 'LBL_GIABAN',
          ),
        ),
      ),
    ),
  ),
);
?>
