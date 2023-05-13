<?php /* Smarty version 2.6.11, created on 2023-05-09 14:55:45
         compiled from custom/modules/C_DonHang/tpls/donhangdetail.tpl */ ?>
<table style="width: 50%">
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="background-color: #addcef; padding: 8px; ">Tên sản phẩm</th>
        <th style="background-color: #addcef; padding: 8px; ">Số lượng</th>
        <th style="background-color: #addcef; padding: 8px; ">Giá bán</th>
        <th style="background-color: #addcef; padding: 8px; ">Tổng</th>
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="padding: 8px; "><?php echo $this->_tpl_vars['options'][$this->_sections['i']['index']]['name']; ?>
</th>
        <th style="padding: 8px; "><?php echo $this->_tpl_vars['options'][$this->_sections['i']['index']]['soluong']; ?>
</th>
        <th style="padding: 8px; "><?php echo $this->_tpl_vars['options'][$this->_sections['i']['index']]['gia']; ?>
</th>
        <th style="padding: 8px; "><?php echo $this->_tpl_vars['options'][$this->_sections['i']['index']]['gia']*$this->_tpl_vars['options'][$this->_sections['i']['index']]['soluong']; ?>
</th>
    </tr>
    <?php endfor; endif; ?>
</table>
<div style="margin-left: 348px; margin-top: 10px">
    <select style="padding: 5px; border-radius: 5px" name="discount" id="discount">
        <option value="1" <?php if ($this->_tpl_vars['discount'] == 1): ?> selected<?php endif; ?> class=""> Giảm theo giá tiền </option>
        <option value="2" <?php if ($this->_tpl_vars['discount'] == 2): ?> selected<?php endif; ?> class=""> Giảm theo phần trăm  </option>
    </select>

    <input style="padding: 5px; border-radius: 5px" type="number" name="Disamount" id="Disamount" value="<?php echo $this->_tpl_vars['disamount']; ?>
" class="" style="margin-top: 30px">
</div>