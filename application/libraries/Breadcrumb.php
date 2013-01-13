<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Breadcrumb {

    private $breadcrumbs = array();
    private $_divider = '<span class="divider">/</span>';
    private $_tag_open = '<ul class="breadcrumb">';
    private $_tag_close = '</ul>';

    public function __construct($params = array()) {
        if (count($params) > 0) {
            $this->initialize($params);
        }

        log_message('debug', "Breadcrumb Class Initialized");
        
        $this->append_crumb('Home', base_url());
    }

    /**
     * Initialize Preferences
     *
     * @access public
     * @param array initialization parameters
     * @return void
     */
    private function initialize($params = array()) {
        if (count($params) > 0) {
            foreach ($params as $key => $val) {
                if (isset($this->{'_' . $key})) {
                    $this->{'_' . $key} = $val;
                }
            }
        }
    }

    /**
     * Append crumb to stack
     *
     * @access public
     * @param string $title
     * @param string $href
     * @return void
     */
    function append_crumb($title, $href) {
        // no title or href provided
        if (!$title OR !$href)
            return;
        // add to end
        $this->breadcrumbs[] = array('title' => $title, 'href' => $href);
    }

    /**
     * Prepend crumb to stack
     *
     * @access public
     * @param string $title
     * @param string $href
     * @return void
     */
    function prepend_crumb($title, $href) {
        // no title or href provided
        if (!$title OR !$href)
            return;

        // add to start
        array_unshift($this->breadcrumbs, array('title' => $title, 'href' => $href));
    }

    /**
     * Generate breadcrumb
     *
     * @access public
     * @return string
     */
    function output() {
        // breadcrumb found
        if ($this->breadcrumbs) {

            // set output variable
            $output = $this->_tag_open;

            // add html to output
            foreach ($this->breadcrumbs as $key => $crumb) {

                // if last element
                if (end(array_keys($this->breadcrumbs)) == $key) {
                    $output .= '<li class="active">' . $crumb['title'] . '</li>';

                    // else add link and divider
                } else {
                    $output .= '<li><a href="' . $crumb['href'] . '">' . $crumb['title'] . '</a>'.$this->_divider.'</li>';
                }
            }

            // return html
            return $output . $this->_tag_close . PHP_EOL;
        }

        // return blank string
        return '';
    }

}