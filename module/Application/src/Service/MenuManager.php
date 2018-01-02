<?php
namespace Application\Service;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Application\Entity\Menu;
use Zend\Filter\StaticFilter;

/**
 * The PostManager service is responsible for adding new posts, updating existing
 * posts, adding tags to post, etc.
 */
class MenuManager
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager;
     */
    private $entityManager;
    
    /**
     * Constructor.
     */
    public function __construct($entityManager)
    {
		
        $this->entityManager = $entityManager;
    }
    
    /**
     * This method adds a new post.
     */
    public function addNewPost($data) 
    {
        // Create new Post entity.
        $post = new Menu();
        $post->setUrl($data['url']);
        $post->setTitle($data['title']);
        $post->setStatus($data['status']);
        $currentDate = date('Y-m-d H:i:s');
        $post->setDateCreated($currentDate);        
        
        // Add the entity to entity manager.
        $this->entityManager->persist($post);
        
       
        // Apply changes to database.
        $this->entityManager->flush();
    }
    
    

   
}


