<?php

namespace SilverStripe\Lessons;

use Page;

use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;




class ArticlePage extends Page{
  private static $can_be_root = false;
  //creating database (like models in django)
  private static $db = [
      'Date' => 'Date',
      'Teaser' => 'Text',
      'Author' => 'Varchar(225)',
  ];

    private static $many_many = [
        'Categories' => ArticleCategory::class,
    ];

  public function getCMSFields(){
        $fields = parent::getCMSFields();

        // adds fields to the cms
        $fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article'),'Content');
        $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser')->setDescription('This is the summary that appears on the article list page.'),'Content');
        $fields->addFieldToTab('Root.Main', TextField::create('Author','Author of article'),'Content');
        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo'));
        $fields->addFieldToTab('Root.Attachments', $brochure = UploadField::create('Brochure','Travel brochure, optional (PDF only)'));

        $photo->setFolderName('travel-photos');
        $brochure->setFolderName('travel-brochures')->getValidator()->setAllowedExtensions(array('pdf'));

        $fields->addFieldToTab('Root.Categories', CheckboxSetField::create('Categories','Selected categories',$this->Parent()->Categories()->map('ID','Title')
        ));

        return $fields;
  }

 //   creates image and upload fields
  private static $has_one = [
      'Photo' => Image::class,
      'Brochure' => File::class
  ];

 //allows all attached items to be published
  private static $owns = [
      'Photo',
      'Brochure'
  ];




    private static $has_many = [
        'Comments' => ArticleComment::class,
    ];

  //gives all array of category to render on pages
    public function CategoriesList(){
        if($this->Categories()->exists()) {
            return implode(', ', $this->Categories()->column('Title'));
        }

        return null;
    }





}

