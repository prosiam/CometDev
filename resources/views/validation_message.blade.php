{{-- validation message show --}}

<script>
    @if ($errors->any())
    // <p class="alert alert-danger">{{$errors->first()}}</p>
    swal('Validation Error !','{{$errors->first()}}','warning');
    
    @endif
    
    @if (Session::has('success'))
        // <p class="alert alert-success">{{Session::get('success')}}</p>
        swal('Congratulation !','{{Session::get('success')}}','success');
        
    @endif
</script>

