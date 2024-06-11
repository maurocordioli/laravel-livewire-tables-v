<?php

namespace Rappasoft\LaravelLivewireTablesV1\Tests\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTablesV1\DataTableComponent;
use Rappasoft\LaravelLivewireTablesV1\Tests\Models\Pet;
use Rappasoft\LaravelLivewireTablesV1\Views\Column;
use Rappasoft\LaravelLivewireTablesV1\Views\Filter;

class PetsTable extends DataTableComponent
{
    public function filters(): array
    {
        return [
            'species.name' => Filter::make('Filter Species')->select([
                '' => 'All',
                1 => 'Cat',
                2 => 'Dog',
                3 => 'Horse',
                4 => 'Bird',
            ]),
            'breed_id' => Filter::make('Filter Breed')->select([
                '' => 'All',
                1 => 'American Shorthair',
                2 => 'Maine Coon',
                3 => 'Persian',
                4 => 'Norwegian Forest',
            ]),
        ];
    }

    public function bulkActions(): array
    {
        return ['count' => 'Count selected'];
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        return Pet::query()
            ->with('species')
            ->with('breed')
            ->when($this->getFilter('species.name'), fn (Builder $query, $specimen_id) => $query->where('species_id', $specimen_id))
            ->when($this->getFilter('breed_id'), fn (Builder $query, $breed_id) => $query->where('breed_id', $breed_id));
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->searchable(),
            Column::make('Age', 'age')
                ->searchable(function (Builder $query, $search) {
                    $query->orWhere('age', '=', $search);
                }),
            Column::make('Last Visit', 'last_visit')
                ->searchable(),
            Column::make('Species', 'species.name')
                ->searchable(),
            Column::make('Breed', 'breed.name')
                ->searchable(),
        ];
    }

    public function count(): int
    {
        return $this->selectedRowsQuery()->count();
    }
}
