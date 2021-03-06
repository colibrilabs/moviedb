<?php

namespace ColibriLabs\Lib\Orm;

use Behat\Transliterator\Transliterator;
use Colibri\Core\Entity\EntityInterface;
use Colibri\Core\Event\EntityLifecycleEvent;
use Colibri\Core\ORMEvents;
use Colibri\Parameters\ParametersCollection;

/**
 * Class Sluggable
 *
 * @package  ColibriLabs\Lib\Orm
 */
class Sluggable extends AbstractExtension
{
  
  /**
   * @return array
   */
  public function getEvents()
  {
    return [ORMEvents::beforePersist];
  }
  
  /**
   * @inheritDoc
   */
  public function getNameNS()
  {
    return 'sluggable';
  }
  
  /**
   * @param EntityInterface $entity
   * @param ParametersCollection $configuration
   * @return array
   */
  protected function getSlugForEntity(EntityInterface $entity, ParametersCollection $configuration)
  {
    $parts = [];
    
    foreach ($configuration->offsetGet('properties') as $property) {
      if ($entity->hasProperty($property)) {
        $parts[] = Transliterator::urlize(Transliterator::transliterate($entity->getByProperty($property)));
      }
    }
    
    return implode($configuration->offsetGet('separator'), $parts);
  }
  
  /**
   * @param EntityLifecycleEvent $event
   */
  public function beforePersist(EntityLifecycleEvent $event)
  {
    foreach ($this->getConfiguration() as $entityClassName => $propertyConfiguration) {
      if ($event->getEntity() instanceof $entityClassName) {
        $entity = $event->getEntity();
        foreach ($propertyConfiguration as $propertyName => $configuration) {
          $entity->setByProperty($propertyName, $this->getSlugForEntity($entity, $configuration));
        }
      }
    }
  }
  
}