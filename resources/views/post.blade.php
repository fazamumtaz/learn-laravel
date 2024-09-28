@extends('layouts.main')

@section('container')
      <h2>{{ $post->blogTitle }}</h2>
      <h5>By: {{ $post->author }}</h5>
      {!! $post->content !!}

   <a href="/posts">back to posts</a>
@endsection

{{-- 
App\Models\Post::create([
   'blogTitle' => 'Dart: Multiplatform Programming Language',
   'slug' => 'dmpl',
   'category_id' => 1,
   'author' => 'Badzlan Nur D',
   'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus eligendi ducimus officiis dolorum recusandae, voluptatum vitae unde eveniet voluptatem hic odit fugit perspiciatis deleniti earum praesentium, ut adipisci animi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quos amet vel blanditiis, exercitationem, cupiditate aliquid consectetur consequuntur dicta, laudantium atque odit enim aliquam eius autem voluptatem. Alias nobis aspernatur quod facere dolorum quas cumque nesciunt dignissimos sit ad quae itaque laborum, accusamus maiores dolore sint odit distinctio sed maxime?</p>'
]) --}}

{{-- App\Models\Category::create([
   'name' => 'Productivity',
   'slug' => 'productivity'
]) --}}