<?php

namespace ColibriLabs\Lib\Util;

use Colibri\Common\DateTime;

/**
 * Class Profiler
 * @package ColibriLabs\Lib\Util
 */
class Profiler
{
  
  /**
   * @var int
   */
  private static $timerStart = 0;
  
  /**
   * @return void
   */
  public static function timerStart()
  {
    static::$timerStart = microtime(true);
  }
  
  /**
   * @return float
   */
  public static function timeSpend()
  {
    return round(microtime(true) - static::$timerStart, 4);
  }
  
  /**
   * @return string
   */
  public static function timeSpendHumanize()
  {
    $start = new DateTime(sprintf('@%d', static::$timerStart));
    $now = new DateTime();
    
    return $now->diff($start)->format('%h hours %i minutes %s seconds');
  }
  
  /**
   * @return string
   */
  public static function memoryUsage()
  {
    $names = ['B', 'K', 'M', 'G', 'T'];
    $bytes = memory_get_usage();
    $scale = (integer)log($bytes, 1024);
    
    return round($bytes / pow(1024, $scale), 2) . $names[$scale];
  }

}