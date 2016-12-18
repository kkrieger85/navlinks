<?php

class Kkrieger_Navlinks_Model_Observer
{
    public function addAttributeToSelect(Varien_Event_Observer $observer)
    {
        $category_collection = $observer->getEvent()->getData('category_collection');
        $category_collection->addAttributeToSelect('external_link');

        return $this;
    }
}