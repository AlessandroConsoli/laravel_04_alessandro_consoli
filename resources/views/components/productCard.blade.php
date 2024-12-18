<div class="col-12 col-md-3">
    <div class="card m-3" style="width: 18rem;">
        <img src="{{$productImg}}" class="card-img-top img-fluid" alt="phone image">
        <div class="card-body">
            <h3 class="card-title">{{$brand}}</h3>
            <h5 class="card-title">{{$model}}</h5>
            <p class="card-text">Disponibile in diverse varianti di colori</p>
            <a href="{{route('product_details', [$id])}}" class="btn btn-primary">Vai al dettaglio</a>
        </div>
    </div>
</div>