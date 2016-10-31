<!-- $Id: order_info.htm 15544 2009-01-09 01:54:28Z zblikai $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'topbar.js,../js/utils.js,listtable.js,selectzone.js,../js/common.js')); ?>



<form name="theForm" method="get" action="back.php" onsubmit="return check()">
<div class="list-div">
<table>
  <tr>
    <th width="120">操作备注：</th>
    <td><textarea name="action_note" cols="60" rows="3"></textarea>
    <span class="require-field">*</span></td>
  </tr>
  <tr>
    <th>退款金额：<br>最大不超过商品原价</th>
    <td>
	金额：<input type="text" name="refund_money_2"  value="<?php echo $this->_var['refund']['refund_money_1']; ?>" />&nbsp;运费：<input type="text" name="refund_shipping_fee" value="0.00">&nbsp;<input type="radio" name="refund_shipping" value="0" onclick="javascript:change_shipping(0);" checked=checked />不退运费<input type="radio" name="refund_shipping" value="1" onclick="javascript:change_shipping(1);" />退运费(最大不超过原运费)
	<input type="hidden" name="refund_money_2_bf"  value="<?php echo $this->_var['refund']['refund_money_1']; ?>" />
	<input type="hidden" name="refund_shipping_fee_bf" value="<?php echo $this->_var['refund']['shipping_fee']; ?>">
	</td>
  </tr>
    <tr>
    <th>退款方式：</th>
    <td>
	<p><label><input type="radio" name="refund_type" value="1"  />退回用户余额</label><br>      <label><input type="radio" name="refund_type" value="2" checked=checked />线下退款</label><br>   
    </p>
	</td>
  </tr>
  <tr>
    <th>退款说明：</th>
    <td><textarea name="refund_desc" cols="60" rows="3" id="refund_desc"></textarea></td>
  </tr>
    <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="submit" value=" 确定 " class="button" />
        <input type="button" name="back" value="返回" class="button" onclick="history.back()" />
        <input type="hidden" name="back_id" value="<?php echo $this->_var['back_id']; ?>" />
        <input type="hidden" name="act" value="operate_refund" />
        </div></td>
  </tr>
</table>
</div>
</form>
<script language="JavaScript">
  
  //var shipping_fee =<?php echo $this->_var['refund']['shipping_fee']; ?>;
  var shipping_fee = new Number(<?php echo $this->_var['refund']['shipping_fee']; ?>);
  
  function change_shipping(is_shipping)
  {
	if (is_shipping == '1')
	{
		document.forms['theForm'].elements['refund_shipping_fee'].value = shipping_fee.toFixed(2);
	}
	 else
	{
		document.forms['theForm'].elements['refund_shipping_fee'].value = '0.00';
	}

  }
  function check()
  {
    if ( document.forms['theForm'].elements['action_note'].value == '')
    {
      alert('请输入操作备注');
      return false;
    }
	if (document.forms['theForm'].elements['refund_money_2'].value == '')
	{
	  alert('请输入退款金额');
	  return false;
	}
	if (document.forms['theForm'].elements['refund_shipping_fee'].value == '')
	{
	  alert('请输入运费金额');
	  return false;
	}
	if (document.forms['theForm'].elements['refund_money_2'].value*1 < 0)
	{
	  alert('退款金额不能小于零');
	  return false;
	}
	if (document.forms['theForm'].elements['refund_shipping_fee'].value*1 < 0)
	{
	  alert('运费金额不能小于零');
	  return false;
	}
	if (document.forms['theForm'].elements['refund_money_2'].value*1 > document.forms['theForm'].elements['refund_money_2_bf'].value*1)
	{
	  alert('退款金额不能大于原商品金额');
	  return false;
	}
	if (document.forms['theForm'].elements['refund_shipping_fee'].value*1 > document.forms['theForm'].elements['refund_shipping_fee_bf'].value*1)
	{
	  alert('运费金额不能大于原运费金额');
	  return false;
	}
    return true;
  }

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>