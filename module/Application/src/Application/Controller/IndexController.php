<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //$em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        //$data = $em->getRepository('Application\Entity\AppUsers')->findAll();
        $this->getServiceLocator('doctrine.entitymanager.orm_default');
        
        return new ViewModel();
    }
    public function testAction() {
        $a = "haha tao cuoiwf";
        return new ViewModel(array(
            'haha' => $a
        ));
    }
}
