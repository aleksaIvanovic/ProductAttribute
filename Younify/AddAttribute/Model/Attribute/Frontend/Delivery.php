<?php
namespace Younify\AddAttribute\Model\Attribute\Frontend;

class Delivery extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{
    public function getValue(\Magento\Framework\DataObject $object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        return $value;
    }
}