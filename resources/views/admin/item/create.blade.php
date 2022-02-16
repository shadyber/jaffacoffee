@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->

        <!-- Card Body -->
        <div class="card-body">

            <form action="/items" method="post" enctype="multipart/form-data">
             @csrf

                <div class="form-group">
                    <input type="text" class="form-control form-control" name="name" placeholder="Item Name" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input type="file" class="form-control form-control" name="photo" placeholder="Item Photo" required>
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea class="form-control form-control" id="detail" name="detail" placeholder="Detail Information about the product" required>
                    </textarea>
                    @error('detail')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control" name="price" placeholder="Item Price" required>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="weight" placeholder="Item Weight" required>
                        @error('weight')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group">
                    <select class="form-control form-control" name="item_origion_id" placeholder="Item Origion" >
                        <option value="">Select Item Origion</option>
                      @foreach(\App\Models\ItemOrigion::all() as $origion)
                        <option value="{{$origion->id}}">{{$origion->title}}</option>
                            @endforeach

                    </select>
                </div>


                <div class="form-group">
                    <input type="number" class="form-control form-control" name="init_qnt" placeholder="Stock Balance" />

                </div>

                <div class="form-group">
                    <select class="form-control form-control" name="item_roast_type_id" placeholder="Item Roast Type" >
                        <option value="">Select Roast Type</option>
                      @foreach(\App\Models\ItemRoastType::all() as $roast)
                        <option value="{{$roast->id}}">{{$roast->title}}</option>
                            @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control form-control" name="item_size_id" placeholder="Item Size Id" >
                        <option value="">Select Roast Type</option>
                      @foreach(\App\Models\ItemSize::all() as $size)
                        <option value="{{$size->id}}">{{$size->title}}</option>
                            @endforeach

                    </select>
                </div>

             <div class="form-group">
                    <select class="form-control form-control" name="badge" placeholder="Item Badge" >
                        <option value="">Select Badge</option>
                        <option value="">NEW</option>
                        <option value="">HOT</option>
                        <option value="">SALE</option>
                    </select>
                </div>

                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Post Product
                </button>

            </form>



        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail');
    </script>
@endsection
