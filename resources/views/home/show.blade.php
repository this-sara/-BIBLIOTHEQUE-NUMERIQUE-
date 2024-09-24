<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
     @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
       @include('home.header')
      </header>
      <div  class="our_room">
        <div class="container">
           {{-- <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our book</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div> --}}
           <div class="row">
              <div class="col-md-5">
                <div id="serv_hover"  class="room">
                    <div class="room_img" style="padding:20px ">
                       <img style=" width:400px ; height:500px"    src="{{asset('storage/'.$book->image)}}" alt="#"/>
                    </div>
                    <div class="bed_room">
                       <h3 >{{$book->titre}}</h3>
                       <h3 style="padding: 12px">Auteur: {{$book->auteur}}</h3>
                       <p style="padding: 12px">{{$book->description}}</p>
                       <h4 style="padding: 12px">category: {{$book->categorie->titre}}</h4>
                       <h4 style="padding: 12px">date_edition: {{$book->date_edition}}</h4>
                    </div>
                </div>
               </div>
                    {{-- <div class="col-md-4">
                        <h1 style="font-size:40px !important;">RESERVER UN LIVRE</h1>
                        <div>
                            <label >Name</label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label >Email</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <label >Phone</label>
                            <input type="phone" name="phone">
                        </div>
                        <div>
                            <label >start date</label>
                            <input type="date" name="startDate" id="startDate">
                        </div>
                        <div>
                            <label >end date</label>
                            <input type="date" name="endDate" id="endDate">
                        </div>
                        <div>
                            <input type="submit" value="emprunter un livre">
                        </div>
                    </div>     --}}

                    <div class="col-md-5" style="padding-left:90px">
                       
                        <h1 style="font-size:40px !important;">Emprunter {{$book->titre}}</h1>
                        @if (session()->has('message'))
                        <x-alert type="success">
                            <li>{{session()->get('message')}}</li> 
                        </x-alert>
                        @endif
                        @if ($errors->any())
                        <x-alert type="danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li> 
                                @endforeach 
                            </ul>  
                        </x-alert>
                        @endif
                    <form action="{{route('add_emrunt',$book->id)}}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" 
                            @if (Auth::id())
                            value="{{Auth::user()->name}}"  
                            @endif
                           />
                            {{-- <small id="helpId" class="text-muted">nom complet</small> --}}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control" @if (Auth::id())
                            value="{{Auth::user()->email}}"  
                            @endif/>
                            {{-- <small id="helpId" class="text-muted">email</small> --}}
                           
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="number" name="phone"  class="form-control" @if (Auth::id())
                            value="{{Auth::user()->phone}}"  
                            @endif/>
                            {{-- <small id="helpId" class="text-muted">password</small> --}}
                            
                        </div>
                    
                        <div class="mb-3">
                            <label class="form-label">start date</label>
                            <input type="date" name="date_sortie"  class="form-control"/>
                            {{-- <small id="helpId" class="text-muted">password</small> --}}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">end date</label>
                            <input type="date" name="date_retour"  class="form-control"/>
                            {{-- <small id="helpId" class="text-muted">password</small> --}}
                        </div>
                    
                        
                        
                        <div class="d-grid my-3">
                            <button  class="btn btn-primary" > reserver  </button>
                        </div>
                     </form>
                    </div>
            <div>
        </div>
    </div>
      @include('home.footer')
    <script type="text/javascript">
       $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth()+1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month<10)
         month='0'+ month.toString();

         if(day<10)
         day='0'+ day.toString();
        var maxDate = year+'-'+month+'-'+day;
        $('#startDate').attr('min', maxDate);
        $('#endDate').attr('min', maxDate);
       });
      </script>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>