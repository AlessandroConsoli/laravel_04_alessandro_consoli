<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h1 class="brand text-center">Dettagli del {{$product['brand']}} - {{$product['model']}}</h1>
            <div class="col-12 col-md-6">
                <img class="custom_img img-fluid rounded" src="{{$product['img']}}" alt="immagine {{$product['model']}}">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="product_details">Schermo da: {{$product['screenSize']}}</h3>
                <h3 class="product_details">RAM da: {{$product['ram']}}</h3>
                <h6>Codice articolo 00001100{{$product['id']}}</h6>
            </div>
        </div>
    </div>
</x-layout>