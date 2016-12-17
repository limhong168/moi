<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"
            type="text/javascript"></script>
</head>
<body>
<h1>
    <div class="col-md-6">
        {{$c}}
        @foreach($posts as $post)

            <ul class="list-group">
                <li class="list-group-item">{{$post->name}}
                    <span class="text-xs-center">
                       <?php
                            echo link_to_action('insertDb@show',$title = "Edit", $parameters = ['id'=>$post->id], $attributes = ['class'=>'link hrllo']);

                        ?>
                    </span>
                <span class="pull-xs-right">
                    <button value="{{$post->id}}" class="deleteProduct" data-id="{{ $post->id }}" data-token="{{ csrf_token() }}" >Delete Task</button>
                    {{@++$k}}</span>
                </li>

            </ul>


        @endforeach
    </div>



</h1>

</body>
</html>