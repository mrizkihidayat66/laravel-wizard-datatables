<?php

namespace App\Steps\Order;

use Illuminate\Http\Request;
use Ycs77\LaravelWizard\Step;

class ProductStep extends Step
{
    /**
     * The step slug.
     *
     * @var string
     */
    protected $slug = 'product';

    /**
     * The step show label text.
     *
     * @var string
     */
    protected $label = 'Product Selection';

    /**
     * Set the step model instance or the relationships instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null
     */
    public function model(Request $request)
    {
        //
    }

    /**
     * Save this step form data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array|null  $data
     * @param  \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\Relation|null  $model
     * @return void
     */
    public function saveData(Request $request, $data = null, $model = null)
    {
        //
    }

    /**
     * Validation rules.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            //
        ];
    }

    public function getProductDT()
    {
        return app(\App\DataTables\OrderProductDataTable::class);
    }

    public function apiProductDT()
    {
        return $this->getProductDT()->ajax();
    }

    public function getCouponDT()
    {
        return app(\App\DataTables\OrderCouponDataTable::class);
    }

    public function apiCouponDT()
    {
        return $this->getCouponDT()->ajax();
    }
}
