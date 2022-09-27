<h1> {{$heading}} </h1>
@unless(count($listings) == 0)
    <p> No listings found </p>
@foreach ($listings as $listing)
    <h2> {{$listing['title']}} </h2>
    <p> {{$listing['description']}} </p>
    <p> {{$listing['company']}} </p>
    <p> {{$listing['location']}} </p>
    <p> {{$listing['salary']}} </p>
    <p> {{$listing['email']}} </p>
@endforeach

@else 
<p> No listings found </p>

@endunless