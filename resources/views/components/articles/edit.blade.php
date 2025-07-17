<x-main-layout>
    <x-slot:pageTitle>Modifica Articolo</x-slot:pageTitle>
    <x-section-title title="Modifica articolo"/>

    <x-centered-container>
        <div class="row justify-content-center">
   <form class="col-md-6" action="{{route('articles.update',$article)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <img src="{{$article->image}}" alt="{{$article->title}}"class="img-fluid">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo Articolo</label>
    <input value="{{$article->title}}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
    @error('title')<span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Testo Articolo</label>
  <textarea class="form-control" name="content" style="height:100px">{{$article->content}}</textarea>
  @error('content')<span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Autore Articolo (nome e cognome)</label>
    <input value="{{$article->author}}"type="text" class="form-control" name="author" aria-describedby="emailHelp">
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
<button type="submit" class="btn btn-primary">Modifica articolo</button>
</form>
</div>
</div>
    </x-centered-container>
</x-main-layout>
