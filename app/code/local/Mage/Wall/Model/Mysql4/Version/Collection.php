<?php
    class Mage_Wall_Model_Mysql4_Version_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
    {
        public function _construct()
        {
            $this->_init('wall/version');
        }
    }
