<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        table,
        tr,
        td {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        .t td input {
            position: relative;
        }

        .t td img {
            position: absolute;
            /* right: 0; */
            left: 305px;
            width: 16px;
            top: 107px;
            cursor: pointer;
        }
    </style>
</head>

<body>



    </head>

    <body>

        <table class="">
            <tbody>
                <tr>
                    <td colspan="13" class=""><span class="">
                            <h3>Remember Me Cookie Example PHP script</h3>
                        </span></td>
                </tr>
                <form action="validation.php" method="POST">
                    <tr class="">
                        <td class="">User Name</td>
                        <td class=" "><input type="text" name="email" value="<?php if (isset($_COOKIE["email"]) != null) {
                                                                                    echo $_COOKIE["email"];
                                                                                } ?>"></td>
                    </tr>
                    <tr class="t">
                        <td class="">Password</td>
                        <td class=" ">
                            <input type="password" name="password" id="password" value="<?php if (isset($_COOKIE["pass"])) {
                                                                                            echo $_COOKIE["pass"];
                                                                                        } ?>" class="a">
                            <img id="test" src="https://previews.123rf.com/images/meranda1990/meranda19902001/meranda1990200100025/139464969-eye-icon-look-and-vision-icon-eye-vector-icon-.jpg" width="50px" alt="">
                        </td>

                    </tr>
                    <tr class="">
                        <td class=""></td>
                        <td class=" "> <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["email"])) { ?> checked <?php } ?>>
                            remember me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="13" class=""><span class="">Note:-here User Name = demo and Password=demo </span></td>
                    </tr>
                    <tr>
                        <td colspan="13" class=""><input type="submit" value="login" name="login"></td>
                    </tr>
                </form>

            </tbody>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
         $(document).ready( function(){
         $("#test").click( function () { 
           let check = $("#password").attr("type");
           if( check == "password"){
            $("#password").attr("type", "text"); 
            $("#test").attr("src", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCFetalaUey90-3gFBGiOzuRIfOaTV8tiXUQ&usqp=CAU");
           }else{
            $("#password").attr("type", "password"); 
            $("#test").attr("src", "https://previews.123rf.com/images/meranda1990/meranda19902001/meranda1990200100025/139464969-eye-icon-look-and-vision-icon-eye-vector-icon-.jpg ");
           }

         });

         });
        </script>
    </body>

</html>