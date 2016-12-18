<?php
/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();


$installer->addAttribute(
    'catalog_category',
    'external_link',
    array(
        'type'           => 'varchar',
        'label'          => 'External Link',
        'input'          => 'text',
        'sort_order'     => 3,
        'global'         => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'          => 'General Information',
        'user_defined'   => true,
        'required'       => false,
        'visible'        => true,
        'default'        => "",
        'frontend_class' => 'validate-url',
    )
);

$installer->endSetup();