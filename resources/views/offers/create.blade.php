<!doctype html>

  
 @include('layouts.header')

<body>
  @include('layouts.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('messages.username') }}</div> --}}
                @if(session('success'))
                <div class="alert alert-success">
                 <strong>{{session('success')}}</strong> Indicates a successful or positive action.
               </div>
                @endif
            
                {{-- @elseif(session('Errors'))
                <div class="alert alert-success">
                 <strong>{{session('Errors')}}</strong> Indicates a successful or positive action.
               </div>
                @e --}}
              
                <div class="card-body">
                    @csrf
                    <form action="{{route('store')}}"    class="was-validated" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                          <label for="uname" class="form-label">{{__('messages.name_ar')}}</label>
                          <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="name_ar" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('name_ar')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          {{-- <small class="form-text text-danger">{{__('messages.username')}}  </small>   --}}
                          @enderror
                        </div>
                        <div class="mb-3 mt-3">
                          <label for="uname" class="form-label">{{__('messages.name_en')}}</label>
                          <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="name_en" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('name_en')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          {{-- <small class="form-text text-danger">{{__('messages.username')}}  </small>   --}}
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="price" class="form-label">{{__('messages.price')}}</label>
                          <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('price')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Detail:</label>
                          <input type="text" class="form-control" id="pwd" placeholder="Enter Detail" name="detail_ar" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('detail_ar')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Detail:</label>
                          <input type="text" class="form-control" id="pwd" placeholder="Enter Detail" name="detail_en" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('detail_en')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">photo:</label>
                          <input type="file" class="form-control" id="pwd" name="photo" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                          @error('photo')
                          <small class="form-text text-danger">{{$messages}}  </small>  
                          @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>