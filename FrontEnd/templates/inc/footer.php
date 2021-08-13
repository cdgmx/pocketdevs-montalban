            
  



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
        var submitlinkntm = document.getElementById("submit-add-link");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];


            //editing post variables
        <?php if($posts): ?>

            console.log('test')
            // $( document ).ready(".entry-article[0] input[type='button' id='editpost0']").on( "click",

            $(document ).ready(function(){

                $(".entry-modify input[type='button']").on( "click",
                function(){
                    var parent_class = $(this).parent().parent().parent();
                    console.log( $( this ).val());
                    // console.log(parent_class.children("input[name='post_id']").value);
                    console.log($(this).next().val());
                    var addInp = document.createElement('input')
              
                    //dont know what is right one to use, createelement or inner HTML, but createelement is much efficient
                    Object.assign(addInp,{
                        type:"hidden",
                        name:"post_id",
                        value: $(this).next().val()//get the input of class with name post_id
                    })

                    modal.style.display = "block"; //change modal var
                    document.getElementById('title-input').value = $.trim(parent_class.children('h1').text()) //top long, need to shorten
                    document.getElementById('txt-area').value = $.trim(parent_class.children('p').text())
                    // document.getElementsByTagName('form').insertAfter(addInp)
                    // $(content)
                    $(addInp).appendTo('.post-content form')
                    // parent_class.children('form').insertAfter(addInp)
                    // $('.post-content form').insertAfter(addInp)
                    document.getElementById('submit-post').value = 'Edit'  
                    document.getElementById('submit-post').name = 'modifypost'
                    
                   
                 }
            );
            })
         

     


        <?php endif; ?>
        
    



        // When the user clicks on the button, open the modal
        addimgbtn.onclick = function(){
            linkArea.style.display ="flex";
            
        }
        linkclsbtn.onclick = function(){
            document.getElementById('imglink-input').value = '';
            linkArea.style.display ="none";
        }
            
        btn.onclick = function() {
            modal.style.display = "block";
            
        }
        
        submitlinkntm.onclick = function(){
            linkArea.style.display ="none";
        }
        

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            $(".post-content input[name='post_id']").remove()
            
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