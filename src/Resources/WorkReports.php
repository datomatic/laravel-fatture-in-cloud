<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Enums\DocumentType;
use Datomatic\FattureInCloud\Enums\IssuedDocumentType;

class WorkReports extends IssuedDocuments
{
    protected DocumentType $type = IssuedDocumentType::WORK_REPORT;
}
