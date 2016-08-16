<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		*/

			$this->filter = \DataFilter::source(new Owner);
			$this->filter->add('id', 'ID', 'text');
			$users = \App\User::where('user_type','App\Owner')->lists('fname','id')->all();
			$this->filter->add('user_id','First Name','select')->options($users);
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source(Owner::with('user'));
			$this->grid->add('user.name', 'Name');
			$this->grid->add('user.phone', 'Phone');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		*/
			$this->edit = \DataEdit::source(new Owner());

			$this->edit->label('Edit Owner');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('code', 'Code', 'text')->rule('required');
       
        return $this->returnEditView();
    }    
}
