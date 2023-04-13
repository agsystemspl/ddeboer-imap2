<?php

declare(strict_types=1);

namespace Ddeboer\Imap2;

use Ddeboer\Imap2\Message\PartInterface;

/**
 * @extends \Iterator<MessageInterface>
 */
interface MessageIteratorInterface extends \Iterator, \Countable
{
    /**
     * Get current message.
     *
     * @return MessageInterface<PartInterface>
     */
    public function current(): MessageInterface;
}
