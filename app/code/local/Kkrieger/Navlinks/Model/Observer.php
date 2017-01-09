<?php
/**
 * @category   Kkrieger
 * @package    Kkrieger_Navlinks
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Kevin Krieger <kk@kkrieger.de>
 */

class Kkrieger_Navlinks_Model_Observer
{
    public function addAttributeToSelect(Varien_Event_Observer $observer)
    {
        $category_collection = $observer->getEvent()->getData('category_collection');
        $category_collection->addAttributeToSelect('external_link');

        return $this;
    }
}