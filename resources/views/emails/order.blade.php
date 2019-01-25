
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
</head>
<!--BODY-->
<body
style="
-moz-box-sizing: border-box;
-ms-text-size-adjust: 100%;
-webkit-box-sizing: border-box;
-webkit-text-size-adjust: 100%;
margin: 0;
background: #cecece !important;
box-sizing: border-box;
color: #0a0a0a;
font-family: Helvetica,Arial,sans-serif;
font-size: 16px;
font-weight: 400;
line-height: 1.3;
margin: 0;
min-width: 100%;
padding: 10px;
text-align: left;
width: 100% !important"
>

<div style="background-color: #fff; border-radius: 0px 0px 20px 20px;">
    <table style="width: 100%; background-color: #fff; color: #fff; padding: 15px 20px; border-bottom: 4px solid #4fcaa5; text-align: center">
        <tr>
            <td> <img src="{{ asset('/images/logos/solaria-logo.png') }}" alt="logo"> </td>
        </tr>
    </table>

    <table style="width: 100%;padding: 0px 25px;">
        <tr>
            <td>
                <p style="text-align: left; max-width: 75%;">
                    Hola
                    <strong>{{ $data['personResponsible']['name'] }}</strong>,
                    Gracias Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis?
                </p>
            </td>
            <td>
                <p style="text-align: left; max-width: 75%;  ">
                    <h2 class="font-weight-bold text-dark">Ordine: {{ $data['code'] }}</h2>
                </p>

                <p class="d-block text-dark">Data: {{ Carbon\Carbon::createFromFormat( 'Y-m-d H:m:s', $data['created_at'])->toDateString() }} </p>
                <p class="d-block text-dark">Tempo: {{ Carbon\Carbon::createFromFormat( 'Y-m-d H:m:s', $data['created_at'])->toTimeString() }} </p>
            </td>
        </tr>
    </table>

    <table style="width: 100%; margin: 27px 0px; padding: 0px 25px;">
        <tr>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Nombre:</strong> {{ $data['personResponsible']['name'] }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Email:</strong>{{ $data['personResponsible']['email'] }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Codigo Fiscal:</strong> {{ $data['personResponsible']['fiscal_code'] }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Telefono:</strong> {{ $data['personResponsible']['phone'] }}</p>
            </td>
        </tr>
        <tr>
            {{-- <td>
                <p style="margin: 0px 0px 6px;"><strong>Modalidad de pago:</strong> Delivery</p>
            </td> --}}
            <td></td>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Arrivo:</strong> {{ $data['rooms'][0]['bookingDate']['checkin'] }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Fecha:</strong>{{ $data['created_at'] }}</p>
            </td>
            <td></td>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Partenza:</strong> {{ $data['personResponsible']['name'] }}</p>
            </td>
        </tr>
        <tr>
            {{-- <td>
                <p style="margin: 0px 0px 6px;"><strong>Ora di consegna:</strong> 142018</p>
            </td>
            <td style="width: 30%;">--}}
            </td>
            <td>
                <p style="margin: 0px 0px 6px;"><strong>Durata totale del soggiorno: </strong>
                {{ $data['rooms'][0]['bookingDate']['checkin'] }}/ {{ $data['rooms'][0]['bookingDate']['checkout'] }}

            </p>
            </td>
        </tr>
    </table>



    <div style="width: 100%; padding-bottom: 30px; border-bottom: 2px solid #ccc; overflow-x: auto;">
        <div style="border-bottom: 2px solid #ccc; width: 100%; min-width: 490px;">
            <div style="display: flex; margin: 10px 20px;">
                <div style="width: 40%; min-width: 220px;">Appartamento</div>
                <div style="width: 25%; min-width: 100px; text-align: right;">Prezzo</div>
                <div style="width: 25%; min-width: 100px; text-align: right;">Importo</div>
            </div>
        </div>
        <!-- item 1 -->
        @foreach ($data['rooms'] as $room)
        <div style="display: flex; margin: 10px 20px;">

            <div style="width: 40%; min-width: 220px;">
                <div>
                    <strong>Stanza riservata: {{ $room['name'] }} </strong>
                </div>
                <div>
                    <strong>Persone: {{ $room['persons_quantity'] }}</strong>
                </div>
                {{--<div>
                    <strong>Destinazione: {{ $room['persons_quantity'] }}</strong>
                </div>--}}
                <div>
                    <strong>Responsabile della stanza </strong>
                </div>
                <div>
                    <strong>Nome: {{ $room['personResponsible']['name'] }} </strong>
                </div>
                <div>
                    <strong>telefono: {{ $room['personResponsible']['phone'] }} </strong>
                </div>
                <div>
                    <strong>E-mail: {{ $room['personResponsible']['email'] }}</strong>
                </div>
            </div>
            <div style="width: 25%; min-width: 100px; text-align: right;">
                <p style="margin: 0px; padding: 5px 0px 10px; font-size: 14px">{{ $room['total_item'] }}</p>

            </div>
            <div style="width: 25%; min-width: 100px; text-align: right;">
                <p style="margin: 0px; padding: 5px 0px 10px; font-size: 14px">{{ $room['iva_item'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div style="max-width: 100%; margin: 10px 20px; text-align: right; text-transform: uppercase; padding-bottom: 10px;">
        <p>
            Totale Parziale: <span style="display: inline-block; width: 100px; color: brown">{{ $data['subtotal'] }}€</span>
        </p>
        <p>
            IVA: <span style="display: inline-block; width: 100px; color: brown">{{ $data['iva'] }}€</span>
        </p>
        <p>
            <strong>Totale: <span style="display: inline-block; width: 100px; color: brown">{{ $data['total'] }}€</span></strong>
        </p>
    </div>
</div>


<div style="border-radius: 20px; padding: 20px; background-color: #fff; margin-top: 30px; margin-bottom: 30px;">
    <p style="text-align: center;">
        <a href="#" style="display: inline-block; width: 50px; height: 50px; background-color: #222; border-radius: 50px; margin: 0px 10px;">
            <img src="red.png" alt="Red social">
        </a>
        <a href="#" style="display: inline-block; width: 50px; height: 50px; background-color: #222; border-radius: 50px; margin: 0px 10px;">
            <img src="red.png" alt="Red social">
        </a>
        <a href="#" style="display: inline-block; width: 50px; height: 50px; background-color: #222; border-radius: 50px; margin: 0px 10px;">
            <img src="red.png" alt="Red social">
        </a>
    </p>
    <p style="text-align: center;">
        <strong>Solaria Vacanza</strong>
        <br>
        Via Giovanni XXIII, 7 – 08020 BUDONI (OT)
    </p>
    <p style="text-align: center; font-size: 24px; margin: 0px;">
        <a href="tel:+393408831917" style="text-decoration: none;">+393408831917</a>
    </p>

    {{-- <p style="text-align: center; margin: 5px 0px;">
        <a href="#" style="text-decoration: none;">www.paginaweb.com</a>
    </p> --}}

    <div style="width: 90%; margin: auto; border-top: 1px solid #ccc; display: flex; justify-content: space-between; padding: 10px 0px;">
        <small>Copyright 2018 Nombre empresa</small>
        <img src="/images/logos/jumperr-logo-fondo-negro.png" alt="Jumperr">
    </div>
</div>


</body>

</html>
