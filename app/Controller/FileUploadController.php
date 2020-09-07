<?php

class FileUploadController extends AppController {
	public function index() {
		$this->set('title', __('File Upload Answer'));

		$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
	}

	public function  upload(){
		if(isset($_POST["submit"])){
        if($_FILES['file']['csv']){
            $filename = explode('.', $_FILES['file']['csv']);
            debug($filename);
            if($filename[1]=='csv'){

                $handle = fopen($_FILES['file']['csv'], "r");
                while ($data = fgetcsv($handle)){
                    $item1 = $data[0];

                    $data = array(
                        'fieldName' => $item1
                    );
                  //  $item2 = $data[1];
                  //  $item3 = $data[2];
                  //  $item4 = $data[3];
                    $file_upload = $this->file->newEntity($data);
                    $this->file_uploads->save($file_upload);
                }
                fclose($handle);
            }
        }
    }
    $this->render(FALSE);
	}

}