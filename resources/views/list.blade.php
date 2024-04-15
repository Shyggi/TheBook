@extends('master')
@section('title', 'List')

<link rel="stylesheet" href="{{ asset('css/list.css') }}">

@section('content')
<br>

<a class="btn back" href="C:\Users\fred_\Downloads\TheBook\frontend\html\homepage.html"><i class="fa-solid fa-arrow-left"></i> BACK TO HOMEPAGE</a>

<div class="containered text-center body">
    <p class="title">LIST NAME</p>
</div>

<div class="FlexContainer">
  <a class="FlexItem" href="C:\Users\fred_\Downloads\TheBook\frontend\html\details.html">
    <img src="https://images.gr-assets.com/books/1447303603l/2767052.jpg" class="cover"><p class="book"> <span class="booktitle">The Hunger Games</span><br>Suzanne Collins</p></a>
  <a class="FlexItem">
    <img src="https://images.gr-assets.com/books/1255614970l/2.jpg" class="cover"><p class="book"> <span class="booktitle">Harry Potter and the Order of the Phoenix</span><br>J.K. Rowling</p></a>
  <a class="FlexItem">
    <img src="https://images.gr-assets.com/books/1361975680l/2657.jpg" class="cover"><p class="book"> <span class="booktitle">To Kill a Mockingbird</span><br>Harper Lee</p></a>
  <a class="FlexItem">
    <img src="https://images.gr-assets.com/books/1320399351l/1885.jpg" class="cover"><p class="book"> <span class="booktitle">Pride and Prejudice</span><br>Jane Austen</p></a>
  <a class="FlexItem">
    <img src="https://images.gr-assets.com/books/1361039443l/41865.jpg" class="cover"><p class="book"> <span class="booktitle">Twilight</span><br>Stephenie Meyer</p></a>
</div>

<br><br><br>
<footer>
    <hr style=" width:90%; margin:auto;">
    <p class="footer">Made with <3<br>
    Shygfred Christian Obado</p>
</footer>

@endsection