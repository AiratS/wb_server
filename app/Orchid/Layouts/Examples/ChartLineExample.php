<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Examples;

use Orchid\Screen\Layouts\Chart;

class ChartLineExample extends Chart
{
    protected $type = self::TYPE_BAR;
    /**
     * Height of the chart.
     *
     * @var int
     */
    protected $height = 300;

    /**
     * Configuring line.
     *
     * @var array
     */
    protected $lineOptions = [
        'spline'     => 1,
        'regionFill' => 1,
        'hideDots'   => 0,
        'hideLine'   => 0,
        'heatline'   => 0,
        'dotSize'    => 2,
    ];
}
