  @foreach($users as $user)
       <div class="col-lg-3">
                   <div class="card mb-5 round shadow p-5 text-center mr-3" >
  <div class="card-body">
    <h5 class="card-title">{{ $user->name }}</h5>
    
  </div>
</div>
       </div>
       @endforeach