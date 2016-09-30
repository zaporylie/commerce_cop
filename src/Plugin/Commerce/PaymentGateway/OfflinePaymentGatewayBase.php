<?php

namespace Drupal\commerce_cop\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\PaymentGatewayBase;

/**
 * Provides the base class for offline payment gateways.
 */
abstract class OfflinePaymentGatewayBase extends PaymentGatewayBase  implements OfflinePaymentGatewayInterface {

}
