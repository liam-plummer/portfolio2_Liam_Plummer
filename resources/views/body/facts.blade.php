 <!-- ======= Facts Section ======= -->
 <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
        @foreach($facts as $e)
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="{{$e->icon}}"></i>
              <span data-toggle="counter-up">{{$e->number}}</span>
              <p>{{$e->description}}</p>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section><!-- End Facts Section -->
