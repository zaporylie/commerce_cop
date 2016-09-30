<?php

namespace Drupal\commerce_cop\PluginForm;

use Drupal\commerce_payment\PluginForm\PaymentGatewayFormBase;
use Drupal\Core\Form\FormStateInterface;

class PaymentMethodAddForm extends PaymentGatewayFormBase  {
  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    return $form;
  }

  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {

  }
}
