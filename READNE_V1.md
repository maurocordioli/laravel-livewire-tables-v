namespace Rappasoft \LaravelLivewireTables => namespace Rappasoft\ LaravelLivewireTablesV1
use Rappasoft \LaravelLivewireTables\ => use Rappasoft \LaravelLivewireTablesV1\ 
livewire -tables:: => livewire -tables-v1::
config('livewire-tables => config('livewire-tables-v

files:
 \config\livewire-tables.php ->  \config\livewire-tables-v.php

composer:
 "name": "maurocordioli/laravel-livewire-tables-v",
 "homepage": "https://github.com/maurocordioli/laravel-livewire-tables-v.git",

 "autoload": {
        "psr-4": {
            "Rappasoft\\LaravelLivewireTablesV1\\": "src"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Rappasoft\\LaravelLivewireTablesV1\\Tests\\": "tests"
        }
    },


    "extra": {
        "laravel": {
            "providers": [
                "Rappasoft\\LaravelLivewireTablesV1\\LaravelLivewireTablesV1ServiceProvider"
            ]
        }
    },