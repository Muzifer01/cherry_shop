<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($carrousel as $key => $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}" aria-label="Diapositiva {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($carrousel as $item)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100 carousel-image" src="{{ $item['url'] }}" alt="{{ $item['name'] }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="carousel-title">{{ $item['name'] }}</h5>
                    <p class="carousel-description">{{ $item['description'] ?? '' }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($services as $item)
      <div class="col">
        <div class="card border-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">{{ $item['name'] }}</h5>
              <p class="card-text">{{ $item['description'] }}</p>
            </div>
        </div>
      </div>
      @endforeach
    </div>
</div>

<style>
.carousel-image {
    max-height: 600px;
    object-fit: cover;
}

.carousel-caption {
    background-color: rgba(0, 0, 0, 0.7);
    border-radius: 10px;
    padding: 20px;
}

.carousel-title {
    color: #ffffff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    font-weight: bold;
}

.carousel-description {
    color: #f0f0f0;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
}

.carousel-indicators [data-bs-target] {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #fff;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 30px;
    height: 30px;
}

.visually-hidden {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0, 0, 0, 0) !important;
    white-space: nowrap !important;
    border: 0 !important;
}
</style>