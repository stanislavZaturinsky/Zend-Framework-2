<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 08.12.2016
 * Time: 16:15
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}