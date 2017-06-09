<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Entity;

/**
 * Entity class for representation table 'movie_genre'
 */
class BaseMovieGenre extends Entity
{

  const TABLE = 'movie_genre';

  const ID = 'movie_genre.id';
  const MOVIE_ID = 'movie_genre.movie_id';
  const GENRE_ID = 'movie_genre.genre_id';
  const ID_KEY = 'id';
  const MOVIE_ID_KEY = 'movie_id';
  const GENRE_ID_KEY = 'genre_id';
  
  /**
   * @var integer
   */
  public $id;
  
  /**
   * @var integer
   */
  public $movieId;
  
  /**
   * @var integer
   */
  public $genreId;

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
  public function getMovieId()
  {
    return $this->movieId;
  }

  /**
   * @return integer
   */
  public function getGenreId()
  {
    return $this->genreId;
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
   * @param integer $movieId
   * @return $this
   */
  public function setMovieId($movieId)
  {
    $this->movieId = $movieId;

    return $this;
  }

  /**
   * @param integer $genreId
   * @return $this
   */
  public function setGenreId($genreId)
  {
    $this->genreId = $genreId;

    return $this;
  }

}