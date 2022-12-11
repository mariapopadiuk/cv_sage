<div class="block-education bg-[#161820] text-white px-7 py-5 mb-5 rounded-lg">
  <h1 class="font-bold text-2xl mb-5 uppercase">EDUCATION AND TRANING</h1>


  <?php

// Check rows existexists.
if( have_rows('education_items') ):

    // Loop through rows.
    while( have_rows('education_items') ) : the_row();

        // Load sub field value.
        $title = get_sub_field('title');
        $entity = get_sub_field('entity');
        $certification = get_sub_field('certification');
        $timeline = get_sub_field('timeline');// End loop.
        ?>

  <div class="flex mb-5">
    <div class="w-5/6 text-lg tracking-wide text-[#85889C]">
      <h3 class="text-[#029D36] font-bold"><?php echo $title; ?></h3>
      <p><?php echo $entity; ?>
        <?php  if($certification){?>
           Certification - <a class="underline" href="<?php echo $certification; ?>" target="_blank">Check here</a></p><?php
          } ?>
      
    </div>
    <div class="w-1/6">
      <p class="text-[#85889C]"><?php echo $timeline; ?></p>
    </div>
  </div>

  <?php
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
</div>
