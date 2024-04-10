<?php

namespace Datomatic\FattureInCloud\Enums;

use Datomatic\LaravelEnumHelper\LaravelEnumHelper;

enum IssuedDocumentType: string implements DocumentType
{
    use LaravelEnumHelper;

    case INVOICE = 'invoice';
    case CREDIT_NOTE = 'credit_note';
    case RECEIPT = 'receipt';
    case ORDER = 'order';
    case QUOTE = 'quote';
    case PROFORMA = 'proforma';
    case DELIVERY_NOTE = 'delivery_note';
    case WORK_REPORT = 'work_report';
    case SUPPLIER_ORDER = 'supplier_order';
    case SELF_OWN_INVOICE = 'self_own_invoice';
    case SELF_SUPPLIER_INVOICE = 'self_supplier_invoice';
}
