@extends('layout')


@section('content')
<div class="right_column">
    <div class="logo"><img src="{{URL::to('/images/logo.png')}}"></div>
    <div class="subtitle"></div>
    <div class="title_prox">próximamente</div>
    <div class="title_indications">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</div>
    <form class="form_draw">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="asunto" placeholder="Asunto">
        <textarea name="mensaje" placeholder="Mensaje"></textarea>
        <div class="button_wrap clearfix">
            <div  class="submit_btn"><span>En</span>trar</div>
            <!--<input type="submit">-->

        </div>

    </form>
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

    })
</script>
@stop