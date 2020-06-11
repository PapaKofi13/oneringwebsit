<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            Requirements::css('css/bootstrap-datepicker.css');
            Requirements::css('css/bootstrap.css');
            Requirements::css('css/bootstrap.min.css');
            Requirements::css('css/font.css');
            Requirements::css('css/owl.transitions.css');
            Requirements::css('css/style.css');
            Requirements::css('css/style.less');
            Requirements::javascript('js/agencies.js');
            Requirements::javascript('js/bootstrap-checkbox.js');
            Requirements::javascript('js/bootstrap-datepicker.js');
            Requirements::javascript('js/chosen.jquery.min.js');
            Requirements::javascript('js/bootstrap.min.js');
            Requirements::javascript('js/chosen.min.js');
            Requirements::javascript('js/nice-scroll.js');
            Requirements::javascript('js/owl.carousel.min.js');
            Requirements::javascript('js/scripts.js');
            Requirements::javascript('js/jquery-1.11.1.min.js');
            Requirements::javascript('js/modernizr.js');
            Requirements::javascript('js/bootstrap-hover-dropdown.min.js');
            Requirements::javascript('js/properties.js');
            Requirements::javascript('js/owl.carousel.min.js');
            Requirements::javascript('js/jquery-browser.js');
            Requirements::javascript('js/jquery.easing.min.js');
            Requirements::javascript('js/jquery.nicescroll.js');
            Requirements::javascript('js/jquery.placeholder.min.js');
            Requirements::javascript('js/jquery.prettyPhoto.js');
            Requirements::javascript('js/jquery.stellar.min.js');

        }
    }
}
