<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>

        {{--<section class="login">--}}
            {{--<div class="row">--}}
                {{--<div class="container">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<h1>American</h1>--}}
                        {{--<fieldset class="form-group">--}}
                            {{--<?php--}}
                            {{--//echo Form::open(['action' => '#','method'=>'get','autocomplete'=>'off']);--}}
                            {{--echo Form::open(['url' => '#', 'method' => 'put'])--}}
                            {{--?>--}}
                            {{--<?php--}}
                            {{--echo Form::label('name', 'Name',array(--}}
                                            {{--'id'=>'cambodia'--}}
                                    {{--)--}}
                            {{--);--}}
                            {{--echo Form::text('username',null,array(--}}
                                    {{--'class'=>'form-control',--}}
                                    {{--'placeholder'=>'name',--}}
                                    {{--'name'=>'name',--}}
                                    {{--'id'=>'one',--}}

                            {{--));--}}
{{--//                            echo Form::hidden('username','csrf_token()',array(--}}
{{--//                                    'class'=>'form-control',--}}
{{--//                                    'placeholder'=>'name',--}}
{{--//                                    'name'=>'_token',--}}
{{--//--}}
{{--//--}}
{{--//                            ));--}}
                            {{--?>--}}

                        {{--</fieldset>--}}
                        {{--<input type="hidden" id="token" value="{{ csrf_token() }}">--}}
                        {{--{{($errors->has('name')) ? $errors->first('name'): ''}}--}}
                        {{--<fieldset class="form-group">--}}
                            {{--<?php--}}
                            {{--echo Form::label('name', 'Phone',array(--}}
                                            {{--'id'=>'cambodia'--}}
                                    {{--)--}}
                            {{--);--}}
                            {{--echo Form::text('username',null,array(--}}
                                    {{--'class'=>'form-control',--}}
                                    {{--'placeholder'=>'phone',--}}
                                    {{--'name'=>'phone',--}}
                                    {{--'id'=>'two'--}}
                            {{--));--}}
                            {{--?>--}}
                        {{--</fieldset>--}}
                        {{--{{($errors->has('phone')) ? $errors->first('phone'): ''}}--}}
                        {{--<?php--}}
                            {{--echo Form::button('Click Me!',array('id'=>'send'));--}}
                        {{--?>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="getRequestData"></div>--}}
        {{--</section>--}}
        <section class="upload">
            <div class="panel-body">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="/profile-img/{{ Session::get('path') }}">
                @endif

                <form action="{{ url('image-upload') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="file" />
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#send').click(function () {
          var one=$('#one').val();
          var two=$('#two').val();
          $.post('show',{name:one,phone:two},function (data) {
              console.log(data);

          }
          );

        });

//        $('#sendd').click(function () {
//            var k='fscdfca';
//            $.get('getRequest',
//                    {k:k}
//                    ,function (data) {
//                $('#getRequestData').append(data);
//                console.log(data);
//            });
//
//        });
    })
</script>

</body>
</html>