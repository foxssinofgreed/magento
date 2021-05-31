<?php

use Magento\Framework\View\Element\Block\ArgumentInterface;

class test_viewmodel_1 implements ArgumentInterface
{
    public function getString():string{
        return 'Im fucking working here';
    }
}
