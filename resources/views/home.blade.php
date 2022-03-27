@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body" id = "ajax-board" style = "overflow-x: scroll;background-color: white;color: black;">
                <div id = "ajax-item">
                        <h3 style = "margin-top: 20px;margin-left: 89px;padding-bottom: 26px;"><b id = "percentage-ajax">{{number_format((float)$percent, 3, '.', '')}}</b>(%)</h3>
                        

                        <table class = "table" width = "100%">
                        
                        <col>
                        <col>
                        <colgroup span="3"></colgroup>
                        <thead>
                            <tr>
                            <th scope="col" style = "border-top: none !important;border-bottom: none !important;"></th>
                            <th colspan="2" scope="colgroup" style = "border: 1px solid white;border-top: none !important;border-left: none !important;border-right: none !important;">IR</th>
                            <th colspan="2" scope="colgroup" style = "border: 1px solid white;border-top: none !important;border-left: none !important;border-right: none !important;">BTCm </th>
                            <th colspan="2" scope="colgroup" style = "border: 1px solid white;border-top: none !important;border-left: none !important;border-right: none !important;">CJ </th>
                            <th colspan="2" scope="colgroup" style = "border: 1px solid white;border-top: none !important;border-left: none !important;border-right: none !important;">Binance </th>
                            <th colspan="2" scope="colgroup" style = "border: 1px solid white;border-top: none !important;border-left: none !important;border-right: none !important;">Kraken </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th rowspan="10" scope="rowgroup" style = "border-top: none !important;border-bottom: none !important;text-align:center;vertical-align: middle;">Seller<br> Orders</th>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[0]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[0]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[0][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[0][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[0][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif

                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[1]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[1]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)

                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[1][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[1][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[1][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[2]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[2]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[2][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[2][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[2][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[3]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[3]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[3][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[3][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[3][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[4]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[4]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[4][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[4][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[4][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[5]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[5]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[5][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[5][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[5][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[6]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[6]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[6][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[6][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[6][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[7]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[7]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[7][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[7][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[7][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[8]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[8]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[8][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[8][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[8][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_seller[9]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_seller[9]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_seller[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_seller[9][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_seller[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_seller[9][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_seller[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_seller[9][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            
                        </tbody>
                        <tbody>
                            <tr>
                            <th rowspan="1" scope="rowgroup" style = "border-top: none !important;border-bottom: none !important;">Last Price</th>
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">70044</th>
                            <td style = "border: 1px solid white;border-left: none !important;">A2</td>
                            <td style = "border: 1px solid white;border-right: none !important;">70044</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            </tr>

                        </tbody>
                        <tbody>
                            <tr>
                            <th rowspan="10" scope="rowgroup" style ="text-align:center;vertical-align: middle;">Buyer<br> Orders</th>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[0]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[0]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[0][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[0][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[0][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[0][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[1]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[1]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[1][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[1][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[1][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[1][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif

                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[2]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[2]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[2][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[2][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[2][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[2][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[3]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[3]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[3][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[3][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[3][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[3][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[4]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[4]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[4][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[4][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[4][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[4][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[5]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[5]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[5][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[5][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[5][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[5][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[6]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[6]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[6][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[6][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[6][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[6][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[7]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[7]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[7][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[7][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[7][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[7][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[8]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[8]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[8][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[8][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[8][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[8][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>
                            <tr>
                            @if ($exchange->exchange1 == 1)
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange1_buyer[9]['Price'], 2, '.', '')}}</th>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange1_buyer[9]['Volume'], 3, '.', '')}}</td>
                            @else
                            <th scope="row" style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</th>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange2 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">A4</td>
                            <td style = "border: 1px solid white;border-left: none !important;">A4</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange3 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange3_buyer[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange3_buyer[9][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange4 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange4_buyer[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{number_format((float)$exchange4_buyer[9][1], 3, '.', '')}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            @if ($exchange->exchange5 == 1)
                            <td style = "border: 1px solid white;border-right: none !important;">{{number_format((float)$exchange5_buyer[9][0], 2, '.', '')}}</td>
                            <td style = "border: 1px solid white;border-left: none !important;">{{$exchange5_buyer[9][1]}}</td>
                            @else
                            <td style = "border: 1px solid white;border-right: none !important;background-color: grey;">0</td>
                            <td style = "border: 1px solid white;border-left: none !important;background-color: grey;">0</td>
                            @endif
                            </tr>

                        </tbody>
                        
                        </table><br>
                </div>
                
                <h5>Arb Alert Setting</h5>
                <form method="POST" action="{{route('alert_save')}}" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-1">AVT: </div>
                        <div class="col-md-3">
                            <input id = 'avt' name='avt_value' value="{{$alert->avt}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <span for="audio">Choose audio file: </span>
                            <input type="file" id="audio" name="audio" accept="audio/*">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <span for = "percentage">Alert Percentage: </span>
                            <input type="text" id="alert-percent" placeholder="Type Percentage" name="alert-percent" accept="audio/mp3" value="{{$alert->percentage}}">
                        </div>
                        
                        <div class="col-md-4"></div>
                    </div>
                    
                    <div class="row" style = "margin-top: 21px;">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                            @if ($exchange->exchange1 == 1)
                            <input type="checkbox" id="exchange1" name="exchange1" checked>
                            @else
                            <input type="checkbox" id="exchange1" name="exchange1" >
                            @endif
                            <label for="exchange1">Exchange 1</label>
                        </div>
                        <div class="col-md-2">
                            @if ($exchange->exchange2 == 1)
                            <input type="checkbox" id="exchange2" name="exchange2" checked>
                            @else
                            <input type="checkbox" id="exchange2" name="exchange2" >
                            @endif
                            <label for="exchange2">Exchange 2</label>
                        </div>
                        <div class="col-md-2">
                            @if ($exchange->exchange3 == 1)
                            <input type="checkbox" id="exchange3" name="exchange3" checked>
                            @else
                            <input type="checkbox" id="exchange3" name="exchange3">
                            @endif
                            <label for="exchange3">Exchange 3</label>
                        </div>
                        <div class="col-md-2">
                            @if ($exchange->exchange4 == 1)
                            <input type="checkbox" id="exchange4" name="exchange4" checked>
                            @else
                            <input type="checkbox" id="exchange4" name="exchange4">
                            @endif
                            <label for="exchange4">Exchange 4</label>
                        </div>
                        <div class="col-md-2">
                            @if ($exchange->exchange5 == 1)
                            <input type="checkbox" id="exchange5" name="exchange5" checked>
                            @else
                            <input type="checkbox" id="exchange5" name="exchange5">
                            @endif
                            <label for="exchange5">Exchange 5</label>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    <div class="row" style = "margin-top: 21px;">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-2">
                            <input type="file" id="audio1" name="audio1" accept="audio/*"><br>
                            @if ($sound->sound1_check == 'on')
                            <input type="checkbox" id="sound_exchange1" name="sound_exchange1" checked>
                            @else
                            <input type="checkbox" id="sound_exchange1" name="sound_exchange1" >
                            @endif
                            <label for="sound_exchange1">Exchange 1</label>
                        </div>
                        <div class="col-md-2">
                            <input type="file" id="audio2" name="audio2" accept="audio/*"><br>
                            @if ($sound->sound2_check == 'on')
                            <input type="checkbox" id="sound_exchange2" name="sound_exchange2" checked>
                            @else
                            <input type="checkbox" id="sound_exchange2" name="sound_exchange2" >
                            @endif
                            <label for="sound_exchange2">Exchange 2</label>
                        </div>
                        <div class="col-md-2">
                            <input type="file" id="audio3" name="audio3" accept="audio/*"><br>
                            @if ($sound->sound3_check == 'on')
                            <input type="checkbox" id="sound_exchange3" name="sound_exchange3" checked>
                            @else
                            <input type="checkbox" id="sound_exchange3" name="sound_exchange3">
                            @endif
                            <label for="sound_exchange3">Exchange 3</label>
                        </div>
                        <div class="col-md-2">
                            <input type="file" id="audio4" name="audio4" accept="audio/*"><br>
                            @if ($sound->sound4_check == 'on')
                            <input type="checkbox" id="sound_exchange4" name="sound_exchange4" checked>
                            @else
                            <input type="checkbox" id="sound_exchange4" name="sound_exchange4">
                            @endif
                            <label for="sound_exchange4">Exchange 4</label>
                        </div>
                        <div class="col-md-2">
                            <input type="file" id="audio5" name="audio5" accept="audio/*"><br>
                            @if ($sound->sound5_check == 'on')
                            <input type="checkbox" id="sound_exchange5" name="sound_exchange5" checked>
                            @else
                            <input type="checkbox" id="sound_exchange5" name="sound_exchange5">
                            @endif
                            <label for="sound_exchange5">Exchange 5</label>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                    <div class="row" style = "margin-top: 21px;">
                        <div class="col-md-4">
                            <button class = "btn btn-success" type="submit">Save</button>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                   
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
