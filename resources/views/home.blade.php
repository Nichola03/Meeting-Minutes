@extends('layout.common')
@section('title', 'インデックスページ')
@include('layout.header')

@section('content')
<div class="container">

<div class="box-outside">
    <div class="box8">
        <p>○月×日<br>
            タイトル
        </p>
    </div>
</div>

<div class="box-outside">
    <div class="box8">
        <p>○月×日<br>
            タイトル
        </p>
    </div>
</div>

<div class="box-outside">
    <div class="box8">
        <p>○月×日<br>
            タイトル
        </p>
    </div>
</div>
<!-- <button id="btn">表示</button> -->
<button id="modalOpen" class="button">Click Me</button>
<!-- ポップアップ内の文字 -->
  <div id="easyModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Great job 🎉</h1>
        <span class="modalClose">×</span>
      </div>
      <div class="modal-body">
        <p>You've just displayed this awesome Modal Window!</p>
        <p>Let's enjoy learning JavaScript ☺️</p>
      </div>
    </div>
  </div>
<script src="{{ asset('/js/pop.js') }}"></script>

</div>
test
@endsection

@include('layout.submenu')
@include('layout.footer')