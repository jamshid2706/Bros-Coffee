<!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
    <div class="container">

        <div class="section-title">
            <h2>Check our <span>Specials</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
                    </li>
                    @foreach($desserts as $dessert)
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab"
                               href="#tab-{{ $dessert->id }}">{{ $dessert->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach($desserts as $dessert)
                        <div class="tab-pane" id="tab-{{ $dessert->id }}">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{ $dessert->title }}</h3>
                                    <p class="fst-italic">{{ $dessert->description }}</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ 'storage/' . $dessert->image }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!-- End Specials Section -->
