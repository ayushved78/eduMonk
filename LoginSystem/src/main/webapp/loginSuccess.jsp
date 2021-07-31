<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
			<a href="http://localhost/eduMonk/home.html">BACK TO BASE</a>
            <div class="container" align="center">
                <div class="regbox box">                        
                        <form action="confirm" method="post">
                            <p>Full Name</p>
                            <input type="text" placeholder="Full Name" name="fname" required>
                            <p>Role</p>
                            <input type="text" placeholder="Role" name="role" required><br>
                            <input type="submit" value="Save">
                        </form>
                </div>
            </div>
</body>
</html>