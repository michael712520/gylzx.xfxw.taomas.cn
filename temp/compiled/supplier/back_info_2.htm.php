<!-- $Id: order_info.htm 15544 2009-01-09 01:54:28Z zblikai $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'topbar.js,../js/utils.js,listtable.js,selectzone.js,../js/common.js')); ?>

<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="4"><?php echo $this->_var['lang']['base_info']; ?></th>
  </tr>

  <tr>
    <td width="18%"><div align="right"><strong><?php echo $this->_var['lang']['label_order_sn']; ?></strong></div></td>
   <td width="34%"><?php echo $this->_var['back_order']['order_sn']; ?><?php if ($this->_var['back_order']['extension_code'] == "group_buy"): ?><a href="group_buy.php?act=edit&id=<?php echo $this->_var['back_order']['extension_id']; ?>"><?php echo $this->_var['lang']['group_buy']; ?></a><?php elseif ($this->_var['back_order']['extension_code'] == "exchange_goods"): ?><a href="exchange_goods.php?act=edit&id=<?php echo $this->_var['back_order']['extension_id']; ?>"><?php echo $this->_var['lang']['exchange_goods']; ?></a><?php endif; ?>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_order_time']; ?></strong></div></td>
    <td><?php echo $this->_var['base_order']['add_time']; ?></td>
  </tr>
  <tr>
    <td width="18%"><div align="right"><strong>服务类型：</strong></div></td>
   <td width="34%">
<?php if ($this->_var['back_order']['back_type'] == 1): ?>退货<?php endif; ?>
<?php if ($this->_var['back_order']['back_type'] == 2): ?>换货<?php endif; ?>
<?php if ($this->_var['back_order']['back_type'] == 3): ?>维修<?php endif; ?>
    <?php if ($this->_var['back_order']['back_type'] == 4): ?>退款（无需退货）<?php endif; ?>
   </td>
    <td><div align="right"><strong>退款方式：</strong></div></td>
    <td>
    	<?php if ($this->_var['back_order']['back_pay'] == 1): ?>退款至账户余额<?php endif; ?>
        <?php if ($this->_var['back_order']['back_pay'] == 2): ?>原支付方式返回<?php endif; ?>
    </td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_user_name']; ?></strong></div></td>
    <td><?php echo empty($this->_var['back_order']['user_name']) ? $this->_var['lang']['anonymous'] : $this->_var['back_order']['user_name']; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_how_oos']; ?></strong></div></td>
    <td><?php echo $this->_var['base_order']['how_oos']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping']; ?></strong></div></td>
    <td><?php if ($this->_var['base_order']['shipping_id'] > 0): ?><?php echo $this->_var['base_order']['shipping_name']; ?><?php endif; ?> </td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_fee']; ?></strong></div></td>
    <td><?php echo $this->_var['base_order']['shipping_fee']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_insure_yn']; ?></strong></div></td>
    <td><?php if ($this->_var['base_order']['insure_yn']): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_insure_fee']; ?></strong></div></td>
    <td><?php echo empty($this->_var['base_order']['insure_fee']) ? '0.00' : $this->_var['base_order']['insure_fee']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_invoice_no']; ?></strong></div></td>
    <td ><?php echo $this->_var['base_order']['invoice_no']; ?></td>
	<td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_time']; ?></strong></div></td>
    <td><?php echo $this->_var['base_order']['shipping_time']; ?></td>
  </tr>
  </table>
</div>
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="4"><?php echo $this->_var['lang']['back_info']; ?></th>
    </tr>
  <tr>
    <td><div align="right"><strong>申请退货/维修时间：</strong></div></td>
    <td><?php echo $this->_var['back_order']['formated_add_time']; ?></td>
    <td><div align="right"><strong>申请人用户名：</strong></div></td>
    <td><?php echo $this->_var['back_order']['user_name']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong>换回商品收件人：</strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['consignee']); ?></td>
    <td><div align="right"><strong>联系电话：</strong></div></td>
    <td><?php echo $this->_var['base_order']['tel']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong>换回商品收货人地址：</strong></div></td>
    <td ><?php echo htmlspecialchars($this->_var['back_order']['address']); ?></td>
	 <td><div align="right"><strong>邮编：</strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['zipcode']); ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong>退货/维修原因：</strong></div></td>
    <td colspan=3><?php echo $this->_var['back_order']['back_reason']; ?></td>
	</tr>
  <tr>
    <td><div align="right"><strong>用户退回商品所用快递：</strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['shipping_name']); ?></td>
    <td><div align="right"><strong>运单号：</strong></div></td>
    <td><?php echo $this->_var['back_order']['invoice_no']; ?></td>
  </tr>
	<tr>
    <td><div align="right"><strong>图片：</strong></div></td>
    <td colspan=3>
    <!--<?php if (( $this->_var['imgs'] )): ?>-->
    <!--<?php $_from = $this->_var['imgs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'src');if (count($_from)):
    foreach ($_from AS $this->_var['src']):
?>-->
    <div style="float:left; padding:4px; border:solid #ddd 1px; margin:0 10px 10px 0"><a href="<?php echo $this->_var['src']; ?>" target="_blank"><img height="100" src="<?php echo $this->_var['src']; ?>" /></a></div>
    <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
    <!--<?php endif; ?>-->
    </td>
  </tr>
</table>
</div>
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="2">客户留言</th>
  </tr>
  <?php if ($this->_var['back_order']['postscript']): ?>
  <tr>
    <td width="18%"><div align="right">（<?php echo $this->_var['back_order']['formated_add_time']; ?>）<strong>客户：</strong></div></td>
    <td><?php echo $this->_var['back_order']['postscript']; ?></td>
  </tr>
  <?php endif; ?>
  <!--<?php $_from = $this->_var['back_replay']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>-->
  <tr>
    <td><div align="right">（<?php echo $this->_var['value']['add_time']; ?>）<?php if ($this->_var['value']['type'] == 0): ?><strong style="color:#F00">客服：</strong><?php else: ?><strong>客户：</strong><?php endif; ?></div></td>
    <td><?php echo $this->_var['value']['message']; ?></td>
  </tr>
  <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
  
  <tr>
    <td width="18%"></td>
    <td>
    	<script>
		function check_replay()
		{
			if (document.getElementById("message").value == '')
			{
				alert("请输入回复内容！");
				document.getElementById("message").focus();
				return false;	
			}
		}
		</script>
    	<form action="back.php?act=replay" method="post" onsubmit="return check_replay()">
        <input name="back_id" type="hidden" value="<?php echo $_REQUEST['back_id']; ?>">
    	<div><textarea id="message" name="message" style="width:500px; height:60px;"></textarea></div>
        <div><input type="submit" value="回复" /></div>
        </form>
    </td>
  </tr>
</table>
</div>



<div class="list-div" style="margin-bottom: 5px">

<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="7" scope="col"><?php echo $this->_var['lang']['goods_info']; ?></th>
    </tr>
  <tr>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></div></td>
    <td colspan=3><div align="center"><strong><?php echo $this->_var['lang']['label_send_number']; ?></strong></div></td>
  </tr>
 <?php $_from = $this->_var['order_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_info');if (count($_from)):
    foreach ($_from AS $this->_var['goods_info']):
?>
 <tr>
 <td><?php echo $this->_var['goods_info']['goods_name']; ?></td>
 <td><?php echo $this->_var['goods_info']['goods_id']; ?></td>
 <td><?php echo $this->_var['goods_info']['product_id']; ?></td>
 <td><?php echo $this->_var['goods_info']['goods_attr']; ?></td>
 <td colspan=3><?php echo $this->_var['goods_info']['send_number']; ?></td>
 </tr>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <tr>
    <th colspan="7" scope="col"><?php echo $this->_var['lang']['back_goods_info']; ?></th>
    </tr>
  <tr>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></div></td>
	<td scope="col"><div align="center"><strong>业务</strong></div></td>
	<td scope="col"><div align="center"><strong>应退金额</strong></div></td>
    <td scope="col" ><div align="center"><strong><?php echo $this->_var['lang']['label_send_number']; ?></strong></div></td>
  </tr>
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <tr>
    <td>
    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
    <a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> <?php if ($this->_var['goods']['brand_name']): ?>[ <?php echo $this->_var['goods']['brand_name']; ?> ]<?php endif; ?>
    <?php endif; ?>
    </td>
    <td><div align="left"><?php echo $this->_var['goods']['goods_id']; ?></div></td>
    <td><div align="left"><?php echo $this->_var['goods']['product_id']; ?></div></td>
    <td><div align="left"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></div></td>
	<td>
	    <?php if ($this->_var['back_order']['back_type'] == 1): ?>退货<?php endif; ?>
	    <?php if ($this->_var['back_order']['back_type'] == 2): ?>换货<?php endif; ?>
	    <?php if ($this->_var['back_order']['back_type'] == 3): ?>维修<?php endif; ?>
	    <?php if ($this->_var['back_order']['back_type'] == 4): ?>退款（无需退货）<?php endif; ?>	
	</td>
	<td><?php if ($this->_var['back_order']['back_type'] == 1): ?><?php echo $this->_var['goods']['back_goods_money']; ?><?php endif; ?></td>
    <td><div align="left"><?php echo $this->_var['goods']['back_goods_number']; ?></div></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php if ($this->_var['back_order']['back_type'] == 4): ?>
  <tr>
  <td colspan="7"><strong>此单为整单退款，订单已付金额（应退金额）：<?php echo $this->_var['back_order']['money_paid']; ?></strong></td>
  </tr>
  <?php endif; ?>
</table>
</div>

<div class="list-div" style="margin-bottom: 5px">
<form  action="back.php?act=operate" method="post">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="6"><?php echo $this->_var['lang']['action_info']; ?></th>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_action_note']; ?></strong></div></td>
  <td colspan="5"><textarea name="action_note" cols="80" rows="3"></textarea></td>
    </tr>
  <tr>
    <td><div align="right"></div>
      <div align="right"><strong><?php echo $this->_var['lang']['label_operable_act']; ?></strong> </div></td>
    <td colspan="5">
	<?php if ($this->_var['back_order']['status_back'] < 6): ?>
		<?php if ($this->_var['back_order']['status_back'] == 5): ?>
			<?php if ($this->_var['operable_list']['ok']): ?>
			<input name="ok" type="submit" value="通过申请" class="button" />
			<?php endif; ?>
			<?php if ($this->_var['operable_list']['no']): ?>
			<input name="no" type="submit" value="拒绝申请" class="button" />
			<?php endif; ?>
		<?php else: ?>
			<?php if ($this->_var['operable_list']['confirm'] && $this->_var['back_order']['back_type'] != 4 && $this->_var['back_order']['status_back'] == 0 && ( $this->_var['back_order']['status_refund'] == 0 || $this->_var['back_order']['status_refund'] == 9 )): ?>
			<input name="confirm" type="submit" value="收到用户寄回商品" class="button" />
			<?php endif; ?> 
			<?php if ($this->_var['operable_list']['backshipping'] && $this->_var['back_order']['back_type'] != 4 && $this->_var['back_order']['status_back'] == 1 && ( $this->_var['back_order']['status_refund'] == 0 || $this->_var['back_order']['status_refund'] == 9 )): ?>
			<!--<input name="backshipping" type="submit" class="button" value="换出商品寄出" />-->
			<?php endif; ?>
			<?php if (( $this->_var['back_order']['back_type'] == 4 || ( $this->_var['back_order']['back_type'] == 1 && ( $this->_var['back_order']['status_back'] == 1 || $this->_var['back_order']['status_back'] == 2 ) ) ) && ( $this->_var['back_order']['status_refund'] == 0 || $this->_var['back_order']['status_refund'] == 9 )): ?>
			<input name="refund" type="submit" value="去退款" class="button" />
			<?php endif; ?>
			<?php if ($this->_var['operable_list']['backshipping'] && $this->_var['back_order']['back_type'] == 3 && $this->_var['back_order']['status_back'] == 1): ?>
	        <input name="backshipping" type="submit" class="button" value="换出商品寄出" />
	        <?php endif; ?>

			<?php if ($this->_var['operable_list']['backfinish'] && ( $this->_var['back_order']['status_refund'] == 1 || $this->_var['back_order']['status_back'] == 2 )): ?>
			<input name="backfinish" type="submit" value="完成" class="button" />
			<?php endif; ?> 
        <?php endif; ?>
		<input name="after_service" type="submit" value="<?php echo $this->_var['lang']['op_after_service']; ?>" class="button" />       
        <input name="back_id" type="hidden" value="<?php echo $_REQUEST['back_id']; ?>">
	<?php else: ?>
		<?php if ($this->_var['back_order']['status_back'] == 6): ?>
		此单已被管理员拒绝
		<?php endif; ?>
		<?php if ($this->_var['back_order']['status_back'] == 7): ?>
		此单已被系统取消
		<?php endif; ?>
		<?php if ($this->_var['back_order']['status_back'] == 8): ?>
		此单已被用户自行取消
		<?php endif; ?>
	<?php endif; ?>
	</td>
  </tr>
  <tr>
    <th><?php echo $this->_var['lang']['action_user']; ?></th>
    <th><?php echo $this->_var['lang']['action_time']; ?></th>
    <th>退换货状态</th>
    <th>退款状态</th>
    <th><?php echo $this->_var['lang']['action_note']; ?></th>
  </tr>
  <?php $_from = $this->_var['action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'action');if (count($_from)):
    foreach ($_from AS $this->_var['action']):
?>
  <tr>
    <td><div align="center"><?php echo $this->_var['action']['action_user']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action']['action_time']; ?></div></td>
    <td><div align="center">
    <?php if ($this->_var['back_order']['back_type'] == 4): ?>
    退款（无需退货）
    <?php else: ?>
    <?php echo $this->_var['action']['status_back']; ?>
    <?php endif; ?>
    </div></td>
    <td><div align="center"><?php echo $this->_var['action']['status_refund']; ?></div></td>
    <td><?php echo nl2br($this->_var['action']['action_note']); ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
</form>
</div>



<script language="JavaScript">

  var oldAgencyId = <?php echo empty($this->_var['back_order']['agency_id']) ? '0' : $this->_var['back_order']['agency_id']; ?>;

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>