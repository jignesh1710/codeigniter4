<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;


class Api extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = new UserModel();
      $data['employees'] = $model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }
    public function create()
	{
         $fname=$this->request->getvar("fname");
		$lname=$this->request->getvar("lname");
		$email=$this->request->getvar("email");
		$pno=$this->request->getvar("pno");
		$data=array(
			'fname'=>$fname,
			'lname'=>$lname,
			'email'=>$email,
			'pno'=>$pno,
		);
		$model=new UserModel();
		$model->insert($data);
        $response = [
            'status'   => 201,
            'data'    => $data,
            'messages' => [
                'success' => 'Employee created successfully'
            ]
        ];
        return $this->respondCreated($response);	
		
	}
    public function delete($id = null){
        $model = new UserModel();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Employee successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No employee found');
        }
    }


}