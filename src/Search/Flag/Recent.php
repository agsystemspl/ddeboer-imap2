<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\Flag;

use Ddeboer\Imap2\Search\ConditionInterface;

/**
 * Represents an RECENT flag condition. Messages must have the \\RECENT flag
 * set in order to match the condition.
 */
final class Recent implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'RECENT';
    }
}
