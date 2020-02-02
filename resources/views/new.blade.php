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
<script>
$(document).ready(function() {

fetch_customer_data();

function fetch_customer_data(query = '') {
    $.ajax({
        url: "{{ route('action') }}",
        method: 'GET',
        data: {
            query: query
        },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            let output = '<br><h4 class="center-align">Top Videos</h4>';
            const videoContainer = document.getElementById('video-container');
            for (var i = 0; i < data.length; i++) {
                //console.log(data[i]);
                title = data[i]['title'];
                if (title.length > 90) {
                    title = title.substring(0, 90) + '...';
                }
                output += `
                            <div class="col s3">
                            <div class ="card small z-depth-3">
                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/${data[i]['id']}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="card-content" style="font-family:Roboto, Arial, sans-serif;font-size:1.1em;font-weight:bold;">${title}</div>
                            </div>
                            </div>
      
                        `;
            }
            videoContainer.innerHTML = output;
        }
    })
}

$(document).on('click', '#search_btn', function() {
    var query = $('#search').val();
    fetch_customer_data(query);
});
});
</script>