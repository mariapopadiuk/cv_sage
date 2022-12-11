<div class="block-skills bg-[#161820] text-white  px-7 py-5 mb-5 rounded-lg">
  <h1 class="font-bold text-2xl mb-5 uppercase">Skills</h1>

  <div class="wrapper-skills">
    <div class="demo-preview">

 <?php

// Check rows existexists.
if( have_rows('skills_l') ):

    // Loop through rows.
    while( have_rows('skills_l') ) : the_row();

        // Load sub field value.
        $name = get_sub_field('name');
        $progress = get_sub_field('progress');
        ?>

<div class="progress progress-striped active">
        <div role="progressbar progress-striped" style="width: <?php echo $progress; ?>;" class="progress-bar"><span><?php echo $name; ?></span></div>
      </div> 

  <?php
    endwhile; 
else : 
endif;
?>
</div> 
   <div class="demo-preview">

 <?php

// Check rows existexists.
if( have_rows('skills_r') ):

    // Loop through rows.
    while( have_rows('skills_r') ) : the_row();

        // Load sub field value.
        $name = get_sub_field('name');
        $progress = get_sub_field('progress');
        ?>

<div class="progress progress-striped active">
        <div role="progressbar progress-striped" style="width: <?php echo $progress; ?>;" class="progress-bar"><span><?php echo $name; ?></span></div>
      </div> 

  <?php
  endwhile;  
endif;
?>
</div> 
</div>