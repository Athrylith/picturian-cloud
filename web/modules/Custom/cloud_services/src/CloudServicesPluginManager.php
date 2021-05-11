<?php

namespace Drupal\cloud_services;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * CloudServices plugin manager.
 */
class CloudServicesPluginManager extends DefaultPluginManager {

  /**
   * Constructs CloudServicesPluginManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Plugin/CloudServices',
      $namespaces,
      $module_handler,
      'Drupal\cloud_services\CloudServicesInterface',
      'Drupal\cloud_services\Annotation\CloudServices'
    );
    $this->alterInfo('cloud_services_info');
    $this->setCacheBackend($cache_backend, 'cloud_services_plugins');
  }

}
