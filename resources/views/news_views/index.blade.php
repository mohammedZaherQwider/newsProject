@extends('layuot.layout')
@section('content')
    <header>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                {{-- @foreach ($news as $new)
            <div class="carousel-item {{ ($loop->first) ? "active" : '' }}"
                        style="background-image: url('{{ asset('uploads/'.$new->image_path) }}')"
                        >
                            <div class="carousel-caption d-none d-md-block">
                                <h3>{{ $new->title }}</h3>
                                    <p>{{ $new->description }}.</p>
                            </div>
                        </div>
            @endforeach --}}
                @for ($i = 0; $i < 3; $i++)
                    @php
                        $new = $news[$i];
                    @endphp
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ asset('uploads/' . $new->image_path) }}')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $new->title }}</h3>
                            <p>{{ $new->description }}.</p>
                        </div>
                    </div>
                @endfor



            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->

    <section>
        <div class="container">

            <h3 class="my-4">last news</h3>

            <!-- Marketing Icons Section -->
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    @php
                        $new = $news[$i];
                    @endphp
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <h4 class="card-header">{{ $new->title }}</h4>
                            <div class="card-body">
                                <p class="card-text">{{ $new->description }}.</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('home.show', $new->id) }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endfor


            </div>
            <!-- /.row -->
        </div>
    </section>
    <section class="gray-sec">
        <div class="container">
            <!-- category Section -->
            <h3 class="my-4">local news</h3>
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    @php
                        $new = $news[$i];
                    @endphp

                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="{{ route('home.show', $new->id) }}"><img class="card-img-top"
                                    src="{{ asset('uploads/' . $new->image_path) }}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ route('home.show', $new->id) }}">{{ $new->title }}</a>
                                </h4>
                                <p class="card-text">{{ $new->description }}!</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('home.show', $new->id) }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <div align="center"><a class="btn btn-success" href="{{ route('home.allNews') }}">more news</a></div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 class="my-4">sports news</h3>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    @php
                        $new = $news[$i];
                    @endphp
                    <div class="col-lg-3  portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('uploads/' . $new->image_path) }}"
                                    alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ route('home.show', $new->id) }}">{{ $new->title }}</a>
                                </h4>
                                <p class="card-text">{{ $new->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('home.show', $new->id) }}" class="btn btn-primary">Learn More</a>
                            </div>

                        </div>
                    </div>
                @endfor
            </div>
            <!-- /.row -->
            <div align="center"><a class="btn btn-success" href="{{ route('home.allNews') }}">more news</a></div>
            <br>
            <br>
        </div>
    </section>
    <section class="gray-sec">
        <div class="container">

            <!-- category Section -->
            <h3 class="my-4">International news</h3>

            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    @php
                        $new = $news[$i];
                    @endphp
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ asset('uploads/' . $new->image_path) }}"
                                    alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="{{ route('home.show', $new->id) }}">{{ $new->title }}</a>
                                </h4>
                                <p class="card-text">{{ $new->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('home.show', $new->id) }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div align="center"><a class="btn btn-success" href="{{ route('home.allNews') }}">more news</a></div>
        </div>
    </section>




    <section>
        <div class="container">
            <!--  Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h3>main news title</h3>
                    <p>The Modern Business template by Start Bootstrap includes:</p>
                    <ul>
                        <li>
                            <strong>Bootstrap v4</strong>
                        </li>
                        <li>jQuery</li>
                        <li>Font Awesome</li>
                        <li>Working contact form with validation</li>
                        <li>Unstyled page elements for easy customization</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                        reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia
                        dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded full-width" src="{{ asset('asset/img/6.jpeg') }}" alt=""
                        style="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum
                        deleniti
                        beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-secondary btn-block" href="{{ route('home.contact') }}">contact us</a>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </section>
@endsection
