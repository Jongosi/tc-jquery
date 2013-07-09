<?php
/**
 * @author     TwinCreations Team <jason@twincreations.co.uk>
 * @copyright  Copyright (c) 2013 TwinCreations <http://twincreations.co.uk/>
 */

class TC_Jquery_Helper_Data extends Mage_Core_Helper_Data
{
    
    public function isEnabled()
    {
        return Mage::getStoreConfig('tc_jquery/general/lazyloadEnabled');
    }
    
}
