<?php
    /**
     *  点位符操作
     */
    $this->_place('content');

    /**
     *  内容赋值操作
     */
    $this->_block('blocktest');
    echo 'I am content of the block content';
    $this->_endblock();
?>
