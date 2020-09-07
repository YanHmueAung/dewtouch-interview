<?php
	class MigrationController extends AppController{


		public function index(){
			$this->set('title', __('File Upload Answer'));

		//$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
		}
		
		public function q1(){
			
			$this->setFlash('Question: Migration of data to multiple DB table');
				
			
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
		public function q1_instruction(){

			$this->setFlash('Question: Migration of data to multiple DB table');
				
			
			
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
	}