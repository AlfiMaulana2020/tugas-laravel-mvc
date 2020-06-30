<!DOCTYPE html>
<html> 
 <head>
        <title>SanberBook</title>

 </head>
        
 <body>
       <h1> Buat Account Baru ! </h1>   

       <h2> Sign Up Form </h2> 
       <form action="/Register">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value=""><br>
      </form> 
      <p>
        <label>Gender:</label>
        <br>
        <label><input type="radio" name="jenis_kelamin" value="Male" />Male</label><br>
        <label><input type="radio" name="jenis_kelamin" value="Female" />Female</label><br>
        <label><input type="radio" name="jenis_kelamin" value="Other" />Other</label>
    </p>
    <p>
        <label>Language Spoken:</label>
        <br>
        <label><input type="checkbox" name="Bahasa" value="Bahasa Indonesia" />Bahasa Indonesia</label><br>
        <label><input type="checkbox" name="Bahasa" value="English" />English</label><br>
        <label><input type="checkbox" name="Bahasa" value="Other" />Other</label>
    </p>
      <form action="/Register">
        
        <label for="Nationality">Nationality :</label>
        <br>
        <select id="Nationality" name="Nationality">
          <option value="Indonesia">Indonesia</option>
          <option value="Amerika Serikat">Amerika Serikat</option>
          <option value="Amerika Serikat">Arab Saudi</option>
          <option value="Amerika Serikat">Singapura</option>
        </select>
      </form>
       <p> Bio : </p>
       <textarea name="message" style="width:200px; height:200px;"></textarea>
       <form action="welcome.blade.php" method="get">
        <button type="submit">Sign Up</button>
        @csrf
        </form> 
 </body>  

</html>