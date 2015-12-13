<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX POST Form</title>
    <meta charset="utf-8">
</head>
<body>

<div id="response">
    <pre></pre>
</div>

<form id="my-form">
    <input type="text" id="first-name" name="first-name" placeholder="First Name" />
    <input type="text" id="last-name" name="last-name" placeholder="Last Name" />

    <button type="submit">Submit</button>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    (function($){
        function processForm( e ){
            $.ajax({
                url: 'https://hooks.slack.com/services/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',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: '{"channel": "#teamens", "username": "webhookbot", "text": "This is posted to #teamens and comes from a bot named webhookbot.", "icon_emoji": ":ghost:"}',
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#my-form').submit( processForm );
    })(jQuery);
</script>
<!-- 343bfb2f46a512d0410c408b1213a257 -->
</body>
</html>
