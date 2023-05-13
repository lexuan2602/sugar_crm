<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class C_DonHangViewEdit extends ViewEdit
{
    public function display()
    {
        global $db;
        $sql="Select * from c_sanpham where deleted=0";
        $result = $db->query($sql);
        $index=0;
        while($row=$db->fetchByAssoc($result)) {
            $options[$index]['name'] = $row['name'];
            $options[$index]['id'] = $row['id'];
            $options[$index]['gia'] = $row['gia'];
            $index++;
        }
        $madh=$this->bean->id;
        if($madh!=""){
            $sql1="Select c_sanpham.id as masanpham, c_sanpham.name as tensanpham, c_sanpham.gia as giasanpham, soluong
            from c_donhang
            inner join c_chitietdh on c_donhang.id = c_chitietdh.donhang_id
            inner join c_sanpham on c_sanpham.id=c_chitietdh.sanpham_id
            where c_donhang.deleted=0 and c_chitietdh.deleted=0 and c_sanpham.deleted=0 and c_donhang.id='$madh'";
            $result1 = $db->query($sql1);
            $j=0;
            while($row1=$db->fetchByAssoc($result1)) {
                $data[$j]['name'] = $row1['tensanpham'];
                $data[$j]['id'] = $row1['masanpham'];
                $data[$j]['gia'] = $row1['giasanpham'];
                $data[$j]['soluong'] = $row1['soluong'];
                $j++;
            }
        }
        else {
            $data="abc";
        }
        $array = array(1, 2);
        $myoption_json=json_encode($options, JSON_UNESCAPED_UNICODE);

        $this->ss->assign("myoption_json",$myoption_json);
        $this->ss->assign("options",$options);
        $this->ss->assign("data",$data);
        $this->ss->assign("test",$this->bean->id);
        $this->ss->assign("dc",$this->bean->discount);
        $this->ss->assign("dca",$this->bean->disamount);
        # from id don hang que
        //print($options);
        parent::display(); // TODO: Change the autogenerated stub
    }
}