<div class="col-md-3">
  <div class="card">
      <div class="card-header">
          Categories
      </div>
      <div class="list-group">
        @foreach($categories as $category)
          <li class="list-group-item">
              <a href="#" >{{$category->name}}</a>
              <span class="badge bg-danger float-end text-white">12</span>
          </li>
        @endforeach

      </div>
  </div>
</div>
