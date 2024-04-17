@foreach($posts as $sport)
        <h2>{{ $sport->title}}</h2>
        <p>{{ $sport->content}}</p>
        <p>Category: {{ $post->Category->name}}</p>
@endforeach