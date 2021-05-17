<?php

namespace Drupal\icecream\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Controller\ControllerInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class IcecreamController extends ControllerBase implements ContainerInjectionInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function page() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );

    $manager = \Drupal::service('plugin.manager.icecream');
    $plugins = $manager->getDefinitions();

    foreach ($plugins as $plugin) {
      \Drupal::messenger()->addMessage($plugin);
    }

    foreach ($plugins as $flavor) {
      $instance = $manager->createInstance($flavor['id']);
      $build[] = [
        '#type' => 'markup',
        '#markup' => t(
          '<p>Flavor @name, Cost $@price, Slogan @slogan.</p>',
          [
            '@name' => $instance->getName(),
            '@price' => $instance->getPrice(),
            '@slogan' => $instance->slogan()
          ]
        ),
      ];
    }

    return $build;
  }
}
