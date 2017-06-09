<?php

/**
 * Generated By ColibriORM Generator
 * @author Ivan Gontarenko
*/

namespace ColibriLabs\Database\Om\Base;

use Colibri\Core\Entity;

/**
 * Entity class for representation table 'movies'
 */
class BaseMovie extends Entity
{

  const TABLE = 'movies';

  const ID = 'movies.id';
  const COLLECTION_ID = 'movies.collection_id';
  const TMDB_ID = 'movies.tmdb_id';
  const IMDB_ID = 'movies.imdb_id';
  const BUDGET = 'movies.budget';
  const REVENUE = 'movies.revenue';
  const RUNTIME = 'movies.runtime';
  const ADULT = 'movies.adult';
  const RELEASE_DATE = 'movies.release_date';
  const TITLE = 'movies.title';
  const ORIGINAL_TITLE = 'movies.original_title';
  const ISO_LANGUAGE = 'movies.iso_language';
  const OVERVIEW = 'movies.overview';
  const TAGLINE = 'movies.tagline';
  const TMDB_VOTES = 'movies.tmdb_votes';
  const TMDB_RATING = 'movies.tmdb_rating';
  const IMDB_VOTES = 'movies.imdb_votes';
  const IMDB_RATING = 'movies.imdb_rating';
  const MPAA_RATING = 'movies.mpaa_rating';
  const VERSION = 'movies.version';
  const CREATED = 'movies.created';
  const UPDATED = 'movies.updated';
  const ID_KEY = 'id';
  const COLLECTION_ID_KEY = 'collection_id';
  const TMDB_ID_KEY = 'tmdb_id';
  const IMDB_ID_KEY = 'imdb_id';
  const BUDGET_KEY = 'budget';
  const REVENUE_KEY = 'revenue';
  const RUNTIME_KEY = 'runtime';
  const ADULT_KEY = 'adult';
  const RELEASE_DATE_KEY = 'release_date';
  const TITLE_KEY = 'title';
  const ORIGINAL_TITLE_KEY = 'original_title';
  const ISO_LANGUAGE_KEY = 'iso_language';
  const OVERVIEW_KEY = 'overview';
  const TAGLINE_KEY = 'tagline';
  const TMDB_VOTES_KEY = 'tmdb_votes';
  const TMDB_RATING_KEY = 'tmdb_rating';
  const IMDB_VOTES_KEY = 'imdb_votes';
  const IMDB_RATING_KEY = 'imdb_rating';
  const MPAA_RATING_KEY = 'mpaa_rating';
  const VERSION_KEY = 'version';
  const CREATED_KEY = 'created';
  const UPDATED_KEY = 'updated';
  const ENUM_MPAA_RATING_G = 'G';
  const ENUM_MPAA_RATING_PG = 'PG';
  const ENUM_MPAA_RATING_PG13 = 'PG-13';
  const ENUM_MPAA_RATING_R = 'R';
  const ENUM_MPAA_RATING_NC17 = 'NC-17';
  
  /**
   * @var integer
   */
  public $id;
  
  /**
   * @var integer
   */
  public $collectionId;
  
  /**
   * @var integer
   */
  public $tmdbId;
  
  /**
   * @var string
   */
  public $imdbId;
  
  /**
   * @var integer
   */
  public $budget;
  
  /**
   * @var integer
   */
  public $revenue;
  
  /**
   * @var integer
   */
  public $runtime;
  
  /**
   * @var boolean
   */
  public $adult;
  
  /**
   * @var string
   */
  public $releaseDate;
  
  /**
   * @var string
   */
  public $title;
  
  /**
   * @var string
   */
  public $originalTitle;
  
  /**
   * @var string
   */
  public $isoLanguage;
  
  /**
   * @var string
   */
  public $overview;
  
  /**
   * @var string
   */
  public $tagline;
  
  /**
   * @var integer
   */
  public $tmdbVotes;
  
  /**
   * @var float
   */
  public $tmdbRating;
  
  /**
   * @var integer
   */
  public $imdbVotes;
  
  /**
   * @var float
   */
  public $imdbRating;
  
  /**
   * @var string
   */
  public $mpaaRating;
  
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
  public function getCollectionId()
  {
    return $this->collectionId;
  }

  /**
   * @return integer
   */
  public function getTmdbId()
  {
    return $this->tmdbId;
  }

  /**
   * @return string
   */
  public function getImdbId()
  {
    return $this->imdbId;
  }

  /**
   * @return integer
   */
  public function getBudget()
  {
    return $this->budget;
  }

  /**
   * @return integer
   */
  public function getRevenue()
  {
    return $this->revenue;
  }

  /**
   * @return integer
   */
  public function getRuntime()
  {
    return $this->runtime;
  }

  /**
   * @return boolean
   */
  public function getAdult()
  {
    return $this->adult;
  }

  /**
   * @return string
   */
  public function getReleaseDate()
  {
    return $this->releaseDate;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @return string
   */
  public function getOriginalTitle()
  {
    return $this->originalTitle;
  }

  /**
   * @return string
   */
  public function getIsoLanguage()
  {
    return $this->isoLanguage;
  }

  /**
   * @return string
   */
  public function getOverview()
  {
    return $this->overview;
  }

  /**
   * @return string
   */
  public function getTagline()
  {
    return $this->tagline;
  }

  /**
   * @return integer
   */
  public function getTmdbVotes()
  {
    return $this->tmdbVotes;
  }

  /**
   * @return float
   */
  public function getTmdbRating()
  {
    return $this->tmdbRating;
  }

  /**
   * @return integer
   */
  public function getImdbVotes()
  {
    return $this->imdbVotes;
  }

  /**
   * @return float
   */
  public function getImdbRating()
  {
    return $this->imdbRating;
  }

  /**
   * @return string
   */
  public function getMpaaRating()
  {
    return $this->mpaaRating;
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
   * @param integer $collectionId
   * @return $this
   */
  public function setCollectionId($collectionId)
  {
    $this->collectionId = $collectionId;

    return $this;
  }

  /**
   * @param integer $tmdbId
   * @return $this
   */
  public function setTmdbId($tmdbId)
  {
    $this->tmdbId = $tmdbId;

    return $this;
  }

  /**
   * @param string $imdbId
   * @return $this
   */
  public function setImdbId($imdbId)
  {
    $this->imdbId = $imdbId;

    return $this;
  }

  /**
   * @param integer $budget
   * @return $this
   */
  public function setBudget($budget)
  {
    $this->budget = $budget;

    return $this;
  }

  /**
   * @param integer $revenue
   * @return $this
   */
  public function setRevenue($revenue)
  {
    $this->revenue = $revenue;

    return $this;
  }

  /**
   * @param integer $runtime
   * @return $this
   */
  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;

    return $this;
  }

  /**
   * @param boolean $adult
   * @return $this
   */
  public function setAdult($adult)
  {
    $this->adult = $adult;

    return $this;
  }

  /**
   * @param string $releaseDate
   * @return $this
   */
  public function setReleaseDate($releaseDate)
  {
    $this->releaseDate = $releaseDate;

    return $this;
  }

  /**
   * @param string $title
   * @return $this
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * @param string $originalTitle
   * @return $this
   */
  public function setOriginalTitle($originalTitle)
  {
    $this->originalTitle = $originalTitle;

    return $this;
  }

  /**
   * @param string $isoLanguage
   * @return $this
   */
  public function setIsoLanguage($isoLanguage)
  {
    $this->isoLanguage = $isoLanguage;

    return $this;
  }

  /**
   * @param string $overview
   * @return $this
   */
  public function setOverview($overview)
  {
    $this->overview = $overview;

    return $this;
  }

  /**
   * @param string $tagline
   * @return $this
   */
  public function setTagline($tagline)
  {
    $this->tagline = $tagline;

    return $this;
  }

  /**
   * @param integer $tmdbVotes
   * @return $this
   */
  public function setTmdbVotes($tmdbVotes)
  {
    $this->tmdbVotes = $tmdbVotes;

    return $this;
  }

  /**
   * @param float $tmdbRating
   * @return $this
   */
  public function setTmdbRating($tmdbRating)
  {
    $this->tmdbRating = $tmdbRating;

    return $this;
  }

  /**
   * @param integer $imdbVotes
   * @return $this
   */
  public function setImdbVotes($imdbVotes)
  {
    $this->imdbVotes = $imdbVotes;

    return $this;
  }

  /**
   * @param float $imdbRating
   * @return $this
   */
  public function setImdbRating($imdbRating)
  {
    $this->imdbRating = $imdbRating;

    return $this;
  }

  /**
   * @param string $mpaaRating
   * @return $this
   */
  public function setMpaaRating($mpaaRating)
  {
    $this->mpaaRating = $mpaaRating;

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