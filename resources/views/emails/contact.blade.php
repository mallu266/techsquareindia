<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enquiry Form</title>

        <style>
            .container{
                width: 90%;
                margin: auto;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <table style="width: 100%">
                <tr>
                    <th style="width: 15%">Name</th>
                    <td style="width: 25%">{{ @$name}}</td>
                    <th style="width: 15%">Email</th>
                    <td style="width: 25%">{{ @$email}}</td>
                </tr>
                <tr>
                    <th style="width: 15%">Message</th>
                    <td colspan="3" >
                        {{ $msg}}
                    </td> 
                </tr>
            </table>
        </div>
    </body>
</html>
