@extends('layouts.main', ['title' => 'Products Management'])

@section('content')

<h1>welcome to Products page</h1>
{{-- <h1>{{storage_path("app/public").'/logo.png'}}</h1> --}}
<a class="btn btn-primary" href="{{route('products.create')}}">Create New</a>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Category/Subcategory</th>
                <th>Images</th>
                <th>Name</th>
                <th>Sku</th>
                <th>Details</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Hot</th>
                <th>New</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->category->name }} <br>{{ $product->subcategory->name }}</td>
                <td>@if ($product->images)
                    
                        @foreach ($product->images as $image)
                        
                            <a href="{{ asset('storage/'.$image->name) }}" data-lightbox="image-{{$product->id}}" data-title="{{$product->name}}"><img src="{{ asset('storage/'.$image->name) }}" width="50px"></a>
                            
                        
                        @endforeach
                    
                    
                @endif</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->details }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td @class(['bg-info','text-success' => $product->status, 'text-danger' => !$product->status])>{{ $product->status == 1 ? 'active' : 'inactive' }}</td>
                <td @class(['text-danger' => $product->hot])>{{ $product->hot == 1 ? 'hot' : 'not hot' }}</td>
                <td @class(['text-danger' => $product->new, 'text-success' => !$product->new])>{{ $product->new == 1 ? 'new' : 'not new' }}</td>
                
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('products.show', $product->id) }}"> <i class="bi bi-eye-fill"></i> </a>
                    <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $product->id) }}"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                    <i>Comments</i>
                    <ul>
                    @forelse ($product->comments as $c)
                       <li>{{$c->comment}} by {{$c->user->name}} ({{$c->user->email}})</li> 
                    @empty
                        <li>no comments</li>
                    @endforelse
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection