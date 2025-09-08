<?php

declare(strict_types=1);

namespace Internal\Destroy;

/**
 * Contract for objects requiring explicit resource cleanup.
 *
 * Provides deterministic resource management where {@see object::__destruct()} is insufficient.
 * Objects in circular reference chains may never reach {@see object::__destruct()}, causing
 * resource leaks in long-running applications.
 *
 * Use cases:
 * - Breaking circular references to prevent memory leaks
 * - Immediate release of external resources (files, connections, locks)
 * - Explicit lifecycle control in daemon processes
 *
 * @api
 */
interface Destroyable
{
    /**
     * Destroys the instance and releases all associated resources.
     *
     * WARNING: This method permanently breaks the object. Only call when certain
     * the object will no longer be needed. After destruction, the object becomes
     * unusable and further method calls may cause undefined behavior.
     *
     * Implementation requirements:
     * - Release external resources (files, connections, locks)
     * - Nullify references to external objects to break circular dependencies
     * - Unsubscribe from events and remove listeners
     * - Objects with defined scope should call {@see destroy()} on dependent {@see Destroyable} instances
     * - Must be idempotent (safe to call multiple times)
     */
    public function destroy(): void;
}
