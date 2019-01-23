# Purpose

Set up an nginx reverse proxy frontend  whith 3 apache2 backends.

Each backend is running on a different port and is displaying a basic html page with different background color.

The background color of the page is managed using an environment variable named `color` that is passed to the apache2 backends. 

You can monitor easily on each backend your http request has been dispatched. 

# Usage 

## start

    docker-compose -d
    
## test

    curl localhost
    
returns:

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            body {
                background-color: red;
                color:white;
            }
        </style>
        <meta charset="UTF-8">
        <title>red</title>
    </head>
    <body>
    <h1>red</h1>
    </body>
    </html>