<?php

namespace Datomatic\FattureInCloud\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Datomatic\FattureInCloud\Resources\User user()
 * @method static \Datomatic\FattureInCloud\Resources\Info info()
 * @method static \Datomatic\FattureInCloud\Resources\Products products()
 * @method static \Datomatic\FattureInCloud\Resources\Clients clients()
 * @method static \Datomatic\FattureInCloud\Resources\Suppliers suppliers()
 * @method static \Datomatic\FattureInCloud\Resources\Invoices invoices()
 * @method static \Datomatic\FattureInCloud\Resources\Quotes quotes()
 * @method static \Datomatic\FattureInCloud\Resources\Proformas proformas()
 * @method static \Datomatic\FattureInCloud\Resources\Receipts receipts()
 * @method static \Datomatic\FattureInCloud\Resources\DeliveryNotes deliveryNotes()
 * @method static \Datomatic\FattureInCloud\Resources\CreditNotes creditNotes()
 * @method static \Datomatic\FattureInCloud\Resources\Orders orders()
 * @method static \Datomatic\FattureInCloud\Resources\WorkReports work_reports()
 * @method static \Datomatic\FattureInCloud\Resources\SupplierOrders supplierOrders()
 * @method static \Datomatic\FattureInCloud\Resources\Expenses expenses()
 * @method static \Datomatic\FattureInCloud\Resources\PassiveCreditNotes passiveCreditNotes()
 * @method static \Datomatic\FattureInCloud\Resources\PassiveDeliveryNotes passiveDeliveryNotes()
 * @method static \Datomatic\FattureInCloud\Resources\PaymentAccounts paymentAccounts()
 * @method static \Datomatic\FattureInCloud\Resources\PaymentMethods paymentMethods()
 *
 * @see \Datomatic\FattureInCloud\FattureInCloud
 */
class FattureInCloud extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Datomatic\FattureInCloud\FattureInCloud::class;
    }
}
