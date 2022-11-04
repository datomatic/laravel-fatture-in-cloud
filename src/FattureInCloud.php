<?php

namespace Datomatic\FattureInCloud;

use Datomatic\FattureInCloud\Http\Client;
use Datomatic\FattureInCloud\Resources\BaseResource;

/**
 * Class FattureInCloud.
 *
 * @method \Datomatic\FattureInCloud\Resources\User                   user()
 * @method \Datomatic\FattureInCloud\Resources\Info                   info()
 * @method \Datomatic\FattureInCloud\Resources\Products               products()
 * @method \Datomatic\FattureInCloud\Resources\Clients                clients()
 * @method \Datomatic\FattureInCloud\Resources\Suppliers              suppliers()
 * @method \Datomatic\FattureInCloud\Resources\Invoices               invoices()
 * @method \Datomatic\FattureInCloud\Resources\Quotes                 quotes()
 * @method \Datomatic\FattureInCloud\Resources\Proformas              proformas()
 * @method \Datomatic\FattureInCloud\Resources\Receipts               receipts()
 * @method \Datomatic\FattureInCloud\Resources\DeliveryNotes          deliveryNotes()
 * @method \Datomatic\FattureInCloud\Resources\CreditNotes            creditNotes()
 * @method \Datomatic\FattureInCloud\Resources\Orders                 orders()
 * @method \Datomatic\FattureInCloud\Resources\WorkReports            work_reports()
 * @method \Datomatic\FattureInCloud\Resources\SupplierOrders         supplierOrders()
 * @method \Datomatic\FattureInCloud\Resources\Expenses               expenses()
 * @method \Datomatic\FattureInCloud\Resources\PassiveCreditNotes     passiveCreditNotes()
 * @method \Datomatic\FattureInCloud\Resources\PassiveDeliveryNotes   passiveDeliveryNotes()
 * @method \Datomatic\FattureInCloud\Resources\PaymentAccounts        paymentAccounts()
 * @method \Datomatic\FattureInCloud\Resources\PaymentMethods         paymentMethods()
 */
class FattureInCloud
{
    protected Client $client;

    /**
     * FattureInCloud constructor.
     *
     * @throws \Exception
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Return an instance of a Resource based on the method called.
     *
     * @param  mixed  $args
     */
    public function __call(string $name, $args): BaseResource
    {
        $resource = 'Datomatic\\FattureInCloud\\Resources\\'.ucfirst($name);

        /** @var BaseResource */
        return new $resource($this->client, ...$args);
    }
}
