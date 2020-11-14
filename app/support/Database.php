<?php 
	
	namespace App\support;

	use mysqli;

	abstract class Database{

		private $host='localhost';
		private $user='root';
		private $pass='';
		private $db='object';
		private $connection;

		private function connection(){

			return $this->connection=new mysqli($this->host,$this->user,$this->pass,$this->db);

		}

		/**
		 * insert data
		 */

		protected function create($sql){
			$status=$this->connection()->query($sql);

			if($status){

				return true;

			}else{

				return false;

			}
		}
		/**
		 * select all data
		 */
		public function all($tbl,$order='DESC'){

			return $this->connection()->query("SELECT * FROM $tbl ORDER BY id $order");

		}

		/**
		 * delete data
		 */

		public function delete($tbl,$id){

			$status=$this->connection()->query("DELETE FROM $tbl WHERE id='$id'");

			if($status){

				return true;

			}
		}
		/**
		 * view data 
		 */
		public function find($tbl,$id){

			return $this->connection()->query("SELECT * FROM $tbl WHERE id='$id'");
		}
		/**
		 * all data
		 */
		public function update($sql){

			$this->connection()->query($sql);

		}


	}


 ?>