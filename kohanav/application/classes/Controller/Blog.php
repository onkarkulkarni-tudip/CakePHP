<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

	public function action_index()
	{   $posts = ORM::factory('Post')->find_all();
        $view = View::factory('blog/index')
                ->bind('post',$posts);
        $this->response->body($view);
	    //echo $v->render();
	}
    public function action_new()
    {  if($_POST)
        {
             try {
            $post = ORM::factory('post');
            $post->email = $_POST['email'];
            $post->pass = $_POST['pass'];
              $post->save();
           $this->redirect('blog/index');
           // $this->request->redirect(Route::get('blog')->uri(array('action' => 'index')));

      } catch(ORM_Validation_Exception $e)
        {
           $errors = $e->errors('model');

        }
        }
        $view = View::factory('blog/new')
              ->bind('errors',$errors);
        $this->response->body($view);




    }
    public function action_register()
    {
        $user = Model::factory('register');
        $validation = Validation::factory($this->request->post())
            ->rule('username', array($user, 'unique_username'));

        if($_POST)
        {
            try{
            $post = ORM::factory('register');
            $post->fname = $_POST['fname'];
            $post->lname = $_POST['lname'];
            $post->designation = $_POST['designation'];
            $post->email = $_POST['email'];
            $post->pass = $_POST['pass'];
            $post->save();

                $user = Model::factory('register');
                $validation = Validation::factory($this->request->post())
                    ->rule('email', array($user, 'unique_username'));


            //$this->redirect('blog/index');
            }catch(ORM_Validation_Exception $e)
            {
                $errors = $e->errors('model');

            }
        }

        $view = View::factory('blog/register')
               ->bind('error',$errors);
        $this->response->body($view);


    }


    public function action_vregister(){
        $posts = ORM::factory('Register')->find_all();
        $view = View::factory('blog/vregister')
                 ->bind('reg',$posts);
        $this->response->body($view);
    }



} // End Welcome
