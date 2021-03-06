<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om;

use Colibri\Collection\ArrayCollection;
use Colibri\Collection\CollectionInterface;
use Colibri\Core\Collection\EntityCollection;
use Colibri\Query\Expr\Column;
use Colibri\Query\Expr\Func\Concat;
use Colibri\Query\Expr\Func\IfFunc;
use Colibri\Query\Expr\Func\Isnull;
use Colibri\Query\Expr\Func\Rand;
use ColibriLabs\Lib\Collection\ResultSetLazyCollection;

/**
 * Class CharacterRepository
 * @package ColibriLabs\Database\Om
 */
class CharacterRepository extends Base\BaseCharacterRepository
{

  /**
   * @var EntityCollection|Profile[]
   */
  protected $profiles;

  /**
   * @param Movie $movie
   * @return CollectionInterface
   */
  public function loadCharactersForMovie(Movie $movie)
  {
    $query = $this->getQuery();
  
    $query->setParameterized(true);
    $query->clearSelectColumns();
    
    $query->where(Character::MOVIE_ID, $movie->getId());
  
    $query->innerJoin(Profile::TABLE, [Character::PROFILE_ID, Profile::ID]);
    $query->innerJoin(Photo::TABLE, [Profile::ID, Photo::PROFILE_ID]);
    $query->innerJoin(Picture::TABLE, [Photo::PICTURE_ID, Picture::ID]);
    
    $query->addSelectColumns([
      Character::CHARACTER, Profile::NAME, Picture::ISO_639_1,
      [Character::ID, 'characterID'], [Profile::ID, 'profileID'],
      [new IfFunc(new Isnull(new Column(Picture::FILE_PATH)), false, true), 'pictureExist'],
      [new Concat('//s1.lostdb.com/', new Column(Picture::FILE_PATH), '#rnd', new Rand()), 'picturePath']
    ]);
  
    $query->groupBy(Character::ID);
  
    $query->setComment(__METHOD__);
    
    $collection = new ResultSetLazyCollection();
    $collection->setStatementIterator($this->executeQueryStmt());

    return $collection;
  }
  
}