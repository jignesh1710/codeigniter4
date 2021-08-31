<?php

namespace App\Controllers;
use App\Models\UserModel;
use Codeigniter\Controller;

class Hello extends BaseController
{
	public function index()
	{
		$model=new UserModel();
		print_r("<pre>");
        print_r($model->findAll());
	}
	public function insert()
	{
		// $model=new UserModel();
		echo view("insert");
	}
	public function fpdf()
	{
		
		echo view("fpdf");
	}
	public function insertcode()
	{
		helper('form', 'url');
		$validation =  \Config\Services::validation();
		$rules=
			[
				'fname'=>'required',
				'lname'=>'required',
				'email'=>'required',
				'pno'=>'required|max_length[10]|min_length[10]'
			];
			if(!$this->validate($rules))
			{
				return view("insert",["validation",$this->validator]);
			}
		
		
		// $fname=$this->request->getvar("fname");
		// $lname=$this->request->getvar("lname");
		// $email=$this->request->getvar("email");
		// $pno=$this->request->getvar("pno");
		// $data=array(
		// 	'fname'=>$fname,
		// 	'lname'=>$lname,
		// 	'email'=>$email,
		// 	'pno'=>$pno,
		// );
		// $model=new UserModel();
		// $model->insert($data);
		// return redirect()->to('hello/fetch');
		// redirect("hello/fetch","refresh");
		// $db=\Config\Database::connect();
		// $builer=$db->table("tbl_insert");
		// $builer->insert($data);
		// print_r("<pre>");
		// print_r($db);

	}
	public function fetch()
	{
		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM tbl_insert');
        $data["ftc"] = $query->getResultArray();
		return view("fetch",$data);
	}
	public function delete($id)
	{
		$db=\Config\Database::connect();
		$builer=$db->table("tbl_insert");
		$builer->where('id',$id);
		$builer->delete();
		return redirect()->to("hello/fetch");
	}
	public function edit($id)
	{
		$db=\Config\Database::connect();
		$data['edit']=$db->query("select * from tbl_insert where id='$id'")->getRow();
		return view("edit",$data);
	}
	public function editcode()
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
		$db=\Config\Database::connect();
		$builder=$db->table("tbl_insert");
		$builder->where('id',$_POST['id']);
		$builder->update($data);
		return redirect()->to("hello/fetch");

	}
	public function encrypt()
	{
		$encrypt=\Config\Services::encrypter();
		$k=$encrypt->encrypt("jignesh");
		echo $k;
		echo $encrypt->decrypt($k);
	}
	public function login()
	{
		return view("login");
	}
	public function logincode()
	{
		$db=\Config\Database::connect();
		$fname=$this->request->getvar("fname");
		$email=$this->request->getvar("email");
		$builder=$db->query("select * from tbl_insert where fname='$fname' and email='$email'")->getRow();
		print_r($builder);
		if($builder)
		{
			$session = session();
			
			echo $session->set("user",$builder->fname);
			return redirect()->to("hello/fetch");
			
		}
		else
		{
			echo "<script>alert('Login Not SuccessFully');</script>";
		}
	}
	public function image()
	{
		return view("image");
	}
	public function imagecode()
	{
		$file=$this->request->getFile("image");
		if($file->isValid())
		{
			$file->store();
		}
	}
	public function imagecodemove()
	{
		$file=$this->request->getFile("image");
		if($file->isValid())
		{
			 echo "<br> Name ".$file->getName();
			 echo "<br> TempNAme ".$file->getTempName();
			 echo "<br> ClientExtension ".$file->getClientExtension();
			 echo "<br> MimeTypoe ".$file->getClientMimeType();
			 echo "<br>Random Name ".$file->getRandomName();
			$file->move('./public/uploads');
		}
	}
}
 