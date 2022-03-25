<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Project extends Controller_template
{
    

	public function action_index()
	{
        $data = array();
       // $data['title'] = 'Test Index Page';
        $this->template->header = View::forge('project/header', array('title' => 'Test Home Page'));
        $this->template->footer = View::forge('project/footer', $data);
        $this->template->nav_bar = View::forge('project/nav_bar', $data);
        $this->template->content = View::forge('project/home', $data);
	}

	
	public function action_about()
	{
        $data = array();
        $this->template->header = View::forge('project/header', array('title' => 'Test About Page'));
        $this->template->footer = View::forge('project/footer', $data);
        $this->template->nav_bar = View::forge('project/nav_bar', $data);
        $this->template->content = View::forge('project/about', $data);
        
	}


	public function action_colors()
	{
	
	    $data = array();
        $this->template->header = View::forge('project/header', array('title' => 'Test Colors Form Input Page'));
        $this->template->footer = View::forge('project/footer', $data);
        $this->template->nav_bar = View::forge('project/nav_bar', $data);
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //if(isset($_GET['input_error'])){$data['input_error'] = true;}
            $this->template->content = View::forge('project/input', $data);}
        //else{      
            //$this->template->content = View::forge('project/colors', $data);}
	}
	
	public function post_colors()
	{
	    $rules = Validation::forge(); 
        $rules->add('size', 'Grid Size')
            ->add_rule('required')
            ->add_rule('numeric_min', 1) 
            ->add_rule('numeric_max', 26);  
        $rules->add('count', 'Color Count')
            ->add_rule('required')
            ->add_rule('numeric_min', 1) 
            ->add_rule('numeric_max', 10); 
	
	    if($rules->run()){
	        //View::set_global('input_error','false',false);
            $data = array('size' => Input::post('size'), 'count' => Input::post('count')); 
        
            $this->template->header = View::forge('project/header', array('title' => 'Test Colors POST Page'));
            $this->template->footer = View::forge('project/footer', $data);
            $this->template->nav_bar = View::forge('project/nav_bar', $data);
            $this->template->content = View::forge('project/colors', $data);}
         else{
            View::set_global('input_error','true',false);
            Response::redirect('project/colors');   }
    }	

    public function action_404(){
        echo "Error 404: Page not found!";
    }	
	
	
	
	
	
}
