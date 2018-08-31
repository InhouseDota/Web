@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <figure class="image">
                            <img src="https://i.ytimg.com/vi/pWN3x2iyIkE/maxresdefault.jpg">
                    </figure>
                    <div class="column is-one-third">
                    <div class="box">
                            <h3 class="title has-text-grey">Inhouse Dota Login</h3>
                            <p class="subtitle has-text-grey">Please Sign in with Steam to proceed.</p>
                            <a href="auth/steam">
                                <img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_02.png" width="109" height="66" border="0">
                            </a>
                    </div>
                    </div>
                    <figure class="image">
                            <img src="https://i.ytimg.com/vi/yb9IHDPR_F4/maxresdefault.jpg">
                    </figure>
                </div>
            </div>
        </div>
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

    <div class="flex items-center justify-between">
        <a href="auth/steam">
            <img src="https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_02.png" width="109" height="66" border="0">
        </a>
    </div>
  </form>
  <p class="text-center text-grey text-xs">
    ©2018 Inhouse Dota. All rights reserved.
  </p>
</div>
    </section>
@endsection
