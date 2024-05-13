@extends('layouts.main', ['title' => 'Add New Product'])

@section('content')
<div class="d-flex justify-content-between">    
    <a title="back to index" style="font-size: 2em" href="{{route("products.index")}}"><i class="bi bi-backspace"></i></a>
</div>
{!! html()->span()->text('Hello world!') !!}
<div class="product-form">

    {{-- <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">
@csrf --}}
{{ html()->form('post', route("products.store"))->acceptsFiles()->open() }}
@include('products.form')    
    <div class="form-group">
    <button type="submit" class="btn btn-success my-3">Save</button>    
    </div>
</form>
</div>    
@endsection


@section('script')
<script>
    function decorate_subcat(d){
        console.log(d);
    $h = "<option value='-1'>Select</option>";
        for (const k in d) {
            // console.log(k,d[k]);
           $h += "<option value='"+k+"'>"+d[k]+"</option>"; 
        }
        $("#subcategory_id").html($h);
    }

    $(document).ready(function () {
       $("#category_id").change(function () {
        let id = $(this).val();
        
        if(id == "-1"){  return;}
        let url = "{{url("getsubcat")}}/"+id;
        // alert(url);
        // alert(id);
        $.get(url,{},function(d){  
            console.log(d);          
            decorate_subcat(d);
        });


       })
    });
</script>
    
@endsection