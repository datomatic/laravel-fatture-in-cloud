<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

abstract class IssuedDocuments extends Documents
{
    protected string $path = 'issued_documents';

    public function getByNumber(int $number, int $year): array
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

    public function sendToSDI(int $id, array $data = ['data' => []]): array
    {
        if (in_array($this->type, [IssuedDocumentType::INVOICE, IssuedDocumentType::CREDIT_NOTE])) {
            return $this->requestData(
                method: 'post',
                path: $id.'/e_invoice/send',
                data: $data
            );
        }

        return [];
    }

    protected function parseDataArray(array $params): array
    {
        $params['data']['type'] = $this->type;

        return $params;
    }
}
