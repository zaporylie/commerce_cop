<?php
namespace Drupal\commerce_cop\Plugin\Commerce\PaymentGateway;
use Drupal\commerce_payment\Entity\PaymentInterface;


/**
 * Provides the CashOnDelivery payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "commerce_cop_cash_on_delivery",
 *   label = "Cash On Delivery (Offline Payment)",
 *   display_label = "Cash On Delivery",
 *   forms = {
 *     "add-payment-method" = "Drupal\commerce_cop\PluginForm\PaymentMethodAddForm",
 *   },
 *   payment_method_types = {"offline"},
 * )
 */
class CashOnDelivery extends OfflinePaymentGatewayBase implements CashOnDeliveryInterface {

  public function createPayment(PaymentInterface $payment, $capture = TRUE) {
    // TODO: Implement createPayment() method.
  }
}
