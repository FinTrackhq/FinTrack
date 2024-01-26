<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\CompanySale;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SaleChart extends ChartWidget
{
    protected static ?string $heading = 'Sales';
    protected static string $color = 'danger';

    protected function getData(): array
    {
        $data = Trend::model(CompanySale::class)
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
