<?php

namespace App\Http\Controllers;

use App\Steps\Order\CustomerStep;
use App\Steps\Order\OrderStep;
use App\Steps\Order\ProductStep;
use Ycs77\LaravelWizard\Wizardable;

class OrderWizardController extends Controller
{
    use Wizardable;

    /**
     * The wizard name.
     *
     * @var string
     */
    protected $wizardName = 'order';

    /**
     * The wizard title.
     *
     * @var string
     */
    protected $wizardTitle = '';

    /**
     * The wizard options.
     *
     * @var array
     */
    protected $wizardOptions = [];

    /**
     * The wizard steps instance.
     *
     * @var array
     */
    protected $steps = [
        CustomerStep::class,
        ProductStep::class,
        OrderStep::class,
    ];

    public function apiProductDT()
    {
        /** @var \App\Steps\Order\ProductStep */
        $step = $this->wizard()->stepRepo()->find('product');

        return $step->apiProductDT();
    }

    public function apiCouponDT()
    {
        /** @var \App\Steps\Order\ProductStep */
        $step = $this->wizard()->stepRepo()->find('product');

        return $step->apiCouponDT();
    }
}
