$(function () {
    $('#btn').click(function () {
        var link = $('#link').val();
        var username = $('#username').val();
        var content = $('#content').val();
        var avatar_url = $('#avatar_url').val();
        $.post(link, {
            "content": content,
            "username": username,
            "avatar_url": avatar_url,
        });

    });
});