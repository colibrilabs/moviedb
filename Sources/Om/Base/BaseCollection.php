<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Entity;

/**
 * Entity class for representation table 'collections'
 */
class BaseCollection extends Entity
{

  const TABLE = 'collections';

  const ID = 'collections.id';
  const TMDB_ID = 'collections.tmdb_id';
  const NAME = 'collections.name';
  const VERSION = 'collections.version';
  const CREATED = 'collections.created';
  const UPDATED = 'collections.updated';
  const ID_KEY = 'id';
  const TMDB_ID_KEY = 'tmdb_id';
  const NAME_KEY = 'name';
  const VERSION_KEY = 'version';
  const CREATED_KEY = 'created';
  const UPDATED_KEY = 'updated';
  
  /**
   * @var integer
   */
  public $id;
  
  /**
   * @var integer
   */
  public $tmdbId;
  
  /**
   * @var string
   */
  public $name;
  
  /**
   * @var integer
   */
  public $version;
  
  /**
   * @var string
   */
  public $created;
  
  /**
   * @var string
   */
  public $updated;

  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @return integer
   */
  public function getTmdbId()
  {
    return $this->tmdbId;
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @return integer
   */
  public function getVersion()
  {
    return $this->version;
  }

  /**
   * @return string
   */
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * @return string
   */
  public function getUpdated()
  {
    return $this->updated;
  }


  /**
   * @param integer $id
   * @return $this
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * @param integer $tmdbId
   * @return $this
   */
  public function setTmdbId($tmdbId)
  {
    $this->tmdbId = $tmdbId;

    return $this;
  }

  /**
   * @param string $name
   * @return $this
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @param integer $version
   * @return $this
   */
  public function setVersion($version)
  {
    $this->version = $version;

    return $this;
  }

  /**
   * @param string $created
   * @return $this
   */
  public function setCreated($created)
  {
    $this->created = $created;

    return $this;
  }

  /**
   * @param string $updated
   * @return $this
   */
  public function setUpdated($updated)
  {
    $this->updated = $updated;

    return $this;
  }

}