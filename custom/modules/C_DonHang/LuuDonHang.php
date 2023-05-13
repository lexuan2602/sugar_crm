<?php
class LuuDonHang {
    function luudonhang(&$bean, $event,$args)
    {
        if ($bean->module_dir == 'C_DonHang') {
            //  if ($bean->fetched_row['id'] == '') {
            // Tạo mới bản ghi chi tiết hóa đơn
            //$detailInvoiceBean = BeanFactory::newBean('C_ChiTietDH');
            //  } else {
            // Lấy bản ghi chi tiết hóa đơn cần cập nhật
            //   $detailInvoiceBean = BeanFactory::retrieveBean('C_ChiTietDH', $bean->id);
            //  }
            global $db;
            $madh=$bean->id;
            $sql="delete from c_chitietdh where donhang_id='$madh'";
            if($madh!="") {
                $result=$db->query($sql);
            }
            // Lấy thông tin từ form
            $product = $_POST['product'];
            $quantity = $_POST['Soluong'];
            $gia=$_POST['Gia'];
            $discount=$_POST['discount'];
            $disamount=$_POST['Disamount'];
            //   $price = $bean->gia;
            //    $total = $quantity * $price;

            // Thêm thông tin vào bản ghi chi tiết hóa đơn
        //    $detailInvoiceBean->donhang_id = $bean->id;
        //    $detailInvoiceBean->sanpham_id = $product;
        //    $detailInvoiceBean->soluong = $quantity;
            //  $detailInvoiceBean->giaban = $total;
            //  $detailInvoiceBean->total = $total;
          //  $detailInvoiceBean->save();
            foreach ($product as $key => $value) {
                if (!empty($value)) {
                    $detailInvoiceBean = BeanFactory::newBean('C_ChiTietDH');
                    $detailInvoiceBean->sanpham_id = $value;
                    $detailInvoiceBean->soluong = $quantity[$key];
                    $detailInvoiceBean->donhang_id = $bean->id;
                    $detailInvoiceBean->save();
                }
            }
            $bean->giatri=$gia;
            $bean->discount=$discount;
            $bean->disamount=$disamount;
        }

    }
    function assignMaDH(&$bean, $event,$args)
    {
        if($bean->name=="") {
            $lastRecord = $bean->db->query("SELECT name FROM c_donhang WHERE name LIKE 'HD%' ORDER BY name DESC LIMIT 1")->fetch_assoc();
            if ($lastRecord) {
                $lastValue = substr($lastRecord['name'], 2, 3);
                $newValue = str_pad($lastValue + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $newValue = '001';
            }
            $bean->name = 'HD' . $newValue;
        }
    }
}