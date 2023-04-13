<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\State;

use Ddeboer\Imap2\Search\ConditionInterface;

/**
 * Represents a NEW condition. Only new messages will match this condition.
 */
final class NewMessage implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'NEW';
    }
}
