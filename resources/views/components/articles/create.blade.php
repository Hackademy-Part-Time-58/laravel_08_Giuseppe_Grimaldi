<x-main-layout>
    <x-slot:pageTitle>Pubblica Articolo</x-slot:pageTitle>
    <x-section-title title="Pubblica Articolo"/>
    <x-centered-container>
        <div class="row justify-content-center">
   <form class="col-md-6" action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo Articolo</label>
    <input value="{{old('title')}}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
    @error('title')<span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Testo Articolo</label>
  <textarea class="form-control" name="content" style="height:100px">{{old('content')}}</textarea>
  @error('content')<span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Autore Articolo(nome e cognome)</label>
    <input value="{{old('author')}}"type="text" class="form-control" name="author" aria-describedby="emailHelp">
    @error('author')<span class="text-danger">{{$message}}</span>@enderror
</div>
 <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Immagine Articolo</label>
    <input type="text" class="form-control" name="image" aria-describedby="emailHelp">
    @error('image')<span class="text-danger">{{$message}}</span>@enderror
</div> -->
<div class="mb-3">
  <label for="formFileLg" class="form-label">Seleziona un'immagine per il tuo articolo</label>
  <input class="form-control form-control-lg" name="image" type="file">
  @error('image')<span class="text-danger">{{$message}}</span>@enderror
</div>
<button type="submit" class="btn btn-primary">Pubblica il tuo articolo</button>
</form>
</div>
</div>
    </x-centered-container>
</x-main-layout>
