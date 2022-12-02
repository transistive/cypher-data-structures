<?php

declare(strict_types=1);

/*
 * This file is part of the Neo4j PHP Client and Driver package.
 *
 * (c) Nagels <https://nagels.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Syndesi\CypherDataStructures\Type\OGM;

/**
 * The time of day represented in nanoseconds.
 *
 * @psalm-immutable
 *
 * @extends AbstractPropertyObject<int, int>
 */
final class LocalTime extends AbstractPropertyObject
{
    private int $nanoseconds;

    public function __construct(int $nanoseconds)
    {
        $this->nanoseconds = $nanoseconds;
    }

    /**
     * The nanoseconds that have passed since midnight.
     */
    public function getNanoseconds(): int
    {
        return $this->nanoseconds;
    }

    /**
     * @return array{nanoseconds: int}
     */
    public function toArray(): array
    {
        return ['nanoseconds' => $this->nanoseconds];
    }

    public function getProperties(): Dictionary
    {
        return new Dictionary($this);
    }

    public function getPackstreamMarker(): int
    {
        return 0x74;
    }
}
