<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class UserController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		*/
			$this->filter = \DataFilter::source(new \App\User);
			$this->filter->add('fname', 'First Name', 'text');
			$this->filter->add('lname', 'Last Name', 'text');
			$this->filter->add('email', 'Email', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();



		$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID');
			$this->grid->add('fname', 'First Name');
			$this->grid->add('lname', 'Last Name');
			$this->grid->add('Email', 'email');
			$this->grid->add('user_type', 'User type');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		*/
			$this->edit = \DataEdit::source(new \App\User());

			$this->edit->label('Edit User');

			$this->edit->add('fname', 'First Name', 'text')->rule('required');

			$this->edit->add('lname', 'Last Name', 'text')->rule('required');
		
			$this->edit->add('email', 'Email', 'text')->rule('required');

			$this->edit->add('password', 'Password', 'text')->rule('required');

       
        return $this->returnEditView();
    }    
}
