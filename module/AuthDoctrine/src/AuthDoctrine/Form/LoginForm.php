<?php
namespace AuthDoctrine\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('login');
        $this->setAttribute('method', 'post');
		$this->setAttribute('class', 'form-horizontal login-form');
		
        /*
		$this->add(array(
            'name' => 'usr_id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
		*/
        $this->add(array(
            'name' => 'username', // 'usr_name',
            'attributes' => array(
                'type'  => 'text',
				'class' => 'input-textbox',
				'placeholder' => 'Username',
				'required' => 'required',
            ),
            /*'options' => array(
                'label' => 'Username',
				'label_attributes' => array('class' => 'control-label')
            ),*/
        ));
        $this->add(array(
            'name' => 'password', // 'usr_password',
            'attributes' => array(
                'type'  => 'password',
				'class' => 'input-textbox',
				'placeholder' => 'Password',	
				'required' => 'required',			
            ),
           /* 'options' => array(
                'label' => 'Password',
				 'label_attributes' => array('class' => 'control-label')
            ),*/
        ));

        $this->add(array(
            'name' => 'rememberme',
			'class' => 'form-control',				
			'type' => 'checkbox', // 'Zend\Form\Element\Checkbox',			
//            'attributes' => array(
//                'type'  => '\Zend\Form\Element\Checkbox',
//            ),
            'options' => array(
                'label' => 'Remember Me?',
				 'label_attributes' => array('class' => 'control-label')
//				'checked_value' => 'true', without value here will be 1
//				'unchecked_value' => 'false', // witll be 1
            ),
        ));	

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Login',
                'id' => 'submitbutton',
				'class' => 'btn btn-success',
            ),
        )); 
    }
}