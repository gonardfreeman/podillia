@extends ('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{$post->heading}}</h2>
                    <p class="blog-post-meta">{{$post->updated_at}} by <a href="#">{{$post->author}}</a></p>
                    <p>{{$post->body}}</p>
                    @if (count($files) > 0)
                    <div class="related-files">
                        <h3>Пов'язані файли:</h3>
                        <ol class="files">
                            @foreach ($files as $file)
                                <li>
                                    <a href="{{asset("/files/".$file->name)}}" target="_blank">{{$file->heading}}</a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                    @endif
                    <!-- /.related-files -->
                    <!-- /.blog-post-meta -->
                    <!-- /.blog-post-title -->
                </div>
                <!-- /.blog-post -->
            </div>
            <!-- /.col-sm-8 blog-main -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection