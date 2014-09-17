@extends('layout')


@section('content')
<div class="right_column">
    <div class="logo"><img src="{{URL::to('/images/logo.png')}}"></div>
    <div class="subtitle"></div>
    <div class="title_prox">próximamente</div>
    <div class="subtitle_prox">patria <span>/</span> acueducto</div>
    <div class="title_indications">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</div>

    @if (Session::has('mensaje_request'))
    {{ Session::get('mensaje_request') }}
    @endif
    {{ Form::open(['route' => 'contact','class'=>'form_draw','id'=>'form_lobby']) }}
    {{$errors->first('nombre',"<span class=error>:message</span>")}}
    {{Form::text('nombre', null, ['id'=>'nombre','placeholder'=>'Nombre']) }}

    {{$errors->first('email',"<span class=error>:message</span>")}}
    {{Form::email('email', null, ['id'=>'email','placeholder'=>'Email']) }}

    {{$errors->first('asunto',"<span class=error>:message</span>")}}
    {{Form::text('asunto', null, ['id'=>'asunto','placeholder'=>'Asunto']) }}

    {{$errors->first('mensaje',"<span class=error>:message</span>")}}
    {{Form::textarea('mensaje', null, ['id'=>'mensaje','placeholder'=>'Mensaje']) }}

       <!-- <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="asunto" placeholder="Asunto">
        <textarea name="mensaje" placeholder="Mensaje"></textarea>-->
        <div class="button_wrap clearfix">
            <div  class="submit_btn" id="submit_btn"><span>En</span>trar</div>
            <!--<input type="submit">-->

        </div>
    {{Form::close()}}

    <div class="logo_black_wrap">
        <img src="{{URL::to('/images/logo_negro.jpg')}}">
    </div>
    <div class="footer clearfix">
        <ul><li><a href="#"><span>Le</span>gal</a></li><li><a href="#"><span>Te</span>rminos de Uso</a></li><li><a href="#"><span>Pr</span>ivacidad</a></li></ul>
        <ul class="siguenos">
            <li style="padding-right: 0px;"><a href="#"><img src="{{URL::to('/images/fb.png')}}"></a><a href="#"><img src="{{URL::to('/images/tw.png')}}"></a></li>
            <li>siguenos en</li>
        </ul>
    </div>
</div>
@stop


@section('js_code')
<script>
    $(document).ready(function(){
       /* $('.left_column').css('min-height',$(window).height());*/
       /* $('.right_column').css('min-height',$(window).height());*/
        $('#submit_btn').click(function(){
            $('#form_lobby').submit();
        });
    })
</script>
@stop