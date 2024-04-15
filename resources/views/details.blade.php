@extends('master')
@section('title', 'Homepage')

<link rel="stylesheet" href="{{ asset('css/details.css') }}">

@section('content')
<br>

<a class="btn back" href="C:\Users\fred_\Downloads\TheBook\frontend\html\homepage.html"><i class="fa-solid fa-arrow-left"></i> BACK TO HOMEPAGE</a>
<br>
<div class="FlexContainer show">
    <img class="cover" src="{{url('https://images.gr-assets.com/books/1447303603l/2767052.jpg')}}" />
    <!--Book Information-->
    <div class="info">
        <div class="genrelist"> <!--Genres-->
            <div class="genre"> Science Fiction </div>
            <div class="genre"> Young Adult </div>
            <div class="genre"> Fiction </div>
        </div>
        <div class="title">The Hunger Games</div>
        <div class="author">Suzanne Collins</div>
        <div class="desc">Seconds before the Earth is demolished to make way for a galactic freeway, Arthur Dent is plucked off the planet by his friend Ford Prefect, a researcher for the revised edition of The Hitchhiker's Guide to the Galaxy who, for the last fifteen years, has been posing as an out-of-work actor.Together this dynamic pair begin a journey through space aided by quotes from The Hitchhiker's Guide ("A towel is about the most massively useful thing an interstellar hitchhiker can have") and a galaxy-full of fellow travelers: Zaphod Beeblebroxâ€”the two-headed, three-armed ex-hippie and totally out-to-lunch president of the galaxy; Trillian, Zaphod's girlfriend (formally Tricia McMillan), whom Arthur tried to pick up at a cocktail party once upon a time zone; Marvin, a paranoid, brilliant, and chronically depressed robot; Veet Voojagig, a former graduate student who is obsessed with the disappearance of all the ballpoint pens he bought over the years.</div>
        <div class="buttons dropdown">
            <div class="btn border2 dropbtn" type="submit">Add to List</div>
                <div class="dropdown-content">
                    <a href="#">Winning will make you famous.</a>
                    <hr>
                    <a href="#">User's List</a>
                    <hr>
                    <a href="#">My Very Long List Full of Books I Probably Will Never Read</a>
                </div>
        </div>
        <div class="btn border2" type="submit">More Info</div>
    </div>
</div>

@endsection

