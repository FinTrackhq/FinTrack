<?php

namespace App\Filament\Widgets;

use App\Models\CompanyPurchase;
use Filament\Facades\Filament;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class PurchaseChart extends ChartWidget
{
    protected static ?string $heading = 'Purchases';
    protected static string $color = 'danger';
    protected static ?array $options = [
        'plugins' => [
            'legend' => [
                'display' => false,
            ],
        ],
    ];
    protected function getData(): array
    {
        $data = Trend::query(CompanyPurchase::query()->whereBelongsTo(Filament::getTenant()))
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => __('dashboard.companyPurchases'),
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
    public function getHeading() : string
    {
        return __('dashboard.purchases');
    }
    protected function getType(): string
    {
        return 'line';
    }
}
