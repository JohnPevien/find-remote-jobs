@extends ('layout')
@section('content')

<h1 class="mb-5"> {{$heading}} </h1>
@unless(count($listings) == 0)
<section class="grid grid-cols-3 gap-10">
@foreach ($listings as $listing)
<div class="border-2 border-primary rounded-lg">
    <div class="p-3 rounded-t-lg mb-2 bg-accent/0">
        <h2 class=" text-primary"> {{$listing['company']}} </h2>
    </div>
    <div class="p-4">

        <p class="text-lg mb-2"> {{$listing['title']}}  </p>
        <p> {{$listing['description']}} </p>
        <p> {{$listing['location']}} </p>
        <p> ${{$listing['salary']}} </p>
        <p> {{$listing['email']}} </p>
    </div>
</div>
@endforeach
</section>

@else 
<p> No listings found </p>

@endunless

@endsection