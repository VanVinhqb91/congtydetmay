<?php
class Backend_Controller extends MY_Controller{
    protected $_data = null;
    public function __construct() {
        parent::__construct();
        $uri = $this->uri->segment(1);
        $this->_data['modu'] = $uri;
        $this->_data['path'] = $uri."/template_back";
    }
}
