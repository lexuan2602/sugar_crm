<?php
class UpdateProductAmount {
    function updateGiaBan(&$bean, $event,$args)
    {
        $product_id=$bean->sanpham_id;
        $quantity=$bean->soluong;
        $product=BeanFactory::getBean('C_SanPham', $product_id);
        $bean->giaban=$product->gia*$quantity;

    }
}