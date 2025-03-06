<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      <link rel="stylesheet" href="s1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text">FEEDBACK FORM</div>
        <form action="feedbackinfo.php" method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="fname">
                 <div class="underline"></div>
                 <label for="">First Name</label>
              </div>
              <div class="input-data">
                 <input type="text" required name="lname">
                 <div class="underline"></div>
                 <label for="">Last Name</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="eaddress">
                 <div class="underline"></div>
                 <label for="">Email Address</label>
              </div>
              
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" required name="content"></textarea>
                 
                 <div class="underline"></div>
                 <label for="">Write Your Feedback</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit" name="feedback">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>