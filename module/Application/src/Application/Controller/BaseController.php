<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 09.12.2016
 * Time: 10:59
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class BaseController extends AbstractActionController
{
    protected $entityManager;

    public function onDispatch(\Zend\Mvc\MvcEvent $e) {
        $this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        return parent::onDispatch($e);
    }

    public function setEntityManager(\Doctrine\ORM\EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function getEntityManager() {
        return $this->entityManager;
    }
}