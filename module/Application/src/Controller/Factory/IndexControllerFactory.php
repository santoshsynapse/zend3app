<?php
namespace Application\Controller\Factory;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Service\MenuManager;
use Application\Controller\IndexController;
/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
		
        $menuManager = $container->get(MenuManager::class);
        
        // Instantiate the controller and inject dependencies
        return new IndexController($entityManager, $menuManager);
    }
}