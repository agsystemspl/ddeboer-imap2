<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\Email;

use Ddeboer\Imap2\Search\AbstractText;

/**
 * Represents a "Cc" email address condition. Messages must have been addressed
 * to the specified recipient (along with any others) in order to match the
 * condition.
 */
final class Cc extends AbstractText
{
    /**
     * Returns the keyword that the condition represents.
     */
    protected function getKeyword(): string
    {
        return 'CC';
    }
}
