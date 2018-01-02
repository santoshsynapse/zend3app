<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Menu;

class IndexController extends AbstractActionController
{
	 /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;
	
	private $menuManager;
	
	public function __construct($entityManager,$menuManager) 
    {
        $this->entityManager = $entityManager;
		$this->menuManager = $menuManager;
       
    }
	
    public function indexAction()
    {
		
		
		$post = $this->entityManager->getRepository(Menu::class)
                ->findOneById(2);
				
        return new ViewModel();
    }
}
