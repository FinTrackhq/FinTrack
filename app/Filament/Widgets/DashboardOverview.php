<?php

namespace App\Filament\Widgets;

use App\Models\CompanyExtract;
use App\Models\CompanyPurchase;
use App\Models\CompanySale;
use App\Models\CompanyStuff;
use Filament\Facades\Filament;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Balance', CompanySale::query()->whereBelongsTo(Filament::getTenant())->sum('summary') - CompanyPurchase::query()->whereBelongsTo(Filament::getTenant())->sum('summary') - CompanyExtract::query()->whereBelongsTo(Filament::getTenant())->sum('expenditure'). '$')
                ->chart([0 , 0.5, 1, 1.5, CompanySale::query()->sum('summary') - CompanyPurchase::query()->sum('summary')])
                ->color(CompanySale::query()->sum('summary') - CompanyPurchase::query()->sum('summary') - CompanyExtract::query()->sum('expenditure') > 1 ? 'success' : 'danger'),
            Stat::make('Number of workers', CompanyStuff::query()->whereBelongsTo(Filament::getTenant())->count())
                ->chart([0 , 0.5, 1, 1.5])
                ->color('success'),
            Stat::make('Extract quantity', CompanyExtract::query()->whereBelongsTo(Filament::getTenant())->count())
                ->chart([0 , 0.5, 1, 1.5])
                ->color('success'),
        ];
    }
}
