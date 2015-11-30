<?php

class Model_post extends ORM{
    public function rules()
    {
        return array (
            'email'=>array(
                array('not_empty')
            ),
            'pass'=>array(
                array('not_empty')
            )

        );
    }
}