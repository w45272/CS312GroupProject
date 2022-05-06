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
use \Model\MyRandomName;
 
class Controller_M1 extends Controller_template
{
    
                         

	public function action_index()
	{
        $data = array();
       // $data['title'] = 'Test Index Page';
        $this->template->header = View::forge('m1/header', array('title' => 'Home'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/home', $data);
	}
	
	public function action_editColor()
	{
	    //$colors = array('red'=>'#FF0000','Orange'=>'#FFA500','Yellow'=>'#FFFF00','Green'=>'#008000','Blue'=>'#0000FF', 'Purple'=>'#800080','Gray'=>'#808080 ','Brown'=>'#A52A2A','Black'=>'#000000','Teal'=>'#008080');
	    
	    $colors = MyRandomName::getColors();
	    $data = array('colors'=>$colors);
        $this->template->header = View::forge('m1/header', array('title' => 'Edit Color Options'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/editColor', $data);
	
	}
	public function post_updateColors(){
        $data = array();
	    $colors = array();
	    $size = Input::post('colorCount');
	    for($x=1; $x<$size; $x++){
	        $value=Input::post('color'.$x);
	        $name=Input::post('cName'.$x);
	        $colors[$name]=$value;    
	    }
	    
        $data = array('size' =>Session::get('sSize'), 'count'=>Session::get('sCount'),'colors'=>$colors); 
	    $this->template->header = View::forge('m1/header', array('title' => 'Color Generator'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/colors', $data);
	    
	    
	}
	public function action_printView(){

	    $data = array('size' => Session::get('sSize'), 'count' => Session::get('sCount')); 
	    $this->template->header = View::forge('m1/header', array('title' => 'Print Preview'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/print', $data);
	}

	
	public function action_about()
	{
        $data = array();
        $this->template->header = View::forge('m1/header', array('title' => 'About the Team!'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/about', $data);
        
	}


	public function action_colors()
	{

	    	         
	}
	public function get_colors(){
	    $data = array();
        $this->template->header = View::forge('m1/header', array('title' => 'Color Generator'));
        $this->template->footer = View::forge('m1/footer', $data);
        $this->template->nav_bar = View::forge('m1/nav_bar', $data);
        $this->template->content = View::forge('m1/input', $data);
	
	
	}
	
	public function post_colors()
	{
	    $colors = array('red'=>'#FF0000','Orange'=>'#FFA500','Yellow'=>'#FFFF00','Green'=>'#008000','Blue'=>'#0000FF', 'Purple'=>'#800080','Gray'=>'#808080 ','Brown'=>'#A52A2A','Black'=>'#000000','Teal'=>'#008080');
	    
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
	        Session::set('sSize', Input::post('size'));
	        Session::set('sCount', Input::post('count'));
            $data = array('size' => Input::post('size'), 'count' => Input::post('count'),'colors'=>$colors); 
        
            $this->template->header = View::forge('m1/header', array('title' => 'Color Generator'));
            $this->template->footer = View::forge('m1/footer', $data);
            $this->template->nav_bar = View::forge('m1/nav_bar', $data);
            $this->template->content = View::forge('m1/colors', $data);
            }
         else{
            $this->template->messages = $rules->error();
            $data = array();
            $this->template->header = View::forge('m1/header', array('title' => 'Color Generator'));
            $this->template->footer = View::forge('m1/footer', $data);
            $this->template->nav_bar = View::forge('m1/nav_bar', $data);
            $this->template->content = View::forge('m1/input', $data);
            }
            
            //Response::redirect('project/colors');   }
    }	

    public function action_404(){
        echo "Error 404: Page not found!";
    }	
	
	
	
	
	
}
