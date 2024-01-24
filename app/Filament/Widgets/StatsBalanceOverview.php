<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\CompanyPurchase;
use App\Models\CompanySale;
use App\Models\CompanyStuff;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsBalanceOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Number of workers', CompanyStuff::query()->count())
            ->chart([0 , 0.5, 1, 1.5, CompanyStuff::query()->count()])
                ->color('success'),
            Stat::make('Number of sales', CompanySale::query()->count())
                ->chart([0 , 0.5, 1, 1.5, CompanySale::query()->count()])
                ->color('success'),
            Stat::make('Number of purchases', CompanyPurchase::query()->count())
                ->chart([0 , 0.5, 1, 1.5, CompanyPurchase::query()->count()])
                ->color('success'),
        ];
    }
}
