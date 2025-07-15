<x-main-layout>
    <x-slot:pageTitle>Contatti</x-slot:pageTitle>
    <x-section-title title="Registrati" />
    <x-centered-container>
        <div class="row justify-content-center">

            <form class="col-md-6" method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome e Cognome</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo e-mail</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Ripeti password</label>
                    <input type="password" class="form-control" name="password_confirmation" aria-describedby="emailHelp">
                </div>
                <a href="{{route('login')}}">Hai già un account?</a>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Iscriviti!</button>
                </div>
                <x-errors />
            </form>
        </div>
    </x-centered-container>
</x-main-layout>