<?php

namespace Rappasoft\LaravelLivewireTablesV1;

use Illuminate\Support\Facades\Blade;
use Rappasoft\LaravelLivewireTablesV1\Commands\MakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Class LaravelLivewireTablesServiceProvider.
 */
class LaravelLivewireTablesV1ServiceProvider extends PackageServiceProvider
{
    public function bootingPackage(): void
    {
        Blade::component('livewire-tables-v1::tailwind.components.table.table', 'livewire-tables-v1::table');
        Blade::component('livewire-tables-v1::tailwind.components.table.heading', 'livewire-tables-v1::table.heading');
        Blade::component('livewire-tables-v1::tailwind.components.table.footer', 'livewire-tables-v1::table.footer');
        Blade::component('livewire-tables-v1::tailwind.components.table.row', 'livewire-tables-v1::table.row');
        Blade::component('livewire-tables-v1::tailwind.components.table.cell', 'livewire-tables-v1::table.cell');

        Blade::component('livewire-tables-v1::tailwind.components.table.table', 'livewire-tables-v1::tw.table');
        Blade::component('livewire-tables-v1::tailwind.components.table.heading', 'livewire-tables-v1::tw.table.heading');
        Blade::component('livewire-tables-v1::tailwind.components.table.footer', 'livewire-tables-v1::tw.table.footer');
        Blade::component('livewire-tables-v1::tailwind.components.table.row', 'livewire-tables-v1::tw.table.row');
        Blade::component('livewire-tables-v1::tailwind.components.table.cell', 'livewire-tables-v1::tw.table.cell');

        Blade::component('livewire-tables-v1::bootstrap-4.components.table.table', 'livewire-tables-v1::bs4.table');
        Blade::component('livewire-tables-v1::bootstrap-4.components.table.heading', 'livewire-tables-v1::bs4.table.heading');
        Blade::component('livewire-tables-v1::bootstrap-4.components.table.footer', 'livewire-tables-v1::bs4.table.footer');
        Blade::component('livewire-tables-v1::bootstrap-4.components.table.row', 'livewire-tables-v1::bs4.table.row');
        Blade::component('livewire-tables-v1::bootstrap-4.components.table.cell', 'livewire-tables-v1::bs4.table.cell');

        Blade::component('livewire-tables-v1::bootstrap-5.components.table.table', 'livewire-tables-v1::bs5.table');
        Blade::component('livewire-tables-v1::bootstrap-5.components.table.heading', 'livewire-tables-v1::bs5.table.heading');
        Blade::component('livewire-tables-v1::bootstrap-5.components.table.footer', 'livewire-tables-v1::bs5.table.footer');
        Blade::component('livewire-tables-v1::bootstrap-5.components.table.row', 'livewire-tables-v1::bs5.table.row');
        Blade::component('livewire-tables-v1::bootstrap-5.components.table.cell', 'livewire-tables-v1::bs5.table.cell');
    }

    /**
     * @param Package $package
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-livewire-tables-v')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasCommand(MakeCommand::class);
    }
}
