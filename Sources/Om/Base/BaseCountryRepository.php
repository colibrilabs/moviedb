<?php
/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Repository;
use Colibri\Query\Statement\Comparison\Cmp;
use Colibri\Query\Statement\OrderBy;
use ColibriLabs\Database\Om\CountryRepository;
use ColibriLabs\Database\Om\Country;
use Colibri\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method Country findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method CountryRepository filterById($id, $cmp = Cmp::EQ);
 * @method CountryRepository orderById($vector = OrderBy::ASC);
 * @method CountryRepository groupById();
 * @method Country findOneByIso31661($iso_3166_1);
 * @method ResultSetIterator findByIso31661($iso_3166_1);
 * @method CountryRepository filterByIso31661($iso_3166_1, $cmp = Cmp::EQ);
 * @method CountryRepository orderByIso31661($vector = OrderBy::ASC);
 * @method CountryRepository groupByIso31661();
 * @method Country findOneByName($name);
 * @method ResultSetIterator findByName($name);
 * @method CountryRepository filterByName($name, $cmp = Cmp::EQ);
 * @method CountryRepository orderByName($vector = OrderBy::ASC);
 * @method CountryRepository groupByName();
 * @method Country findOneByVersion($version);
 * @method ResultSetIterator findByVersion($version);
 * @method CountryRepository filterByVersion($version, $cmp = Cmp::EQ);
 * @method CountryRepository orderByVersion($vector = OrderBy::ASC);
 * @method CountryRepository groupByVersion();
 * @method Country findOneByCreated($created);
 * @method ResultSetIterator findByCreated($created);
 * @method CountryRepository filterByCreated($created, $cmp = Cmp::EQ);
 * @method CountryRepository orderByCreated($vector = OrderBy::ASC);
 * @method CountryRepository groupByCreated();
 * @method Country findOneByUpdated($updated);
 * @method ResultSetIterator findByUpdated($updated);
 * @method CountryRepository filterByUpdated($updated, $cmp = Cmp::EQ);
 * @method CountryRepository orderByUpdated($vector = OrderBy::ASC);
 * @method CountryRepository groupByUpdated();
*/

class BaseCountryRepository extends Repository
{
  
  /**
   * BaseCountryRepository constructor.
   */
  public function __construct()
  {
    parent::__construct(Country::class);
  }

}