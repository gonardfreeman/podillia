<div class="blog-masthead">
    <div class="container blog_header">
        <a class="logo" href="/">
            <img src="{{asset("/images/ballons_logo.svg")}}" alt="Поділля">
            <span>Поділля</span>
        </a>
        <nav class="nav blog-nav">
            @foreach ($menus as $menu)
                <a class="nav-link" href="/{{$menu->link}}">{{$menu->name}}</a>
            @endforeach
        </nav>
    </div>
</div>