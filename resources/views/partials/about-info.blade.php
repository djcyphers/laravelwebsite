<div class="container">
    <div id="about-section" class="row">

        <div class="responsive-box col-md-6 col-lg-3">
            <div class="card about-wrapper text-center" style="height: 255px !important;">

                <img src="https://i.ibb.co/yhnT66w/6010163-0264.jpg" class="card-img-top zoom about-image" alt="avatar">

                <ul class="socialshare-icons">
                    <li>
                      <a href="https://facebook.com/iheardancemusic">
                        <i class="fa fa-facebook-f">@fa('facebook-f')</i>

                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/djcyphers">
                        <i class="fa fa-instagram">@fa('instagram')</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/djcyphers">
                        <i class="fa fa-twitter">@fa('twitter')</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.behance.net/djcyphers">
                        <i class="fa fa-behance">@fa('behance')</i>
                      </a>
                    </li>
                  </ul>

                <div class="card-body about-card mb-2">
                   <h5 class="card-title about-title">DJ Cyphers</h5>
                  <p class="card-text small job-title">Designer / Developer</p>
                </div>

              </div>
        </div>

        <div class="responsive-box col-md-6 col-lg-3">
            <div class="card text-white border-0 bg-transparent mt-4 about-section about-blog" style="cursor: pointer;" onclick="location.href='/blog';">
                    <img src="{{ asset('img/ImagePlaceholder.png') }}" class="card-img-top zoom" alt="placeholder" style="filter: brightness(0%);">
                    <div class="card-img-overlay">
                        <p class="card-text line-1 anim-typewriter">My__Blog()</p>
                        <p class="card-text line-1 anim-typewriter">My__Ideas()</p>
                        <p class="card-text line-1 anim-typewriter">My__Life()</p>
                    </div>
            </div>
        </div>

        <div class="responsive-box col-md-6 col-lg-3">
            <div class="card text-white border-0 bg-transparent mt-4 about-section">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <div class="flip-card-text text-center">@fa('user') @fa('heart') @fa('home') @fa('music')</div>
                        <img src="{{ asset('img/ImagePlaceholder.png') }}" alt="Avatar" height="255px">
                      </div>
                      <div class="flip-card-back">
                        <ul class="list-group list-group-flush rounded">
                            <li class="list-group-item link-soundcloud d-flex align-items-center justify-content-center" onclick="scUrl();" style="height: 7.9rem;">@fa('soundcloud')&nbsp; SoundCloud</li>
                            <li class="list-group-item link-mixcloud d-flex align-items-center justify-content-center" onclick="mcUrl();" style="height: 7.9rem;">@fa('mixcloud')&nbsp; MixCloud</li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive-box col-md-6 col-lg-3">
            <div class="card text-white border-0 bg-transparent mt-4 about-section">
                <div class="embed-responsive embed-responsive-16by9" style="height: 255px;">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RoNNJ_nPWY0?controls=0"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

