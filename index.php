<!DOCTYPE html>
<html>
  <head>
    <title>User Form</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <section id="container">
      
    <h1>Enter Details</h1>
    <form method="POST" action="save_data.php">
      <label for="first_name">First Name <span class="required">*</span></label>
      <input type="text" id="first_name" name="first_name" required />

      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name"  />

      <label for="dob">Date of Birth <span class="required">*</span></label>
      <input type="text" id="dob" name="dob" required />

      <label for="gender">Gender <span class="required">*</span></label>
      <select id="gender" name="gender" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="telephone"
        >Telephone Number <span class="required">*</span></label
      >
      <input type="number" id="telephone" name="telephone" required />

      <label for="email">Email <span class="required">*</span></label>
      <input type="email" id="email" name="email" required />
      <input type="submit" value="Submit" />
    </form>
  
    </section>
  </body>
</html>
