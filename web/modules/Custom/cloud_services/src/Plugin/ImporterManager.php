<?php

namespace Drupal\products\Plugin;

use Drupal\products\Entity\CloudServicesInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Provides the  plugin manager.
 */
class Manager extends DefaultPluginManager {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Manager constructor.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct('Plugin/', $namespaces, $module_handler, 'Drupal\products\Plugin\PluginInterface', 'Drupal\products\Annotation\CloudServices');

    $this->alterInfo('products__info');
    $this->setCacheBackend($cache_backend, 'products__plugins');
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Creates a plugin instance from a given  config.
   *
   * @param string $id
   *   Configuration entity ID.
   *
   * @return \Drupal\products\Plugin\Interface
   *   The plugin.
   */
  public function createInstanceFromConfig($id) {
    $config = $this->entityTypeManager->getStorage('')->load($id);
    if (!$config instanceof CloudServicesInterface) {
      return NULL;
    }

    return $this->createInstance($config->getPluginId(), ['config' => $config]);
  }

  /**
   * Creates plugin instances from all the available  configs.
   *
   * @return array
   *   An array of instantiated plugins.
   */
  public function createInstanceFromAllConfigs() {
    $configs = $this->entityTypeManager->getStorage('')->loadMultiple();
    if (!$configs) {
      return [];
    }
    $plugins = [];
    foreach ($configs as $config) {
      $plugin = $this->createInstanceFromConfig($config->id());
      if (!$plugin) {
        continue;
      }

      $plugins[] = $plugin;
    }

    return $plugins;
  }

}
