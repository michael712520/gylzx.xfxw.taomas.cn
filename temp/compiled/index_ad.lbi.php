<ul id="fullScreenSlides" class="full-screen-slides">
  <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_58880600_1477367972');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_58880600_1477367972']):
        $this->_foreach['myflash']['iteration']++;
?>
  <li style=" background:url(<?php echo $this->_var['flash_0_58880600_1477367972']['src']; ?>) center no-repeat;<?php if (! ($this->_foreach['myflash']['iteration'] <= 1)): ?>display: none; <?php else: ?> display:list-item<?php endif; ?>"> 
  	<a href="<?php echo $this->_var['flash_0_58880600_1477367972']['url']; ?>" target="_blank" title="<?php echo $this->_var['flash_0_58880600_1477367972']['title']; ?>">&nbsp;</a> 
  </li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<ul class="full-screen-slides-pagination">
	<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_58880600_1477367972');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_58880600_1477367972']):
        $this->_foreach['myflash']['iteration']++;
?>
	<li <?php if (($this->_foreach['myflash']['iteration'] <= 1)): ?>class="current"<?php endif; ?>><a href="javascript:;"><?php echo $this->_foreach['myflash']['iteration']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>

