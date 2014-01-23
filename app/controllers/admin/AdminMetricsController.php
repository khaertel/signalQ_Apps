<?php

class AdminMetricsController extends AdminController {

    /**
     * Metric Model
     * @var Metric
     */
    protected $metric;

    /**
     * Widget Model
     * @var Widget
     */
    protected $widget;

	/**
	 * Inject the models.
	 * @param Metric $metric
	 * @param Widget $widget
	 */
	public function __construct(Metric $metric, Widget $widget)
	{
	    parent::__construct();
	    $this->metric = $metric;
	    $this->widget = $widget;
	}

	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        // Title
        $title = 'Metrics Management'; // Lang::get('admin/metrics/title.metric_management');

        // Grab all the metrics
        $metrics = $this->metric;

		Log::info('in AdminMetric - index');
        // Show the page
        return View::make('admin/metrics/index', compact('metrics', 'title'));
    }

	public function getEdit($metric)
	{
        if(! empty($metric))
        {
            
        }
        else
        {
            // Redirect to the metrics management page
            return Redirect::to('admin/metrics')->with('error', 'Metric does not exist.');
        }

        // Title
        $title = 'Update Metric'; //Lang::get('admin/metrics/title.metric_update');

        // Show the page
        return View::make('admin/metrics/edit', compact('metric', 'title'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $metric
     * @return Response
     */
    public function postEdit($metric)
    {
        // Declare the rules for the form validation
        $rules = array(
            'name' => 'required',
            'type' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the metric data
            $metric->name       		= Input::get('name');
            $metric->type				= Input::get('type');
			$metric->user_parameters    = Input::get('user_parameters');
			$metric->system_parameters	= Input::get('system_parameters');
            
            // Was the metric updated?
            if ($metric->save())
            {
                // Redirect to the metric page
                return Redirect::to('admin/metrics/' . $metric->id . '/edit')->with('success', "Updated metric successfully!");
            }
            else
            {
                // Redirect to the metric page
                return Redirect::to('admin/metrics/' . $metric->id . '/edit')->with('error', 'Updating metric did not succeed.');
            }
        }

        // Form validation failed
        return Redirect::to('admin/metrics/' . $metric->id . '/edit')->withInput()->withErrors($validator);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        // Title
        $title = 'Create a new metric'; //Lang::get('admin/metrics/title.create_a_new_metric');

        // Show the page
        return View::make('admin/metrics/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate()
    {

        // Declare the rules for the form validation
        $rules = array(
            'name' => 'required',
            'type' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);
        // Check if the form validates with success
        if ($validator->passes())
        {
            // Get the inputs, with some exceptions
            $inputs = Input::except('csrf_token');

            $this->metric->name 				= $inputs['name'];
            $this->metric->type 				= $inputs['type'];
            $this->metric->user_parameters 		= $inputs['user_parameters'];
            $this->metric->system_parameters 	= $inputs['system_parameters'];            
            
            $this->metric->save();

            // Was the metric created?
            if ($this->metric->id)
            {
                // Redirect to the new metric page
                return Redirect::to('admin/metrics/' . $this->metric->id . '/edit')->with('success', 'Metric created successfully.');
            }

            // Redirect to the new metric page
            return Redirect::to('admin/metrics/create')->with('error', 'Errors creating metric.');

            // Redirect to the metric create page
            return Redirect::to('admin/metrics/create')->withInput()->with('error', Lang::get('admin/metrics/messages.' . $error));
        }

        // Form validation failed
        return Redirect::to('admin/metrics/create')->withInput()->withErrors($validator);
    }

    /**
     * Remove metric.
     *
     * @param $metric
     * @return Response
     */
    public function getDelete($metric)
    {
        // Title
        $title = 'Delete metric'; //Lang::get('admin/roles/title.role_delete');

        // Show the page
        return View::make('admin/metrics/delete', compact('metric', 'title'));
    }

    /**
     * Remove the specified metric from storage.
     *
     * @param $metric
     * @internal param $id
     * @return Response
     */
    public function postDelete($metric)
    {
        // Was the metric deleted?
        if($metric->delete()) {
            // Redirect to the metric management page
            return Redirect::to('admin/metrics')->with('success', 'Successfully deleted metric.');
        }

        // There was a problem deleting the metric
        return Redirect::to('admin/metrics')->with('error', 'Unable to delete metric.');
    }



    /**
     * Show a list of all the metrics formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $metrics = Metric::select(array('metrics.id',  'metrics.name', 'metrics.type', 'metrics.user_parameters', 'metrics.system_parameters'));

        return Datatables::of($metrics)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')
        //->edit_column('users', '{{{ DB::table(\'assigned_roles\')->where(\'role_id\', \'=\', $id)->count()  }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/metrics/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/metrics/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
                    ')

        ->remove_column('id')

        ->make();
    }


}
