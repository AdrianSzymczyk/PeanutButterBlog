@props(['post' => $post])

<div class="mb-3 card-footer">
    <a href="{{ route('users.posts', $post->user) }}" class="fw-bolder btn-link pe-3">{{ $post->user->name }}</a> <span class="">{{ $post->created_at->diffForHumans() }}</span> <br>
    <h4 class='my-2 fw-bold'>{{ $post->title }}</h4>
    <p class="my-2 ps-4">{{ $post->body }}</p>
    <div class='btn-group'>
        @can('edit', $post)
            <a href="/posts/{{ $post->id }}/edit" class='btn btn-link'>Edytuj</a>
        @endcan
        @can('delete', $post)
            <form action='{{ route('posts.destroy', $post) }}' method='post' class="me-1">
                @csrf
                @method('DELETE')
                <button type='submit' class='btn btn-link'>Usuń</button>
            </form>
        @endcan
        @auth
            @if(!$post->likedBy(auth()->user()))
                <form action='{{ route('posts.likes', $post) }}' method='post' class="me-1">
                @csrf
                <button type='submit' class='btn btn-link'>Like</button>
                </form>
            @else
                <form action='{{ route('posts.likes', $post) }}' method='post' class="me-1">
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-link'>Unlike</button>
                </form>
            @endif
        @endauth
        <p class="ps-2" style='margin-top: 0.3rem; font-weight: bold; color: #606C38;'>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</p>
    </div>
</div>
