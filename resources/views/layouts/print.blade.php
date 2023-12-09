@props(['where' => 'Print'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel').($where ? " - ".Str::title($where) : '') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
   <style>
        @page {
            margin: 50px !important;
            size: A4
        }

        @media print {
            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        .sheet {
            overflow: visible;
            height: auto !important;
        }

        table {
            width: 100%;
        }


        table.header th,
        table.header td {
            text-align: left;
                vertical-align: top;
        }

        table#journal > thead > tr > th,
        table#journal > tbody > tr > td {
            text-align: left;
            padding: 0.25rem 0.5rem 0.25rem 0.5rem;
        }

        .button {
            background-color: #2E2E2E;
            color: #f1f1f1;
            padding: 8px;
            cursor: pointer;
        }

    </style>
</head>
<body class="A4" style="padding-top: 50px;">
    <center>
        <div class="no-print">
            <button class="button" onclick="window.print()">Print/Download PDF</button>
        </div>
    
        <section class="sheet padding-10mm">
            {{ $slot }}
        </section>
    </center>
</body>
</html>