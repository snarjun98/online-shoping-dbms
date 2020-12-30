
<html>
<head>


    <style>



        form{
            font-size:22;
            border: black;
            background-position: center;
            width: auto;
            display: flow;
            alignment: center;
            background-color: #ffffff;
            padding: 57px 400px 65px;
        }
        input[type=text],input[type=password],input[type=number],input[type=email] {
            width: 100%;
            padding: 12px 20px;

            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;

            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #1d5200;
        }
        div {
            background-color: #f2f2f2;
            padding: 20px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;

            }
        }

    </style>
</head>
<body>
<h1>
    Registration form
</h1>
<form  action="connection.php" method="post">
    <div class="form-group">
        <label for="f_name">First name</label>
        <input type="text" class="form-control" id="f_name" name="f_name"/>
        </div>
<div class="form-group">
        <label for="l_name">Last name</label>
        <input type="text" class="form-control" id="l_name" name="l_name"/>
</div>
<div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" name="email"/>
        </div>
<div class="form-group">
        <label for="phno">Phone no</label>
        <input type="number" class="form-control" id="phno" name="phno"/>

</div>
<div>
<label>Gender:</label>
    <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
    <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="male">Female</label>
    <label for="other" class="radio-inline"><input type="radio" name="gender" value="o" id="male">Others</label>
</div>
<div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="pass"/>

</div>
<div class="form-group">
        <label for="cpass">Confirm Password</label>
        <input type="password" class="form-control" id="cpass" name="cpass"/>

</div>
<div class="form-group">
        <label for="ad1">Address1</label>
        <input type="text" class="form-controlad" id="ad1" name="ad1" />
</div>
<div class="form-group">
        <label for="ad2">Address2</label>
        <input type="text" class="form-controlad" id="ad2" name="ad2" />
</div>
<div>
<input type="submit" class="btn btn-primary">
</div>
    </form>
</body>
</html>