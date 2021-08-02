<?php


namespace Datomatic\FattureInCloud\Resources;


abstract class IssuedDocuments extends Documents
{

    protected $path = 'issued_documents';

    const INVOICE = 'invoice';
    const CREDIT_NOTE = 'credit_note';
    const RECEIPT = 'receipt';
    const ORDER = 'order';
    const QUOTE = 'quote';
    const PROFORMA = 'proforma';
    const DELIVERY_NOTE = 'delivery_note';
    const WORK_REPORT = 'work_report';
    const SUPPLIER_ORDER = 'supplier_order';

    const STATUS_SENT = 'sent';
    const STATUS_NOT_SENT = 'not_sent';
    const STATUS_PENDING = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_DISCARDED = 'discarded';
    const STATUS_REJECTED = 'rejected';

    const PAYMENT_STATUS_PAID = 'paid';
    const PAYMENT_STATUS_NOT_PAID = 'not_paid';
    const PAYMENT_STATUS_REVERSED = 'reversed';


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
            ]
        ];

        return $this->all($params);
    }

    public function sendToSDI($id, array $params = []): array|null
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

    protected function parseObjArray($params): array
    {
        $params['data']['type'] = $this->type;
        return $params;
    }
}
