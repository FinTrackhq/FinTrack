<?php

namespace App\Filament\Widgets;

use App\Models\CompanySale;
use Filament\Facades\Filament;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SaleChart extends ChartWidget
{
    protected static string $color = 'success';
    protected static ?array $options = [
        'plugins' => [
            'legend' => [
                'display' => false,
            ],
        ],
    ];
    protected function getData(): array
    {
        $data = Trend::query(CompanySale::query()->whereBelongsTo(Filament::getTenant()))
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => __('dashboard.companySales'),
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
    public function getHeading() : string
    {
        return __('dashboard.sales');
    }
    protected function getType(): string
    {
        return 'line';
    }
}
