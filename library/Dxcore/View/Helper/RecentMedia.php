<?php
/**
 *
 * @author Joey
 * @version 
 */
require_once 'Zend/View/Interface.php';

/**
 * RecentMedia helper
 *
 * @uses viewHelper Dxcore_View_Helper
 */
class Dxcore_View_Helper_RecentMedia
{
    public $albums;
    public $files;
    /**
     *
     * @var Zend_View_Interface
     */
    public $view;

    /**
     */
    public function recentMedia ()
    {
        
        $this->albums = new Media_Model_Albums();
        $this->files = new Media_Model_Files();
        
        
        
        return null;
    }

    /**
     * Sets the view field
     * 
     * @param $view Zend_View_Interface            
     */
    public function setView (Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}
