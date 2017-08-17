
<php>

	 <?php "contact.php";?>
   <form action="contact-form.php" method="post">
   <contact-form to="vdc9@georgetown.edu" subject="Form Submitted">
      Name: <input type="text" name="name"><br>
      Email: <input type="text" name="email"><br>
      Phone Number: <input type="text" name="phone number"><br>
      Description <input type="text" name="Description"><br>
      <textarea rows="10" cols="250" placeholder="How can we help?"></textarea> 
    <input type="submit">
    </form>

    echo "Thank you! We'll be in touch soon."

</php>
