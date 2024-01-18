<div class="row mt-5">
    <div class="col col-12 text-center">
        <h2>Hola {{ $name }}</h2>
    </div>
    <div class="col col-8 mx-auto">
        @if (optional(auth()->user())->role == 2)
        @livewire('appointment')
        @else
        <h1 class="text-center">Tec-Medika</h1>
        @endif
    </div>
</div>