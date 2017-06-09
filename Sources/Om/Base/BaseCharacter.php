<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Entity;

/**
 * Entity class for representation table 'characters'
 */
class BaseCharacter extends Entity
{

  const TABLE = 'characters';

  const ID = 'characters.id';
  const PROFILE_ID = 'characters.profile_id';
  const MOVIE_ID = 'characters.movie_id';
  const CHARACTER = 'characters.character';
  const VERSION = 'characters.version';
  const CREATED = 'characters.created';
  const UPDATED = 'characters.updated';
  const ID_KEY = 'id';
  const PROFILE_ID_KEY = 'profile_id';
  const MOVIE_ID_KEY = 'movie_id';
  const CHARACTER_KEY = 'character';
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
  public $profileId;
  
  /**
   * @var integer
   */
  public $movieId;
  
  /**
   * @var string
   */
  public $character;
  
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
  public function getProfileId()
  {
    return $this->profileId;
  }

  /**
   * @return integer
   */
  public function getMovieId()
  {
    return $this->movieId;
  }

  /**
   * @return string
   */
  public function getCharacter()
  {
    return $this->character;
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
   * @param integer $profileId
   * @return $this
   */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;

    return $this;
  }

  /**
   * @param integer $movieId
   * @return $this
   */
  public function setMovieId($movieId)
  {
    $this->movieId = $movieId;

    return $this;
  }

  /**
   * @param string $character
   * @return $this
   */
  public function setCharacter($character)
  {
    $this->character = $character;

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