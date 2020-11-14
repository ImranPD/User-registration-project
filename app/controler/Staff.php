<?php 
	
	namespace App\controler;
	use App\support\Database;


	class Staff extends Database{

		public function staffData($name,$email,$cell,$uname){

			$data=$this->create("INSERT INTO staffs(name,email,cell,uname)values('$name','$email','$cell','$uname')");

			if($data){

				return '<p class="alert alert-success">Registration Successful<button class="close" data-dismiss="alert">&times;</button></p>';

			}
		}

		/**
		 *  Select all staff
		 */

		public function allStaff(){

			$data=$this->all('staffs');

			return $data;
		}

		/**
		 * Staff delete
		 */

		public function staffDelete($id){

			$data=$this->delete('staffs',$id);

			return $data;
		}
		/**
		 * 
		 */

		public function staffProfile($id){

			$data=$this->find('staffs',$id);
			return $data;
		}

		/**
		 * Staff data show for edit
		 */
		public function staffShow($id){

			$data=$this->find('staffs',$id);
			return $data;
		}

		/**
		 * Update Staff
		 */

		public function staffUpdate($name,$email,$cell,$uname,$id){

			$this->update("UPDATE staffs SET name='$name',email='$email',cell='$cell',uname='$uname' WHERE id='$id'");

		}
	}

 ?>