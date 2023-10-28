
<!DOCTYPE html>
<html>
    <head>
        <title>Bio-Data</title>
    </head>
    <body align="center">
        <caption>Bio-Data</caption>
        <table align="center" border="1" width="50%">
            <tr><td>Name:</td>
                <td><?php echo $_POST['name'];?></td>
            </tr>
            <tr><td>DOB:</td>
                <td><?php echo $_POST['dob'];?></td>
            </tr>
            <tr><td>Gender:</td>
                <td><?php echo $_POST['gender'];?></td>
            </tr>
           <tr><td colspan="2">ADDRESS</td></tr>
            <tr><td>State:</td>
                <td><?php echo $_POST['state'];?></td>
            </tr>
            <tr><td>District:</td>
                <td><?php echo $_POST['district'];?></td>
            </tr>
            <tr><td>Pin Code:</td>
                <td><?php echo $_POST['pin'];?></td>
            </tr>
            <tr><td>Phone:</td>
                <td><?php echo $_POST['phone'];?></td>
            </tr>
            <tr><td>Email:</td>
                <td><?php echo $_POST['email'];?></td>
            </tr>
            <tr><td colspan="2">EDUCATIONAL QUALIFIVCATION</td></tr>
            <tr><td>10<sup>th</sup> Percentage:</td>
                <td><?php echo $_POST['ten'];?></td>
            </tr>
            <tr><td>12<sup>th</sup> Percentage:</td>
                <td><?php echo $_POST['twelve'];?></td>
            </tr>
            <tr><td>Known Language:</td>
                <td><?php echo $_POST['lang'];?></td>
            </tr>
            <tr><td>Extra Curricular Activity:</td>
                <td><?php echo $_POST['extra'];?></td>
            </tr>
            <tr><td>Professional Qualification:</td>
                <td><?php echo $_POST['extra'];?></td>
            </tr>
        </table>
    </body>
</html>