<div class="bg-animate">
  <canvas id="canvas">
  <div class="container mx-auto">
@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>



@include('sections.footer')
  </div>
  </canvas>
</div>