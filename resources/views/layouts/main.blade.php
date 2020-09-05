<!DOCTYPE html>
<html lang="en">


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Northern Green Developers</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!--
        Template 2042 The Block
        http://www.tooplate.com/view/2042-the-block
        -->
        <link href="{{ asset('frontend/css/tooplate_style.css') }}" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="{{ asset('frontend/js/swfobject.js') }}"></script>
        <script type="text/javascript">
            var flashvars = {};
            flashvars.xml_file = "photo_list.xml";
            var params = {};
            params.wmode = "transparent";
            var attributes = {};
            attributes.id = "slider";
            swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "780", "210", "9.0.0", false, flashvars, params, attributes);
        </script>

    </head>
</head>

<body>

        @yield('content')


</body>
</html>
