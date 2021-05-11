<?php

namespace Drupal\dropbox_test\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;

/**
 * Configure dropbox test settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dropbox_test_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['dropbox_test.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['example'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Example'),
      '#default_value' => $this->config('dropbox_test.settings')->get('example'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('example') != 'example') {
      $form_state->setErrorByName('example', $this->t('The value is not correct.'));
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  //Configure Dropbox Application
      $app = new DropboxApp("Picturian-cloud", "lf0i4vys1lqcykn", "sl.Awc3XAcNQReZDw42WCtjB3t5xEhvN5uI1yXltKPVT7TnFoBUJkhI7QWYUmHUsz1c36SjlCpASOv0RZiAZBsUJLh0QsFdJi4NRGhsFLHxPiJBPoRJX0UtsHP-NT87K7KJiY19AuU");

  //Configure Dropbox service
      $dropbox = new Dropbox($app);

  //Get File Metadata
      $fileMetadata = $dropbox->getMetadata("/DSC06619x.jpg");

  //File Name
      $fileMetadata->getName();

    $this->config('dropbox_test.settings')
      ->set('example', $form_state->getValue('example'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}
