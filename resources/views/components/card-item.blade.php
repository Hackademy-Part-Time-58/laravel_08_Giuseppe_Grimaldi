<div class="col-md-4 mb-5">
    <div class="card">
      <img src="{{asset($item->image)}}" class="card-img-top" alt="{{$item->title}}">
      <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        <p class="card-text text-truncate">{{$item->content}}</p>
        <a href="{{route('articles.show',$item)}}" class="btn btn-primary">dettaglio articolo</a>
      </div>
    </div>
</div>