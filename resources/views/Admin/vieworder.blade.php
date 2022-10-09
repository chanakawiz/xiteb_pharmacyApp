
<div class="main">




    <div class="row">

        <div class="col-8">
            @foreach ($orders as $order)
                <div class="card text-center">
                    <div class="card-header">
                        <h3>View Order {{ $order->id }}</h3>
                    </div>

                    {{--                    <div class="card-body">--}}
                    {{--                        <h5 class="card-title">order id : {{ $order->id }}</h5>--}}
                    {{--                        <p class="card-text"></p>--}}
                    {{--                    </div>--}}


                    {{--                        <h5 class="card-title"> Patient Name : {{ $order->	user_name }}</h5>--}}

                    <br>
                    <label>Patient Name</label>
                    <input type="text" name="quantity" disabled class="form-control" id="quantity" placeholder="Enter Drug quantity" value="{{ $order->	user_name }}">


                    <label> Note</label>
                    <Textarea name="note" cols="20" rows="4" class="form-control m-2 " disabled="true"
                              placeholder="note">{{ $order->note }}</Textarea>

                    {{--                        <h5 class="card-title">  Delever adress : {{ $order->delivery_address }}</h5>--}}
                    <label>Delever adress</label>
                    <input type="text" name="quantity" disabled class="form-control" id="quantity" placeholder="Enter Drug quantity" value="{{ $order->delivery_address }}">



                    {{--                        <h5 class="card-title">  Delever time: : {{ $order->delivery_time }}</h5>--}}


                    <label> Delever time</label>
                    <input type="text" name="quantity" disabled class="form-control" id="quantity" placeholder="Enter Drug quantity" value="{{ $order->delivery_time }}">


                    <hr>

                    <div class="card-footer text-muted">
                        <a href="{{ url('/createquotation/' . $order->id) }}"
                           class="btn btn-primary"><i>Create  Quotation</i></a>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="image col-4">

            <div class="row">
                @foreach ($images as $img)

                    <div class="text-center">

                        <img src="/images/{{ $img->image }}"class="img-thumbnail" style="max-height: 200px; max-width: 250px;" alt="" srcset="">

                    </div>
                @endforeach
            </div>


        </div>

     </div>




</div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


<style>
    .card{
        margin-top: 20px;
        margin-left: 30px;
        width: 80%;
        padding: 10px;
    }

    .image{
        margin-top: 20px;
        border-width: 1px;
    }



</style>

