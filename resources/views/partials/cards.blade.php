<div class="ms_card mt-4">
    <img class="w-100 front" src="{{ Vite::asset('resources/img/' . $prod['frontImage']) }}" alt="">
    <img class="w-100 back" src="{{ Vite::asset('resources/img/' . $prod['backImage']) }}" alt="">
    <div class="ms_card-content p-2">
        <p>{{ $prod['brand'] }}</p>
        <h5>{{ $prod['name'] }}</h5>
        <p>{{ $prod['price'] }} €</p>
    </div>
</div>
