<?php

declare(strict_types=1);

namespace Syndesi\CypherDataStructures\Contract;

use Stringable;

/**
 * Classes which implement this interface should extend from SplObjectStorage,
 * see https://www.php.net/manual/en/class.splobjectstorage.
 */
interface PropertyStorageInterface extends SplObjectStorageInterface, IsEqualToInterface, Stringable
{
    public function current(): PropertyNameInterface;
}
