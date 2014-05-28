<?php


$isbn = $book_details_array['title'];

$reviews = DB::table('book_rating')->pluck('review')->orderBy('created_at')->get();

for ($review=0; $review < count($reviews); $review++) { 
  echo '<hr>
  <div class="row">
    <div class="col-md-12">'
    for ($i=1; $i <= 5 ; $i++)
      <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
    @endfor
 
    {{ $review->user ? $review->user->name : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span> 
 
    <p>{{{$review->comment}}}</p>
    </div>
  </div>
}

?>