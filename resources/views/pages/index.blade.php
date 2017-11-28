@extends ('layouts.master')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{$post->heading}}</h2>
                        <p class="blog-post-meta">{{$post->updated_at}} by <a href="#">{{$post->author}}</a></p>
                        <p>{{str_limit($post->body, $limit = 50, $end = '...')}} <a href="/posts/{{$post->link}}">читати повністю</a></p>

                    </div>
                @endforeach

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary {{!$posts->hasMorePages() ? "disabled":""}}" href="{{$posts->nextPageUrl()}}">Назад</a>
                    <a class="btn btn-outline-primary {{$posts->currentPage() == 1 ? "disabled" : ""}}" href="{{$posts->previousPageUrl()}}">Вперед</a>
                </nav>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 offset-sm-1 blog-sidebar">
                {{--<div class="sidebar-module sidebar-module-inset">--}}
                    {{--<h4>About</h4>--}}
                    {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
                {{--</div>--}}
                {{--<div class="sidebar-module">--}}
                    {{--<h4>Archives</h4>--}}
                    {{--<ol class="list-unstyled">--}}
                        {{--<li><a href="#">March 2014</a></li>--}}
                        {{--<li><a href="#">February 2014</a></li>--}}
                        {{--<li><a href="#">January 2014</a></li>--}}
                        {{--<li><a href="#">December 2013</a></li>--}}
                        {{--<li><a href="#">November 2013</a></li>--}}
                        {{--<li><a href="#">October 2013</a></li>--}}
                        {{--<li><a href="#">September 2013</a></li>--}}
                        {{--<li><a href="#">August 2013</a></li>--}}
                        {{--<li><a href="#">July 2013</a></li>--}}
                        {{--<li><a href="#">June 2013</a></li>--}}
                        {{--<li><a href="#">May 2013</a></li>--}}
                        {{--<li><a href="#">April 2013</a></li>--}}
                    {{--</ol>--}}
                {{--</div>--}}
                <div class="sidebar-module">
                    <h4>Корисні сторінки</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://www.facebook.com/podillia">Сторінка у Facebook</a></li>
                        <li><a href="https://osvita.kievcity.gov.ua/#/?_k=bxwbq1">Електронна черга</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection