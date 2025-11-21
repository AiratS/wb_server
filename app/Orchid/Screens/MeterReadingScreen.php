<?php

namespace App\Orchid\Screens;

use App\Models\MeterReading;
use App\Orchid\Layouts\Examples\ChartLineExample;
use Orchid\Screen\Screen;

class MeterReadingScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $values = [];
        $labels = [];

        $readings = MeterReading::query()->get();
        foreach ($readings as $reading) {
            $values[] = $reading->value;
            $labels[] = $reading->created_at->format('Y-m-d H:i:s');
        }

        return [
            'charts' => [
                [
                    'name'   => 'Some Data',
                    'values' => $values,
                    'labels' => $labels,
                ],
            ],
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Показания счетчика';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ChartLineExample::make('charts', 'Холодная вода')
        ];
    }
}
