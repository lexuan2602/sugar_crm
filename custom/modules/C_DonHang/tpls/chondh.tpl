<button style="padding: 8px; margin-bottom: 8px" id="add_row">Add</button>
<table class="myTable" style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 0 auto" >
    <span> {$data} </span>
    <tr style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Tên sản phẩm</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Số lượng</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Giá bán</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Tổng</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Action</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">MA THD</th>
        <th style="background-color: #addcef; padding: 8px; text-align: center;">Deleted</th>
    </tr>
    <!--  ------------------------------------------ -->

        {section name=j loop=$data}
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="padding: 5px">
            <select style="border: none; padding: 5px; text-align: center; width: 100%; background-color: #f6f6f6" name="product[]">
                {section name=i loop=$options}
                    <option value="{$options[i].id}" class="{$options[i].gia}" {if $options[i].id == $data[j].id} selected {/if}>{$options[i].name}</option>
                {/section}
            </select>
        </th>
        <th style="padding: 5px"><input type="number"  style="width: 30px; padding: 5px; border: none; text-align: center; background-color: #f6f6f6" name="Soluong[]" value="{$data[j].soluong}"></th>
        <th style="padding: 8px; font-weight: 500;" >{$data[j].gia}</th>
        <th style="padding: 8px; font-weight: 500;" class="dongia">{$data[j].gia*$data[j].soluong}</th>
        <th style="padding: 8px">
            <button class="btnDelete">Delete</button>
        </th>
        <th style="padding: 5px"><input type="number"  style="width: 30px; padding: 5px; border: none; text-align: center; background-color: #f6f6f6" name="Soluong[]" value="{$options[j].id}"></th>
        <th style="padding: 5px"><input type="number"  style="width: 30px; padding: 5px; border: none; text-align: center; background-color: #f6f6f6" name="Soluong[]" value="0"></th>
    </tr>

        {/section}
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; display: none" class="template">
        <th style="padding: 5px">
            <select style="border: none; text-align: center; padding: 5px; width: 100%; background-color: #f6f6f6" name="product[]" disabled class="product">
                {section name=i loop=$options}
                    <option value="{$options[i].id}" class="{$options[i].gia}">{$options[i].name}</option>
                {/section}
            </select>
        </th>
        <th style="padding: 5px"><input type="number" class="soluong" disabled style="padding: 5px; text-align: center; border: none; background-color: #f6f6f6" name="Soluong[]"></th>
        <th style="padding: 8px; font-weight: 500;" >{$options[0].gia}</th>
        <th style="padding: 8px; font-weight: 500;" class="dongia">0</th>
        <th style="padding: 8px ;">
            <button class="btnDelete">Delete</button>
        </th>
    </tr>

    <!--  ------------------------------------------ -->
    {if $data=="abc"}
    <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
        <th style="padding: 5px">
            <select style="border: none; text-align: center; padding: 5px; width: 100%; background-color: #f6f6f6" name="product[]">
                {section name=i loop=$options}
                    <option value="{$options[i].id}" class="{$options[i].gia}">{$options[i].name}</option>
                {/section}
            </select>
        </th>
        <th style="padding: 5px"><input type="number"  style="padding: 5px; text-align: center; border: none; background-color: #f6f6f6" name="Soluong[]"></th>
        <th style="padding: 8px; font-weight: 500;" >{$options[0].gia}</th>
        <th style="padding: 8px; font-weight: 500;" class="dongia">0</th>
        <th style="padding: 8px">
            <button class="btnDelete">Delete</button>
        </th>
    </tr>

    {/if}

</table>
<div style="margin: 10px; margin-left: 200px;">
        <span style="margin: 10px" >Khuyen mai: </span>
        <select style="margin: 10px; padding: 5px; border-radius: 5px" name="discount" id="discount">
            <option value="1" {if $dc==1} selected{/if} class=""> Giảm theo giá tiền </option>
            <option value="2" {if $dc==2} selected{/if} class=""> Giảm theo phần trăm  </option>
        </select>

        <input style="width: 20%; margin: -5px; padding: 5px; border-radius: 5px" type="number" name="Disamount" id="Disamount" value="{$dca}" class="" style="">
</div>
<div style="margin: 10px; margin-left: 390px;">
    <span>Thanh tien: </span>
    <input style="width: 45%; padding: 5px; border-radius: 5px" type="number" name="Gia" value="0" readonly class="gia" style="margin-top: -10px">
</div>


{literal}
    <script>
        $(document).ready(function () {
           // var panel = $('.myTable').closest('#Default_C_DonHang_Subpanel');
           // panel.css("background-color", "yellow");
            $(".btnDelete").click(function (event) {
                event.preventDefault();
                $(this).closest("tr").remove();
                console.log("133");
                calculateSummary();
            });

            $(".myTable").on("keyup change", "input[name=Soluong[]]", function () {
                var soLuong = $(this).val();
                if (soLuong < 0) {
                    alert("Giá trị không được nhỏ hơn 0!");
                }
                var giaBan = $(this).closest("tr").find("th:eq(2)").text();
                var tong = soLuong * giaBan;
                $(this).closest("tr").find("th:eq(3)").text(tong);
                calculateSummary();

            }).on("change", "select[name='product[]']", function () {
                var selectedOption=parseInt($(this).find('option:selected').attr('class'));
                console.log(selectedOption);
                $(this).closest("tr").find("th:nth-child(3)").text(selectedOption);
                var soluong = ($(this).closest("tr").find("th:nth-child(2)").find("input").val());
                console.log("abc"+soluong);
                $(this).closest("tr").find("th:nth-child(4)").text(selectedOption*soluong);
                calculateSummary();
            });


            $("#discount").change(function () {
                calculateSummary();
            })
            $("#Disamount").change(function () {
                calculateSummary();
            })
            $("#Disamount").keyup(function () {
                var discountVal1 = $('#discount').val();
                var price = $('.gia').val();
                var Val = parseFloat($(this).val());
                if(discountVal1==1) {
                    if(Val>price) {
                        alert("Gia giam qua lon");
                      //  alert(price+" "+Val);
                        $(this).val(0);
                    }
                }
                if(discountVal1==2) {
                    if(Val>100) {
                        alert("Gia giam qua lon");
                        $(this).val(0);
                    }
                }
                calculateSummary();
            })
            $("#add_row").click(function (event) {
                event.preventDefault();
                var template = $('.myTable .template').clone().removeClass("template");
                template.find(".product").removeAttr("disabled");
                template.find(".soluong").removeAttr("disabled");
                var row = template.clone();
                row.css("display","table-row");
                $('.myTable').append(row);
                calculateSummary();
                $(".btnDelete").click(function (event) {
                    event.preventDefault();
                    $(this).closest("tr").remove();
                    console.log("133");
                    calculateSummary();
                });
                // var options = [
                //     {"name":"bánh","id":"8181b02b-c024-4a79-bbde-644ff5c275b3","gia":"23"},
                //     {"name":"kẹo","id":"9f9adec3-d09f-27d0-ae11-644ff44faf80","gia":"34"},
                //     {"name":"bánh","id":"ab45f1ff-f53b-bcc7-0565-644e28f1369a","gia":"11"},
                //     {"name":"bánh","id":"c2fc1858-7e09-d8f7-d198-644f8754777e","gia":"20"},
                //     {"name":"bánh","id":"d691fa96-072f-d0b6-83f6-644ffa74fbac","gia":"34"}
                // ];
                // $(".myTable ").append(`
                //     <tr style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd">
                //          <th style="padding: 5px">
                //             <select name="product[]">
                //                 {section name=i loop=$options}
                //                     <option value="{$options[i].id}" class="{$options[i].gia}">{$options[i].name}</option>
                //                 {/section}
                //             </select>
                //            </th>
                //          <th style="padding: 5px"><input type="number"  style="padding: 5px" name="Soluong[]"></th>
                //          <th style="padding: 8px" >{$options[0].gia}</th>
                //          <th style="padding: 8px">0</th>
                //          <th style="padding: 8px">
                //          <button class="btnDelete">Delete</button>
                //          </th>
                //     </tr>
                // `);
          //      var myVar = $('.myTable').data('my-var');


            //    var myVardecode = JSON.parse(JSON.stringify(array));
            //    console.log(options[0].name);
            });
            calculateSummary();
            function calculateSummary() {
                var summary=0;
                var discountVal = $('#discount').val();
                var disamountVal = $('#Disamount').val();
                if(disamountVal=="") {
                    discountVal=0;
                }
                console.log(discountVal);
                $(".dongia").each(function () {
                    summary+=parseInt($(this).text());
                })
                if(discountVal==1) {
                    console.log("da vao 1");
                    summary-=parseFloat(disamountVal);
                }
                if(discountVal==2) {
                    console.log("da vao 2");
                    summary=summary*(100-parseFloat(disamountVal))/100;
                }
                $(".gia").val(summary);
            }


        });
    </script>
{/literal}