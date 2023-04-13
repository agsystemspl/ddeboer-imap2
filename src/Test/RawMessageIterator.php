<?php

declare(strict_types=1);

namespace Ddeboer\Imap2\Test;

use Ddeboer\Imap2\Message\PartInterface;
use Ddeboer\Imap2\MessageInterface;
use Ddeboer\Imap2\MessageIteratorInterface;

/**
 * A MessageIterator to be used in a mocked environment.
 *
 * @extends \ArrayIterator<int, MessageInterface>
 */
final class RawMessageIterator extends \ArrayIterator implements MessageIteratorInterface
{
    /**
     * @return MessageInterface<PartInterface>
     */
    public function current(): MessageInterface
    {
        return parent::current();
    }
}
