<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single post in a blog.
 * @ORM\Entity
 * @ORM\Table(name="tbl_trivia_menuitems")
 */
class Menu 
{
  // Post status constants.
  const STATUS_ACTIVE       = 1; // Draft.
  const STATUS_INACTIVE   = 0; // Published.

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")   
   */
  protected $id;

  /** 
   * @ORM\Column(name="title")  
   */
  protected $title;

  /** 
   * @ORM\Column(name="url")  
   */
  protected $url;

  /** 
   * @ORM\Column(name="status")  
   */
  protected $status;

  /**
   * @ORM\Column(name="created_date")  
   */
  protected $dateCreated;
  
  // Returns ID of this post.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this post.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns title.
  public function getTitle() 
  {
    return $this->title;
  }

  // Sets title.
  public function setTitle($title) 
  {
    $this->title = $title;
  }

  // Returns status.
  public function getStatus() 
  {
    return $this->status;
  }

  // Sets status.
  public function setStatus($status) 
  {
    $this->status = $status;
  }
    
  // Returns post url.
  public function getUrl() 
  {
    return $this->url; 
  }
    
  // Sets post url.
  public function setUrl($url) 
  {
    $this->url = $url;
  }
    
  // Returns the date when this post was created.
  public function getDateCreated() 
  {
    return $this->dateCreated;
  }
    
  // Sets the date when this post was created.
  public function setDateCreated($dateCreated) 
  {
    $this->dateCreated = $dateCreated;
  }
}