<!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                
                @if (Auth::check())<br>
                    <a class="nav-link" href="/posts/create">
                        <button type="submit" class="btn btn-primary"> Create a Post
                        </button>
                    </a>
                @endif
           
                <!-- About Widget -->
                <div class="card my-4">
                    <h5 class="card-header">About</h5>
                    <div class="card-block">
                        <img src="/img/about1.png" style="border-radius: 50%; margin-left: 95px" width="120" height="120"><br><br>
                        This is a sharing webapp for programmers who like to express about their brilliant thoughts, wild imaginations and innovative ideas to their fellow programmers. Have fun!

                    </div>
                </div>

               <!-- Archives -->
                <div class="card my-4">
                    <h5 class="card-header">Archives</h5>
                    <div class="card-block">
                        <ol class="list-unstyled">
                            @foreach ($archives as $archive)
                                <li>
                                    <a href="/?month={{ $archive['month'] }}&year{{ $archive['year'] }}">
                                        <li>{{ $archive['month'].' '.$archive['year']  }}</li>
                                    </a>
                                </li>
                             @endforeach
                        </ol>
                    </div>
                </div>

            </div>