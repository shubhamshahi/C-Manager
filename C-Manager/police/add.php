
   <html>
    <head>
        <title> C-Manager </title>
    </head>
    <body>
        
    
       <form action='done.php' method='post'>
        <br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Add Slot</u></h3>
        <table align="center">
            
            <tr><td><span class="heading">Type: </span></td><td><select id="type" name="type">
            <option value="select">Select</option>
            <option value="business">Business</option>
            <option value="selfemp">Self Employeed</option></select></td></tr>
            <tr><td><span class="heading">ID: </span></td><td><input type='text' name='id' required></td></tr>
            <tr><td><span class="heading">Slots: </span></td><td><input type='text' name='sno' required></td></tr>
            
            
            </table>
           <table align="center"> <tr><td><input type='submit' name='submitBtn' value='Add Slot' class="addstaff_button"></td></tr>
           </table>
        
        </form>
        </body>
</html>