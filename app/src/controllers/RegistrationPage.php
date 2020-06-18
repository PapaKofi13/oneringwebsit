<?php

use SilverStripe\Forms\CompositeField;
use SilverStripe\Forms\ConfirmedPasswordField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;
use SilverStripe\Forms\TextField;


class RegistrationPageController extends PageController{

    private static $allowed_actions = [
        'RegistrationForm',
        ];

        //input fields and redirection goes here
        public function RegistrationForm(){

            $regform = Form::create(
                $this,
                __FUNCTION__,
                FieldList::create(
                    CompositeField::create(
                        FieldList::create(
                            TextField::create('Surname', '')->addExtraClass(' form-control')->setAttribute('placeholder','Surname'),
                            TextField::create('Last Name', '')->addExtraClass(' form-control')->setAttribute('placeholder','Last Name'),
                            EmailField::create('Email', '')->addExtraClass(' form-control')->setAttribute('placeholder','Email'),
                            TextField::create('Location', '')->addExtraClass(' form-control')->setAttribute('placeholder','Location'),
                            ConfirmedPasswordField::create('Password', '')->addExtraClass(' form-control ')->setAttribute('placeholder', 'Password'),

                            FormAction::create('register', 'Join Now')->setUseButtonTag(true)->addExtraClass(' form-control btn btn-primary py-3 px-4')
                        ),
                            RequiredFields::create('Surname','Last Name','Email','Password','Location')
                    ),
                )


            );

            return $regform;
        }
        

}