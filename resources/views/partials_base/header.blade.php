<div class="dcHeader">
    <nav class="dcNavbar">
        <div class="image">
            <img src="{{asset('img/dc-logo.png')}}">
        </div>

        <ul>
            {{-- prendo l array ritornato dal file header_links.php in config --}}
            @foreach (config('header_links') as $link)
            <li>
                <a>
                    {{ $link['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</div>

<div class="jumbo">
    <div class="jumbotron">
      <img src="{{asset('img/jumbotron.jpg')}}" alt="">
    </div>
</div>

