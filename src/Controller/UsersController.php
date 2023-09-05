<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

   
	
	public function login(){    //print_r($this->request);
        
        if($this->request->getSession()->read('ID')>0){
            return $this->redirect('/users/dashboard/');
        }else{
    	    $validstatus = $this->checkvaliduser();  
            //echo $validstatus;die;
            if ($this->request->is('post')) {            
                $data = $this->request->getData();
                
                date_default_timezone_set("Asia/Calcutta"); 
                $currentime=date('Y-m-d H:i:s');
                $GetUser=$this->Users->find('all')->where(['username' => $data['username'],'password'=>md5($data['password'])]);
                $countuserdetails = $GetUser->count();
                if ($countuserdetails===0) { 
                    $this->Flash->error('username and password both are mandatory.', ['key' => 'error','clear' => true]);
                    $this->redirect('/');
                }else {
                    //echo "Fgdfg";die;
                    if($validstatus == 'valid'){
                        $username = $data['username'];
                        $password = md5($data['password']);
                        $otp = $data['otp'];
                        $otpquery=$this->Users->find('all')->where(['otp' => $otp]);
                        $countotp = $otpquery->count();
                        
                        $query=$this->Users->find('all')->where(['username' => $username,'password'=>$password,'otp'=>$otp]);
                        $countuser = $query->count();

                        if($countuser===0){
                            //echo "a";die;
                            $this->Flash->error('invalid user.', ['key' => 'error','clear' => true]);
                            $this->redirect('/');
                        }else if($countotp===0){
                            //echo "b";die;
                            $this->Flash->error('invalid OTP.', ['key' => 'error','clear' => true]);
                            $this->redirect('/');
                        }else{ 
                            $admindata = $query->first();
                            $otptime = $admindata->otp_time;
                            $validupto = date('Y-m-d H:i:s',strtotime($otptime. ' + 4 hours'));
                            
                            if(strtotime($currentime) > strtotime($validupto)){ 
                                $this->Flash->error('Otp Expired.Please generate new otp.', ['key' => 'error','clear' => true]);
                                $this->redirect('/'); 
                            }else{                         
                                $session = $this->request->getSession(); 
                                $session->write('USERNAME', $admindata->username); 
                                $session->write('ROLE', $admindata->role); 
                                $session->write('NAME', $admindata->name);
                                $session->write('ID', $admindata->id);
                                $this->Flash->success('You have successfully logged in.', ['key' => 'success','clear' => true]);
                                return $this->redirect('/users/dashboard/');
                            }
                        }
                    }else{
                        $this->Flash->error('Invalid Ip2', ['key' => 'error','clear' => true]);
                        $this->redirect('/'); 
                    }
                }
    		   	
    		}
            $this->viewBuilder()->setLayout('login');
        }
    }

   	function logout() {

		$session = $this->request->getSession();
        $session->destroy();
		$this->Flash->success('You have successfully logged out.');
		return $this->redirect('/');
	}

    function dashboard() { 
		$this->set('title','');	
	}

    function datatable() { 
        $this->set('title',''); 
    }

    public function checkvaliduser(){
        $connection = ConnectionManager::get('default');
        $checkvaliduser = $connection->execute("SELECT * FROM valid_ip")->fetchAll('assoc'); 
        //echo "<pre>"; print_r($_SERVER);die;
        //return $_SERVER['REMOTE_ADDR'];die;
        if($_SERVER["REMOTE_ADDR"] === $checkvaliduser[0]['ip'] || $_SERVER["REMOTE_ADDR"] === $checkvaliduser[1]['ip']){
            return "valid";
        }else{
            return "invalid";
        }
    }
	
}
