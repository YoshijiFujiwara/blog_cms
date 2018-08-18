<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブログ</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="toolbar">
    <v-toolbar>
        <v-toolbar-title>MYBLOG</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn flat>Blog</v-btn>
            <v-btn flat>About</v-btn>
            <v-btn flat>Contact</v-btn>
        </v-toolbar-items>
    </v-toolbar>
</div>

@yield('content')

<script src="{{asset('js/app.js')}}"></script>

@yield('script')
