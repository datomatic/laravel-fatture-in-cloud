<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\ReceivedDocumentType;

class PassiveDeliveryNotes extends ReceivedDocuments
{
    protected DocumentType $type = ReceivedDocumentType::PASSIVE_DELIVERY_NOTE;
}
