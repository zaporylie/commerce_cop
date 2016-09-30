<?php

namespace Drupal\commerce_cop\Plugin\Commerce\PaymentMethodType;

use Drupal\commerce_payment\Entity\PaymentMethodInterface;
use Drupal\commerce_payment\Plugin\Commerce\PaymentMethodType\PaymentMethodTypeBase;

/**
 * Provides the credit card payment method type.
 *
 * @CommercePaymentMethodType(
 *   id = "offline",
 *   label = @Translation("Offline"),
 *   create_label = @Translation("New offline payment"),
 * )
 */
class Offline extends PaymentMethodTypeBase {
  /**
   * {@inheritdoc}
   */
  public function buildLabel(PaymentMethodInterface $payment_method) {
    return $this->t('Offline payment');
  }
}
