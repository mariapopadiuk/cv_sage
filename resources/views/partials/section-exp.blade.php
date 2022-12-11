<div class="block-work bg-[#161820] text-white px-7 py-5 mb-5 rounded-lg">
  <h1 class="font-bold text-2xl mb-5 uppercase">WORK EXPERIENCE</h1> 
  <?php if( have_rows('expirience') ): 
    while( have_rows('expirience') ) : the_row(); 
        $job_title = get_sub_field('job_title');
        $company = get_sub_field('company');
        $description = get_sub_field('description');
        $timeline = get_sub_field('timeline'); 
        ?> 
        <div class="flex mb-5">
          <div class="w-5/6 text-lg tracking-wide text-[#85889C]">
            <h3 class="text-[#029D36] font-bold"><?php echo $job_title; ?></h3>
            <p class="mb-5"><?php echo $company; ?></p>
          <?php echo $description; ?>
          </div>
          <div class="w-1/6">
            <p class="text-[#85889C]"><?php echo $timeline; ?></p>
          </div>
        </div> 
    <?php endwhile; 
  endif; ?> 
</div>