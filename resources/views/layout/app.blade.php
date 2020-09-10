<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            h1, h2, h3, h4 {
              text-transform: capitalize;
            }
            nav {
              text-align: right;
            }
            nav ul {
              list-style: none;
              padding: 0;
            }
            nav ul > li {
              display: inline-block;
              margin: 0 0 0 20px;
            }
            nav ul > li a {
              text-decoration: none;
              font-size: 1.1em;
            }
            nav ul > li:hover a {
              text-decoration: underline;
            }
            .add-album {
              display: inline-block;
              padding: 5px 10px;
              background: #00c3a8;
              color: #fff;
              border-radius: 5px;
            }
            .big-text {
              font-size: 1.3em;
            }
            .container {
              width: 100%;
              max-width: 1170px;
              margin: 0 auto;
              padding: 20px 0 50px;
            }

            .container .album-list {
              padding: 8px;
              border: 1px solid #ccc;
              margin: 10px 0;
              display: flex;
              flex-wrap: wrap;
            }
            .album-list .list-container {
              padding: 5px;
            }
            .album-list .list-container div {
              padding: 3px 0;
            }
            .list-container.img {
              width:150px;
            }
            .list-container.img img {
              width: 100%;
              padding: 3px;
              border: 1px solid #ccc;
            }

            .list-container.info {
              padding: 0 10px;
            }
            .container .album-list .info h3 {
              margin: 8px 0;
            }

            .container .poster-box {
              max-width: 450px;
            }
            /* SHOW PAGE */
            .show-controls {
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
            }
            .controls ul {
              list-style: none;
              display: flex;
              align-items: center;
            }
            .controls ul > li {
              margin-left: 20px;
            }
            .controls ul > li form {
              display: inline-block;
              vertical-align: middle;
            }
            .controls a.edit-btn {
              padding: 5px 15px;
              background-color: #4cd425;
              color: #fff;
              text-decoration: none;
            }
            .controls .delete-btn input[type="submit"] {
              display: inline-block;
              background-color: red;
              color: #fff;
              font-family: 'Nunito', sans-serif;
              font-size: 1em;
              border: none;
              padding: 5px 10px;
              cursor: pointer;
            }

            .container .poster-box img {
              width: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        @include('partials/header')

        @yield('content')
    </div>

    </body>
</html>
