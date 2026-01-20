<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;


/**
 * Contactos Controller
 *
 *
 * @method \App\Model\Entity\Contacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('interno');
        if($this->request->is('post')){
            echo 'llega';
            $email = new Email();
            $email->viewBuilder()->setTemplate('default');
            $email->setFrom(['ros@berkley.com.ar' => 'Berkley México'])
                  ->setEmailFormat('html')
                  ->setTo('surban@berkleymex.com')
                  ->setReplyTo($this->request->getData()['email'])
                  ->setsubject('Formulario de contacto')
                  ->setViewVars(['form' => $this->request->getData()])
                  ->send();
            $this->Flash->success(__('Mensaje enviado exitosamente.'));
            return($this->redirect(['controller' => 'Pages','action' => 'index']));
        }
    }

    /**
     * Contacto ART method
     *
     * @return \Cake\Http\Response|void
     */
    public function contactoArt()
    {
        $this->viewBuilder()->setLayout('sin_sidebar_art');
        if($this->request->is('post')){
            $email = new Email();
            $email->viewBuilder()->setTemplate('default_art');
            $email->setFrom(['sistemas@berkley.com.ar' => 'Berkley Argentina'])
                  ->setEmailFormat('html')
                  ->setTo(['comercial@berkley.com.ar','jlongo@berkley.com.ar','jbrittes@berkley.com.ar'])
                  ->setReplyTo($this->request->getData()['email'])
                  ->setsubject('Formulario de contacto ART')
                  ->setViewVars(['form' => $this->request->getData()])
                  ->send();
            $this->Flash->success(__('Mensaje enviado exitosamente.'));
            return($this->redirect(['controller' => 'Arts','action' => 'index']));
        }
    }

   
}
