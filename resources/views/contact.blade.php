
@extends('app')
@section('title')
Gym
@endsection
@section('body')
    <section class="flex-container">
        <div class="soshel">
            <br>

            <br>
            <br>
            <h1><b>Welcome to the Register ツ </b></h1>
        </div>
        <div class="logoo">
            <img class="logo" src="images/g.png" width="100px" height="100px">
        </div>
    </section>


    <section class="contac">
        <div class="main-container">
            <div class="main-title">
                <h6><b>LET'S MEET EACH OTHER </b></h6>
                <h1 class="hh1"><em>Send us message!</em>  </h1>
                <h5 class="hh5">9:00 AM To 11:00 PM (SUNDAY CLOSED)</h5>
                <P><b>kaie chips knausgaard mustache blog fashion axe selfies salvia Gluten-free post-ironic deep v typewriter. Cloud bread flannel poke, flexitarian vinyl iphone church-key shaman williamsburg kitsch beard</b></P>
                <br>
                <h5><em><b>0032-773 88291</b></em></h5>
                <br>
                <h5><em><b>HELLO@NEVEFIT.COM</b></em></h5>
                <br>
                <h5><em><b>21 JUMP STREET , SANFRANCISCO</b></em></h5>
                <br>
                <div class="imag">
                    <img src="images/facebook.png" alt="" width="30px" height="30px">
                    <img src="images/twitter.png" alt=""  width="30px" height="30px">
                    <img src="images/instagram.png" alt=""  width="30px" height="30px">
                </div>
            </div>
            <div class="main-image">
                    <div class="contact">
                        <form method="POST" action="/add">
                            @csrf
                            <h3><em>Register with us ツ</em></h3>
                            <br>
                            <label for=""><b>Name ?</b></label>
                            <input type="text" placeholder="enter yor name" name="name"  required>
                            <br>
                            <label for=""><b>Your Phone ? </b></label>
                            <input type="text" placeholder="enter yor name" name="phone"  required>
                            <br>
                            <label for=""><b>Entey Your Email ?</b></label>
                            <input type="text" placeholder="enter yor email" name="email"  required>
                            <br>
                            <input type="submit" value="submit" class="butto bn">
                        </form>
                    </div>
            </div>
        </div>
    </section>
    <br>
    <br>
@endsection
