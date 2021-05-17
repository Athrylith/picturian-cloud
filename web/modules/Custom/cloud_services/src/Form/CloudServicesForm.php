<?php

namespace Drupal\products\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Url;
use Drupal\products\Plugin\Manager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Form for creating/editing  entities.
 */
class CloudServicesForm extends EntityForm {

  /**
   * The  plugin manager.
   *
   * @var \Drupal\products\Plugin\Manager
   */
  protected $Manager;

  /**
   * Form constructor.
   *
   * @param \Drupal\products\Plugin\Manager $Manager
   *   The  plugin manager.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   */
  public function __construct(Manager $Manager, MessengerInterface $messenger, EntityTypeManagerInterface $entityTypeManager) {
    $this->Manager = $Manager;
    $this->messenger = $messenger;
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('products._manager'),
      $container->get('messenger'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    /** @var \Drupal\products\Entity\CloudServices $ */
    $ = $this->entity;

    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#maxlength' => 255,
      '#default_value' => $->label(),
      '#description' => $this->t('Name of the .'),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $->id(),
      '#machine_name' => [
        'exists' => '\Drupal\products\Entity\::load',
      ],
      '#disabled' => !$->isNew(),
    ];

    $form['bundle'] = [
      '#type' => 'entity_autocomplete',
      '#target_type' => 'product_type',
      '#title' => $this->t('Product type'),
      '#default_value' => $->getBundle() ? $this->entityTypeManager->getStorage('product_type')->load($->getBundle()) : NULL,
      '#description' => $this->t('The type of products that need to be created.'),
      '#required' => TRUE,
    ];

    $form['url'] = [
      '#type' => 'url',
      '#default_value' => $->getUrl() instanceof Url ? $->getUrl()->toString() : '',
      '#title' => $this->t('Url'),
      '#description' => $this->t('The URL to the import resource'),
      '#required' => TRUE,
    ];

    $definitions = $this->Manager->getDefinitions();
    $options = [];
    foreach ($definitions as $id => $definition) {
      $options[$id] = $definition['label'];
    }

    $form['plugin'] = [
      '#type' => 'select',
      '#title' => $this->t('Plugin'),
      '#default_value' => $->getPluginId(),
      '#options' => $options,
      '#description' => $this->t('The plugin to be used with this .'),
      '#required' => TRUE,
    ];

    $form['update_existing'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Update existing'),
      '#description' => $this->t('Whether to update existing products if already imported.'),
      '#default_value' => $->updateExisting(),
    ];

    $form['source'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Source'),
      '#description' => $this->t('The source of the products.'),
      '#default_value' => $->getSource(),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    /** @var \Drupal\products\Entity\CloudServices $ */
    $ = $this->entity;
    $status = $->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger->addMessage($this->t('Created the %label .', [
          '%label' => $->label(),
        ]));
        break;

      default:
        $this->messenger->addMessage($this->t('Saved the %label .', [
          '%label' => $->label(),
        ]));
    }

    $form_state->setRedirectUrl($->toUrl('collection'));
  }

}
