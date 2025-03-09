<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==17||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){

    $stat = $con->prepare("SELECT * FROM purchase_order ORDER BY id DESC");
    $stat->execute();

    $order_id = $stat->fetch();


    
?>


		
			<div class="content" style="direction: rtl;" >
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							
								<div class="card">
									<div class="card-header">
										<div class="card-title" align="center" > <h1>طلب شراء    </h1></div>
									</div>
                                    <?php
                                    if(isset($_GET["add"]))
                                    {
                                    ?>
                                    
                                    <form method="post" id="invoice_form">
									<div class="card-body">
                                        <div class="row">
                                                             
                                        <div class="col-md-6 col-lg-4">
                                                
                                                        
                                                <div class="form-group form-floating-label">
                                                        <label >رقم الطلب</label></label>
                                                        <input value="<?php echo $order_id['id']+1?>" type="text" class="form-control input-border-bottom" id="order_date" name="order_id"  readonly  >
                                                    </div>
    
                                                  
                                                   
                                                </div>
                                            <div class="col-md-6 col-lg-4">

                                                        
                                            <div class="form-group form-floating-label">
                                                    <label >تاريخ الطلب</label></label>
                                                    <input value="<?php echo date("Y-m-d") ?>" type="date" class="form-control input-border-bottom" id="order_date" name="order_date"    >
                                                </div>

                                              
                                                
                                            </div>
                                           
                                            <div class="col-md-6 col-lg-4">
                                                
                                                <div class="form-group form-floating-label">
                                                        
                                                    <label for="tokens">نوع العملة</label>
                                                    <select class="selectpicker form-control" name="money_type" id="tokens"  data-live-search="true" required >
                                                        <option value=""></option>
                                                        <?php 
                                                            $sql="select * from money_type  ";
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute();
                                                            if($stm->rowCount()>0)
                                                                {
                                                                    foreach($stm->fetchAll() as $row) 
                                                                    {

                                                        ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                            
                                                        <?php
                                                                    }
                                                                }
                                                        ?>
                                                    
                                                    </select>	
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="container-fluid">
                                                
                                                
                                                    <div class="table-responsive">
                                                    

                                                        <table class="table table-bordered">
                                                          
                                                            <tr>
                                                                <td colspan="2">
                                                                
                                                                <br />
                                                                <table  id="invoice-item-table" class="table table-bordered">
                                                                    <tr>
                                                                    <th width="100%">Sr No.</th>
                                                                    <th width="20%">اسم الطلب</th>
                                                                    <th width="5%">الوحدة</th>
                                                                    <th width="5%">الكمية</th>
                                                                    <th width="5%">سعر الوحدة</th>
                                                                    <th width="10%"> الاجمالي</th>
                                                                    <th width="10%" >ملاحظات</th>
                                                                    <th width="3%" ></th>
                                                                    </tr>
                                                                  
                                                                    <tr>
                                                                    <td ><span id="sr_no">1</span></td>
                                                                    <td >
                                                                        <div class="form-group form-floating-label">
                                                                            <select class="selectpicker form-control" name="order_item_name[]" id="order_item_name1"  data-live-search="true" required >
                                                                                <option value=""></option>
                                                                                <?php 
                                                                                    $sql="select * from item_name_of_purchase_order  ";
                                                                                    $stm=$con->prepare($sql); 
                                                                                    $stm->execute();
                                                                                    if($stm->rowCount()>0)
                                                                                        {
                                                                                            foreach($stm->fetchAll() as $row) 
                                                                                            {

                                                                                ?>
                                                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                                                    
                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                ?>
                                                                            
                                                                            </select>
                                                                        </div>	
                                                                    </td>

                                                                    <td >
                                                                        <div class="form-group form-floating-label">
                                                                            <select class="selectpicker form-control" name="order_item_unit[]" id="order_item_unit1"  data-live-search="true" required>
                                                                                <option value=""></option>
                                                                                <?php 
                                                                                    $sql="select * from unit_name_of_purchase_order  ";
                                                                                    $stm=$con->prepare($sql); 
                                                                                    $stm->execute();
                                                                                    if($stm->rowCount()>0)
                                                                                        {
                                                                                            foreach($stm->fetchAll() as $row) 
                                                                                            {

                                                                                ?>
                                                                                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>
                                                                                    
                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                ?>
                                                                            
                                                                            </select>
                                                                        </div>	
                                                                        </td>
                                                                    <td><input  style="width:100px" value=0  type="text" name="order_item_quantity[]" id="order_item_quantity1" data-srno="1" class="form-control input-border-bottom number_only order_item_quantity" required/></td>
                                                                    
                                                                    <td><input style="width:100px"  value=0 type="text" name="order_item_price[]" id="order_item_price1" data-srno="1" class="form-control input-border-bottom number_only order_item_price" required /></td>
                                                                    <td><input style="width:100px"  value=0 type="text" name="order_item_actual_amount[]" id="order_item_actual_amount1" data-srno="1" class="form-control input-border-bottom order_item_actual_amount"readonly  /></td>
                                                                    <td ><input style="width:300px"  type="text" name="order_item_description[]" id="order_item_description1" class="form-control input-border-bottom" /></td>
                                                                   <td></td>
                                                                    </tr>
                                                                </table>
                                                                <div align="right">
                                                                    <button type="button" name="add_row" id="add_row" class="btn btn-success">+</button>
                                                                </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right"><b>الاجمالي</td>
                                                                <td align="right"><b><span id="final_total_amt"></span></b></td>
                                                                <input type="hidden" name="total_item" id="total_item" value="1" />
                                                                <input type="hidden" name="final_item_total" id="final_item_total" value="1" />
                                                            </tr>
                                                        
                                                        </table>
                                                    </div>
                                                    <div class="card-action">
                                                        <input class="btn btn-success" type="submit" name="save" value="حفظ">
                                                        <a href="purchase_order.php" class="btn btn-danger">الغاء</a>
                                                    </div>
                                                <script>
                                                $(document).ready(function(){
                                                    var final_total_amt = $('#final_total_amt').text();
                                                    var count = 1;
                                                    
                                                    $(document).on('click', '#add_row', function(){
                                                    count++;
                                                    $('#total_item').val(count);
                                                    var html_code = '';
                                                    html_code += '<tr id="row_id_'+count+'">';
                                                    html_code += '<td><span id="sr_no">'+count+'</span></td>';
                                                    
                                                    html_code += '<td> <select class="form-control input-border-bottom" name="order_item_name[]" id="order_item_name'+count+'"  required ><option value=""></option><?php $sql="select * from item_name_of_purchase_order  ";$stm=$con->prepare($sql); $stm->execute(); if($stm->rowCount()>0) {foreach($stm->fetchAll() as $row) { ?><option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option> <?php } }?> </select></td>';
                                                    html_code += '<td><select class="form-control input-border-bottom" name="order_item_unit[]" id="order_item_unit'+count+'"  data-live-search="true" required><option value=""></option><?php $sql="select * from unit_name_of_purchase_order  ";$stm=$con->prepare($sql); $stm->execute();if($stm->rowCount()>0){foreach($stm->fetchAll() as $row) {?> <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option><?php }}?></select></td>';
                                                    
                                                    html_code += '<td><input type="text" value=0 name="order_item_quantity[]" id="order_item_quantity'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_quantity" required /></td>';
                                                    html_code += '<td><input type="text" value=0 name="order_item_price[]" id="order_item_price'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_price" required /></td>';
                                                    html_code += '<td><input type="text" value=0 name="order_item_actual_amount[]" id="order_item_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-border-bottom order_item_actual_amount" readonly /></td>';
                                                    
                                                    html_code += '<td><input type="text" name="order_item_description[]" id="order_item_description1'+count+'" class="form-control input-border-bottom" /></td>';

                                                    html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
                                                    html_code += '</tr>';
                                                    $('#invoice-item-table').append(html_code),
                                                    $('#order_item_unit'+count+'').select2(),
                                                    $('#order_item_name'+count+'').select2();
                                                    });
                                                    
                                                    $(document).on('click', '.remove_row', function(){
                                                    var row_id = $(this).attr("id");
                                                    var total_item_amount = $('#order_item_final_amount'+row_id).val();
                                                    var final_amount = $('#final_total_amt').text();
                                                    var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
                                                    $('#final_total_amt').text(result_amount);
                                                    $('#row_id_'+row_id).remove();
                                                    count--;
                                                    $('#total_item').val(count);
                                                    cal_final_total(count);
                                                    }
                                                    );

                                                    function cal_final_total(count)
                                                    {
                                                    var final_item_total = 0;
                                                    for(j=1; j<=count; j++)
                                                    {
                                                        var quantity = 0;
                                                        var price = 0;
                                                        var actual_amount = 0;
                                                        var tax1_rate = 0;
                                                        var tax1_amount = 0;
                                                        var tax2_rate = 0;
                                                        var tax2_amount = 0;
                                                        var tax3_rate = 0;
                                                        var tax3_amount = 0;
                                                        var item_total = 0;
                                                        quantity = $('#order_item_quantity'+j).val();
                                                        if(quantity >= 0)
                                                        {
                                                        price = $('#order_item_price'+j).val();
                                                        if(price > 0)
                                                        {
                                                            actual_amount = parseFloat(quantity) * parseFloat(price);
                                                            $('#order_item_actual_amount'+j).val(actual_amount);
                                                            tax1_rate = $('#order_item_tax1_rate'+j).val();
                                                            
                                                            item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
                                                            final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                                                            $('#order_item_final_amount'+j).val(item_total);
                                                        }
                                                        
                                                        }
                                                    }
                                                    $('#final_total_amt').text(final_item_total);
                                                    $('#final_item_total').val(final_item_total);
                                                    }

                                                    $(document).on('blur', '.order_item_price', function(){
                                                    cal_final_total(count);
                                                    });

                                                    $(document).on('blur', '.order_item_quantity', function(){
                                                    cal_final_total(count);
                                                    });
                                                  
                                                    cal_final_total(count);
                                                    
                                                  

                                                    $('#create_invoice').click(function(){
                                                    if($.trim($('#order_receiver_name').val()).length == 0)
                                                    {
                                                        alert("Please Enter Reciever Name");
                                                        return false;
                                                    }

                                                    if($.trim($('#order_no').val()).length == 0)
                                                    {
                                                        alert("Please Enter Invoice Number");
                                                        return false;
                                                    }

                                                    if($.trim($('#order_date').val()).length == 0)
                                                    {
                                                        alert("Please Select Invoice Date");
                                                        return false;
                                                    }

                                                    for(var no=1; no<=count; no++)
                                                    {
                                                        if($.trim($('#item_name'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Item Name");
                                                        $('#item_name'+no).focus();
                                                        return false;
                                                        }

                                                        if($.trim($('#order_item_quantity'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Quantity");
                                                        $('#order_item_quantity'+no).focus();
                                                        return false;
                                                        }

                                                        if($.trim($('#order_item_price'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Price");
                                                        $('#order_item_price'+no).focus();
                                                        return false;
                                                        }

                                                    }

                                                    $('#invoice_form').submit();

                                                    });

                                                });
                                                </script>
                                                <?php
                                                }
                                                elseif(isset($_GET["update"]) && isset($_GET["id"]))
                                                {
                                                    $statement = $con->prepare("
                                                    SELECT * FROM tbl_order 
                                                        WHERE order_id = :order_id
                                                        LIMIT 1
                                                    ");
                                                    $statement->execute(
                                                    array(
                                                        ':order_id'       =>  $_GET["id"]
                                                        )
                                                    );
                                                    $result = $statement->fetchAll();
                                                    foreach($result as $row)
                                                    {
                                                    ?>
                                                    <script>
                                                    $(document).ready(function(){
                                                    $('#order_no').val("<?php echo $row["order_no"]; ?>");
                                                    $('#order_date').val("<?php echo $row["order_date"]; ?>");
                                                    $('#order_receiver_name').val("<?php echo $row["order_receiver_name"]; ?>");
                                                    $('#order_receiver_address').val("<?php echo $row["order_receiver_address"]; ?>");
                                                    });
                                                    </script>
                                                    <form method="post" id="invoice_form">
                                                    <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                        <td colspan="2" align="center"><h2 style="margin-top:10.5px">Edit Invoice</h2></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                To,<br />
                                                                    <b>RECEIVER (BILL TO)</b><br />
                                                                    <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-border-bottom" placeholder="Enter Receiver Name" />
                                                                    <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
                                                                </div>
                                                                <div class="col-md-4">
                                                                Reverse Charge<br />
                                                                <input type="text" name="order_no" id="order_no" class="form-control input-border-bottom" placeholder="Enter Invoice No." />
                                                                <input type="text" name="order_no" id="order_date" class="form-control input-border-bottom" readonly placeholder="Select Invoice Date" />
                                                                </div>
                                                            </div>
                                                            <br />
                                                            <table id="invoice-item-table" class="table table-bordered">
                                                                <tr>
                                                                <th width="7%">Sr No.</th>
                                                                <th width="20%">Item Name</th>
                                                                <th width="5%">Quantity</th>
                                                                <th width="5%">Price</th>
                                                                <th width="10%">Actual Amt.</th>
                                                                <th width="12.5%" colspan="2">Tax1 (%)</th>
                                                                <th width="12.5%" colspan="2">Tax2 (%)</th>
                                                                <th width="12.5%" colspan="2">Tax3 (%)</th>
                                                                <th width="12.5%" rowspan="2">Total</th>
                                                                <th width="3%" rowspan="2"></th>
                                                                </tr>
                                                                <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                                </tr>
                                                                <?php
                                                                $statement = $con->prepare("
                                                                SELECT * FROM tbl_order_item 
                                                                WHERE order_id = :order_id
                                                                ");
                                                                $statement->execute(
                                                                array(
                                                                    ':order_id'       =>  $_GET["id"]
                                                                )
                                                                );
                                                                $item_result = $statement->fetchAll();
                                                                $m = 0;
                                                                foreach($item_result as $sub_row)
                                                                {
                                                                $m = $m + 1;
                                                                ?>
                                                                <tr>
                                                                <td><span id="sr_no"><?php echo $m; ?></span></td>
                                                                <td><input type="text" name="item_name[]" id="item_name<?php echo $m; ?>" class="form-control input-border-bottom" value="<?php echo $sub_row["item_name"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_quantity[]" id="order_item_quantity<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom order_item_quantity" value = "<?php echo $sub_row["order_item_quantity"]; ?>"/></td>
                                                                <td><input type="text" name="order_item_price[]" id="order_item_price<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom number_only order_item_price" value="<?php echo $sub_row["order_item_price"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom order_item_actual_amount" value="<?php echo $sub_row["order_item_actual_amount"];?>" readonly /></td>
                                                                <td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom number_only order_item_tax1_rate" value="<?php echo $sub_row["order_item_tax1_rate"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-border-bottom order_item_tax1_amount" value="<?php echo $sub_row["order_item_tax1_amount"];?>" /></td>
                                                                <td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom number_only order_item_tax2_rate" value="<?php echo $sub_row["order_item_tax2_rate"];?>" /></td>
                                                                <td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-border-bottom order_item_tax2_amount" value="<?php echo $sub_row["order_item_tax2_amount"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-border-bottom number_only order_item_tax3_rate" value="<?php echo $sub_row["order_item_tax3_rate"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-border-bottom order_item_tax3_amount" value="<?php echo $sub_row["order_item_tax3_amount"]; ?>" /></td>
                                                                <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-border-bottom order_item_final_amount" value="<?php echo $sub_row["order_item_final_amount"]; ?>" /></td>
                                                                <td></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right"><b>Total</td>
                                                            <td align="right"><b><span id="final_total_amt"><?php echo $row["order_total_after_tax"]; ?></span></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="center">
                                                            <input type="hidden" name="total_item" id="total_item" value="<?php echo $m; ?>" />
                                                            <input type="hidden" name="order_id" id="order_id" value="<?php echo $row["order_id"]; ?>" />
                                                            <input type="submit" name="update_invoice" id="create_invoice" class="btn btn-info" value="Edit" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    </div>
                                                    
                                                </form>
                                                <script>
                                                $(document).ready(function(){
                                                    var final_total_amt = $('#final_total_amt').text();
                                                    var count = "<?php echo $m; ?>";
                                                    
                                                    $(document).on('click', '#add_row', function(){
                                                    count++;
                                                    $('#total_item').val(count);
                                                    var html_code = '';
                                                    html_code += '<tr id="row_id_'+count+'">';
                                                    html_code += '<td><span id="sr_no">'+count+'</span></td>';
                                                    
                                                    html_code += '<td><input type="text" name="item_name[]" id="item_name'+count+'" class="form-control input-border-bottom" /></td>';
                                                    
                                                    html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_quantity" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_price" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-border-bottom order_item_actual_amount" readonly /></td>';
                                                    
                                                    html_code += '<td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_tax1_rate" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-border-bottom order_item_tax1_amount" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_tax2_rate" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-border-bottom order_item_tax2_amount" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate'+count+'" data-srno="'+count+'" class="form-control input-border-bottom number_only order_item_tax3_rate" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-border-bottom order_item_tax3_amount" /></td>';
                                                    html_code += '<td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount'+count+'" data-srno="'+count+'" readonly class="form-control input-border-bottom order_item_final_amount" /></td>';
                                                    html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
                                                    html_code += '</tr>';
                                                    $('#invoice-item-table').append(html_code);
                                                    });
                                                    
                                                    $(document).on('click', '.remove_row', function(){
                                                    var row_id = $(this).attr("id");
                                                    var total_item_amount = $('#order_item_final_amount'+row_id).val();
                                                    var final_amount = $('#final_total_amt').text();
                                                    var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
                                                    $('#final_total_amt').text(result_amount);
                                                    $('#row_id_'+row_id).remove();
                                                    count--;
                                                    $('#total_item').val(count);
                                                    });

                                                    function cal_final_total(count)
                                                    {
                                                    var final_item_total = 0;
                                                    for(j=1; j<=count; j++)
                                                    {
                                                        var quantity = 0;
                                                        var price = 0;
                                                        var actual_amount = 0;
                                                        var tax1_rate = 0;
                                                        var tax1_amount = 0;
                                                        var tax2_rate = 0;
                                                        var tax2_amount = 0;
                                                        var tax3_rate = 0;
                                                        var tax3_amount = 0;
                                                        var item_total = 0;
                                                        quantity = $('#order_item_quantity'+j).val();
                                                        if(quantity > 0)
                                                        {
                                                        price = $('#order_item_price'+j).val();
                                                        if(price > 0)
                                                        {
                                                            actual_amount = parseFloat(quantity) * parseFloat(price);
                                                            $('#order_item_actual_amount'+j).val(actual_amount);
                                                            tax1_rate = $('#order_item_tax1_rate'+j).val();
                                                            if(tax1_rate > 0)
                                                            {
                                                            tax1_amount = parseFloat(actual_amount)*parseFloat(tax1_rate)/100;
                                                            $('#order_item_tax1_amount'+j).val(tax1_amount);
                                                            }
                                                            tax2_rate = $('#order_item_tax2_rate'+j).val();
                                                            if(tax2_rate > 0)
                                                            {
                                                            tax2_amount = parseFloat(actual_amount)*parseFloat(tax2_rate)/100;
                                                            $('#order_item_tax2_amount'+j).val(tax2_amount);
                                                            }
                                                            tax3_rate = $('#order_item_tax3_rate'+j).val();
                                                            if(tax3_rate > 0)
                                                            {
                                                            tax3_amount = parseFloat(actual_amount)*parseFloat(tax3_rate)/100;
                                                            $('#order_item_tax3_amount'+j).val(tax3_amount);
                                                            }
                                                            item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
                                                            final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                                                            $('#order_item_final_amount'+j).val(item_total);
                                                        }
                                                        }
                                                    }
                                                    $('#final_total_amt').text(final_item_total);
                                                    }

                                                    $(document).on('blur', '.order_item_price', function(){
                                                    cal_final_total(count);
                                                    });

                                                    $(document).on('blur', '.order_item_tax1_rate', function(){
                                                    cal_final_total(count);
                                                    });

                                                    $(document).on('blur', '.order_item_tax2_rate', function(){
                                                    cal_final_total(count);
                                                    });

                                                    $(document).on('blur', '.order_item_tax3_rate', function(){
                                                    cal_final_total(count);
                                                    });

                                                    $('#create_invoice').click(function(){
                                                    if($.trim($('#order_receiver_name').val()).length == 0)
                                                    {
                                                        alert("Please Enter Reciever Name");
                                                        return false;
                                                    }

                                                    if($.trim($('#order_no').val()).length == 0)
                                                    {
                                                        alert("Please Enter Invoice Number");
                                                        return false;
                                                    }

                                                    if($.trim($('#order_date').val()).length == 0)
                                                    {
                                                        alert("Please Select Invoice Date");
                                                        return false;
                                                    }

                                                    for(var no=1; no<=count; no++)
                                                    {
                                                        if($.trim($('#item_name'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Item Name");
                                                        $('#item_name'+no).focus();
                                                        return false;
                                                        }

                                                        if($.trim($('#order_item_quantity'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Quantity");
                                                        $('#order_item_quantity'+no).focus();
                                                        return false;
                                                        }

                                                        if($.trim($('#order_item_price'+no).val()).length == 0)
                                                        {
                                                        alert("Please Enter Price");
                                                        $('#order_item_price'+no).focus();
                                                        return false;
                                                        }

                                                    }

                                                    $('#invoice_form').submit();

                                                    });

                                                });
                                                </script>
                                                  
                                                  <?php 
                                                    }

                                                }
                                                else
                                                {
                                                ?>
                                              
                                                <br />
                                            
                                                <br />
                                                
                                                <div class="table-responsive">
                                             
                                                    <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                                        <thead>
                                                        <tr>
                                                            <th>رقم الطلب</th>
                                                            <th>تاريخ الطلب</th>
                                                            <th>نوع العملة</th>
                                                            <th>اجمالي المبلغ</th>
                                                            <th>PDF</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th>رقم الطلب</th>
                                                            <th>تاريخ الطلب</th>
                                                            <th>نوع العملة</th>
                                                            <th>اجمالي المبلغ</th>
                                                            <th>PDF</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </tfoot>
                                                        <?php
                                                          $statement = $con->prepare("SELECT * FROM purchase_order ORDER BY `purchase_order`.`id` DESC");
                                                          $statement->execute();
                                                      
                                                          $all_result = $statement->fetchAll();
                                                      
                                                          $total_rows = $statement->rowCount();
                                                        if($total_rows > 0)
                                                        {
                                                        foreach($all_result as $row)
                                                        {
                                                            $sql="select * from money_type where  id=? ";
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute(array($row['money_type']));
                                                            $money_type=$stm->fetch();
                                                            $money_type=$money_type['name'];
                                                           
                                                            echo '
                                                            <tr>
                                                                <td>'.$row["id"].'</td>
                                                                <td>'.$row["order_date"].'</td>
                                                                <td>'. $money_type.'</td>
                                                                <td>'.$row["final_item_total"].'</td>
                                                                <td><a href="print_all_results.php?id='.$row["id"].'">PDF</a></td>
                                                                <td><a href="invoice.php?update=1&id='.$row["id"].'"><span class="glyphicon glyphicon-edit">edit</span></a></td>
                                                                <td><a href="#" id="'.$row["id"].'" class="delete"><span class="glyphicon glyphicon-remove"></span>remove</a></td>
                                                            </tr>
                                                            ';
                                                        }
                                                        }
                                                        ?>
                                                    </table>
                                                </div>
                                                <div class="card-action">
                                                        <a href="purchase_order.php?add=1" class="btn btn-primary btn-round ml-auto">اضافة طلب
                                                        <i class="fa fa-plus"></i></a>
                                                        
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
									
								</div>
							
							
							
						</div>
					</div>
				</div>
			</div>
		
		
		
		<!-- Custom template | don't include it in your project! -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
 $(function(){
  $("#country").select2();
 }); 
</script>
		<!-- End Custom template -->
		<?php

include "include/footer.php";

							
?>

<?php
//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	if(isset($_POST['save1'])){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }

		
		$code=test_input($_POST["code"]);
		$today= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$quantity=test_input($_POST["quantity"]);
		$diagnosis=test_input($_POST["diagnosis"]);
		$note=test_input($_POST["note"]);
		$Physical_Examination=test_input($_POST['Physical_Examination']);
		if($_SESSION['user']['branch_id']!=6){ 
            $quantity=0;
			$medical=$_POST["medical"];
        }
		else{
			$quantity=$_POST["quantity"];
			$medical=$_POST["medical"];
			$medical=implode(',',$medical);
		}
		if(empty($_POST["violense"])){
			$b=0;
			
		}
		else{
			$violense=$_POST["violense"];
			$b=implode(',',$violense);
			
		}


		    $user=$_SESSION['user']['id'];
			
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


			if(empty($user))
			{
				
				
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($date))
			{
				
				
				echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			elseif(!is_numeric($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
	



			
			/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from doctor where  code=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحاله في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
					$query="INSERT INTO doctor(branch,code,diagnosis,note,date,Physical_Examination,sender_name,lap,medical,type,quantity)
					values (?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$diagnosis,$note,$date,$Physical_Examination,$user,$b,$medical,'جديد',$quantity));
					if($stm->rowCount())	
					{
						echo '<script src="js/send_success.js"></script>';
					}
					else
					{
						echo'<script src="js/send_error.js"></script>';
					}
				}
				}
			


		

		
	}
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}

if(isset($_POST["save"]))
{ 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $order_id=test_input($_POST["order_id"]);
      $order_date=test_input($_POST["order_date"]);
      $money_type=test_input($_POST["money_type"]);
      $final_item_total=test_input($_POST["final_item_total"]);
      $user=$_SESSION['user']['id'];
      $branch=$_SESSION['user']['branch_id'];
  
  		
  

  $query="INSERT INTO purchase_order(id,order_date, money_type, final_item_total, sender_name, branch)
  VALUES (:order_id,:order_date, :money_type, :final_item_total, :sender_name, :branch)";
  $stm=$con->prepare($query);
  $stm->execute(
    array(
        ':order_id'               =>  $order_id ,
        ':order_date'               =>   $order_date,
        ':money_type'             =>  $money_type,
        ':final_item_total'          =>  $final_item_total,
        ':sender_name'                =>  $user,
        ':branch'       =>  $branch
        
    )
  );
  if($stm->rowCount())	
  {
    $error = 0;
  }
  else
  {
    $error = 1;
  }
  
    for($count=0; $count<$_POST["total_item"]; $count++)
    {
        $order_item_name=test_input($_POST["order_item_name"][$count]);
        $order_item_unit=test_input($_POST["order_item_unit"][$count]);
        $order_item_quantity=test_input($_POST["order_item_quantity"][$count]);
        $order_item_price=test_input($_POST["order_item_price"][$count]);
        $order_item_actual_amount=test_input($_POST["order_item_actual_amount"][$count]);
        $order_item_description=test_input($_POST["order_item_description"][$count]);


      $query="INSERT INTO purchase_order_item (order_id, order_item_name, order_item_unit, order_item_quantity, order_item_price, order_item_actual_amount, order_item_description)
      VALUES (:order_id, :order_item_name, :order_item_unit, :order_item_quantity, :order_item_price, :order_item_actual_amount, :order_item_description)";
      $stm=$con->prepare($query);

      $stm->execute(
        array(
          ':order_id'               =>  $order_id,
          ':order_item_name'              =>  $order_item_name,
          ':order_item_unit'          => $order_item_unit,
          ':order_item_quantity'           =>  $order_item_quantity,
          ':order_item_price'       =>   $order_item_price,
          ':order_item_actual_amount'         =>  $order_item_actual_amount,
          ':order_item_description'       =>  $order_item_description
        )
      );
      if($stm->rowCount())	
      {
         
        $error = 0;
      }
      else
      {
        $error = 1;
      }
    }
    if($error==0)	
      {
         echo '<script src="js/send_success.js"></script>';
        
        
      }
      else
      {
         echo'<script src="js/send_error.js"></script>';
      }

   
    
}


?>
