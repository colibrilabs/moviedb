<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om;

/**
 * Class MovieRepository
 * @package ColibriLabs\Database\Om
 */
class MovieRepository extends Base\BaseMovieRepository
{
  
  /**
   * @param $movieID
   * @return \Colibri\Core\Entity\EntityInterface
   */
  public function getMovieById($movieID)
  {
    $movie = $this->retrieve($movieID);
    
    if ($movie instanceof Movie) {
      $repository = new PictureRepository();
      $repository->injectBackdropForMovie($movie);
      $repository->injectPosterForMovie($movie);
    }
    
    return $movie;
  }
  
}