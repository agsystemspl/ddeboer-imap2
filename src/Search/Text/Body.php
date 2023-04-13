<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\Text;

use Ddeboer\Imap2\Search\AbstractText;

/**
 * Represents a body text contains condition. Messages must have a body
 * containing the specified text in order to match the condition.
 */
final class Body extends AbstractText
{
    /**
     * Returns the keyword that the condition represents.
     */
    protected function getKeyword(): string
    {
        return 'BODY';
    }
}
