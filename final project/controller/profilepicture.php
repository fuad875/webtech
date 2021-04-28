<!DOCTYPE html>
<html>

<head>
    <title>Change Profile Picture</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="https://cdn5.vectorstock.com/i/thumb-large/68/34/sunglasses-emoticon-with-big-smile-vector-28136834.jpg" alt="logo" width="100px" height="50px">
            </td>

            <!-- <td align="right">
                | <a href="logout.php">Logout</a>
            </td> -->
        </tr>

        <tr style="height:100px;">
            <td>
                <br>
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="profilePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePass.php">Change Password</a></li>
                    <!-- <li><a href="logout.php">Logout</a></li> -->
                </ul>
            </td>

            <td>
                <form method="POST" action=" ">
                    <fieldset style="width:200px;">
                        <legend><b>PROFILE PICTURE</b></legend>
                        <table>
                            <tr>
                                <td><img src="data:image/png;base64,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" alt="Profile Picture" width="100px" height="100px"></td>
                            </tr>
                            <tr>
                                <td><input type="file" name="image" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
</body>

</html>