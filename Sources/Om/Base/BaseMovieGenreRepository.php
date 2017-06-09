<?php
/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Repository;
use Colibri\Query\Statement\Comparison\Cmp;
use Colibri\Query\Statement\OrderBy;
use ColibriLabs\Database\Om\MovieGenreRepository;
use ColibriLabs\Database\Om\MovieGenre;
use Colibri\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method MovieGenre findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method MovieGenreRepository filterById($id, $cmp = Cmp::EQ);
 * @method MovieGenreRepository orderById($vector = OrderBy::ASC);
 * @method MovieGenreRepository groupById();
 * @method MovieGenre findOneByMovieId($movie_id);
 * @method ResultSetIterator findByMovieId($movie_id);
 * @method MovieGenreRepository filterByMovieId($movie_id, $cmp = Cmp::EQ);
 * @method MovieGenreRepository orderByMovieId($vector = OrderBy::ASC);
 * @method MovieGenreRepository groupByMovieId();
 * @method MovieGenre findOneByGenreId($genre_id);
 * @method ResultSetIterator findByGenreId($genre_id);
 * @method MovieGenreRepository filterByGenreId($genre_id, $cmp = Cmp::EQ);
 * @method MovieGenreRepository orderByGenreId($vector = OrderBy::ASC);
 * @method MovieGenreRepository groupByGenreId();
*/

class BaseMovieGenreRepository extends Repository
{
  
  /**
   * BaseMovieGenreRepository constructor.
   */
  public function __construct()
  {
    parent::__construct(MovieGenre::class);
  }

}