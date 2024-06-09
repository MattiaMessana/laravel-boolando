<div class="ms_card mt-4 mb-4">
    <img class="w-100 front" src="{{ Vite::asset('resources/img/' . $prod['frontImage']) }}" alt="">
    <img class="w-100 back" src="{{ Vite::asset('resources/img/' . $prod['backImage']) }}" alt="">
    <div class="ms_card-content p-2">
        <p class="text-muted">{{ $prod['brand'] }}</p>
        <h5>{{ $prod['name'] }}</h5>
        <p class="text-muted d-inline">{{ $prod['price'] }} €</p>
    </div>
</div>
