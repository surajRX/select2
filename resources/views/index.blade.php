<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select2 for multiple select & live search</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container pt-5">
        <div class="card p-3">

            <h1 class="text-center text-danger pb-3">Select2 for multiple select & live search</h1>

            @if (session()->has('success'))
                <div class="col-md-6 offset-md-3 alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form action="post" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="justify-content-center">
                    <div class="col-md-6 offset-md-3 form-group">
                        <h6>Title:</h6>
                        <input type="text" name="title" id="title" class="form-control">
                        @error('title')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="col-md-6 offset-md-3 form-group">
                        <h6 class="pt-2">Description:</h6>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        @error('description')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                    </div>


                    <div class="col-md-6 offset-md-3 form-group">
                        <h6 class="pt-2">Tags:</h6>
                        <select class="tags form-control"
                        id="tags"
                         name="tags[]"
                            multiple="multiple"
                       ></select>
                        @error('tags')
                     <label class="text-danger">{{ $message }}</label>
                        @enderror
                </div>

                <div class="col-md-6 offset-md-3 py-3">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
   
   $(document).ready(function(){
    
     $('.tags').select2({
        placeholder:'select',
        allowClear:true,
     });

     $("#tags").select2({
        ajax:{
            url:"{{ route('get-category')}}",
            type:"post",
            delay:250,
            dataType:'json',
            data:function(params){
                return{
                    name:params.term,
                    "_token":"{{ csrf_token()}}",
                };
            },
            processResults:function(data){
                return{
                    results: $.map(data,function(item){
                        return {
                            id:item.id,
                            text:item.title
                        }
                    })
                };
            },

        },

    }); 

   });
    </script>
</body>

</html>
