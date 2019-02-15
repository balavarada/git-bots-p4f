<div class="box">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content">
      <ul class="box-category">
      <?php foreach ($informations as $information) { ?>
      
      <?php
    
    $len = strlen($information['href']);
          
          $act_cat=substr($information['href'],$len-1,$len);

    ?>

        
        <?php
        if(isset($_GET['information_id']))
        {
            if($act_cat == $_GET['information_id'])
            {
            
        ?>
                <li class="active-info">
        <?php        
            }
            else
            {
        ?>
                <li>
        <?php
            }
        
        }
        else
        {
        ?>
            <li>
        <?php
        }
        ?>
      
      <a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
      <?php } ?>
      <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
      <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
    </ul>
  </div>
</div>
