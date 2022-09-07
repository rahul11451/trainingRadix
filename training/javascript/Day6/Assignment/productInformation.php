<style>
    body {
        overflow-x: hidden;
    }

    .main {
        margin-top: 140px;
        padding-bottom: 500px !important;
    }

    .main #data h5 {
        font-size: 20px;
    }

    .main #data h6 {
        font-size: 20px;
    }

    .nav-item:hover {
        font-weight: bolder;
    }

    .margin_nen {
        margin-left: 15% !important;
        /* margin-top: 10% !important; */
    }

    @media (max-width: 871px) {
        .table{
            font-size: 16px;
        }
    }
    @media (max-width: 576px) {
        .main .d-sm-flex {
            display: flex;
        }
        .table{
            font-size: 9px;
        }
    }
    @media (max-width: 419px) {
        .table{
            font-size: 6px;
        }
    }
</style>

<?php
include("../../../header.php");
?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../../sidebar.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-4 column10">
            <div class="p-md-5 m-md-5 bg-white border rounded shadow-lg border-primary">
                <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Assignment-1 module6
                </h4>
                <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Display Product
                    information in Grid format with AddToCart option. once a user click on AddtoCart button
                    should be stored in local storage.
                    Click on cart summary will display that data into console.</p>
                <table class="table table-striped table-responsive">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th>ProductId</th>
                            <th>ProductName</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody id="values">
                    </tbody>
                </table>
                <button class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white" onclick="addToCart()">Add to cart</button>
                <button class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white" onclick="cartSummary()">Cart Summary</button>
            </div>
            <script type="text/javascript">
                data();
                var product;
                async function data() {
                    var detail = await fetch("detail.json");
                    var result = await detail.json();
                    product = result.products;
                    for (var i = 0; i < product.length; i++) {
                        var tr = document.createElement("tr");
                        var td1 = document.createElement("td");
                        var td2 = document.createElement("td");
                        var td3 = document.createElement("td");
                        var td4 = document.createElement("td");
                        var td5 = document.createElement("td");

                        var att = document.createAttribute("class");
                        att.value = "form-control";
                        var att2 = document.createAttribute("placeholder");
                        att2.value = "Enter";
                        var att4 = document.createAttribute("id");
                        att4.value = product[i].Id;

                        var data1 = document.createTextNode(product[i].Id);
                        var data2 = document.createTextNode(product[i].Name);
                        var data3 = document.createTextNode(product[i].Price);
                        var data4 = document.createTextNode(product[i].Location);
                        var input = document.createElement("input");

                        input.setAttributeNode(att);
                        input.setAttributeNode(att2);
                        input.setAttributeNode(att4);
                        input.style.border = "2px solid blue";
                        input.style.width = "100px";
                        input.style.marginLeft = "10%";
                        td1.appendChild(data1);
                        td2.appendChild(data2);
                        td3.appendChild(data3);
                        td4.appendChild(data4);
                        td5.appendChild(input);

                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tr.appendChild(td3);
                        tr.appendChild(td4);
                        tr.appendChild(td5);

                        document.getElementById('values').append(tr);
                    }
                }

                function addToCart() {
                    var arr = [];
                    for (let i = 0; i < product.length; i++) {
                        var dataValue = document.getElementById(product[i].Id).value;
                        var data1 = {
                            Qty: dataValue
                        };
                        arr.push(data1);
                    }
                    let a = JSON.stringify(arr);

                    localStorage.setItem("addData", a);

                }

                function cartSummary() {
                    var x = localStorage.getItem("addData");
                    var datas = JSON.parse(x);
                    let arr = [];
                    for (let i = 0; i < datas.length; i++) {
                        if (datas[i].Qty != "") {
                            arr.push(datas[i]);
                            //   alert("entered value is: " +datas[i].Qty+ "you can also show the result in consol too");
                            console.log("entered value is: " + datas[i].Qty);
                        }
                    }
                }
            </script>
        </div>
    </div>
</div>
<?php
include("../../../footer.php");
?>