<?php

namespace SilverStripe\Lessons;

use PageController;

use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

class ArticlePagecontroller extends PageController{

         //duplicates the comment form
    public function CommentForm(){
        $form = Form::create(
        $this,
        __FUNCTION__,
        FieldList::create(
            TextField::create('Name',''),
            EmailField::create('Email',''),
            TextareaField::create('Comment','')
        ),
        FieldList::create(
            FormAction::create('handleComment','Post Comment')
                ->setUseButtonTag(true)
                ->addExtraClass('btn btn-default-color btn-lg')
        ),
        RequiredFields::create('Name','Email','Comment')
    )
    ->addExtraClass('form-style');

    foreach($form->Fields() as $field) {
            $field->addExtraClass('form-control')
                  ->setAttribute('placeholder', $field->getName().'*');
        }

        $data = $this->getRequest()->getSession()->get("FormData.{$form->getName()}.data");

        return $data ? $form->loadDataFrom($data) : $form;
    }


    //recieving articles form page
    public function handleComment($data, $form){
        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $comment = ArticleComment::create();
        $comment->ArticlePageID = $this->ID;
        $form->saveInto($comment);
        $comment->write();

        $session->clear("FormData.{$form->getName()}.data",$data);
        $form->sessionMessage('Thanks for your comment!','good');

        return $this->redirectBack();

        $existing = $this->Comments()->filter([
            'Comment' => $data['Comment']
        ]);
        if($existing->exists() && strlen($data['Comment']) > 20) {
            $form->sessionMessage('That comment already exists! Spammer!','bad');

            return $this->redirectBack();
        }
    }



    public function ContactForm(){
            $myForm = Form::create(
                $controller,
                'ContactForm',
                FieldList::create(
                    TextField::create('YourName','Your name'),
                    TextareaField::create('YourComments','Your comments')
                ),
                FieldList::create(
                    FormAction::create('sendContactForm','Submit')
                ),
                RequiredFields::create('YourName','YourComments')
            );

            return $myForm;
        }



    public function sendContactForm($data, $form){
            $name = $data['YourName'];
            $message = $data['YourMessage'];
            if(strlen($message) < 10) {
                $form->addErrorMessage('YourMessage','Your message is too short','bad');
                return $this->redirectBack();
            }

            return $this->redirect('/some/success/url');

    }

    private static $allowed_actions = [
        'CommentForm',
    ];



}
