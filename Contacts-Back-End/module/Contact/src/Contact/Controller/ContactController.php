<?php
namespace Contact\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Http\Request;
use Zend\Http\Client;
use Zend\Stdlib\Parameters;

class ContactController extends AbstractActionController
{
    protected $someurl='https://app.alegra.com/api/v1/contacts/';
     
    public function indexAction()
    {
        $request = new Request();
        $request->getHeaders()->addHeaders(array(
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8'
        ));
        $request->setUri($someurl);
        $request->setMethod('GET');
        //$request->setPost(new Parameters(array('someparam' => $somevalue)));
        
        $client = new Client();
        $response = $client->dispatch($request);
        $data = json_decode($response->getBody(), true);

        return new ViewModel(array(
             'contacts' => $data,
         ));
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}