<!DOCTYPE html>
<html><head>
    <title>Send an email</title>
</head>
<body>
    
  <a href="index.php" style="color: black;">BACK</a>
    <center>
        <h4 class="sent-notification"></h4>
    <form id="myForm" onsubmit="sendEmail()">
        <h2>Send an email</h2>
        <label>Name</label>
        <input id="name" type="text" placeholder="Enter name">
        <br><br>
        <label>Email</label>
        <input id="email" type="text" placeholder="Enter email">
        <br><br>
        <label>Subject</label>
        <input id="subject" type="text" placeholder="Enter subject">
        <br><br>
        <p>Message</p>
        <textarea id="body" rows="5" placeholder="Type message"></textarea>
        <br><br>
        <button type="button" onclick="sendEmail()" value="Send an email">Submit</button>
        
    </form>
    </center>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    function sendEmail(){
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");
        
        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
            $.ajax({
                url: 'mail.php',
                method: 'POST',
                dataType: 'json',
                data:{
                    name: name.val(),
                    email: email.val(),s
                    subject: subject.val(),
                    body: body.val()
                }, success: function(response){
                    $('#myform')[0].reset();
                    $('#sent-notification').text("Message sent successfully");


                }
            })
        }
    }
    function isNotEmpty(caller){
        if(caller.val()==""){
            caller.css('border','1px solid red');
            return false;
        }
        else{
            caller.css('border','');
            return true;
        }
    }
</script>
</body>
</html>