@extends('layouts.navigation')


@section('title', 'Home')

@section('content')
    <br><br><br><br>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators  buttonFloat divFloat">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active buttonFloat" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="buttonFloat"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="buttonFloat"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/content/DURGOD FUSION ORIGINAL.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carouselTextH1">DURGOD FUSION ORIGINAL</h1>
                    <p>Durgod — производитель, продукция которого отличается смазанными с
                        завода стабилизаторами и достойным качеством сборки при разумной стоимости.</p>
                    <a href="/board/2"><button type="button"
                            class="btn btn-dark border border-light carouselButton">подробнее</button></a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/content/corusel.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/content/corusel.png" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
@endsection
