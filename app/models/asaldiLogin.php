<?php

class asaldiLogin extends database {

    public function login($data)
    {
        $username = $data['username'];
        $password = $data['password'];

        // Check Username / Email Existance
        $this->query("SELECT * FROM asaldi_admin WHERE `username`=?",[$username]);
        if($this->rowsCount() > 0):

            // Fetch Data
            $dataCheck  = $this->fetch();
            $dbPassword = $dataCheck->password;
            $unique_id  = $dataCheck->unique_id;

            // Verify Password
            if(password_verify($password,$dbPassword)):
                return($unique_id);
            endif;
            
        else:
            // Show Error (Username / Email Not Found)
            return(FALSE);
        endif;
    }

}

?>