<html>
<head>
    <title>Ajax Example</title>
    <meta name="_token" content="<?php echo csrf_token() ?>"/>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send-btn').click(function(){
                alert('hi');
                $.ajax({
                    url: 'lo',
                    type: "post",
                    data: {'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
                    success: function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>


</head>

<body>
<div class="secure">Secure Login form</div>
{!! Form::open(array('url'=>'account/login','method'=>'POST', 'id'=>'myform')) !!}
<div class="control-group">
    <div class="controls">
        {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
    </div>
</div>
<div class="control-group">
    <div class="controls">
        {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
    </div>
</div>
{!! Form::button('Login', array('class'=>'send-btn')) !!}
{!! Form::close() !!}
</body>

</html>