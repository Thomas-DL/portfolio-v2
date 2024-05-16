<?php

namespace App\Filament\Widgets;

use App\Models\Audit;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AuditStats extends BaseWidget
{
    protected function getStats(): array
    {

        $pending = Audit::where('status', 'en attente')->count();
        $completed = Audit::where('status', 'terminé')->count();
        $total = Audit::count();

        return [
            Stat::make('Audit en attente', $pending),
            Stat::make('Audit terminé', $completed),
            Stat::make('Audit total', $total),
        ];
    }
}
