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
            Requirements::css('themes/mytheme/css/animate.css');
            Requirements::css('themes/mytheme/css/bootstrap-datepicker.css');
            Requirements::css('themes/mytheme/css/aos.css');
            Requirements::css('themes/mytheme/css/flaticon.css');
            Requirements::css('themes/mytheme/css/icomoon.css');
            Requirements::css('themes/mytheme/css/ionicons.min.css');
            Requirements::css('themes/mytheme/css/magnific-popup.css');
            Requirements::css('themes/mytheme/css/one.css');
            Requirements::css('themes/mytheme/css/open-iconic-bootstrap.min.css');
            Requirements::css('themes/mytheme/css/owl.carousel.min.css');
            Requirements::css('themes/mytheme/css/owl.theme.default.min.css');
            Requirements::css('themes/mytheme/css/style.css');
            Requirements::css('themes/mytheme/css/jquery.timepicker.css');


            Requirements::javascript('themes/mytheme/js/jquery.min.js');
            Requirements::javascript('themes/mytheme/js/jquery.magnific-popup.min.js');
            Requirements::javascript('themes/mytheme/js/jquery.easing.1.3.js');
            Requirements::javascript('themes/mytheme/js/jquery.stellar.min.js');
            Requirements::javascript('themes/mytheme/js/jquery.waypoints.min.js');
            Requirements::javascript('themes/mytheme/js/jquery-migrate-3.0.1.min.js');
            Requirements::javascript('themes/mytheme/js/jquery.animateNumber.min.js');
            
            
            Requirements::javascript('themes/mytheme/js/country.js');
            Requirements::javascript('themes/mytheme/js/aos.js');
            Requirements::javascript('themes/mytheme/js/bootstrap.country.js');
            Requirements::javascript('themes/mytheme/js/bootstrap.min.js'); 
            Requirements::javascript('themes/mytheme/js/email-decode.min.js');
            Requirements::javascript('themes/mytheme/js/last.js');
            Requirements::javascript('themes/mytheme/js/owl.carousel.min.js');
            Requirements::javascript('themes/mytheme/js/popper.min.js');
            Requirements::javascript('themes/mytheme/js/rocket-loader.min.js');
            Requirements::javascript('themes/mytheme/js/scrollax.min.js');
            Requirements::javascript('themes/mytheme/js/main.js');

        }
    }
}
