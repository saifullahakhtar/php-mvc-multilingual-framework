<?php

class asaldiImages extends database {

    public function upload($file)
    {
        if(!empty($file)):
            // File path configuration
            $uploadDir = "./media/";
            $fileName = basename($_FILES['file']['name']);
            $uploadFilePath = $uploadDir.$fileName;
            // Upload file to server
            if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)):
                // Insert file information in the database 
                if($this->query("INSERT INTO `media` (`id`, `file_name`, `uploaded_on`) VALUES (NULL, '$fileName', CURRENT_TIMESTAMP)")):
                    return(TRUE);
                else:
                    return(FALSE);
                endif;
            else:
                return(FALSE);
            endif;
        endif;
    }

    public function retrieve()
    {
        $this->query("SELECT * FROM media ORDER BY id DESC");
        $returnMedia = array();
        while($allMedia = $this->fetch()):
            $returnMedia[] = $allMedia->file_name;
        endwhile;
        return($returnMedia);
    }

}

?>