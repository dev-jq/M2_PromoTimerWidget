<?php 
namespace JQ\PromoTimerWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Timer extends Template implements BlockInterface
{
    protected $_template = "widget/promo-timer.phtml";
}