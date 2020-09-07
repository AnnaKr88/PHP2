function loadMore(){
    let str = $('.content .img-item').last().attr('data-id');
    
    console.log(str);
    $.ajax ({
        url: 'config.php',
        type: 'POST',
        dataType: 'json',
        data: {STR:str},
        error: function (req, text, error) {
            console.log(text + ' | ' + error);
        },
        success: function (answer){
            console.log(answer);
            let content = '';
            for (let ans in answer) {
                content += '<div class="img-item" data-id="'+answer[ans].id+'">';
                content += '<img src="img/small/' + answer[ans].img + '" alt="image">';
                content += '</div>';
            }
            $('.content').append(content);
        }
    })
}