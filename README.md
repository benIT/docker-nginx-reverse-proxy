# Purpose

This `docker` project sets up a basic architecture based on:

* one `nginx` reverse proxy frontend
* three `apache2` backends

Each backend is running on a different port and is displaying a basic html page with different background color.

The background color of the page is managed using an environment variable named `color` that is passed to the `apache2` backends. 

Thanks to the color variable, you can easily monitor on which backend the http request has been dispatched.

# Demonstration

You can use this project to create a Christmas garland:

<center><video width="640" height="480" controls src="demo.mp4"></video></center>

# Usage 

## Start

    docker-compose up -d
    
## Test

    curl localhost
    
returns:

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            body {
                background-color: red; <!-- color value from env var -->
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
    
## Stop

    docker-compose down