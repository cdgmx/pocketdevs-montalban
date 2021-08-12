            
  



           <div id ='myBtn' class="add-entry">
                        <a href="javascript:void(0);" class="nav-close-btn">
                        <i class="fas fa-plus-circle"></i>
                        </a>
            </div>

      
        <script async defer>
            // Get the modal    

        var addimgbtn = document.getElementById("img-linkID")

        var linkArea = document.getElementById("add-link")

        var modal = document.getElementById("myPost");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        var linkclsbtn = document.getElementsByClassName("close-add-link")[0];

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        addimgbtn.onclick = function(){
            linkArea.style.display ="flex";
            
        }
        linkclsbtn.onclick = function(){
            linkArea.style.display ="none";
        }
            
        btn.onclick = function() {
            modal.style.display = "block";
        
        }
        

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
}
        </script>
    </body>
</html>