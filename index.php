<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Das4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="nstyle.css?">
</head>
<body>
    <div id="container" style="display:none;">
        <section id='info'>
            <img id="img"src="" alt="myimg" width="50%"/>
            <section id="nearinfo">
                <ul>
                    <li id="fname"></li>
                    <li id="age"></li>
                </ul>
            </section>
        </section>
        <section id="text">
            <h1>Info</h1>
            <div id="art">
            </div>
        </section>
    </div>
    <div id="logindiv">
        <h1>Login</h1>
        <input type="text" placeholder="login" name="login" id="logininp"/>
        <input type="text" placeholder="password" name="password" id="passwordinp"/>
        <input id="btn" type="submit" value="CLICK"/>
    </div>
    
    <div id="registration">
        <h2 style="text-align:center;">Registration</h2>
        <form action="reg.php" method="post" class="form">
        <input type="text" placeholder="anun" name="anun"/>
        <input type="text" placeholder="log" name="log"/>
        <input type="text" placeholder="pass" name="pass"/>
        <input type="number" placeholder="tariq" name="tariq"/>
        <input type="text" placeholder="txt" name="txt"/>
        <input type="file" placeholder="nkar" name="nkar"/>
        <input type="submit" value="CLICK"/>
        </form>
    </div>

    <script>
        $("#btn").click(function(){
            let login=logininp.value;
            let password=passwordinp.value;
            $.post("log.php",{log:login,pass:password},function(ard){
                let norard=JSON.parse(ard)
                console.log(norard.length)
                if(norard.length==1){
                    container.style.display="none"
                    log.textContent="ERROR TRY AGAIN"
                }else{
                    img.src=norard[3]
                    fname.textContent="Name:"+norard[0]
                    age.textContent="Age:"+norard[2]
                    art.textContent=norard[1]
                    container.style.display="block"
                    registration.style.marginTop="5vh"
                    logindiv.style.marginTop="5vh"
                }
            });
        })
    </script>
</body>
</html>