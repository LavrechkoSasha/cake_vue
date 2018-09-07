<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Response;
use Cake\Http\ServerRequest;

/**
 * Index Controller
 *
 *
 * @method \App\Model\Entity\Index[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndexController extends AppController
{
    public function __construct(ServerRequest $request = null, Response $response = null, $name = null, \Cake\Event\EventManager $eventManager = null, ComponentRegistry $components = null)
    {
        parent::__construct($request, $response, $name, $eventManager, $components);

        $this->viewBuilder()->setLayout('vue');
        $this->Auth->allow('index');
    }

    public function index()
    {

    }
}
