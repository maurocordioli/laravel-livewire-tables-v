<?php


namespace Rappasoft\LaravelLivewireTablesV1\Tests\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Rappasoft\LaravelLivewireTablesV1\DataTableComponent;
use Rappasoft\LaravelLivewireTablesV1\Tests\Models\Pet;
use Rappasoft\LaravelLivewireTablesV1\Views\Column;

class PetVeterinariesTable extends DataTableComponent
{
    public Pet $pet;

    public array $bulkActions = [
        'count' => 'Count selected',
    ];

    public function query(): Relation
    {
        return $this->pet->veterinaries();
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->searchable(),
            Column::make('Phone', 'phone')
                ->searchable(function (Builder $query, $search) {
                    $query->orWhere('phone', '=', $search);
                }),
        ];
    }

    public function count(): int
    {
        return $this->selectedRowsQuery()->count();
    }
}
