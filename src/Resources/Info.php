<?php

namespace Datomatic\FattureInCloud\Resources;

class Info extends BaseResource
{
    protected string $path = 'info';

    public function countries(): array
    {
        return $this->getList('countries', true);
    }

    public function cities(): array
    {
        return $this->getList('cities', true);
    }

    public function vat_types(): array
    {
        return $this->getList('vat_types');
    }

    public function languages(): array
    {
        return $this->getList('languages', true);
    }

    public function templates(): array
    {
        return $this->getList('templates', true);
    }

    public function payment_methods(): array
    {
        return $this->getList('payment_methods');
    }

    public function payment_accounts(): array
    {
        return $this->getList('payment_accounts');
    }

    public function currencies(): array
    {
        return $this->getList('currencies', true);
    }

    public function revenue_centers(): array
    {
        return $this->getList('revenue_centers');
    }

    public function cost_centers(): array
    {
        return $this->getList('cost_centers');
    }

    public function measures(): array
    {
        return $this->getList('measures', true);
    }

    public function product_categories(): array
    {
        return $this->getList('product_categories');
    }

    public function received_document_categories(): array
    {
        return $this->getList('received_document_categories');
    }

    public function archive_categories(): array
    {
        return $this->getList('archive_categories');
    }

    public function dn_causals(): array
    {
        return $this->getList('dn_causals', true);
    }
}
