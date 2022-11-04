<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class DeliveryNotes extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::DELIVERY_NOTE;
}
