<x-main-layout>
    <x-slot:pageTitle>Homepage</x-slot:pageTitle>
    <x-centered-container>
        <x-section-title title='I nostri ultimi articoli...'/>
        <div class="row g-3">
            @forelse($articles as $article)
            <x-card-item :item='$article'/>
            @empty
            <p class="text-center">Non ci sono articoli da mostrare</p>
            @endforelse
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-md-2">
                <a href="{{route('articles.index')}}" class="btn btn-primary">Tutti i nostri articoli</a>
            </div>
        </div>
    </x-centered-container>
</x-main-layout>