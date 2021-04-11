<html class="formBackground">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="MiniProject.css">
      <title>My CV</title>
    </head>

    <?php 
        
            session_start();
            include_once("database.php");
        
    ?>
    <nav>
        <em class="initial">HR</em>
        <a href="AddPost1.php" class = "linkUpgrade">Add Post</a>
        <a href="ViewBlog1.php" class = "linkUpgrade">View Blog</a>
        <a href="logout.php" class = "linkUpgrade">Logout</a>     
    </nav>

    <section>
    <form method="POST" action="MonthlyBlog.php" class="form1">
            <label>City:</label><br>
            <input type="text" name="Month"list="cities">
            <datalist id="cities">
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </datalist>

            <button name="subject" type="submit" value="Clear">Submit</button>
    </form>  
          
    </section>
