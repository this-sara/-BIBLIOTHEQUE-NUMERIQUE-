<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our book</h2>
                <p>Lorem Ipsum available, but the majority have suffered </p>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach ($books as $book)
          <div class="col-md-3 col-sm-4">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <figure><img src="{{asset('storage/'.$book->image)}}" alt="#"/></figure>
                </div>
                <div class="bed_room">
                   <h3>{{$book->titre}}</h3>
                   <p>{{Str::limit($book['description'],49)}}</p>
                   <a class=" btn btn-primary" role="button" href="{{route('homes.show',$book->id)}}" >emprunter ce livre</a>
                </div>
             </div>
          </div>     
       @endforeach 
       </div>
    </div>
 </div>