function load_videos() {
    $.ajax({

        url: 'http://217.71.129.139:4226/api_is22/get_videos.php',
        method: 'get',
        dataType: 'json',
        success: function (data) {

            data['videos'].forEach(function (video){
            let div = $('<div>')
            div.append('<h3>' + video['title'] + '</h3>')
            $('#videos').append(div)

        })
       }
  });
}