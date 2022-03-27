<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ArbSetting;
use App\Mail\EmailDemo;
use App\Models\Exchange;
use Illuminate\Support\Facades\Mail;
use App\Models\Sound;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::put('exchange1', '1');
        Session::put('exchange2', '1');
        Session::put('exchange3', '1');
        Session::put('exchange4', '1');
        Session::put('exchange5', '1');



        $sound = Sound::find(auth()->user()->id);

        $exchange = Exchange::find(auth()->user()->id);
        // https://www.independentreserve.com/ BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.independentreserve.com/Public/GetOrderBook?primaryCurrencyCode=usdt&secondaryCurrencyCode=aud',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange1_buyer = array_slice($response['BuyOrders'], 0, 10);
        $exchange1_seller = array_slice($response['SellOrders'], 0, 10);

        // binance.com API BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.binance.com/api/v3/depth?symbol=AUDUSDT',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer _kq8l_GxOzmfN2dfrqfBCScUQCoDPW2s9ER94EnViJ8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange4_buyer = array_slice($response['bids'], 0, 10);
        $exchange4_seller = array_slice($response['asks'], 0, 10);

        // coinjar.com BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://data.exchange.coinjar.com/products/USDTAUD/book?level=2',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer _kq8l_GxOzmfN2dfrqfBCScUQCoDPW2s9ER94EnViJ8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange3_buyer = array_slice($response['bids'], 0, 10);
        $exchange3_seller = array_slice($response['asks'], 0, 10);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/USDT-AUD/orderbook',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d39ed3aada7f827a3b7af2f4f857f64f01617458696'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // $response = json_decode($response, true);
        // $exchange2_buyer = array_slice($response['bids'], 0, 10);
        // $exchange2_seller = array_slice($response['asks'], 0, 10);



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.kraken.com/0/public/Depth?pair=xbtaud&count=10',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d0a8458737c275e96c771615e6a966aea1617460896'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange5_buyer = array_slice($response['result']['XBTAUD']['bids'], 0, 10);
        $exchange5_seller = array_slice($response['result']['XBTAUD']['asks'], 0, 10);
        $min = $exchange1_buyer[0]['Price'];
        $max = 0;
        for ($i = 0; $i < 10; $i++) {
            if ($min > $exchange1_buyer[$i]['Price'] && $exchange->exchange1 == 1) {
                $min = $exchange1_buyer[$i]['Price'];
            }
            if ($min > $exchange3_buyer[$i][0] && $exchange->exchange3 == 1) {
                $min = $exchange3_buyer[$i][0];
            }
            if ($min > $exchange4_buyer[$i][0] && $exchange->exchange4 == 1) {
                $min = $exchange4_buyer[$i][0];
            }
            if ($min > $exchange5_buyer[$i][0] && $exchange->exchange5 == 1) {
                $min = $exchange5_buyer[$i][0];
            }
            if ($max < $exchange1_seller[$i]['Price'] && $exchange->exchange1 == 1) {
                $max = $exchange1_seller[$i]['Price'];
            }
            if ($max < $exchange3_seller[$i][0] && $exchange->exchange3 == 1) {
                $max = $exchange3_seller[$i][0];
            }
            if ($max < $exchange4_seller[$i][0] && $exchange->exchange4 == 1) {
                $max = $exchange4_seller[$i][0];
            }
            if ($max < $exchange5_seller[$i][0] && $exchange->exchange5 == 1) {
                $max = $exchange5_seller[$i][0];
            }
        }
        if ((float)$max != 0) {
            $percent = ((float)$max - (float)$min) / (float)$max;
        } else {
            $percent = 0.000;
        }

        // alert setting info
        $alert = ArbSetting::find(1);

        return view('home')->with('exchange1_buyer', $exchange1_buyer)->with('exchange1_seller', $exchange1_seller)->with('exchange4_buyer', $exchange4_buyer)->with('exchange4_seller', $exchange4_seller)->with('exchange3_buyer', $exchange3_buyer)->with('exchange3_seller', $exchange3_seller)->with('exchange5_buyer', $exchange5_buyer)->with('exchange5_seller', $exchange5_seller)->with('percent', $percent)->with('alert', $alert)->with('exchange', $exchange)->with('sound', $sound);
    }

    // change user info 
    public function changeSetting()
    {
        return view('changeForm');
    }

    // save user info
    public function saveSetting(Request $request)
    {
        if ($request['password_confirmation'] != $request['password']) {
            return view('changeForm')->with('message', "password invalid!");
        }
        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($request['password']);
        return view('changeForm')->with('messages', "Successfly saved!");
    }

    public function getData()
    {

        $exchange = Exchange::find(auth()->user()->id);
        $lastprice = array();
        // https://www.independentreserve.com/ BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.independentreserve.com/Public/GetOrderBook?primaryCurrencyCode=usdt&secondaryCurrencyCode=aud',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange1_buyer = array_slice($response['BuyOrders'], 0, 10);
        $exchange1_seller = array_slice($response['SellOrders'], 0, 10);


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.independentreserve.com/Public/GetRecentTrades?primaryCurrencyCode=xbt&secondaryCurrencyCode=aud&numberOfRecentTradesToRetrieve=1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if (strcmp(Session::get('exchange1'), $response['Trades'][0]['TradeTimestampUtc']) !== 0) {
            $lastprice[0] = '1';
            Session::put('exchange1', $response['Trades'][0]['TradeTimestampUtc']);
        } else {
            $lastprice[0] = '0';
        }

        // binance.com API BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.binance.com/api/v3/depth?symbol=AUDUSDT&limit=10',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer _kq8l_GxOzmfN2dfrqfBCScUQCoDPW2s9ER94EnViJ8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange4_buyer = array_slice($response['bids'], 0, 10);
        $exchange4_seller = array_slice($response['asks'], 0, 10);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.binance.com/api/v3/trades?symbol=AUDUSDT&limit=1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if (strcmp(Session::get('exchange4'), $response[0]['id']) !== 0) {
            $lastprice[3] = '1';
            Session::put('exchange4', $response[0]['id']);
        } else {
            $lastprice[3] = '0';
        }

        // coinjar.com BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://data.exchange.coinjar.com/products/USDTAUD/book?level=2',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer _kq8l_GxOzmfN2dfrqfBCScUQCoDPW2s9ER94EnViJ8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange3_buyer = array_slice($response['bids'], 0, 10);
        $exchange3_seller = array_slice($response['asks'], 0, 10);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://data.exchange.coinjar.com/products/USDTAUD/trades?limit=1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if (strcmp(Session::get('exchange3'), $response[0]['tid']) !== 0) {
            $lastprice[2] = '1';
            Session::put('exchange3', $response[0]['tid']);
        } else {
            $lastprice[2] = '0';
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/USDT-AUD/orderbook',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d39ed3aada7f827a3b7af2f4f857f64f01617458696'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);
        $exchange2_buyer = array_slice($response['bids'], 0, 10);
        $exchange2_seller = array_slice($response['asks'], 0, 10);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/USDT-AUD/trades?limit=1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=df6282f81e46372d3014ca347867e78cf1618191007'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if (strcmp(Session::get('exchange2'), $response[0]['id']) !== 0) {
            $lastprice[1] = '1';
            Session::put('exchange2', $response[0]['id']);
        } else {
            $lastprice[1] = '0';
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.kraken.com/0/public/Depth?pair=xbtaud&count=10',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d0a8458737c275e96c771615e6a966aea1617460896'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $exchange5_buyer = array_slice($response['result']['XBTAUD']['bids'], 0, 10);
        $exchange5_seller = array_slice($response['result']['XBTAUD']['asks'], 0, 10);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.kraken.com/0/public/Trades?pair=BTCAUD',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d6f59ffb5843eca3957efbd5d589f10bd1618187635'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if (strcmp(Session::get('exchange5'), $response['result']['last']) !== 0) {
            $lastprice[4] = '1';
            Session::put('exchange5', $response['result']['last']);
        } else {
            $lastprice[4] = '0';
        }

        $min = $exchange1_buyer[0]['Price'];
        $max = 0;
        for ($i = 0; $i < 10; $i++) {
            if ($min > $exchange1_buyer[$i]['Price'] && $exchange->exchange1 == 1) {
                $min = $exchange1_buyer[$i]['Price'];
            }
            if ($min > $exchange2_buyer[$i][0] && $exchange->exchange2 == 1) {
                $min = $exchange2_buyer[$i][0];
            }
            if ($min > $exchange3_buyer[$i][0] && $exchange->exchange3 == 1) {
                $min = $exchange3_buyer[$i][0];
            }
            if ($min > 1/$exchange4_seller[$i][0] && $exchange->exchange4 == 1) {
                $min = 1/$exchange4_seller[$i][0];
            }
            if ($min > $exchange5_buyer[$i][0] && $exchange->exchange5 == 1) {
                $min = $exchange5_buyer[$i][0];
            }
            if ($max < $exchange1_seller[$i]['Price'] && $exchange->exchange1 == 1) {
                $max = $exchange1_seller[$i]['Price'];
            }
            if ($max < $exchange2_seller[$i][0] && $exchange->exchange2 == 1) {
                $max = $exchange2_seller[$i][0];
            }
            if ($max < $exchange3_seller[$i][0] && $exchange->exchange3 == 1) {
                $max = $exchange3_seller[$i][0];
            }
            if ($max < 1/$exchange4_buyer[$i][0] && $exchange->exchange4 == 1) {
                $max = 1/$exchange4_buyer[$i][0];
            }
            if ($max < $exchange5_seller[$i][0] && $exchange->exchange5 == 1) {
                $max = $exchange5_seller[$i][0];
            }
        }

        // alert setting info

        $alert = ArbSetting::find(1);
         

        $exchange = Exchange::find(auth()->user()->id);
        $sound = Sound::find(auth()->user()->id);

        $max = $exchange1_seller[0]['Price'];
        $max_num = 1;
        if ($max > $exchange1_seller[0]['Price'] && $exchange->exchange1 == 1) {
            $max = $exchange1_seller[0]['Price'];
            $max_num = 1;
        }
        if ($max > $exchange2_seller[0][0] && $exchange->exchange2 == 1) {
            $max = $exchange2_seller[0][0];
            $max_num = 2;
        }
        if ($max > $exchange3_seller[0][0] && $exchange->exchange3 == 1) {
            $max = $exchange3_seller[0][0];
            $max_num = 3;
        }
        if ($max > 1/$exchange4_buyer[0][0] && $exchange->exchange4 == 1) {
            $max = 1/$exchange4_buyer[0][0];
            $max_num = 4;
        }
        if ($max > $exchange5_seller[0][0] && $exchange->exchange5 == 1) {
            $max = $exchange5_seller[0][0];
            $max_num = 5;
        }

        var_dump($max_num);
        var_dump($max);
        $min = $exchange1_buyer[0]['Price'];
        $min_num = 1;
        if ($min < $exchange1_buyer[0]['Price'] && $exchange->exchange1 == 1) {
            $min = $exchange1_buyer[0]['Price'];
            $min_num = 1;
        }
        if ($min < $exchange2_buyer[0][0] && $exchange->exchange2 == 1) {
            $min = $exchange2_buyer[0][0];
            $min_num = 2;
        }
        if ($min < $exchange3_buyer[0][0] && $exchange->exchange3 == 1) {
            $min = $exchange3_buyer[0][0];
            $min_num = 3;
        }
        if ($min < 1/$exchange4_seller[0][0] && $exchange->exchange4 == 1) {
            $min = 1/$exchange4_seller[0][0];
            $min_num = 4;
        }
        if ($min < $exchange5_buyer[0][0] && $exchange->exchange5 == 1) {
            $min = $exchange5_buyer[0][0];
            $min_num = 5;
        }
        var_dump($min_num);
        var_dump($min);
        $temp1 = 0;
        $avt1 = [];

        foreach ($exchange1_seller as $key => $item) {
            $temp1 += $item['Volume'];
            if ($temp1 > $alert->avt) {
                $avt1[0] = $key;
                $avt1[1] = $item['Price'];
                break;
            }
        }

        $temp2 = 0;
        $avt2 = [];

        foreach ($exchange2_seller as $key => $item) {
            $temp2 += $item[1];
            if ($temp2 > $alert->avt) {
                $avt2[0] = $key;
                $avt2[1] = $item[0];
                break;
            }
        }

        $temp3 = 0;
        $avt3 = [];

        foreach ($exchange3_seller as $key => $item) {
            $temp3 += $item[1];
            if ($temp3 > $alert->avt) {
                $avt3[0] = $key;
                $avt3[1] = $item[0];
                break;
            }
        }

        $temp4 = 0;
        $avt4 = [];

        foreach ($exchange4_buyer as $key => $item) {
            $temp4 += $item[1];
            if ($temp4 > $alert->avt) {
                $avt4[0] = $key;
                $avt4[1] = 1/$item[0];
                break;
            }
        }

        $temp5 = 0;
        $avt5 = [];

        foreach ($exchange5_seller as $key => $item) {
            $temp5 += $item[1];
            if ($temp5 > $alert->avt) {
                $avt5[0] = $key;
                $avt5[1] = $item[0];
                break;
            }
        }

        if ($exchange->exchange1 == 1) {
            $min_avt = $avt1;
            $min_index = 1;
        } elseif ($exchange->exchange2 == 1) {
            $min_avt = $avt2;
            $min_index = 2;
        } elseif ($exchange->exchange3 == 1) {
            $min_avt = $avt3;
            $min_index = 3;
        } elseif ($exchange->exchange4 == 1) {
            $min_avt = $avt4;
            $min_index = 4;
        } elseif ($exchange->exchange5 == 1) {
            $min_avt = $avt5;
            $min_index = 5;
        }
        if (floatval($min_avt[1]) > floatval($avt1[1]) && $exchange->exchange1 == 1) {
            $min_avt = $avt1;
            $min_index = 1;
        }
        if (floatval($min_avt[1]) > floatval($avt2[1]) && $exchange->exchange2 == 1) {
            $min_avt = $avt2;
            $min_index = 2;
        }
        if (isset($avt3[1]) && (floatval($min_avt[1]) > floatval($avt3[1]))  && $exchange->exchange3 == 1) {
            $min_avt = $avt3;
            $min_index = 3;
        }
        if (floatval($min_avt[1]) > floatval($avt4[1]) && $exchange->exchange4 == 1) {
            $min_avt = $avt4;
            $min_index = 4;
        }
        if (floatval($min_avt[1]) > floatval($avt5[1]) && $exchange->exchange5 == 1) {
            $min_avt = $avt5;
            $min_index = 5;
        }

        if ($min_index == 1) {
            $exchange1_seller[$min_avt[0]]['status'] = 'min';
        }

        if ($min_index == 2) {
            array_push($exchange2_seller[$min_avt[0]], 'min');
        }

        if ($min_index == 3) {
            array_push($exchange3_seller[$min_avt[0]], 'min');
        }

        if ($min_index == 4) {
            array_push($exchange4_seller[$min_avt[0]], 'min');
        }

        if ($min_index == 5) {
            array_push($exchange5_seller[$min_avt[0]], 'min');
        }

        $temp1 = 0;
        $avt1 = [];

        foreach ($exchange1_buyer as $key => $item) {
            $temp1 += $item['Volume'];
            if ($temp1 > $alert->avt) {
                $avt1[0] = $key;
                $avt1[1] = $item['Price'];
                break;
            }
        }

        $temp2 = 0;
        $avt2 = [];

        foreach ($exchange2_buyer as $key => $item) {
            $temp2 += $item[1];
            if ($temp2 > $alert->avt) {
                $avt2[0] = $key;
                $avt2[1] = $item[0];
                break;
            }
        }

        $temp3 = 0;
        $avt3 = [];

        foreach ($exchange3_buyer as $key => $item) {
            $temp3 += $item[1];
            if ($temp3 > $alert->avt) {
                $avt3[0] = $key;
                $avt3[1] = $item[0];
                break;
            }
        }

        $temp4 = 0;
        $avt4 = [];

        foreach ($exchange4_seller as $key => $item) {
            $temp4 += $item[1];
            if ($temp4 > $alert->avt) {
                $avt4[0] = $key;
                $avt4[1] = 1/$item[0];
                break;
            }
        }

        $temp5 = 0;
        $avt5 = [];

        foreach ($exchange5_buyer as $key => $item) {
            $temp5 += $item[1];
            if ($temp5 > $alert->avt) {
                $avt5[0] = $key;
                $avt5[1] = $item[0];
                break;
            }
        }

        if ($exchange->exchange1 == 1) {
            $max_avt = $avt1;
            $max_index = 1;
        } elseif ($exchange->exchange2 == 1) {
            $max_avt = $avt2;
            $max_index = 2;
        } elseif ($exchange->exchange3 == 1) {
            $max_avt = $avt3;
            $max_index = 3;
        } elseif ($exchange->exchange4 == 1) {
            $max_avt = $avt4;
            $max_index = 4;
        } elseif ($exchange->exchange5 == 1) {
            $max_avt = $avt5;
            $max_index = 5;
        }

        if (floatval($max_avt[1]) < floatval($avt1[1]) && $exchange->exchange1 == 1) {
            $max_avt = $avt1;
            $max_index = 1;
        }
        if (floatval($max_avt[1]) < floatval($avt2[1]) && $exchange->exchange2 == 1) {
            $max_avt = $avt2;
            $max_index = 2;
        }
        if (floatval($max_avt[1]) < floatval($avt3[1]) && $exchange->exchange3 == 1) {
            $max_avt = $avt3;
            $max_index = 3;
        }
        if (floatval($max_avt[1]) < floatval($avt4[1]) && $exchange->exchange4 == 1) {
            $max_avt = $avt4;
            $max_index = 4;
        }
        if (isset($avt5[1]) && (floatval($max_avt[1]) < floatval($avt5[1])) && $exchange->exchange5 == 1) {
            $max_avt = $avt5;
            $max_index = 5;
        }

        $percent = (floatval($max_avt[1]) / floatval($min_avt[1]) - 1) * 100;

        if ($max_index == 1) {
            $exchange1_buyer[$max_avt[0]]['status'] = 'max';
        }

        if ($max_index == 2) {
            array_push($exchange2_buyer[$max_avt[0]], 'max');
        }

        if ($max_index == 3) {
            array_push($exchange3_buyer[$max_avt[0]], 'max');
        }

        if ($max_index == 4) {
            array_push($exchange4_buyer[$max_avt[0]], 'max');
        }

        if ($max_index == 5) {
            array_push($exchange5_buyer[$max_avt[0]], 'max');
        }

        return view('ajax-dom')->with('exchange1_buyer', $exchange1_buyer)->with('exchange1_seller', $exchange1_seller)->with('exchange4_buyer', $exchange4_buyer)->with('exchange4_seller', $exchange4_seller)->with('exchange3_buyer', $exchange3_buyer)->with('exchange3_seller', $exchange3_seller)->with('exchange5_buyer', $exchange5_buyer)->with('exchange5_seller', $exchange5_seller)->with('percent', $percent)->with('alert', $alert)->with('exchange', $exchange)->with('lastprice', $lastprice)->with('sound', $sound)->with('exchange2_seller', $exchange2_seller)->with('exchange2_buyer', $exchange2_buyer)->with('max_num', $max_num)->with('min_num', $min_num);
    }


    // alert setting save
    public function alertSave(Request $request)
    {

        $arbSetting = ArbSetting::find(auth()->user()->id);
        if ($request->file('audio')) {
            $file = $request->file('audio');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $pin = mt_rand(10000, 99999) . $file->getClientOriginalName());
            $arbSetting->audio_name = $pin;
        }
        if ($request->has('alert-percent') == true) {
            // dd($request['alert-percent']);
            $arbSetting->percentage = $request['alert-percent'];
        }
        if ($request['email_check'] == 'on') {
            $arbSetting->email_check = 1;
        } else {

            $arbSetting->email_check = 0;
        }
        $arbSetting->avt = $request->avt_value;
        $arbSetting->save();

        $exchange = Exchange::find(auth()->user()->id);
        if ($request['exchange1'] == 'on') {
            $exchange->exchange1 = 1;
        } else {

            $exchange->exchange1 = 0;
        }
        if ($request['exchange2'] == 'on') {
            $exchange->exchange2 = 1;
        } else {

            $exchange->exchange2 = 0;
        }
        if ($request['exchange3'] == 'on') {
            $exchange->exchange3 = 1;
        } else {

            $exchange->exchange3 = 0;
        }
        if ($request['exchange4'] == 'on') {
            $exchange->exchange4 = 1;
        } else {

            $exchange->exchange4 = 0;
        }
        if ($request['exchange5'] == 'on') {
            $exchange->exchange5 = 1;
        } else {

            $exchange->exchange5 = 0;
        }

        $exchange->save();

        $sound = Sound::find(auth()->user()->id);
        if ($request->file('audio1')) {
            $file1 = $request->file('audio1');
            $destinationPath = 'uploads';
            $file1->move($destinationPath, $pin = mt_rand(10000, 99999) . $file1->getClientOriginalName());

            $sound->sound1 = $pin;
        }


        if ($request->file('audio2')) {
            $file2 = $request->file('audio2');
            $destinationPath = 'uploads';
            $file2->move($destinationPath, $pin = mt_rand(10000, 99999) . $file2->getClientOriginalName());
            $sound->sound2 = $pin;
        }

        if ($request->file('audio3')) {
            $file3 = $request->file('audio3');
            $destinationPath = 'uploads';
            $file3->move($destinationPath, $pin = mt_rand(10000, 99999) . $file3->getClientOriginalName());
            $sound->sound3 = $pin;
        }

        if ($request->file('audio4')) {
            $file4 = $request->file('audio4');
            $destinationPath = 'uploads';
            $file4->move($destinationPath, $pin = mt_rand(10000, 99999) . $file4->getClientOriginalName());
            $sound->sound4 = $pin;
        }

        if ($request->file('audio5')) {
            $file5 = $request->file('audio5');
            $destinationPath = 'uploads';
            $file5->move($destinationPath, $pin = mt_rand(10000, 99999) . $file5->getClientOriginalName());
            $sound->sound5 = $pin;
        }

        if ($request['sound_exchange1']) {
            $sound->sound1_check = $request['sound_exchange1'];
        } else {
            $sound->sound1_check = 'off';
        }
        if ($request['sound_exchange2']) {
            $sound->sound2_check = $request['sound_exchange2'];
        } else {
            $sound->sound2_check = 'off';
        }
        if ($request['sound_exchange3']) {
            $sound->sound3_check = $request['sound_exchange3'];
        } else {
            $sound->sound3_check = 'off';
        }
        if ($request['sound_exchange4']) {
            $sound->sound4_check = $request['sound_exchange4'];
        } else {
            $sound->sound4_check = 'off';
        }
        if ($request['sound_exchange5']) {
            $sound->sound5_check = $request['sound_exchange5'];
        } else {
            $sound->sound5_check = 'off';
        }
        $sound->save();


        return redirect()->route('home');
    }
}
