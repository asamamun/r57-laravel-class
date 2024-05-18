@extends('layouts.main', ['title' => 'View Product'])
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<section class="bg-light">
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-5 mt-5">
        {{-- {{dd($product->images->toArray()[0]['name'])}} --}}
        {{-- <div class="card mb-3">
          
          <img class="card-img img-fluid" src="{{asset('storage/'.$product->images->toArray()[0]['name'])}}" alt="Card image cap" id="product-detail">
        </div> --}}
        <div class="row">
          <!--Start Controls-->
          <div class="col-1 align-self-center">
            <a href="#multi-item-example" role="button" data-bs-slide="prev">
              <i class="text-dark fas fa-chevron-left"></i>
              <span class="sr-only">Previous</span>
            </a>
          </div>
          <!--End Controls-->
          <!--Start Carousel Wrapper-->
          <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item pointer-event" data-bs-ride="carousel">
            <!--Start Slides-->
            <div class="carousel-inner product-links-wap" role="listbox">

              <!--First slide-->
              
                <div class="row">
                  @forelse ($product->images as $image)
                  <div class="carousel-item col-4 {{$loop->first?'active':''}}">
                  {{-- <div class=""> --}}
                    <a href="#">
                      <img class="card-img img-fluid" src="{{asset('storage/'.$image->name)}}" alt="{{$product->name}}">
                    </a>
                  {{-- </div>  --}}
                  </div> 
                  @empty
                  <div class="carousel-item active">
                  <div class="col-4">
                    <a href="#">
                      <img class="card-img img-fluid" src="{{asset('storage/no-image-svgrepo-com.svg')}}" alt="No Image">
                    </a>
                  </div> 
                  </div> 
                  @endforelse
                  
                </div>
              <!--/.First slide-->
            </div>
            <!--End Slides-->
          </div>
          <!--End Carousel Wrapper-->
          <!--Start Controls-->
          <div class="col-1 align-self-center">
            <a href="#multi-item-example" role="button" data-bs-slide="next">
              <i class="text-dark fas fa-chevron-right"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!--End Controls-->
        </div>
      </div>
      <!-- col end -->
      <div class="col-lg-7 mt-5">
        <div class="card">
          <div class="card-body">
            <h1 class="h2">{{$product->name}}</h1>
            <p class="h3 py-2">${{$product->price}}</p>
            <p class="py-2">
              <i class="fa fa-star text-warning"></i>
              <i class="fa fa-star text-warning"></i>
              <i class="fa fa-star text-warning"></i>
              <i class="fa fa-star text-warning"></i>
              <i class="fa fa-star text-secondary"></i>
              <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
            </p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <h6>Category/Subcategory:</h6>
              </li>
              <li class="list-inline-item">
                <p class="text-muted"><strong>{{$product->category->name}} / {{$product->subcategory->name}}</strong></p>
              </li>
            </ul>

            <h6>Description:</h6>
            <p>{{$product->details}}</p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <h6>Avaliable Color :</h6>
              </li>
              <li class="list-inline-item">
                <p class="text-muted"><strong>White / Black</strong></p>
              </li>
            </ul>

            <h6>Specification:</h6>
            <ul class="list-unstyled pb-3">
              <li>Lorem ipsum dolor sit</li>
              <li>Amet, consectetur</li>
              <li>Adipiscing elit,set</li>
              <li>Duis aute irure</li>
              <li>Ut enim ad minim</li>
              <li>Dolore magna aliqua</li>
              <li>Excepteur sint</li>
            </ul>

            <form action="" method="GET">
              <input type="hidden" name="product-title" value="Activewear">
              <div class="row">
                <div class="col-auto">
                  <ul class="list-inline pb-3">
                    <li class="list-inline-item">Size :
                      <input type="hidden" name="product-size" id="product-size" value="S">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <ul class="list-inline pb-3">
                    <li class="list-inline-item text-right">
                      Quantity
                      <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                    <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                  </ul>
                </div>
              </div>
              <div class="row pb-3">
                <div class="col d-grid">
                  <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                </div>
                <div class="col d-grid">
                  <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <h3>Comments</h3>
      @auth
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="{{route('storecomment',$product->id)}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      @endauth
      @guest
      To Comment Please <a href="{{route('login')}}">Login</a> or <a href="{{route('register')}}">Register</a>
      @endguest
      @forelse ($product->comments as $comment)
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <p class="card-text">{{$comment->comment}}</p>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-between">
              <span class="text-muted">{{$comment->created_at->diffForHumans()}}</span>
              <span class="text-muted">By: {{$comment->user->name}}</span>
            </div>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <p class="card-text">No Comments</p>
          </div>
        </div>
      </div>
      @endforelse
         </div>
  </div>
</section>


@endsection

@section('script')

@endsection

