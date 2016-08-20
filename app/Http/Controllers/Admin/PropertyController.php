<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class PropertyController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		 * 'name','description','price','imagepath','ownerIdNo','units'
		*/

			$this->filter = \DataFilter::source(new \App\Property);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->add('price', 'Price', 'text');
			$categories = ['' => 'Category'] + \App\Category::lists('name','id')->all();
			$locations = ['' => 'Location'] + \App\Location::lists('name', 'id')->all();
			$this->filter->add('category_id', 'Category','select')->options($categories);
			$this->filter->add('location_id', 'Location','select')->options($locations);
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source(\App\Property::with('category','location'));
			$this->grid->add('name', 'Name');
			$this->grid->add('description', 'Description');
			$this->grid->add('price', 'Price');
			$this->grid->add('location.name', 'Location');
			$this->grid->add('category.name','Category');
			$this->grid->add('ownerIdNo', 'Owner ID');
			$this->grid->add('units', 'Units');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
		*/
			$this->edit = \DataEdit::source(new \App\Property());

			$this->edit->label('Edit Property');

			$this->edit->add('name', 'Name', 'text')->rule('required');
		
			$this->edit->add('description', 'Description', 'textarea')->rule('required');

			$this->edit->add('price', 'Price', 'text')->rule('required');

			$this->edit->add('ownerIdNo', 'Owner ID', 'text')->rule('required');

			$this->edit->add('units', 'Units', 'text')->rule('required');

			$this->edit->add('category_id', 'Category', 'select')->options(\App\Category::lists('name', 'id')->all());

			$this->edit->add('location_id', 'Location', 'select')->options(\App\Location::lists('name', 'id')->all());

			$this->edit->add('imagepath', 'Photo', 'image')->move(public_path())->preview(80,80);

			$this->edit->add('map','Position','map')->latlon('latitude', 'longitude');

       
        return $this->returnEditView();
    }    
}
