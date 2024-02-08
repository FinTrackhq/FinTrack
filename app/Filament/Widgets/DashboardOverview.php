<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\CompanyExtract;
use App\Models\CompanyPurchase;
use App\Models\CompanySale;
use App\Models\CompanyStuff;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Balance', CompanySale::query()->sum('summary') - CompanyPurchase::query()->sum('summary') - CompanyExtract::query()->sum('expenditure'). '$')
                ->chart([0 , 0.5, 1, 1.5, CompanySale::query()->sum('summary') - CompanyPurchase::query()->sum('summary')])
                ->color(CompanySale::query()->sum('summary') - CompanyPurchase::query()->sum('summary') - CompanyExtract::query()->sum('expenditure') > 1 ? 'success' : 'danger'),
            Stat::make('Number of workers', CompanyStuff::query()->count())
            ->chart([0 , 0.5, 1, 1.5, CompanyStuff::query()->count()])
                ->color(CompanyStuff::query()->count() > 1 ? 'success' : 'danger'),
            Stat::make('Extract quantity', CompanyExtract::query()->count())
                ->chart([0 , 0.5, 1, 1.5, CompanyExtract::query()->count()])
                ->color(CompanyExtract::query()->count() > 1 ? 'success' : 'danger'),
        ];
    }
}
