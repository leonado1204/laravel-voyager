<!-- Side widgets-->

<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter search term..."
                    aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
            </div>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">

            <ul class="list-unstyled mb-0 row">
                @foreach ($categories as $category)
                    <li class="col-sm-6"><a
                            href="{{ route('category.index', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
    <!-- Tags widget-->
    <div class="card mb-4">
        <div class="card-header">Tags</div>
        <div class="card-body">

            <ul class="list-unstyled mb-0 row">
                @foreach ($tags as $tag)
                    <li class="col-sm-6"><a
                            href="{{ route('tag.index', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
            use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>
