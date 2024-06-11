<?php

namespace Rappasoft\LaravelLivewireTablesV1\Traits;

/**
 * Trait WithHeader.
 */
trait WithHeader
{
    public bool $secondaryHeader = false;

    public function mountWithHeader(): void
    {
        foreach ($this->columns() as $column) {
            if ($column->hasSecondaryHeader()) {
                $this->secondaryHeader = true;
            }
        }
    }
}
