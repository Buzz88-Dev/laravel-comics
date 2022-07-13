<div class="background_Image">
    <div class="width80">
          <div class="text_left">
            @foreach (config('footer_links') as $link)
                <div class="text_column">
                    <h4>{{ $link['text'] }}</h4>

                    @foreach ($link['service'] as $linkService)
                        <span>{{ $linkService }}</span>
                    @endforeach

                </div>
            @endforeach
          </div>

          <div class="image_right">

          </div>
    </div>
</div>


<div class="footer_backgr">
    <div class="width80">
        <div class="myButton">
            <button>SIGN-UP NOW!</button>
        </div>

        <div class="icons">
            <div>
                <span>FOLLOW US</span>
            </div>

            <div>
                <img src="{{asset('img/footer-facebook.png')}}">
            </div>

            <div>
                <img src="{{ asset('img/footer-twitter.png')}}" alt="">
            </div>

            <div>
                <img src="{{ asset('img/footer-youtube.png')}}" alt="">
            </div>

            <div>
                <img src="{{ asset('img/footer-pinterest.png')}}" alt="">
            </div>

            <div>
                <img src="{{ asset('img/footer-periscope.png')}}" alt="">
            </div>

        </div>
    </div>
</div>

