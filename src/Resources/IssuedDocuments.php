<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class IssuedDocuments extends Documents
{
    protected $path = 'issued_documents';

    public const INVOICE = 'invoice';
    public const CREDIT_NOTE = 'credit_note';
    public const RECEIPT = 'receipt';
    public const ORDER = 'order';
    public const QUOTE = 'quote';
    public const PROFORMA = 'proforma';
    public const DELIVERY_NOTE = 'delivery_note';
    public const WORK_REPORT = 'work_report';
    public const SUPPLIER_ORDER = 'supplier_order';

    public const STATUS_SENT = 'sent';
    public const STATUS_NOT_SENT = 'not_sent';
    public const STATUS_PENDING = 'pending';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_DISCARDED = 'discarded';
    public const STATUS_REJECTED = 'rejected';

    public const PAYMENT_STATUS_PAID = 'paid';
    public const PAYMENT_STATUS_NOT_PAID = 'not_paid';
    public const PAYMENT_STATUS_REVERSED = 'reversed';

    public function all(array $params = [])
    {
        $params['type'] = $this->type;

        return parent::all($params);
    }

    public function getByNumber($number, $year)
    {
        $params['filter'] = [
            [
                'field' => 'number',
                'value' => $number,
                'op' => '=',
            ],
            [
                'field' => 'date',
                'value' => $year.'-01-01',
                'op' => '>=',
            ],
            [
                'field' => 'date',
                'value' => $year.'-12-31',
                'op' => '<=',
            ],
        ];

        return $this->all($params);
    }

    public function sendToSDI($id, array $params = []): array | null
    {
        if (in_array($this->type, [self::INVOICE, self::CREDIT_NOTE])) {
            return $this->client->request(
                'post',
                $this->path . '/' . $id . '/e_invoice/send',
                $params
            )['data'];
        }

        return [];
    }

    protected function parseObjArray($data): array
    {
        $data['data']['type'] = $this->type;

        return $data;
    }
}
