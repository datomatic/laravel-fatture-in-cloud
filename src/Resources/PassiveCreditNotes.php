<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\ReceivedDocumentType;

class PassiveCreditNotes extends ReceivedDocuments
{
    protected DocumentType $type = ReceivedDocumentType::PASSIVE_CREDIT_NOTE;
}
