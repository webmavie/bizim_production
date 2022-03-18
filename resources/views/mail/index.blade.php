<div style="width: 100%; margin: 20px 0;">
    <div style="padding: 10px 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 1px;
            border-bottom-right-radius: 1px;
            background-color: #444;
            color: #fff;
            text-align: center;
            font-weight: 600;">
        <img src="https://bizimproduction.az/images/logo.png" width="120" alt="Bizim Production">
    </div>
    <div style="padding: 0px 20px 25px 20px;
            border: 2px solid #ddd;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top: 0;">
        <div style="text-align: center">
            <h3 style="color: dark;
            font-size: 1.3em;
            margin-bottom: 0;">
                {{ $details['name'] }}</h3>
            <p style="margin-top: 0px;">{{ $details['email'] }}</p>
        </div>
        <p style="font-size: 1.125rem;
            line-height: 1.61111em;
            margin-top: 1em;
            color: inherit;
            font-family: inherit;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            margin-bottom: 1em;">{{ $details['message'] }}</p>
    </div>
</div>
