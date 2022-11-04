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

    public function sendToSDI(int $id, array $params = ['data' => []]): array
    {
        if (in_array($this->type, [IssuedDocumentType::INVOICE, IssuedDocumentType::CREDIT_NOTE])) {
            return $this->client->request(
                'post',
                $this->path.'/'.$id.'/e_invoice/send',
                $params
            )['data'];
        }

        return [];
    }

    protected function parseObjArray(array $params): array
    {
        $params['data']['type'] = $this->type;

        return $params;
    }
}
