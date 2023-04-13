<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Search\State;

use Ddeboer\Imap2\Search\ConditionInterface;

/**
 * Represents an OLD condition. Only old messages will match this condition.
 */
final class Old implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'OLD';
    }
}
