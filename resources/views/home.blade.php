@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="card card1"></div>
                <p><b>Apple iPhone 13 Pro Max</b><br>The iPhone 13 Pro Max smartphone features a 6.7-inch Super Retina XDR ProMotion display, 12MP triple rear cameras with LiDAR scanner, and a 12MP selfie camera with FaceID.
                It's powered by a hexa-core Apple A15 chipset with iOS15 software, 20W fast charging, and 15W MagSafe wireless charging. There's also 5G connectivity, Wi-Fi 6, NFC, and up to 1TB of internal storage.
                It has a stainless steel frame sandwiched in glass front and back panels with four color choices - graphite, silver, gold, and sierra blue.</br>
                <br>Price: ₱70,990.00 for the 128GB version, ₱76,990.00 for the 256GB version and ₱88,990.00 for the 512GB version.</br>
            </p>
                <div class="card card2"></div>
                <p><b>Samsung Galaxy M52 5G</b><br>The Samsung Galaxy M52 5G is a Phone from SAMSUNG based on Android 11, One UI 3.1 Operating System. It was released on September 2021. It is a Hybrid Dual SIM (Nano-SIM, dual stand-by) phone.
                The phone comes with 6 of RAM. It has 128GB 6GB RAM, eMMC 5.1 internal storage. It doesn't have a Card slot. Samsung Galaxy M52 5G also has Fingerprint (side-mounted), accelerometer, gyro, proximity, compass sensors.
                This device has a 6.7 inches, 108.4 cm2 (~86.4% screen-to-body ratio) Super AMOLED Plus, 120Hz screen with 1080 x 2400 pixels, 20:9 ratio (~393 ppi density) screen resolution. It weighs around 173 g (6.10 oz) and is 164.2 x 76.4 x 7.4 mm (6.46 x 3.01 x 0.29 in) thick.
                This Phone is powered by a Li-Ion 5000 mAh, non-removable Fast charging 25W battery.</br>
                <br>Price: The best price of Samsung Galaxy M52 5G is ₱ 20,990.00 .</br>
            </p>
        </div>

        <style>
            
            .card1{
                background-image: url('/apple-iphone-13-pro-max-1.jpg');
                height: 230px;
                width: 300px;
                margin-top: 15px;
                margin-right: 15px;
                background-position: center;
                background-size: cover;
                display: inline-block;
                border-radius: 10px;
                box-sizing: border-box;
                cursor: pointer;
            }
            .card2{
                background-image: url('/samsung-galaxy-m52-5g-2.jpg');
                height: 240px;
                width: 300px;
                margin-top: 15px;
                margin-right: 15px;
                background-position: center;
                background-size: cover;
                display: inline-block;
                border-radius: 10px;
                box-sizing: border-box;
                cursor: pointer;
            }
            p{
                margin-top: 20px;
            }
            b{
                font-size: 20px;
                font-weight: bolder;
            }
        </style>
    </div>
</div>
@endsection
