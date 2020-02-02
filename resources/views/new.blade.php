<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <title>Youtube Search</title>
</head>
<body>
<nav class="black">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">YouTube Search</a>
            </div>
        </div>
    </nav>
    <br>
    <section>
        <div class="container">
            <div id="content">
                <div class="row">
                        <div class="input-field col s6">
                            <input type="text" placeholder="Enter Video Name" id="search" name="search">
                            <input type="submit" id="search_btn" name="search_btn" class="btn waves-effect waves-light red">
                        </div>
                </div>
                <div class="row" id="video-container"></div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
</body>
</html>