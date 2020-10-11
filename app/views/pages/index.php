<?php require APPROOT . '/views/inc/header.php'; ?> 
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <h3>Submit a Ticket</h3>
                    <form action="<?php echo URLROOT;?>/pages/new_ticket" method="POST">
                        <?php 
                        if(!empty($data) && !isset($data->errorCode))
                        {
                            echo "<h4>Ticket Information</h4>";
                            foreach ($data as $key => $value)
                            {
                                echo "<div class='row form-group'>";
                                    echo "<div class='col-md-12'>";
                                        echo "<label for='department'>Department</label>";
                                        echo "<select name='department' class='form-control'>";
                                            foreach ($value as $key1 => $value1)
                                            {   echo "<option value='".$value1->id."'>".ucwords($value1->name)."</option>";  }
                                        echo "</select>";
                                    echo "</div>";
                                echo "</div>";                                
                            }?>
                            
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="category">Category</label>
                                    <select name='category' class='form-control'>
                                        <option value="NEW Project CI/CD Pipeline Setup">NEW Project CI/CD Pipeline Setup</option>
                                        <option value="Update CI/CD Pipeline Configuration">Update CI/CD Pipeline Configuration</option>
                                        <option value="DevSecOps Pipeline Setup">DevSecOps Pipeline Setup</option>
                                        <option value="CI/CD pipeline failure">CI/CD pipeline failure</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="20" rows="5" class="form-control" style="resize:none" required></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="priority">Priority</label>
                                    <select class="form-control" name="priority">
                                        <option value="high">High</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Contact Details</h4>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Contact Name</label>
                                    <input type="text" id="name" name="contact_name" class="form-control" readonly="readonly" value="<?php echo ucwords($_SESSION['user_name']);?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Email</label>
                                    <input type="email" id="email" name="contact_email" class="form-control" readonly="readonly" value="<?php echo $_SESSION['user_email'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                        <?php } else{?>
                            <div class="fh5co-contact-info">
                                <img src="<?php echo URLROOT?>/images/wrong.jpg">
                            </div>
                        <?php } ?>
                    </form>     
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="fh5co-contact-info">
                        <img src="<?php echo URLROOT?>/images/cust_sup.jpeg">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php 
        if(isset($_SESSION['created']))
        {
            if($_SESSION['created'])
            {
                echo "<script type='text/javascript'>
                        alert('Ticket Created Successfully..');
                    </script>";
            }
            else
            {
                echo "<script type='text/javascript'>
                        alert('Oops!! Something went wrong');
                    </script>";
            }
        }
        unset($_SESSION['created']);
    ?>
<?php require APPROOT . '/views/inc/footer.php'; ?> 