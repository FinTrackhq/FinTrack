<?php

namespace App\Filament\Widgets;

use App\Models\CompanyPurchase;
use App\Models\CompanySale;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class PurchaseChart extends ChartWidget
{
    protected static ?string $heading = 'Purchases';
    protected static string $color = 'success';

    protected function getData(): array
    {
        $data = Trend::model(CompanyPurchase::class)
            ->between(
                start: now()->startOfDay(),
                end: now()->endOfDay(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Company Sales',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
