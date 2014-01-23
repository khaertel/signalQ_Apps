<?php

class AdminWidgetsController extends AdminController {

    /**
     * metric Model
     * @var metric
     */
    protected $metric;

    /**
     * Widget Model
     * @var Widget
     */
    protected $widget;

	/**
	 * Inject the models.
	 * @param widget $widget
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
        $title = 'Widgets Management'; // Lang::get('admin/widgets/title.widget_management');

        // Grab all the widgets
        $widgets = $this->widget;
        
		Log::info('in Adminwidget - index');
        // Show the page
        return View::make('admin/widgets/index', compact('widgets', 'title'));
    }

	public function getEdit($widget)
	{
        if(! empty($widget))
        {
            
        }
        else
        {
            // Redirect to the widgets management page
            return Redirect::to('admin/widgets')->with('error', 'Widget does not exist.');
        }

        // Title
        $title = 'Update widget'; //Lang::get('admin/widgets/title.widget_update');

        $metrics = Metric::all();

        // Selected metrics
        $selectedMetrics = Input::old('metrics', array());

		// Mode
		$mode = 'edit';

        // Show the page
        return View::make('admin/widgets/create_edit', compact('widget', 'metrics', 'mode', 'selectedMetrics', 'title'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $widget
     * @return Response
     */
    public function postEdit($widget)
    {
        // Declare the rules for the form validation
        $rules = array(
            'name' => 'required',
            'type' => 'required',
            'class' => 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the widget data
            $widget->name       		= Input::get('name');
            $widget->type				= Input::get('type');
			$widget->class       		= Input::get('class');
			$widget->example_img		= Input::get('example_img');
			$widget->subscription_plan  = Input::get('subscription_plan');
			$widget->area				= Input::get('area');
			$widget->supports_alert     = Input::get('supports_alert');
			$widget->description	 	= Input::get('description');
			$widget->description_ext	= Input::get('description_ext');
			
            
            // Was the widget updated?
            if ($widget->save())
            {
				// Save metrics. Handles updating.
				$widget->saveMetrics(Input::get( 'metrics' ));

                // Redirect to the widget page
                return Redirect::to('admin/widgets/' . $widget->id . '/edit')->with('success', "Updated widget successfully!");
            }
            else
            {
                // Redirect to the widget page
                return Redirect::to('admin/widgets/' . $widget->id . '/edit')->with('error', 'Updating widget did not succeed.');
            }
        }

        // Form validation failed
        return Redirect::to('admin/widgets/' . $widget->id . '/edit')->withInput()->withErrors($validator);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {        
        //get all metrics
        $metrics = Metric::all();

		// Selected groups
		$selectedMetrics = Input::old('metrics', array());

        // Title
        $title = 'Create a new widget'; //Lang::get('admin/widgets/title.create_a_new_widget');
		
		// Mode
		$mode = 'create';

        // Show the page
        return View::make('admin/widgets/create_edit', compact('title', 'mode', 'metrics', 'selectedMetrics'));
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
            'type' => 'required',
            'class'=> 'required'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);
        // Check if the form validates with success
        if ($validator->passes())
        {
            // Get the inputs, with some exceptions
            $inputs = Input::except('csrf_token');

			// Update the widget data
			$this->widget->name       			= $inputs['name'];
			$this->widget->type					= Input::get('type');
			$this->widget->class       			= Input::get('class');
			$this->widget->example_img			= Input::get('example_img');
			$this->widget->subscription_plan  	= Input::get('subscription_plan');
			$this->widget->area					= Input::get('area');
			$this->widget->supports_alert     	= Input::get('supports_alert');
			$this->widget->description	 		= Input::get('description');
			$this->widget->description_ext		= Input::get('description_ext');
            
            $this->widget->save();

            // Was the widget created?
            if ($this->widget->id)
            {

            	// Save metrics. Handles updating.
            	$this->widget->saveMetrics(Input::get( 'metrics' ));

                // Redirect to the new widget page
                return Redirect::to('admin/widgets/' . $this->widget->id . '/edit')->with('success', 'widget created successfully.');
            }

            // Redirect to the new widget page
            return Redirect::to('admin/widgets/create')->with('error', 'Errors creating widget.');

            // Redirect to the widget create page
            return Redirect::to('admin/widgets/create')->withInput()->with('error', Lang::get('admin/widgets/messages.' . $error));
        }

        // Form validation failed
        return Redirect::to('admin/widgets/create')->withInput()->withErrors($validator);
    }

    /**
     * Remove widget.
     *
     * @param $widget
     * @return Response
     */
    public function getDelete($widget)
    {
        // Title
        $title = 'Delete widget'; //Lang::get('admin/roles/title.role_delete');

        // Show the page
        return View::make('admin/widgets/delete', compact('widget', 'title'));
    }

    /**
     * Remove the specified widget from storage.
     *
     * @param $widget
     * @internal param $id
     * @return Response
     */
    public function postDelete($widget)
    {
        AssignedMetrics::where('widget_id', $widget->id)->delete();

        $id = $widget->id;
        $widget->delete();

        // Was the comment post deleted?
        $widget = Widget::find($id);

        // Was the widget deleted?
        if(empty($widget)) {
            // Redirect to the widget management page
            return Redirect::to('admin/widgets')->with('success', 'Successfully deleted widget.');
        }

        // There was a problem deleting the widget
        return Redirect::to('admin/widgets')->with('error', 'Unable to delete widget.');
    }



    /**
     * Show a list of all the widgets formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $widgets = widget::select(array('widgets.id',  'widgets.name', 'widgets.type', 'widgets.subscription_plan', 'widgets.area'));

        return Datatables::of($widgets)
        // ->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')
        //->edit_column('users', '{{{ DB::table(\'assigned_roles\')->where(\'role_id\', \'=\', $id)->count()  }}}')

        ->add_column('actions', '<a href="{{{ URL::to(\'admin/widgets/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                <a href="{{{ URL::to(\'admin/widgets/\' . $id . \'/delete\' ) }}}" class="iframe btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>
                    ')

        ->remove_column('id')

        ->make();
    }


}
