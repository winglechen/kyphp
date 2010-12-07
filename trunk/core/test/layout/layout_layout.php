<?php
    $this->_extends(__DIR__.'/layout_root.php');
    $this->_layout('content');
        $this->_place('left');
        $this->_block('right');
           echo 'right';
        $this->_endblock();
    $this->_endlayout();
    
    $this->_block('left');
         echo 'left';
    $this->_endblock();
    $this->_block('title');
         echo 'title';
    $this->_endblock();
    $this->_block('footer');
         echo 'footer';
    $this->_endblock();




