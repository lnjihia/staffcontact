<?php

class Application
{
    // @var null The controller
    private $_url_controller = null;

    // @var null The method (of the above controller), often also named "action"
    private $_url_action = null;

    // @var array URL parameters
    private $_url_params = array();

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->_splitUrl();

        // check for controller: no controller given ? then load the profile page
        if (!$this->_url_controller) {

            include APP . 'controller/profile.php';
            $page = new Profile();
            $page->index();

        } elseif (file_exists(APP . 'controller/' . $this->_url_controller . '.php')) {
            // here we did check for controller: does such a controller exist ?

            // if so, then load this file and create this controller
            // example: if controller would be "car", then this line would translate into: $this->car = new car();
            include APP . 'controller/' . $this->_url_controller . '.php';
            $this->_url_controller = new $this->_url_controller();

            // check for method: does such a method exist in the controller ?
            if (method_exists($this->_url_controller, $this->_url_action)) {

                if (!empty($this->_url_params)) {
                    // Call the method and pass arguments to it
                    call_user_func_array(array($this->_url_controller, $this->_url_action), $this->_url_params);
                } else {
                    // If no parameters are given, just call the method without parameters, like $this->home->method();
                    $this->_url_controller->{$this->_url_action}();
                }

            } else {
                if (strlen($this->_url_action) == 0) {
                    // no action defined: call the default index() method of a selected controller
                    $this->_url_controller->index();
                } else {
                    header('location: ' . URL . 'problem');
                }
            }
        } else {
            header('location: ' . URL . 'problem');
        }
    }

    /**
     * Get and split the URL
     */
    private function _splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // Put URL parts into according properties
            // By the way, the syntax here is just a short form of if/else, called "Ternary Operators"
            // @see http://davidwalsh.name/php-shorthand-if-else-ternary-operators
            $this->_url_controller = isset($url[0]) ? $url[0] : null;
            $this->_url_action = isset($url[1]) ? $url[1] : null;

            // Remove controller and action from the split URL
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->_url_params = array_values($url);

            // for debugging. uncomment this if you have problems with the URL
            //echo 'Controller: ' . $this->_url_controller . '<br>';
            //echo 'Action: ' . $this->_url_action . '<br>';
            //echo 'Parameters: ' . print_r($this->_url_params, true) . '<br>';
        }
    }
}
