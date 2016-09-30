<?php
namespace Drupal\commerce_cop\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_payment\Entity\PaymentInterface;

/**
 * Provides the Bank Transfer payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "commerce_cop_bank_transfer",
 *   label = "Bank Transfer (Offline Payment)",
 *   display_label = "Bank Transfer",
 *   forms = {
 *     "add-payment-method" = "Drupal\commerce_cop\PluginForm\PaymentMethodAddForm",
 *   },
 *   payment_method_types = {"offline"},
 * )
 */
class BankTransfer extends OfflinePaymentGatewayBase implements BankTransferInterface {

  public function createPayment(PaymentInterface $payment, $capture = TRUE) {
    // TODO: Implement createPayment() method.
  }
}
