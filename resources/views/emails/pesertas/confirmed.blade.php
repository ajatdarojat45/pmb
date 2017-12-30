<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <p><b>Terimakasih telam malakukan konfirmasi pembayaran. Kami akan mengecek pembayaran anda dan mengirim email pemberitahuan.</b></p>
                </div>

                <div class="title m-b-md">
                    <b>{{$payment->peserta->code}} </b>
                </div>

                <div class="links">
                    <b>
                    <div class="row">
                        <tr>
                            <td>
                                Code:
                            </td>
                            <td>
                                {{$payment->code}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Bank:
                            </td>
                            <td>
                                {{$payment->bank->name}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                No. Rekening:
                            </td>
                            <td>
                                {{$payment->no_rekening}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Nama Rekening:
                            </td>
                            <td>
                                {{$payment->name_rekening}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Nominal:
                            </td>
                            <td>
                                {{$payment->nominal}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Date:
                            </td>
                            <td>
                                {{$payment->date}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Notes:
                            </td>
                            <td>
                                {{$payment->note}}
                            </td>
                        </tr><br>
                        <tr>
                            <td>
                                Stat:
                            </td>
                            <td>
                                @if ($payment->stat == 0)
                                    Waiting
                                @elseif($payment->stat == 1)
                                    Valid
                                @elseif($payment->stat == 2)
                                    Block
                                @endif
                            </td>
                        </tr>
                    </div>
                    </b>
                </div>
            </div>
        </div>
    </body>
</html>