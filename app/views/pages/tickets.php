<?php require APPROOT . '/views/inc/header.php'; ?> 
	
    <?php
       if(isset($data) && !empty($data))
       {
            foreach ($data as $key => $value)
            {
                foreach ($value as $key1 => $value1)
                {
                    if($value1->contactId==$_SESSION['contact_id'])
                    {
                        echo '<div class="row">';
                            echo '<div class="col-lg-4 col-md-4">';
                                echo '<div class="fh5co-blog animate-box">';
                                    echo '<div class="blog-text" style="margin: 30px;">';
                                        echo '<h3>#'.$value1->ticketNumber.' '.ucwords($value1->subject).'</h3>';
                                        echo '<span class="">Category : '.$value1->category;
                                        echo '<span class="">Created On : '.date("j-M-Y h:i a",strtotime($value1->createdTime));
                                        echo '<span class="">Status : '.$value1->status;
                                        echo '<br><span class="">Ticket Id : '.$value1->id;
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</dvi>';
                    }
                }
            }
       }
       else
       {?>
        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-push-1 animate-box">
                        <div class="fh5co-contact-info">
                            <img src="<?php echo URLROOT?>/images/wrong.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php }
    ?>
	
<?php require APPROOT . '/views/inc/footer.php'; ?> 