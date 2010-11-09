<?php
/**
 *  This is a test first level layout extends from the test_root_layout  
 */
?>
<html>
<head>
    <title><?php $this->_block('title'); ?>header<?php $this->_endblock(); ?></title>
</head>
<body>
<div id="header">
    <?php $this->_block('header'); ?>header<?php $this->_endblock(); ?>
</div>
<div id="content">
    <?php $this->_block('content'); ?>
    <?php $this->_endblock(); ?>
</div>
<div id="footer">
    <?php $this->_block('footer'); ?>footer<?php $this->_endblock(); ?>
</div>
</body>
</html>
