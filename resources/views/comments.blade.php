@extends('main')

@section('cont')


<div class="comments_content">
    @foreach ($comments as $comment)
        <div class="comment_block">
            <div class="user_name">{{ $comment->user_name }}</div>
            <div class="date">{{ $comment->created_at->format('H:i  d.m.Y') }}</div>
            <div class="comment"> {{ $comment->text }}</div>
        </div>
    @endforeach


<h2>Оставить комментарий</h2>


<form class="comments_form" method="POST" action="{{ route('commentsPOST') }}">
    {{ csrf_field() }}

    <label for="name" >Ваше имя</label><br>
    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus><br>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif

    <label for="comment" >Ваше комментарий</label><br>
    <textarea id="comment" type="text" name="comment"  required>{{ old('comment') }}</textarea><br>
    @if ($errors->has('comment'))

        <span class="help-block">
            <strong>{{ $errors->first('comment') }}</strong>
        </span>
    @endif

    <input type="submit" value="Отправить"><br>

</form>

</div>


@endsection