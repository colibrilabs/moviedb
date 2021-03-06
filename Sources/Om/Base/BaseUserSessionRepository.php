<?php
/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Repository;
use Colibri\Query\Statement\Comparison\Cmp;
use Colibri\Query\Statement\OrderBy;
use ColibriLabs\Database\Om\UserSessionRepository;
use ColibriLabs\Database\Om\UserSession;
use Colibri\Core\ResultSet\ResultSetIterator;

/**
 * Magic methods for query-builder and access to the fields data
 *
 * @method UserSession findOneById($id);
 * @method ResultSetIterator findById($id);
 * @method UserSessionRepository filterById($id, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderById($vector = OrderBy::ASC);
 * @method UserSessionRepository groupById();
 * @method UserSession findOneByUserId($user_id);
 * @method ResultSetIterator findByUserId($user_id);
 * @method UserSessionRepository filterByUserId($user_id, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByUserId($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByUserId();
 * @method UserSession findOneBySessionId($session_id);
 * @method ResultSetIterator findBySessionId($session_id);
 * @method UserSessionRepository filterBySessionId($session_id, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderBySessionId($vector = OrderBy::ASC);
 * @method UserSessionRepository groupBySessionId();
 * @method UserSession findOneByIp($ip);
 * @method ResultSetIterator findByIp($ip);
 * @method UserSessionRepository filterByIp($ip, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByIp($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByIp();
 * @method UserSession findOneByUserAgent($user_agent);
 * @method ResultSetIterator findByUserAgent($user_agent);
 * @method UserSessionRepository filterByUserAgent($user_agent, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByUserAgent($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByUserAgent();
 * @method UserSession findOneByOs($os);
 * @method ResultSetIterator findByOs($os);
 * @method UserSessionRepository filterByOs($os, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByOs($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByOs();
 * @method UserSession findOneByBrowser($browser);
 * @method ResultSetIterator findByBrowser($browser);
 * @method UserSessionRepository filterByBrowser($browser, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByBrowser($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByBrowser();
 * @method UserSession findOneByDeviceType($device_type);
 * @method ResultSetIterator findByDeviceType($device_type);
 * @method UserSessionRepository filterByDeviceType($device_type, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByDeviceType($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByDeviceType();
 * @method UserSession findOneByIsMobile($is_mobile);
 * @method ResultSetIterator findByIsMobile($is_mobile);
 * @method UserSessionRepository filterByIsMobile($is_mobile, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByIsMobile($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByIsMobile();
 * @method UserSession findOneByCreated($created);
 * @method ResultSetIterator findByCreated($created);
 * @method UserSessionRepository filterByCreated($created, $cmp = Cmp::EQ);
 * @method UserSessionRepository orderByCreated($vector = OrderBy::ASC);
 * @method UserSessionRepository groupByCreated();
*/

class BaseUserSessionRepository extends Repository
{
  
  /**
   * BaseUserSessionRepository constructor.
   */
  public function __construct()
  {
    parent::__construct(UserSession::class);
  }

}