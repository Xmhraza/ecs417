<?php
    session_start();
?>
<!DOCTYPE html>
<html class="formBackground">
    <header>
        <meta charset="utf-8">
      <link rel="stylesheet" href="reset.css">
      <link rel="stylesheet" href="MiniProject.css">
    </header>

  <body>
    <form name="form1" id="myForm" class="form1" method="POST" action="AddPost.php">
        <h2 class="formHeading">Add Post</h2>
        <p>
          <label>Title:</label><br>
          <input class="textbox" type="text"name="title" id="title"
          pattern="[A-Za-z0-9]{3,}"></inputtype>
        </p>
        <p>
          <label>Blog:</label><br>
          <input class="textbox" name="Blog" id="Blog"></textarea>
        </p>
        <button name="subject" type="submit" value="Clear" onclick="validationCheck()">Post</button>
        <button name="subject" type="button" onClick="clearForm()">Clear</button>
        <button name="subject" type="button" onClick="redirectFunction()">Preview</button>
    
    
    </form>

    

    <script>

function redirectFunction() {
  const title = document.getElementById('title')

  title.addEventListener('input', evt => {
      <?php $_SESSION['title'] ?> = title;
  })
  
  const blog = document.getElementById('Blog')

  blog.addEventListener('input', evt => {
      <?php $_SESSION['blog'] ?> = blog;
  })
  
  window.location.href = "edit.php";
   
   }
     
     
     
     const input = document.querySelector('input')

input.addEventListener('input', evt => {

  
  if (document.forms["form1"]["title"].value == "") {
    input.dataset.state = 'invalid'
  } else {
    input.dataset.state = 'valid'
  }
})

const blog = document.getElementById('Blog')

blog.addEventListener('input', evt => {
  
  if (document.forms["form1"]["Blog"].value == "") {
    blog.dataset.state = 'invalid'
  } else {
    blog.dataset.state = 'valid'
  }
})
     
     function clearForm()
    {  
        var clearForm = confirm("Do you want to clear form?");
       
 
          if (clearForm == true){
            document.getElementById("myForm").reset();
          }
          else{
            alert("The form will not be cleared");
     }    
  }

  function validationCheck() {
        const form = document.getElementById("myForm");
        
        
        
        if (document.forms["form1"]["title"].value == "" || document.forms["form1"]["Blog"].value == "") {
          form.addEventListener("submit", evt => {
           evt.preventDefault();
          })
        } else {
          alert("The blog is submitted");
          form.addEventListener("submit", evt => {
           evt.returnValue = true;
        })

      }
      
 }
     
    </script>

  </body>
</html>

