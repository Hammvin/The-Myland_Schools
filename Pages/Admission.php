<?php
include 'Header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="header">
                <p class="header-txt">Get Admission</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="admission-txt">
                <p>
                    By choosing <span class="span">The Myland Schools</span> for your child, you have chosen an environment where 
                    every childs abilities are nurtured, appreciated and monitored so as to ensure they attain their full potentials. 
                    We welcome you to come and experience our fascilities and environment.
                </p>
                <p>
                    To enroll your child, kindly <span class="span">fill the form below</span> or 
                    visit us at the school every weekday from 8am to 5pm.
                </p>
            </div>
            <div class="admission-frm">
                <form action="">
                    <div>
                        <p>Parent/Guardiane</p>
                    </div>
                    <div>
                        <label for="">First name:</label>
                        <input type="text" name="fname" placeholder="Enter first name" autocomplete="off" class="form-control" required>
                    </div>
                    <div>
                        <label for="">Second name:</label>
                        <input type="text" name="sname" placeholder="Enter second name" autocomplete="off" class="form-control" required>
                    </div>
                    <div>
                        <label for="">Entry date:</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div>
                        <label for="">Email:</label>
                        <input type="email" name="email" placeholder="Enter your email address" autocomplete="off" required class="form-control">
                    </div>
                    <div>
                        <label for="">Phone:</label>
                        <input type="text" name="phone" placeholder="Enter your phone number" autocomplete="off" required class="form-control">
                    </div>
                    <br>
                    <div>
                        <p>Pupil's Details</p>
                    </div>
                    <div>
                        <label for="">First name:</label>
                        <input type="text" name="pupil1" placeholder="Enter first name" autocomplete="off" required class="form-control">
                    </div>
                    <div>
                        <label for="">Last name:</label>
                        <input type="text" placeholder="Enter last name" class="form-control">
                    </div>
                    <div>
                        <label for="">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <div>
                        <label for="">Class Interested:</label>
                        <input type="text" name="class" placeholder="Enter class..." autocomplete="off" class="form-control" required autocomplete="off">
                    </div>
                    <div>
                        <button class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>



<?php
include 'Footer.php';
?>