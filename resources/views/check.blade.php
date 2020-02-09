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


            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-1">
                           <div class="card mt-2">
                               <div class="card-header text-center">

                               </div>
                               <div class="card-body">

                                    <table class="table">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Savol Sarlavhasi / Kasb turi</th>
                                                <th scope="col">Tog'ri /Notog'ri</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                 ?>
                                                @foreach($data as $i=>$item)
                                                <tr>
                                                        <th scope="row">{{ ++$i }}</th>
                                                        <td> {{$item['title']}} / {{ $item['category'] }}</td>

                                                        @if ($item['result']=='true')
                                                            <td>Tog'ri</td>
                                                            <?php
                                                                $i = 0;
                                                                foreach($item['category_all'] as $category){
                                                                    if($item['category'] == $category->name)
                                                                    {
                                                                        $count = array(
                                                                            'category'  => $item['category'],
                                                                            'count'     => $i++
                                                                        );
                                                                        // dd($count);
                                                                    }
                                                                }
                                                            ?>
                                                        @else
                                                            <td>Notog'ri</td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                          </table>

                                    <hr>

                               </div>
                               <div class="card-footer text-center">
                                        @forelse ($result as $items)
                                        <?php $ccaount = 0; ?>
                                        @foreach ($items as $item)
                                            <?php
                                                $acategory = $item['name'];
                                                $ccaount++;
                                            ?>
                                        @endforeach

                                        <div class="alert alert-success">
                                            Sen {{ $acategory }}  haqidagi {{ $ccaount }} savolga javob berding
                                        </div>
                                            @empty

                                        @endforelse
                               </div>
                           </div>
                    </div>
                </div>
            </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
</body>
</html>
