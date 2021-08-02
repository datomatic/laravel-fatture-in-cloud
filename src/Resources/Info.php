<?php

namespace Datomatic\FattureInCloud\Resources;

class Info extends BaseResource
{
    protected $path = 'info';

    public function countries()
    {
        return $this->getList('countries', true);
    }

    public function cities()
    {
        return $this->getList('cities', true);
    }

    public function vat_types()
    {
        return $this->getList('vat_types');
    }

    public function languages()
    {
        return $this->getList('languages', true);
    }

    public function templates()
    {
        return $this->getList('templates', true);
    }

    public function payment_methods()
    {
        return $this->getList('payment_methods');
    }

    public function payment_accounts()
    {
        return $this->getList('payment_accounts');
    }

    public function currencies()
    {
        return $this->getList('currencies', true);
    }

    public function revenue_centers()
    {
        return $this->getList('revenue_centers');
    }

    public function cost_centers()
    {
        return $this->getList('cost_centers');
    }

    public function measures()
    {
        return $this->getList('measures', true);
    }

    public function product_categories()
    {
        return $this->getList('product_categories');
    }

    public function received_document_categories()
    {
        return $this->getList('received_document_categories');
    }

    public function archive_categories()
    {
        return $this->getList('archive_categories');
    }

    public function dn_causals()
    {
        return $this->getList('dn_causals', true);
    }
}
