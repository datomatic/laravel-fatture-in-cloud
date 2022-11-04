<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\ReceivedDocumentType;

class Expenses extends ReceivedDocuments
{
    protected DocumentType $type = ReceivedDocumentType::EXPENSE;
}
