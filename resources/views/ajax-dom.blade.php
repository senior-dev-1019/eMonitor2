
<h3 style = "margin-top: 20px;margin-left: 89px;padding-bottom: 26px;">Arb: <b id = "percentage-ajax">{{number_format((float)$percent, 3, '.', '')}}</b>%</h3>
                

 <table class = "table" width = "100%">
 
 <col>
 <col>
 <colgroup span="3"></colgroup>
 <thead>
     <tr>
     <th scope="col" style = "border-top: none !important;border-bottom: none !important;"></th>
     <th colspan="2" scope="colgroup" style = "border: 1px solid black;border-top: none !important;border-left: none !important;border-right: none !important;">IR </th>
     <th colspan="2" scope="colgroup" style = "border: 1px solid black;border-top: none !important;border-left: none !important;border-right: none !important;">BTCm </th>
     <th colspan="2" scope="colgroup" style = "border: 1px solid black;border-top: none !important;border-left: none !important;border-right: none !important;">CJ </th>
     <th colspan="2" scope="colgroup" style = "border: 1px solid black;border-top: none !important;border-left: none !important;border-right: none !important;">Binance </th>
     <th colspan="2" scope="colgroup" style = "border: 1px solid black;border-top: none !important;border-left: none !important;border-right: none !important;">Kraken </th>
     </tr>
 </thead>
 <tbody>
     <tr>
     <th rowspan="10" scope="rowgroup" style = "border-top: none !important;border-bottom: none !important;text-align:center;vertical-align: middle;">Seller<br> Orders</th>
     @if ($exchange->exchange1 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[9]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[9]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[9][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[9][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[9][1]*$exchange4_buyer[9][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[8][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif

     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[8]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[8]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)

     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[8][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[8][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[8][1]*$exchange4_buyer[8][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[8][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[7]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[7]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[7][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[7][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[7][1]*$exchange4_buyer[7][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[7][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[6]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[6]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[6][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[6][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[6][1]*$exchange4_buyer[6][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[3][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[5]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[5]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[5][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[5][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[5][1]*$exchange4_buyer[5][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[5][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[4]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[4]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[4][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[4][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[4][1]*$exchange4_buyer[4][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[4][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[3]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[3]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[3][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[3][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[3][1]*$exchange4_buyer[3][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[3][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[2]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[2]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[2][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[2][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[2][1]*$exchange4_buyer[2][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[2][0], 5, '.', '')}}</td>
     <td  class="volume-td"style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[2][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[1]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[1]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[1][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[1][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[1][1]*$exchange4_buyer[1][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[1][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" class="maxval1" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_seller[0]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" class="maxval1" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_seller[0]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td class="maxval2" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_seller[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="maxval2" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_seller[0][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td class="maxval3" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_seller[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="maxval3" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_seller[0][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td class="maxval4" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_buyer[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="maxval4" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_buyer[0][1]*$exchange4_buyer[0][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td class="maxval5" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_seller[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="maxval5" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_seller[0][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     
 </tbody>
 <tbody>
     <tr>
     <th rowspan="1" scope="rowgroup" style = "border-top: none !important;border-bottom: none !important;background-color:#e6e6e6></th>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-right: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-right: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-right: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-right: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-right: none !important;background-color:#e6e6e6"></td>
     <td style = "border: 1px solid black;border-left: none !important;background-color:#e6e6e6"></td>
     </tr>

 </tbody>
 <tbody>
     <tr>
     <th rowspan="11" scope="rowgroup" style ="text-align:center;vertical-align: middle;">Buyer<br> Orders</th>
     @if ($exchange->exchange1 == 1)
     <td class="minval1" scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[0]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" class="minval1" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[0]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td class="minval2" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="minval2" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[0][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td class="minval3" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="minval3" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[0][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td class="minval4" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="minval4" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[0][1]*$exchange4_seller[0][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td class="minval5" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[0][0], 5, '.', '')}}</td>
     <td class="volume-td" class="minval5" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[0][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[1]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[1]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[1][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[1][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[1][1]*$exchange4_seller[1][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[1][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[1][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif

     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[2]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[2]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[2][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[2][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[2][1]*$exchange4_seller[2][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[2][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[2][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[3]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[3]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[3][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[3][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[3][1]*$exchange4_seller[3][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[3][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[3][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[4]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[4]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[4][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[4][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[4][1]*$exchange4_seller[4][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[4][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[4][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[5]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[5]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[5][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[5][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[5][1]*$exchange4_seller[5][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[5][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[5][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[6]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[6]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[6][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[6][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[6][1]*$exchange4_seller[6][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[6][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[6][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[7]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[7]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[7][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[7][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[7][1]*$exchange4_seller[7][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[7][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[7][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[8]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[8]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[8][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[8][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[8][1]*$exchange4_seller[8][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[8][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[8][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>
     <tr>
     @if ($exchange->exchange1 == 1)
     <td scope="row" style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange1_buyer[9]['Price'], 5, '.', '')}}</th>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange1_buyer[9]['Volume'], 2, '.', '')}}</td>
     @else
     <td scope="row" style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</th>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange2 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange2_buyer[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange2_buyer[9][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange3 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange3_buyer[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange3_buyer[9][1], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange4 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)1/$exchange4_seller[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{number_format((float)$exchange4_seller[9][1]*$exchange4_seller[9][0], 2, '.', '')}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     @if ($exchange->exchange5 == 1)
     <td style = "border: 1px solid black;border-right: none !important;">{{number_format((float)$exchange5_buyer[9][0], 5, '.', '')}}</td>
     <td class="volume-td" style = "border: 1px solid black;border-left: none !important;">{{$exchange5_buyer[9][1]}}</td>
     @else
     <td style = "border: 1px solid black;border-right: none !important;background-color: grey;">0</td>
     <td style = "border: 1px solid black;border-left: none !important;background-color: grey;">0</td>
     @endif
     </tr>

 </tbody>
 
 <tbody>
     <tr>
     <th rowspan="1" scope="rowgroup" style = "border-top: none !important;border-bottom: none !important;">Time Stamp</th>
     <td colspan="2" scope="row" style = "border: 1px solid black;border-right: none !important;" id="timestamp1"></th>
     
     <td colspan="2" style = "border: 1px solid black;border-right: none !important;" id="timestamp2"></td>
     
     <td colspan="2" style = "border: 1px solid black;border-right: none !important;" id="timestamp3"></td>
     
     <td colspan="2" style = "border: 1px solid black;border-right: none !important;" id="timestamp4"></td>
     
     <td colspan="2" style = "border: 1px solid black;" id="timestamp5"></td>
     
     </tr>

 </tbody>
 
 
 </table><br>
 
 <input id="mysound" value="{{$alert->audio_name}}" style="display:none;">
 <input id="audio1" value="{{$sound->sound1}}" style="display:none;">
 <input id="audio2" value="{{$sound->sound2}}" style="display:none;">
 <input id="audio3" value="{{$sound->sound3}}" style="display:none;">
 <input id="audio4" value="{{$sound->sound4}}" style="display:none;">
 <input id="audio5" value="{{$sound->sound5}}" style="display:none;">

 <input id = "sound1_check" value="{{$sound->sound1_check}}" style="display:none;">
 <input id = "sound2_check" value="{{$sound->sound2_check}}" style="display:none;">
 <input id = "sound3_check" value="{{$sound->sound3_check}}" style="display:none;">
 <input id = "sound4_check" value="{{$sound->sound4_check}}" style="display:none;">
 <input id = "sound5_check" value="{{$sound->sound5_check}}" style="display:none;">

 <input id = "last1_price" value="{{number_format((float)$lastprice[0], 0, '.', '')}}" style="display:none;">
 <input id = "last2_price" value="{{number_format((float)$lastprice[1], 0, '.', '')}}" style="display:none;">
 <input id = "last3_price" value="{{number_format((float)$lastprice[2], 0, '.', '')}}" style="display:none;">
 <input id = "last4_price" value="{{number_format((float)$lastprice[3], 0, '.', '')}}" style="display:none;">
 <input id = "last5_price" value="{{number_format((float)$lastprice[4], 0, '.', '')}}" style="display:none;">

 <input id = "1_price" value="{{number_format((float)$exchange1_buyer[0]['Price'], 0, '.', '')}}" style="display:none;">
 <input id = "2_price" value="{{number_format((float)$exchange2_buyer[0][0], 0, '.', '')}}" style="display:none;">
 <input id = "3_price" value="{{number_format((float)$exchange3_buyer[0][0], 0, '.', '')}}" style="display:none;">
 <input id = "4_price" value="{{number_format((float)$exchange4_buyer[0][0], 0, '.', '')}}" style="display:none;">
 <input id = "5_price" value="{{number_format((float)$exchange5_buyer[0][0], 0, '.', '')}}" style="display:none;">
 
 <input id = "lastprice1" value="{{number_format((float)$lastprice[0], 0, '.', '')}}" style="display:none;">
 
 
 <input id = "max-num" value="{{$max_num}}" style="display:none;">
 
 <input id = "min-num" value="{{$min_num}}" style="display:none;">
 
 <input id = "last1_price" value="{{$lastprice[0]}}" style="display:none;">
 <input id = "last2_price" value="{{$lastprice[0]}}" style="display:none;">
 <input id = "last3_price" value="{{$lastprice[0]}}" style="display:none;">
 <input id = "last4_price" value="{{$lastprice[0]}}" style="display:none;">
 <input id = "last5_price" value="{{$lastprice[0]}}" style="display:none;">