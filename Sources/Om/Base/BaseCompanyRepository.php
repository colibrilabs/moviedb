<?php
/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Repository;
use Colibri\Query\Statement\Comparison\Cmp;
use Colibri\Query\Statement\OrderBy;
use ColibriLabs\Database\Om\CompanyRepository;
use ColibriLabs\Database\Om\Company;
use Colibri\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method Company findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method CompanyRepository filterById($id, $cmp = Cmp::EQ);
 * @method CompanyRepository orderById($vector = OrderBy::ASC);
 * @method CompanyRepository groupById();
 * @method Company findOneByTmdbId($tmdb_id);
 * @method ResultSetIterator findByTmdbId($tmdb_id);
 * @method CompanyRepository filterByTmdbId($tmdb_id, $cmp = Cmp::EQ);
 * @method CompanyRepository orderByTmdbId($vector = OrderBy::ASC);
 * @method CompanyRepository groupByTmdbId();
 * @method Company findOneByName($name);
 * @method ResultSetIterator findByName($name);
 * @method CompanyRepository filterByName($name, $cmp = Cmp::EQ);
 * @method CompanyRepository orderByName($vector = OrderBy::ASC);
 * @method CompanyRepository groupByName();
 * @method Company findOneByVersion($version);
 * @method ResultSetIterator findByVersion($version);
 * @method CompanyRepository filterByVersion($version, $cmp = Cmp::EQ);
 * @method CompanyRepository orderByVersion($vector = OrderBy::ASC);
 * @method CompanyRepository groupByVersion();
 * @method Company findOneByCreated($created);
 * @method ResultSetIterator findByCreated($created);
 * @method CompanyRepository filterByCreated($created, $cmp = Cmp::EQ);
 * @method CompanyRepository orderByCreated($vector = OrderBy::ASC);
 * @method CompanyRepository groupByCreated();
 * @method Company findOneByUpdated($updated);
 * @method ResultSetIterator findByUpdated($updated);
 * @method CompanyRepository filterByUpdated($updated, $cmp = Cmp::EQ);
 * @method CompanyRepository orderByUpdated($vector = OrderBy::ASC);
 * @method CompanyRepository groupByUpdated();
*/

class BaseCompanyRepository extends Repository
{
  
  /**
   * BaseCompanyRepository constructor.
   */
  public function __construct()
  {
    parent::__construct(Company::class);
  }

}