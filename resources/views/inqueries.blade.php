<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quotations ') }}
        </h2>
    </x-slot>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Add new row
            $("#add-row").click(function(){
                var drugname = $("#drugname").val();
                var unitprice = $("#unitprice").val();
                var quantity = $("#quantity").val();


                // document.getElementById('amount').value = lastname*email;
                var amount = unitprice*quantity;

                $(".table tbody tr").last().after(
                    '<tr class="fadetext">'+
                    '<td><input type="checkbox" id="select-row"></td>'+
                    '<td>'+drugname+'</td>'+
                    '<td>Rs. '+unitprice+'</td>'+
                    '<td>'+quantity+'</td>'+
                    '<td>Rs. '+amount+'</td>'+

                    '</tr>'
                );
            })



        })
    </script>


    <div class="container">


    </div>


    <div class="container">

            <table class="table">
                <thead>
                <tr>

                    <th>Drug Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>total</th>
                </tr>
                </thead>
                <tbody>
                <tr>


                </tr>

                </tbody>
            </table>
            <button class="btn-success" >Accept Quatation</button>

        <button class="btn-danger" id="remove-row">Reject Quatation</button>

    </div>





    <style>
        .form-div{
            margin-top: 30px;
            padding: 10px;
            box-shadow: 0px 0px 5px black;
        }
        button{
            width: 200px;
        }

        .table{
            margin-top: 30px;
            box-shadow: 0px 0px 5px black;
        }

        .table thead tr{
            background-color: darkviolet;
            box-shadow: 0px 0px 5px darkviolet;
            outline: darkviolet;
            border: 1px solid white;
            color: white;
        }

        .table th, .table td{
            padding: 10px;
            text-align: center
        }

        .table tbody tr:hover{
            background-color: #8080804a;
        }

        .table tbody tr:active{
            box-shadow: 0px 0px 5px black;
        }

        .remove-row{
            background-color: darkviolet;
            border: 1px solid white ;
            outline: darkviolet ;
            color: white;

            height: 40px;
            box-shadow: 0px 0px 5px darkviolet;
        }

        .remove-row:active{
            border: 1px solid white;
            outline: darkviolet ;
            width: 195px ;
            height: 38px ;
        }

        .fadetext{
            animation: fadetext 1s ease;
        }

        @keyframes fadetext{
            0%{
                opacity: 0.1;
            }
            100%{
                opacity: 1;
            }
        }
    </style>


</x-app-layout>


<style>
    .card {
        margin-top: 20px;
        margin-left: 150px;
        margin-right: 20px;
        margin-bottom: 20px;
        width: 70%;
        padding: 10px;
    }

    .inputs {
        margin: auto;
        width: 70%;
        padding: 8px;
        text-align: left;
    }
</style>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
