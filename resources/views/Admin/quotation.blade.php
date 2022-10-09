

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

            // Select all checkbox
            $("#select-all").click(function(){
                var isSelected = $(this).is(":checked");
                if(isSelected){
                    $(".table tbody tr").each(function(){
                        $(this).find('input[type="checkbox"]').prop('checked', true);
                    })
                }else{
                    $(".table tbody tr").each(function(){
                        $(this).find('input[type="checkbox"]').prop('checked', false);
                    })
                }
            });

            // Remove selected rows
            $("#remove-row").click(function(){
                $(".table tbody tr").each(function(){
                    var isChecked = $(this).find('input[type="checkbox"]').is(":checked");
                    var tableSize = $(".table tbody tr").length;
                    if(tableSize == 1){
                        alert('All rows cannot be deleted.');
                    }else if(isChecked){
                        $(this).remove();
                    }
                });
            });

        })
    </script>


<div class="container">
    <div class="container">
        <h1>Make Quotation</h1>
    </div>



    <div class="form-div">

        <div class="row">
            <div class="col-md-3">
                <label for="exampleFormControlInput1">Drug</label>
                <input type="text" class="drugname form-control" id="drugname" placeholder="Enter Drug Name">

            </div>
            <div class="col-md-3">
                <label for="exampleFormControlInput1">Unit Price</label>
                <input type="text" class="form-control" id="unitprice" placeholder="Enter price">

            </div>
            <div class="col-md-3">
                <label for="exampleFormControlInput1">Quantity</label>
                <input type="text" class="form-control" id="quantity"  placeholder="Enter Drug quantity">

            </div>
            <div class="col-md-3" style="text-align: right;">

                <button class="btn btn-primary" id="add-row">Add Record</button>
            </div>

        </div>

    </div>

</div>


    <div class="container">

        <form action="/submitquotation" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
        <table class="table">
            <thead>
            <tr>
                <th>All <input type="checkbox" id="select-all"></th>
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
            <button class="btn-success" >Submit</button>

        </form>
        <button class="remove-row" id="remove-row">Remove Record</button>

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












