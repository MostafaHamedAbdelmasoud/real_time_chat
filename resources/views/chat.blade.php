<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>chat</title>
    <style>
        .list-group {

            overflow-y: scroll;
            overflow-x: hidden;
            height: 250px;
        }
    </style>
</head>

<body class="text-center">

    <div class="container pt-4  text-center">
        <div class="row text-center " id="app">
            <!-- <div class="col-md-12">
        <h1>chat app</h1> 

        </div> -->

            <div class="col-md-9 m-auto  text-center">

                <li class="list-group-item active">chat room</li>


                <ul class="list-group" v-chat-scroll>

                    <message v-for="value,index in chat.message"
                     :key=value.index 
                     :color= chat.color[index]
                     :user = chat.user[index]
                     >

                        @{{ value }}

                    </message>

                </ul>


                <input type="text" class="form-control" placeholder="enter your message" v-model='message' @keyup.enter='send'>

            </div>


        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html> 