<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 09.12.2016
 * Time: 11:17
 */
namespace Application\Controller;

class BaseAdminController extends BaseController
{
    public function onDispatch(\Zend\Mvc\MvcEvent $e) {
        return parent::onDispatch($e);
    }
}