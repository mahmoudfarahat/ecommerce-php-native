<?php 

class userValidation {
    private $password;
    private $confirm;
    private $email;
    
    



    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of confirm
     */ 
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set the value of confirm
     *
     * @return  self
     */ 
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
        return $this;

        
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
         
    }

    public function passwordValidation()
    {
        $errors =[];
        $pattern = "^[a-zA-Z]\w{3,14}$";
        $patternMsg = "wrong passwood fomrat";
        if(!$this->password){
            $errors['password'] = "<div class='alert alert-danger'> Password is Required</div>";
        }
        if(!$this->confirm){
            $errors['confirm'] = "<div class='alert alert-danger'> Confirm Password is Required</div>";
        }
        if(empty($errors)){
            if(!preg_match($pattern,$this->password)){
                $errors['pattern'] = "<div class='alert alert-danger'> .   $patternMsg </div>";
            }
            if($this->password  != $this->confirm)
            {
                $errors['confirm'] = "<div class='alert alert-danger'> Password doesnt match</div>";
            }
        }
        return $errors;
    }

    public function emailValidation()
    {
        $errors =[];
        $pattern = "^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$";
        $patternMsg = "Email validation. With this short expression you can validate
                      for proper email format. It's short and accurate.";
        if(!$this->email){
            $errors['email'] = "<div class='alert alert-danger'> email is Required</div>";
        }else{
            if(!preg_match($pattern,$this->email)){
                $errors['pattern'] = "<div class='alert alert-danger'> wrong email fomrat</div>";
            }
        }
return $errors;




    }
}




?>