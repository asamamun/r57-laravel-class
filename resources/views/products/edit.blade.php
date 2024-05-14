@extends('layouts.main', ['title' => 'Edit Product'])

@section('content')
<h1>Edit Product</h1>
{{ html()->modelForm($product, 'PUT', route('products.update', $product))->acceptsFiles()->open() }}
    @include('products.form')

    <div class="form-group">
        <button type="submit" class="btn btn-success my-3">Update</button>    
    </div>

{{ html()->closeModelForm() }}
@endsection

@section('script')
<script>
$(document).ready(function(){
    $(".pimage").click(function(){
        $t = $(this);

        ///////////////////////////////
        Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
//@@@
$id = $t.data('id');
        // console.log($id);
        $.ajax({
            type: "post",
            url: "{{route('deleteimage', ':id')}}".replace(':id', $id),
            data: {
        "_token": "{{ csrf_token() }}",        
        },
            success: function(data){
                // console.log(data);
                //swal status true
                if(data.status){
                    $t.parent().remove();
                    //swal success
                    // alert(data.message);
                    Swal.fire({
  position: "top-end",
  icon: "success",
  title: data.message,
  showConfirmButton: false,
  timer: 1500
});
}
            }});
//@@@
  }
});
        
        
        
                })
    })


</script>
@endsection
