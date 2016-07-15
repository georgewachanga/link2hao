<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CareerController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        // Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\Career);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('location', 'Location');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        // Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Career());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');

			$this->edit->add('description', 'Description', 'text');

			$this->edit->add('location', 'Location', 'text');

			$this->edit->add('requirements', 'Qualification', 'text');

			$this->edit->add('industry', 'Field', 'text');

			$this->edit->add('summary', 'Summary', 'redactor');

			$this->edit->add('skills', 'Experience', 'redactor');

			$this->edit->add('email', 'Email', 'text');

			$this->edit->add('phone', 'Phone', 'text');
		
			//$this->edit->add('code', 'Code', 'text')->rule('required');


       
        return $this->returnEditView();
    }

	public function getEdit($id){
		return "yellow mellow";
	}
}
