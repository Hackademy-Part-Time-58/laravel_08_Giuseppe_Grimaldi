<x-main-layout>
    <x-slot:pageTitle>Dashboard</x-slot:pageTitle>
    <x-section-title title="I miei annunci" />
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td><img src="{{asset($article->image)}}" alt="{{$article->title}}" style="width:50px"></td>
                <td>{{$article->title}}</td>
                <td>{{$article->author}}</td>
                <td><a href="{{route('articles.edit',$article)}}" class="btn btn-warning">modifica</a></td>
                <td>
                    <form action="{{route('articles.destroy', $article)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">elimina</button>
                    </td>

                    </form>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</x-main-layout>