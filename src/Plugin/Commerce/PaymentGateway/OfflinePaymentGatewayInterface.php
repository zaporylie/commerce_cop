<?php

namespace Drupal\commerce_cop\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_payment\Entity\PaymentInterface;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\PaymentGatewayInterface;


/**
 * Defines the base interface for onsite payment gateways.
 */
interface OfflinePaymentGatewayInterface extends PaymentGatewayInterface {

  /**
   * Creates a payment.
   *
   * @param \Drupal\commerce_payment\Entity\PaymentInterface $payment
   *   The payment.
   * @param bool $capture
   *   Whether the created payment should be captured (VS authorized only).
   *   Allowed to be FALSE only if the plugin supports authorizations.
   *
   * @throws \InvalidArgumentException
   *   If $capture is FALSE but the plugin does not support authorizations.
   * @throws \Drupal\commerce_payment\Exception\PaymentGatewayException
   *   Thrown when the transaction fails for any reason.
   */
  public function createPayment(PaymentInterface $payment, $capture = TRUE);
}
