<?php 
	
	namespace App\controler;
	use App\support\Database;

	class Teacher extends Database{

		public function teacherData($name,$email,$cell,$uname){

			$data=$this->create("INSERT INTO teachers(name,email,cell,uname)values('$name','$email','$cell','$uname')");

			if($data){

				return '<p class="alert alert-success">Registration successful<button class="close" data-dismiss="alert">&times;</button></p>';

			}
		}

		/**
		 *  select teachers
		 */

		public function allteacher(){

			$data=$this->all('teachers');
			return $data;
		}

		/**
		 * tacher delete
		 */

		public function teacherDelete($id){

			$data=$this->delete('teachers',$id);
		}

		/**
		 *  view Teacher profile
		 */

		public function teacherProfile($id){

			$data=$this->find('teachers',$id);

			return $data;

		}

		/**
		 * Teacher Show
		 */
			public function teacherShow($id){

				$data=$this->find('teachers',$id);
				return $data;
			}

			/**
			 * Update Teacher
			 */

			public function teacherUpdate($name,$email,$cell,$uname,$id){

				$this->update("UPDATE teachers SET name='$name',email='$email',cell='$cell',uname='$uname' WHERE id='$id'");
			}
	}


 ?>