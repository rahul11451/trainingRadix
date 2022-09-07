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

     @media (max-width: 576px) {
         .main .d-sm-flex {
             display: flex;
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
                 <h4 class="mb-5 text-center fw-bold text-decoration-underline text-primary">Practical-3 module4
                 </h4>
                 <p class="mb-5 text-center fw-bold text-decoration-underline text-primary">Make a function that
                     takes in a single parameter and returns a new promise. using setTimeout,
                     after 500 milliseconds, the promise will either resolove or reject. if the input is a
                     string,
                     the promise resolves with that reverse string . if the input is anything but a string it
                     rejects
                     with that same input call the function wrong Input</p>
                 <label for="">Type any text here
                     <input type="text" id="text" value="" required class="border border-solid rounded borderborder-2 border-primary">
                     <button type="submit" name="submit" onclick="checkPromise()" class="px-md-5 py-md-2 mb-5 rounded-pill btn-outline-primary btn-white">submit</button>
                 </label>
                 <br>
                 <br>
                 <span id="result"></span>
             </div>
             <script>
                 function checkPromise() {
                     var promise = new Promise(function(resolve, error) {
                         let text = document.getElementById('text').value;
                         var pattern = /^[a-z]+$/i;
                         if (text != "") {
                             if (pattern.test(text)) {
                                 let done;
                                 done = text.split("").reverse().join("");
                                 setTimeout(() => resolve("Reverse string is: <strong>" + done + "</strong>"), 500);
                             } else {
                                 setTimeout(() => error("The function has wrong input: <strong>" + text + "</strong>"), 500);
                             }
                         } else {
                             alert('The String is Empty.');
                         }
                     });

                     promise.then(
                         function(value) {
                             nensi(value);
                         },
                         function(error) {
                             nensi(error);
                         }
                     );

                     function nensi(nen) {
                         document.getElementById('result').innerHTML = nen;
                     }
                 }
             </script>
         </div>
     </div>
 </div>
 <?php
    include("../../../footer.php");
    ?>