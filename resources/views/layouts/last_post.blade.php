<div class="col-md-3 col-md-push-1">
    <h4>Latest Posts</h4>
    <ul class="fh5co-footer-links">
        @forelse($blog as $item)
            <li><a href="#">{{ $item['title'] }}</a></li>
        @empty
            <li>Empty</li>
        @endforelse
    </ul>
</div>
