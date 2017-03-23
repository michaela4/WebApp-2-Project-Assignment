<!-- Blog Post -->

<div class="card mb-4"> 
    <div class="card-block">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text">{{ $post->body }}</p>
        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
    </div>
    <div class="card-footer text-muted">
    	{{ $post->user->name }} on 
        {{ $post->created_at->toFormattedDateString() }}
    </div>
</div>
