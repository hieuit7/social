<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Frontend\Controller;
use Application\Controller\ApplicationController;
use Zend\View\Model\ViewModel;

class IndexController extends ApplicationController 
{
    public function indexAction()
    {                
        $mongo = $this->getDocument();
        $category1 = $mongo->getRepository('Application\Entity\Mongo\Categories')->find('560420f190ca85741f000029'); 
        return new ViewModel();
    }
    public function testAction() {
        return new ViewModel();
    }
}
