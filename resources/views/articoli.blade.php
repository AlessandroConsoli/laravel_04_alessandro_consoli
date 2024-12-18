<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">            
                @foreach ($products as $product)
                <x-productCard productImg="{{$product['img']}}" brand="{{$product['brand']}}" model="{{$product['model']}}" id="{{$product['id']}}" screen="{{$product['screenSize']}}" ram="{{$product['ram']}}">
                    
                </x-productCard>
                @endforeach
        </div>
    </div>
</x-layout>

