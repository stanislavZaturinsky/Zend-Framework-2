<?php
/**
 * Created by PhpStorm.
 * User: Stanislav
 * Date: 09.12.2016
 * Time: 18:07
 */
namespace Admin\Controller;

use Application\Controller\BaseAdminController as BaseController;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class ArticleController extends BaseController
{
    public function indexAction() {
        $query = $this->getEntityManager()->createQueryBuilder();
        $query
                ->select('a')
                ->from('Blog\Entity\Article', 'a')
                ->orderBy('a.id', 'DESC');

        $adapter = new DoctrineAdapter(new ORMPaginator($query));

        $paginator = new Paginator($adapter);
        $paginator->setDefaultItemCountPerPage(1);
        $paginator->setCurrentPageNumber((int)$this->params()->fromQuery('page', 1));
        
        return ['articles' => $paginator];
    }

    public function addAction() {
        $em = $this->getEntityManager();
        $form = new ArticleAddForm($em);
    }
}