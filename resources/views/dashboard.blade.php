<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    <div class="py-12">


        <div class="max-w-xl mx-auto   ">


            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Upload Prescription ') }}
            </h2>

{{--            {{ Auth::user()->id }}--}}
{{--            {{ Auth::user()->name }}--}}

            <div class="card " style="width: 50rem;">

                <div class="card-body">
                    <form action="/postprescription" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}


                        <x-jet-input id="user_name" class="block mt-1 w-full" type="hidden" name="user_name"
                                     value="{{ Auth::user()->name }}"/>

                        <x-jet-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id"
                                     value="{{ Auth::user()->id }}"/>


                        <div>
                            <x-jet-label for="note" value="{{ __('Enter A Note Here') }}"/>
                            {{--                        <x-jet-input id="note" class="block mt-1 w-full" type="text" name="note" :value="old('note')"--}}
                            {{--                         required autofocus autocomplete="name"/>--}}
                            <Textarea name="note" cols="20" rows="4" class="form-control m-2"
                                      placeholder="note"></Textarea>
                        </div>


                        <div class="mt-4">
                            <x-jet-label for="delivery_address" value="{{ __('Delivery Address') }}"/>
                            <x-jet-input id="delivery_address" class="block mt-1 w-full" type="text"
                                         name="delivery_address"
                                         :value="old('address')" required/>
                        </div>

                        <div>
                            <x-jet-label for="delivery_time" value="{{ __(' Delivery Time ') }}"/>
                            <x-jet-input id="delivery_time" class="block mt-1 w-full" type="text" name="delivery_time"
                                         :value="old('delivery_time')" required autofocus autocomplete="delivery_time"/>
                        </div>

                        <br>


                        <div>
                            <label class="m-2">Upload Prescription Images</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-jet-button class="ml-4">
                                {{ __('Send Prescription') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--    <div class="container" style="margin-top: 50px;">--}}
    {{--        <div class="row">--}}


    {{--            <div class="col-lg-3"></div>--}}
    {{--            <div class="col-lg-6">--}}
    {{--                <h3 class="text-center text-danger"><b>Add New Post</b> </h3>--}}
    {{--                <div class="form-group">--}}
    {{--                    <form action="/post" method="post" enctype="multipart/form-data">--}}
    {{--                        @csrf--}}
    {{--                        <input type="text" name="title" class="form-control m-2" placeholder="title">--}}
    {{--                        <input type="text" name="author" class="form-control m-2" placeholder="author">--}}
    {{--                        <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>--}}
    {{--                        <label class="m-2">Cover Image</label>--}}
    {{--                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">--}}

    {{--                        <label class="m-2">Images</label>--}}
    {{--                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>--}}

    {{--                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}

</x-app-layout>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


