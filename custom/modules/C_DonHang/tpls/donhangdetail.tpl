<table style="width: 50%">
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="background-color: #addcef; padding: 8px; ">Tên sản phẩm</th>
        <th style="background-color: #addcef; padding: 8px; ">Số lượng</th>
        <th style="background-color: #addcef; padding: 8px; ">Giá bán</th>
        <th style="background-color: #addcef; padding: 8px; ">Tổng</th>
    </tr>
    {section name=i loop=$options}
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="padding: 8px; ">{$options[i].name}</th>
        <th style="padding: 8px; ">{$options[i].soluong}</th>
        <th style="padding: 8px; ">{$options[i].gia}</th>
        <th style="padding: 8px; ">{$options[i].gia*$options[i].soluong}</th>
    </tr>
    {/section}
</table>
<div style="margin-left: 348px; margin-top: 10px">
    <select style="padding: 5px; border-radius: 5px" name="discount" id="discount">
        <option value="1" {if $discount==1} selected{/if} class=""> Giảm theo giá tiền </option>
        <option value="2" {if $discount==2} selected{/if} class=""> Giảm theo phần trăm  </option>
    </select>

    <input style="padding: 5px; border-radius: 5px" type="number" name="Disamount" id="Disamount" value="{$disamount}" class="" style="margin-top: 30px">
</div>