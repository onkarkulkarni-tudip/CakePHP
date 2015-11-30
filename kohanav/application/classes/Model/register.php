<?php

class Model_register extends ORM{
    public function rules()
    {
        return array (
            'email'=>array(
                array('not_empty'),
                array('email'),

               // array('Model_Register::unique_field', array(':field', ':value', $this->pk()))
               //array('email', 'Model_Register::unique_email')
             //   array($this, 'unique'), array('email', ':value')
                   // array(array($this, 'is_unique'))
                //array(array($this, 'username_available'), array(':value')),
            ),
            'pass'=>array(
                array('not_empty')
            )

        );
    }
 /*   public function username_available($username)
    {
        $find = array(
            //'is_deactivated' => 0,
            'username' => $username,
        );
        $user = ORM::factory($this->object_name(), $find);
        return (! $user->loaded() OR $user->id == $this->id);
    }
*/
  /*  public static function unique_username($username)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(username)'), 'total'))
            ->from('registers')
            ->where('username', '=', $username)
            ->execute()
            ->get('total');
    }*/

}