<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;
use App\Comment;
use App\Blog;

use Illuminate\Http\Request;

class CommentController extends CrudController{

	public function all($entity){
		parent::all($entity);

		// Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


		$this->filter = \DataFilter::source( Comment::with('blog'));
		$this->filter->add('name', 'Name', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add( '{{ @$blog->title}}', 'Blog');
		$this->grid->add('name', 'Name');
		$this->grid->add('email', 'Email');
		$this->grid->add('job', 'Job');
		$this->addStylesToGrid();



		return $this->returnView();
	}

	public function  edit($entity){

		parent::edit($entity);

		// Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

		$this->edit = \DataEdit::source(new \App\Comment());

		$this->edit->label('Create Comment');
		$this->edit->add('blog','Blog','select')->options(Blog::lists('title','id')->all());

		$this->edit->add('name', 'Name', 'text');

		$this->edit->add('comment', 'Comment', 'text');

		$this->edit->add('job', 'Job', 'text');

		$this->edit->add('email', 'Email', 'text');

		//$this->edit->add('code', 'Code', 'text')->rule('required');



		return $this->returnEditView();
	}

	public function getEdit($id){
		return "yellow mellow";
	}

}
