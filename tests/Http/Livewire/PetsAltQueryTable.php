<?php

namespace Rappasoft\LaravelLivewireTablesV1\Tests\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTablesV1\DataTableComponent;
use Rappasoft\LaravelLivewireTablesV1\Tests\Models\Pet;
use Rappasoft\LaravelLivewireTablesV1\Views\Column;

class PetsAltQueryTable extends DataTableComponent
{
    /**
     * @return Builder
     */
    public function query() : Builder
    {
        return Pet::query()->select('pets.name', 'pets.age', 'pets.last_visit', 'species.name', 'breeds.name')
            ->join('species', 'pets.species_id', '=', 'species.id')
            ->join('breeds', 'breed_id', '=', 'breeds.id');
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->searchable(),
            Column::make('Age', 'age')
                ->searchable(),
            Column::make('Last Visit', 'last_visit')
                ->searchable(),
            Column::make('Species', 'species.name')
                ->searchable(),
            Column::make('Breed', 'breed.name')
                ->searchable(),
        ];
    }
}
