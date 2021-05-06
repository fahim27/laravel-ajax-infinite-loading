  @foreach($posts as $post)
       <div class="col-lg-3">
                   <div class="card mb-5 round shadow p-5 text-center mr-3" >
  <img src="{{ asset($post->thumnail)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    
  </div>
</div>
       </div>
       @endforeach