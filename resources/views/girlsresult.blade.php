
<div class="col-md-4"> 
 @foreach($girls as $girl)

 <strong>{{ $girl->fname }}</strong>

 <p>{{ $girl->address1}}</p>
<br>
<a href="/{{$girl->id}}">
<button class="btn btn-primary" >Book </button></a>

<br>
 @endforeach
</div>