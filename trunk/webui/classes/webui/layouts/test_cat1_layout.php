<?php
/**
 *  test root layout 2
 */
?>
<?php $this->_layout('content');?>
    <div id="left">
        <?php $this->_block('left'); $this->_endblock();?>
    </div>
    <div id="right">
        <?php $this->_block('right'); $this->_endblock();?>
    </div>
<?php $this->_endlayout(); ?>

