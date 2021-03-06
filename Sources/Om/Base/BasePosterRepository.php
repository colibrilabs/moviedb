<?php
/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Repository;
use Colibri\Query\Statement\Comparison\Cmp;
use Colibri\Query\Statement\OrderBy;
use ColibriLabs\Database\Om\PosterRepository;
use ColibriLabs\Database\Om\Poster;
use Colibri\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method Poster findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method PosterRepository filterById($id, $cmp = Cmp::EQ);
 * @method PosterRepository orderById($vector = OrderBy::ASC);
 * @method PosterRepository groupById();
 * @method Poster findOneByPictureId($picture_id);
 * @method ResultSetIterator findByPictureId($picture_id);
 * @method PosterRepository filterByPictureId($picture_id, $cmp = Cmp::EQ);
 * @method PosterRepository orderByPictureId($vector = OrderBy::ASC);
 * @method PosterRepository groupByPictureId();
 * @method Poster findOneByMovieId($movie_id);
 * @method ResultSetIterator findByMovieId($movie_id);
 * @method PosterRepository filterByMovieId($movie_id, $cmp = Cmp::EQ);
 * @method PosterRepository orderByMovieId($vector = OrderBy::ASC);
 * @method PosterRepository groupByMovieId();
*/

class BasePosterRepository extends Repository
{
  
  /**
   * BasePosterRepository constructor.
   */
  public function __construct()
  {
    parent::__construct(Poster::class);
  }

}