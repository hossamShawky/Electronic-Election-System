<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "refresh" content = "2;{{route('check_mac')}}" />
    <link rel="stylesheet" href="{{asset('css/welcomeStyle.css')}}">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <title>Welcome Page</title>
</head>
<body onload="move()">
    <section>
        
        <div id="back"></div>
        <div id="overlay">
        </div>
        <div id="content">
            من فضلك انتظر لإِنْشاء  قناة اتصال آمنة   
            <div id="bar">
                <div class="progress">
                    <div id="myBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                </div>
            </div>
        </div>
        

    </section>
    <script>
        var i = 0;
        function move() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("myBar");
                var width = 1;
                var id = setInterval(frame, 10);
                function frame() 
                {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                      }
                }
            }
        }
    </script>
</body>
</html>