<?php
include 'Header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="header">
                <p class="header-txt">Contact The Myland Schools</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="contact-text">
                <p>
                    You wish to enquire about our school, admissions, syllabus, or anything else? 
                    You can walk in during office hours, give us a call or simply submit the form here.
                </p>
                <p>
                    We’re happy to answer any questions you may have.
                </p>
            </div>
            <div class="contact-form">
                <form action="Contacts.php" method="post">
                    <div>
                        <label for="">Name:</label>
                        <input type="text" name="name" 
                        placeholder="Enter your name" 
                        autocomplete="off" required 
                        class="form-control">
                    </div>
                    <div>
                        <label for="">Contact:</label>
                        <input type="text" name="contact" 
                        autocomplete="off" 
                        placeholder="Enter phone number" 
                        required class="form-control">
                    </div>
                    <div>
                        <label for="">Email Address:</label>
                        <input type="text" name="email" 
                        placeholder="Enter email address" 
                        autocomplete="off" require 
                        class="form-control">
                    </div>
                    <div>
                        <label for="">Message:</label>
                        <textarea name="message" class="form-control" 
                        placeholder="Write your message.." 
                        required cols="50" rows="10"></textarea>
                    </div>
                    <div class="button">
                        <button class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3"></div>
    </div>
</div>



<?php
include 'Footer.php';
?>