<!-- The Modal -->
<div id="myModal" class="modal">        
        
        <div class="center images">
          <button type="button" class="close" data-dismiss="myModal">&times; Close</button>
          <p style="margin-bottom:20px;">
          </p>
          <img class="modal-content" src="assets/ads/2018/06/test.jpg">
          
        </div>
        <!-- <div id="caption"></div> -->
      </div>

      <script>
        // Get the modal
        var modal = document.getElementById('myModal');
        var interval = setInterval(showModal, 5*1000);
        var close;

        // showModal();
        function showModal() {
          modal.style.display = "block";
          clearInterval(interval);
          close = setInterval(closeModal, 10*1000);
        }

        function closeModal(){
            console.log(close);
            modal.style.display = "none";
            clearInterval(close);
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
      </script>

      <style type="text/css">
         /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            padding-top: 200px; /* Location of the box */
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            margin: auto;
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 600px;
            height: 400px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .center {
            margin: auto;
            padding: 10px;
            width: 600px;
            height: 400px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        } 
      </style>