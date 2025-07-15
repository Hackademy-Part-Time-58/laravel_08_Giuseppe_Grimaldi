<x-main-layout>
    <x-slot:pageTitle>Contatti</x-slot:pageTitle>
    <x-section-title title="Login" />
    <x-centered-container>
        <div class="row justify-content-center">

            <form class="col-md-6" method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo e-mail</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
                </div>
                <a href="{{route('register')}}">Non sei registrato? clicca qui</a>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </div>
                <x-errors />
            </form>
        </div>
    </x-centered-container>
</x-main-layout>