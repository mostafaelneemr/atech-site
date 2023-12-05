@extends('system.layout')


@section('style')

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('calender_template/css/style.css')}}">

    <style>
        .body {
            margin: 0;
            font-size: 1rem;
            display: flex;
            flex: 1;
            min-height: 60vh;
            align-items: center;
        }

        .clock {
          width: 35rem;
          height: 35rem;
          border-radius: 50%;
          margin: 50px auto;
          position: relative;
          background-color: #fff;
          padding: 2rem;
          box-shadow: 0 0 20px #444;
          position: relative;
          background-image: url('https://i.ibb.co/4SDZSL4/clock.jpg');
          background-position: center;
          background-size: cover;
        }

        .clock::after {
          content: '';
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          width: 3%;
          height: 3%;
          background-color: #000;
          border-radius: 50%;
        }

        .clock-face {
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
          width: 100%;
          height: 100%;
        }

        .hand {
          width: 50%;
          height: 6px;
          background: black;
          position: absolute;
          transform-origin: 50% 100%;
        }

        .hour-hand {
          width: 3px;
          height: 0;
          border-left: 3px solid transparent;
          border-right: 3px solid transparent;
          border-bottom: 100px solid black;
          background-color: transparent;
          top: 21%;
        }

        .min-hand {
          width: 3px;
          height: 0;
          border-left: 3px solid transparent;
          border-right: 3px solid transparent;
          border-bottom: 180px solid black;
          background-color: transparent;
          left: 48%;
          top: -1.5%;
        }
      
        .second-hand {
          width: 1px;
          height: 0;
          border-left: 1px solid transparent;
          border-right: 1px solid transparent;
          border-bottom: 180px solid black;
          background-color: transparent;
          top: -1%;
          left: 50%;
        }
    </style>
@endsection


@section('content')
    <!--begin::Row-->
    <div class="card card-custom gutter-b">

        <div class="card-body d-flex flex-column">

            <div class="row">

                {{-- clock at dashboard --}}
                <div class="body col-12">
                    <div class="clock">
                        <div class="clock-face">
                            <div class="hand hour-hand"></div>
                            <div class="hand min-hand"></div>
                            <div class="hand second-hand"></div>
                        </div>
                    </div>
                </div>
            

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('calender_template/js/jquery.min.j')}}s"></script>
    <script src="{{asset('calender_template/js/popper.js')}}"></script>
    <script src="{{asset('calender_template/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{asset('calender_template/js/main.js')}}"></script>

    <Script>
        let hr_hand = document.querySelector(".hour-hand");
      let min_hand = document.querySelector(".min-hand");
      let sec_hand = document.querySelector(".second-hand");

      function clock() {
        const date = new Date();
        let hr_cal = (date.getHours()*30) + (date.getMinutes() / 2);
        let min_cal = (date.getMinutes() *6);
        let sec_call = date.getSeconds()*6;
        hr_hand.style.transform = `rotate(${hr_cal}deg)`;
        min_hand.style.transform = `rotate(${min_cal}deg)`;
        sec_hand.style.transform = `rotate(${sec_call}deg)`;
        console.log(hr_cal);
        setTimeout(clock, 1000);
      }
      setTimeout(clock, 1000);
    </Script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection
