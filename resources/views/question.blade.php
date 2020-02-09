<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/question.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <title>Savollar</title>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background: #f273ba;">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('question') }}">Savollar</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">Men haqimda</a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link" href="#">Contact</a>
                              </li>


                  </ul>

                </div>
              </nav>


              <div class="jumbotron jumbotron-fluid">
                    <div class="container text-center">
                    <h1 class="text-uppercase">Yo'riqnoma!!!</h1>
                    <p class="lead tab-content" style="color: red; font-size: 30px;">Sizga 20 ta turli xil kasblarga savollar beriladi va javoblaringiz tekshiriladi. Agar siz bitta kasb uchun ko'proq javob topsangiz boshqalariga qaraganda siz uchun shu kasb eng ma'quli hisoblanadi. Tayyor bo'lsanginz boshladik!!!</p>

                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>Hamma savollarga javob berish shart</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('question.store')}}" method="POST">
                @csrf
                    <div class="container mb-4">
@foreach ($items as $item)

                        <input type="hidden" name="question_id[]" value="{{$item->question->id}}" />
                        <div class="card-deck mb-4">
                            <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{$item->question->title}}</h5>
                                        <p class="card-text">{{$item->question->desc}}</p>
                                        </div>
                                        {{-- <input type="radio" name="gender" value="male"> Male<br> --}}
                                        <div class="card-footer">
                                        <div class="alert alert-info "> {{ $item->option_1}}   <input type="radio" name="correct_{{ $item->question->id }}" value="{{ 1 }}"    ></div>
                                            <hr>
                                            <div class="alert alert-info "> {{ $item->option_2}}   <input type="radio" name="correct_{{ $item->question->id }}" value="{{ 2 }}"    ></div>
                                            <hr>
                                            <div class="alert alert-info "> {{ $item->option_3}}   <input type="radio" name="correct_{{ $item->question->id }}" value="{{ 3 }}"    ></div>
                                            <hr>
                                            <div class="alert alert-info "> {{ $item->option_4}}   <input type="radio" name="correct_{{ $item->question->id }}" value="{{ 4 }}"    ></div>
                                            <hr>

                                    </div>

                            </div>
                        </div>
                        @endforeach





                        <button type="submit" class="btn btn-success btn-lg ">Next<i class="fa fa-check"></i></button>


                    </div>
                </form>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
</body>
</html>
