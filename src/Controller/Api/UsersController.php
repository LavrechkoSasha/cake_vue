<?php
namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Http\Response;
use Cake\Http\ServerRequest;

/**
 * Api/Users Controller
 *
 *
 * @method \App\Model\Entity\Api/User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function __construct(ServerRequest $request = null, Response $response = null, $name = null, \Cake\Event\EventManager $eventManager = null, ComponentRegistry $components = null)
    {
        parent::__construct($request, $response, $name, $eventManager, $components);
//        $this->autoRender = false;
    }


    public function login() {
//        $return = json_encode(['login' => true, 'error' => [], 'user_data' => ['email' => 'rendom@email.com']]);
        $data = [];
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
//                return $this->redirect($this->Auth->redirectUrl());
                $data['status'] = 'success';
                $data['user_data'] = $user;
            } else {
                $data['status'] = 'error';
                $data['message'] = 'Неверный e-mail или пароль!';
//            $this->Flash->error('Your username or password is incorrect.');
            }
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Такой страницы не существует!';
        }


        $this->set('data', json_encode($data));
    }
}
