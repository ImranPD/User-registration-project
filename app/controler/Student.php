<?php 
	
	namespace App\controler;

	use App\support\Database;


	class Student extends Database{

		public function valueSend($name,$email,$cell,$uname){

			$data=$this->create("INSERT INTO oops(name,email,cell,uname)values('$name','$email','$cell','$uname')");

			if($data){

				return '<p class="alert alert-success">student registration successful<button class="close" data-dismiss="alert">&times;</button></p>';

			}
		}
		/**
		 * all user select function
		 */
		public function allUser(){

			$data=$this->all('oops');
			return $data;
		}

		/**
		 *  delete user function
		 */
		public function deleteUser($id){

			$data=$this->delete('oops',$id);
			

			if($data){

				return '<p class="alert alert-success">student delete successful<button class="close" data-dismiss="alert">&times;</button></p>';


			}
		}

		/**
		 *  view user function
		 */

		public function viewUser($id){

			$data=$this->find('oops',$id);
			return $data;
		}

		/**
		 * value show for edit
		 */

		public function valueShow($id){

			$data=$this->find('oops',$id);
			return $data;
		}

		public function updateStudent($name,$email,$cell,$uname,$id){

			$this->update("UPDATE oops SET name='$name',email='$email',cell='$cell',uname='$uname' WHERE id='$id'");
			header('location:table.php');

		}
	}

 ?>