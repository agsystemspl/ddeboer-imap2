<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\Text;

use Ddeboer\Imap2\Search\AbstractText;

/**
 * Represents a subject contains condition. Messages must have a subject
 * containing the specified text in order to match the condition.
 */
final class Subject extends AbstractText
{
    /**
     * Returns the keyword that the condition represents.
     */
    protected function getKeyword(): string
    {
        return 'SUBJECT';
    }
}
