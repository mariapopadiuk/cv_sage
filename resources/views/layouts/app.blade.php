<div>
  <canvas id="canvas"></canvas>
  <div class="container xl mx-auto">
@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>


@include('sections.footer')
  </div>
</div>