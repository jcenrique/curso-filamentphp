<?php
namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum TypeTimesheets: string implements HasLabel,HasColor, HasIcon
{
    case WORK = 'work';
    case PAUSE = 'pause';


    public function getLabel(): ?string
    {


        return match ($this) {
            self::WORK => 'Trabajo',
            self::PAUSE => 'Pausa',

        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {

            self::WORK => 'success',
            self::PAUSE => 'gray',


        };
    }
    public function getIcon(): ?string
    {
        return match ($this) {

            self::WORK => 'heroicon-m-pencil',
            self::PAUSE => 'heroicon-s-document-arrow-up',
        };
    }

}
