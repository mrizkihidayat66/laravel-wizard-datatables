<?php

namespace App\Steps\Order;

use Illuminate\Http\Request;
use Ycs77\LaravelWizard\Step;

class CustomerStep extends Step
{
    /**
     * The step slug.
     *
     * @var string
     */
    protected $slug = 'customer';

    /**
     * The step show label text.
     *
     * @var string
     */
    protected $label = 'Customer Detail';

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
        // Get existing data from the wizard session
        $wizardData = $this->wizard->getStepData();

        // Save current step data into the 'customer_detail' array
        $wizardData['customer_detail'] = $request->only([
            'name',
            'email',
            'password',
        ]);

        // Save the updated data back to the wizard session
        $this->wizard->saveStepData($wizardData);
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
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'max:255', 'unique:users,email'],
            'password'  => ['required', 'string', 'min:8'],
        ];
    }
}
