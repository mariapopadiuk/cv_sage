<div class="wrapper p-5 md:flex justify-between">
  <section class=" section-left md:w-1/3 md:mr-5 flex justify-center">
    @include('partials.section-card');
  </section>
  <section class="section-right md:w-2/3">
    @include('partials.section-about');
    @include('partials.section-edu');
    @include('partials.section-exp');
    @include('partials.section-skills');
  </section>
</div>
