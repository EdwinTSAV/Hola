<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>calendar 2 &lsaquo;</title>
    <meta name="description" content="calendario de 15 minutos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="Automotriz" />
    <link rel="stylesheet" href="https://demoauto.plagesma.com/plugins/servicios/view/css/calendar.css" />
    <script src="https://demoauto.plagesma.com/view/js/jquery.min.js"></script>
    <script src="https://demoauto.plagesma.com/plugins/servicios/view/js/underscore-min.js"></script>
    <script src="https://demoauto.plagesma.com/plugins/servicios/view/js/calendar.js"></script>
</head>

<body>

<div id="calendar"></div>
<script type="text/javascript">
   	var options = {
        events_source: [{}],
        view: 'week',
        tmpl_path: '{#FS_PATH#}plugins/servicios/view/tmpls/',
        tmpl_cache: false,
        language: 'es-ES',
        time_start: '08:00',
        time_end: '20:00',
        time_split: '15'
    }
   	var calendar = $('#calendar').calendar(options);
</script>
</body>