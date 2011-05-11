<?php


/**
 * Description of IndexController
 *
 * @author Piotr Radzikowski <piotr.radzikowski@strazpozarna.org.pl>
 */
namespace Alf\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Alf\ShopBundle\Entity\Catalogs;
use \Doctrine\ORM\QueryBuilder;

class ShopController extends Controller
{
   
    public function indexAction()
    {
        return array();//$this->render('AlfShopBundle:Shop:index.html.twig');
    }
     /**
     * @extra:Route("/", name="_alf")
     * @extra:Template()
     */
    public function leftMenuAction()
    {
//        $catalog = new Catalogs();
//        $catalog->setCategory('1');
//        $catalog->setName('skarpety wpisane');
//        $em = $this->get('doctrine.orm.entity_manager');
//        $em->persist($catalog);
//        $em->flush();
  
//        $menu = $this->get('doctrine.orm.entity_manager')
//            ->createQuery('SELECT c FROM AlfShopBundle:Catalogs c ORDER BY c.id DESC')
//            ->getResult()
//            ;

//        $menu = array( array('name' => 'A'), array('name' => 'B'),array('name' => 'C'));
        $em = $this->get('doctrine.orm.entity_manager');
        $qb = new QueryBuilder($em);
        $dql = $qb
                ->select('c.name')
//                ->addSelect('c2.name')
                ->from('AlfShopBundle:Catalogs', 'c')
//                ->leftJoin('ca.AlfShopBundle:Catalogs', 'c2')
//                ->setFirstResult('2')
//                ->setMaxResults('1')
                ->getQuery();
        $menu = $dql->getResult(); 
        
        $em = $this->get('doctrine.orm.entity_manager');
        $qb = new QueryBuilder($em);
        $dql = $qb
                ->select('c')
//                ->addSelect('c2.name')
                ->from('AlfShopBundle:Catalogs', 'c');
$query = $em->createQuery($dql);

$adapter = $this->get('knplabs_paginator.adapter');
$adapter->setQuery($query);
$adapter->setDistinct(true);

$paginator = new \Zend\Paginator\Paginator($adapter);
$paginator->setCurrentPageNumber($this->get('request')->query->get('page', 1));
$paginator->setItemCountPerPage(2);
$paginator->setPageRange(5);

//        $menu = $m ->getResult();
//        $menu = $em->find('AlfShopBundle:Catalogs');
//        $em->persist($menu);
//        $em->flush();
//        $menu = array('A', 'B');
        
        return $this->render('AlfShopBundle:Shop:leftMenu.html.twig', array('menuList' => $paginator, 'paginator' => $paginator));
    }
    
    /**
     * @extra:Route("/test", name="_alf_test")
     * @extra:Template()
     */
    public function testAction()
    {
        return array();
    }
    
}

?>
