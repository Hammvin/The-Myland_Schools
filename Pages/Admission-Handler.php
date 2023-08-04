<?php

    $fname = $sname = $date1 = $email = $phone = $pupil_name1 = $pupil_name2 = $dob = $class ="";
    $fnameErr = $snameErr = $date1Err = $emailErr = $phoneErr = $pupil_name1Err = $pupil_name2Err = $dobErr = $classErr = "";
    function Grab_data(){
        if(isset($_POST['submit'])){

            if(empty($_POST['fname'])){
                $fnameErr = 'First name required!';
            }else{
                // Clean the grabbed data
                $fname = Data_cleaner($_POST['fname']);

                //Check name format and validate
                if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
                    $fnameErr = 'Only letters allowed!';
                }
            }

            if(empty($_POST['sname'])){
                $snameErr = 'Second name required!';
            }else{
                // Clean the grabbed data
                $sname = Data_cleaner($_POST['sname']);

                //check name format and validate
                if (!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
                    $snameErr = 'Only letters allowed!';
                }
            }

            if(empty($_POST['entry_date'])){
                $date1Err = 'Entry date is required!';
            }else{
                // Clean the grabbed data
                $date1 = Data_cleaner($_POST['entry_date']);

                //Check formate
                if(!preg_match("/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/",$date1)){
                    $date1Err = 'Invalid date formate';
                }
            }

            if(empty($_POST['email'])){
                $emailErr = 'Email is required!';
            }else{
                //Clean grabbed data
                $email = Data_cleaner($_POST['email']);

                //Check formate
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST['phone'])){
                $phoneErr = 'Phone number required!';
            }else{
                //Clean grabbed data
                $phone = Data_cleaner($_POST['phone']);

                //Check formate
                if(!preg_match('/^[0-9]{10}+$/',$phone)){
                    $phoneErr = 'Invalid phone number formate!';
                }
            }

            if(empty($_POST['pupil_name1'])){
                $pupil_name1Err = 'First name required!';
            }else{
                //Clean grabbed data
                $pupil_name1 = Data_cleaner($_POST['pupil_name1']);

                //Check formate and validate
                if (!preg_match("/^[a-zA-Z-' ]*$/",$pupil_name1)){
                    $pupil_name1Err = 'Only letters allowed!';
                }
            }

            if(empty($_POST['pupil_name2'])){
                $pupil_name2Err = 'Second name required!';
            }else{
                //Clean data
                $pupil_name2 = Data_cleaner($_POST['pupil_name2']);

                //Check formate
                if(!preg_match("/^[a-zA-Z-' ]*$/",$pupil_name2)){
                    $pupil_name2Err = 'Only letters allowed!';
                }
            }

            if(empty($_POST['dob'])){
                $dobErr = 'Date is required!';
            }else{
                //Clean data
                $dob = Data_cleaner($_POST['dob']);

                //Check formate
                if(!preg_match("/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/",$dob)){
                    $dobErr = 'Invalid date formate';
                }
            }

            if(empty($_POST['class'])){
                $classErr = 'Class is required!';
            }else{
                //Clean data
                $class = Data_cleaner($_POST['class']);
            }  
        }

        function Data_cleaner($data){
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            $data = trim($data);

            return $data;
        }   
    }
?>