<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
    <div class="container">

        <div class="section-title">
            <h2>Check our tasty <span>Menu</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">Show All</li>
                    @foreach($categories as $category)
                        <li data-filter=".filter-{{ str_replace(' ', '_', strtolower($category->title)) }}">{{ $category->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row menu-container">
            @foreach($categories as $category)
                @foreach($category->foods as $food)
                    <div class="col-lg-6 menu-item filter-{{ str_replace(' ', '_', strtolower($category->title)) }}">
                        <div class="menu-content">
                            <a href="#">{{ $food->title }}</a><span>${{$food->price}}</span>
                        </div>
                        <div class="menu-ingredients">
                            {{ $food->receipt }}
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section><!-- End Menu Section -->
