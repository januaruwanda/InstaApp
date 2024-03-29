<!DOCTYPE html>
<html>
<title>InstaApp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Open Sans", sans-serif
    }
</style>

<body class="w3-theme-l5">

    <!-- Navbar -->
    @if (Route::has('login'))
    <div class="w3-top">
        @auth
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>

            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="/images/user.jpg" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
                {{ Auth::user()->name }}
            </a>

        </div>
        <div class="logout" style="text-align:right; margin-right:3px;">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endauth
    </div>
    @else
    <div class="w3-top">
        
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>

            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="/images/user.jpg" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
                Guest
            </a>

        </div>

    </div>
    @endif

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
    </div>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">
                <!-- Profile -->
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">My Profile</h4>
                        <p class="w3-center"><img src="/images/user.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Web Developer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Mojokerto, Indonesia</p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Januari 7, 1997</p>
                    </div>
                </div>
                <br>

                <!-- Accordion -->
                <br>

                <!-- Interests -->
                <div class="w3-card w3-round w3-white w3-hide-small">
                    <div class="w3-container">
                        <p>Interests</p>
                        <p>
                            <span class="w3-tag w3-small w3-theme-d5">News</span>
                            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                            <span class="w3-tag w3-small w3-theme-d2">Games</span>
                            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                            <span class="w3-tag w3-small w3-theme">Games</span>
                            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                            <span class="w3-tag w3-small w3-theme-l2">Food</span>
                            <span class="w3-tag w3-small w3-theme-l3">Design</span>
                            <span class="w3-tag w3-small w3-theme-l4">Art</span>
                            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                        </p>
                    </div>
                </div>
                <br>

                <!-- Alert Box -->
                <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                    <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
                        <i class="fa fa-remove"></i>
                    </span>
                    <p><strong>Hey!</strong></p>
                    <p>People are looking at your profile. Find out who.</p>
                </div>

                <!-- End Left Column -->
            </div>

            <!-- Middle Column -->
            <div class="w3-col m7">

                <!-- Upload Postingan -->

                <div class="w3-container">
                @if (Route::has('login'))
                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Post something</button>

                @endif

                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                            </div>

                            <form class="w3-container" action="/create" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="w3-section">
                                    <label for="gambar">Upload Gambar</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar" required>
                                    <label><b>Caption</b></label>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="caption" id="caption" required>
                                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Post</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- Batas Modal -->


                @foreach($posts as $p)
                <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img src="/images/user.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                    <span class="w3-right w3-opacity">{{ $p->created_at->diffForHumans() }}</span>
                    <h4>{{ $p->name }}</h4><br>
                    <hr class="w3-clear">
                    <p>{{ $p->caption }}</p>
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-half">
                            <img src="{{ asset('images/'.$p->gambar) }}" style="width:100%" alt="Nature" class="w3-margin-bottom">
                        </div>
                    </div>
                    @if($p->like == 1)
                    <button id="unlike" type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                        <input type="hidden" name="unlike-post" value="{{ $p->id }}">
                        <i class="fa fa-thumbs-down"></i>  Unlike
                    </button>
                    @else
                    <button id="like" type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
                        <input type="hidden" name="like-post" value="{{ $p->id }}">
                        <i class="fa fa-thumbs-up"></i>  Like
                    </button>
                    @endif

                    <button class="w3-button w3-theme-d2 w3-margin-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#view-comments-{{ $p->id }}" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-comment"></i>  Comment
                    </button>
                    @if($p->flag == 0)
                    <p>{{ $p->flag }} <span>Like</span</p>
                    @else
                    <p>{{ $p->flag }} <span>Likes</span</p>
                    @endif
                </div>

                <div class="w3-container w3-card w3-white w3-round w3-margin panel-footer clearfix">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="comment-text" id="comment-text" placeholder="komen dong">
                            <span class="input-group-btn">
                                <button class="w3-button" type="submit"><i class="fa fa-send"></i> Send</button>
                            </span>
                        </div>
                    </div>

                    <div id="view-comments-{{ $p->id }}">
                        <div class="card card-body">
                            <p>Tes Komen</p>
                        </div>
                    </div>
                </div>

                @endforeach
                <!-- End Middle Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-col m2">
                <div class="w3-card w3-round w3-white w3-center">
                    <div class="w3-container">
                        <p>Upcoming Events:</p>
                        <p><strong>Holiday</strong></p>
                        <p>Friday 15:00</p>
                        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                    </div>
                </div>
                <br>


                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>
    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-d3 w3-padding-16">
        <h5>Footer</h5>
    </footer>

    <footer class="w3-container w3-theme-d5">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>


    <script>

        $('#like').on('click', function(){
            var url = '{{ url("like") }}';
            var id = $('input[name=like-post]').val();
                $.ajax({
                method: "POST",
                url: url + '/' + id,
                data: { 
                    "_token": "{{ csrf_token() }}",
                    id : id 
                },
                success: function(data){
                console.log(data);
            }
            })
        });

        $('#unlike').on('click', function(){
            var url = '{{ url("unlike") }}';
            var id = $('input[name=unlike-post]').val();
                $.ajax({
                method: "POST",
                url: url + '/' + id,
                data: { 
                    "_token": "{{ csrf_token() }}",
                    id : id 
                },
                success: function(data){
                console.log(data);
            }
            })
        });

        // Accordion
        function myFunction(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-theme-d1";
            } else {
                x.className = x.className.replace("w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-theme-d1", "");
            }
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

</body>

</html>