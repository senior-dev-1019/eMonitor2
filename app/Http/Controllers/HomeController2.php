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
        CURLOPT_URL => 'https://api.independentreserve.com/Public/GetOrderBook?primaryCurrencyCode=xbt&secondaryCurrencyCode=aud',
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
        CURLOPT_URL => 'https://api.binance.com/api/v3/depth?symbol=BTCAUD',
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
        CURLOPT_URL => 'https://data.exchange.coinjar.com/products/BTCAUD/book?level=2',
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
        CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/BTC-AUD/orderbook',
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
        $min=$exchange1_buyer[0]['Price']; $max=0;
        for( $i=0; $i<10; $i++ ){
            if ($min>$exchange1_buyer[$i]['Price']&&$exchange->exchange1==1)
            {
                $min = $exchange1_buyer[$i]['Price'];
            }
            // if ($min>$exchange2_buyer[$i][0]&&$exchange->exchange2==1)
            // {
            //     $min = $exchange2_buyer[$i][0];
            // }
            if ($min>$exchange3_buyer[$i][0]&&$exchange->exchange3==1)
            {
                $min = $exchange3_buyer[$i][0];
            }
            if ($min>$exchange4_buyer[$i][0]&&$exchange->exchange4==1)
            {
                $min = $exchange4_buyer[$i][0];
            }
            if ($min>$exchange5_buyer[$i][0]&&$exchange->exchange5==1)
            {
                $min = $exchange5_buyer[$i][0];
            }
            if ($max<$exchange1_seller[$i]['Price']&&$exchange->exchange1==1)
            {
                $max = $exchange1_seller[$i]['Price'];
            }
            // if ($max<$exchange2_seller[$i][0]&&$exchange->exchange2==1)
            // {
            //     $max = $exchange2_seller[$i][0];
            // }
            if ($max<$exchange3_seller[$i][0]&&$exchange->exchange3==1)
            {
                $max = $exchange3_seller[$i][0];
            }
            if ($max<$exchange4_seller[$i][0]&&$exchange->exchange4==1)
            {
                $max = $exchange4_seller[$i][0];
            }
            if ($max<$exchange5_seller[$i][0]&&$exchange->exchange5==1)
            {
                $max = $exchange5_seller[$i][0];
            }
        }
        if((float)$max!=0){
            $percent = ((float)$max - (float)$min)/(float)$max;
        }else{
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
        if($request['password_confirmation'] != $request['password'])
        {
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
        CURLOPT_URL => 'https://api.independentreserve.com/Public/GetOrderBook?primaryCurrencyCode=xbt&secondaryCurrencyCode=aud',
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
        
        if(strcmp(Session::get('exchange1'), $response['Trades'][0]['TradeTimestampUtc'])!==0){
            $lastprice[0]='1';
            Session::put('exchange1', $response['Trades'][0]['TradeTimestampUtc']);
        }else{
            $lastprice[0]='0';
        }
        
        


        
        
        

        // binance.com API BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.binance.com/api/v3/depth?symbol=BTCAUD&limit=10',
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
          CURLOPT_URL => 'https://api.binance.com/api/v3/trades?symbol=BTCAUD&limit=1',
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
        
        
       
       
       if(strcmp(Session::get('exchange4'), $response[0]['id'])!==0){
            $lastprice[3]='1';
            Session::put('exchange4', $response[0]['id']);
        }else{
            $lastprice[3]='0';
        }
       
       
       
       
        // coinjar.com BTC/AUD
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://data.exchange.coinjar.com/products/BTCAUD/book?level=2',
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
          CURLOPT_URL => 'https://data.exchange.coinjar.com/products/BTCAUD/trades?limit=1',
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
        
        
        
        


       if(strcmp(Session::get('exchange3'), $response[0]['tid'])!==0){
            $lastprice[2]='1';
            Session::put('exchange3', $response[0]['tid']);
        }else{
            $lastprice[2]='0';
        }
       



        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/BTC-AUD/orderbook',
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
          CURLOPT_URL => 'https://api.btcmarkets.net/v3/markets/BTC-AUD/trades?limit=1',
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
        
        
        
       if(strcmp(Session::get('exchange2'), $response[0]['id'])!==0){
            $lastprice[1]='1';
            Session::put('exchange2', $response[0]['id']);
        }else{
            $lastprice[1]='0';
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
        


 
       if(strcmp(Session::get('exchange5'), $response['result']['last'])!==0){
            $lastprice[4]='1';
            Session::put('exchange5', $response['result']['last']);
        }else{
            $lastprice[4]='0';
        }
       




        $min=$exchange1_buyer[0]['Price']; $max=0;
        for( $i=0; $i<10; $i++ ){
            if ($min>$exchange1_buyer[$i]['Price']&&$exchange->exchange1==1)
            {
                $min = $exchange1_buyer[$i]['Price'];
            }
            if ($min>$exchange2_buyer[$i][0]&&$exchange->exchange2==1)
            {
                $min = $exchange2_buyer[$i][0];
            }
            if ($min>$exchange3_buyer[$i][0]&&$exchange->exchange3==1)
            {
                $min = $exchange3_buyer[$i][0];
            }
            if ($min>$exchange4_buyer[$i][0]&&$exchange->exchange4==1)
            {
                $min = $exchange4_buyer[$i][0];
            }
            if ($min>$exchange5_buyer[$i][0]&&$exchange->exchange5==1)
            {
                $min = $exchange5_buyer[$i][0];
            }
            if ($max<$exchange1_seller[$i]['Price']&&$exchange->exchange1==1)
            {
                $max = $exchange1_seller[$i]['Price'];
            }
            if ($max<$exchange2_seller[$i][0]&&$exchange->exchange2==1)
            {
                $max = $exchange2_seller[$i][0];
            }
            if ($max<$exchange3_seller[$i][0]&&$exchange->exchange3==1)
            {
                $max = $exchange3_seller[$i][0];
            }
            if ($max<$exchange4_seller[$i][0]&&$exchange->exchange4==1)
            {
                $max = $exchange4_seller[$i][0];
            }
            if ($max<$exchange5_seller[$i][0]&&$exchange->exchange5==1)
            {
                $max = $exchange5_seller[$i][0];
            }
        }
        
        // alert setting info
        
        $alert = ArbSetting::find(1);
        // if($alert->percentage<$percent&&$alert->email_check==1){
            
        //     $email = 'alexeychaychenko@outlook.com';
   
        //     $mailData = [
        //         'title' => 'Demo Email',
        //         'url' => 'https://www.positronx.io'
        //     ];
    
        //     Mail::to($email)->send(new EmailDemo($mailData));
    
        // }

        $exchange = Exchange::find(auth()->user()->id);
        $sound = Sound::find(auth()->user()->id);
        
        
        
        
        $max=1807060;$max_num=1;
        if($max>$exchange1_seller[0]['Price']&&$exchange->exchange1==1){
            $max=$exchange1_seller[0]['Price'];$max_num=1;
        }
        if($max>$exchange2_seller[0][0]&&$exchange->exchange2==1){
            $max=$exchange2_seller[0][0];$max_num=2;
        }
        if($max>$exchange3_seller[0][0]&&$exchange->exchange3==1){
            $max=$exchange3_seller[0][0];$max_num=3;    
        }
        if($max>$exchange4_seller[0][0]&&$exchange->exchange4==1){
            $max=$exchange4_seller[0][0];$max_num=4;    
        }
        if($max>$exchange5_seller[0][0]&&$exchange->exchange5==1){
            $max=$exchange5_seller[0][0];$max_num=5;    
        }
        $min=34576;$min_num=1;
        if($min<$exchange1_buyer[0]['Price']&&$exchange->exchange1==1){
            $min=$exchange1_buyer[0]['Price'];$min_num=1;    
        }
        if($min<$exchange2_buyer[0][0]&&$exchange->exchange2==1){
            $min=$exchange2_buyer[0][0];$min_num=2;    
        }
        if($min<$exchange3_buyer[0][0]&&$exchange->exchange3==1){
            $min=$exchange3_buyer[0][0];$min_num=3;    
        }
        if($min<$exchange4_buyer[0][0]&&$exchange->exchange4==1){
            $min=$exchange4_buyer[0][0];$min_num=4;    
        }
        if($min<$exchange5_buyer[0][0]&&$exchange->exchange5==1){
            $min=$exchange5_buyer[0][0];$min_num=5;    
        }
        
        $percent = ($min/$max-1)*10;
        

        return view('ajax-dom')->with('exchange1_buyer', $exchange1_buyer)->with('exchange1_seller', $exchange1_seller)->with('exchange4_buyer', $exchange4_buyer)->with('exchange4_seller', $exchange4_seller)->with('exchange3_buyer', $exchange3_buyer)->with('exchange3_seller', $exchange3_seller)->with('exchange5_buyer', $exchange5_buyer)->with('exchange5_seller', $exchange5_seller)->with('percent', $percent*10)->with('alert', $alert)->with('exchange', $exchange)->with('lastprice', $lastprice)->with('sound', $sound)->with('exchange2_seller',$exchange2_seller)->with('exchange2_buyer', $exchange2_buyer)->with('max_num', $max_num)->with('min_num', $min_num);
    }


    // alert setting save
    public function alertSave(Request $request)
    {
        
        $arbSetting = ArbSetting::find(auth()->user()->id);
        if($request->file('audio')) {
            $file = $request->file('audio');
            $destinationPath = 'uploads';
            $file->move($destinationPath,$pin = mt_rand(10000, 99999).$file->getClientOriginalName());
            $arbSetting->audio_name = $pin;
        }
        if ( $request->has('alert-percent') == true){
            // dd($request['alert-percent']);
            $arbSetting->percentage = $request['alert-percent'];
        }
        if ( $request['email_check']== 'on'){
            $arbSetting->email_check = 1;
        }else{

            $arbSetting->email_check = 0;
        }
        $arbSetting->save();

        $exchange = Exchange::find(auth()->user()->id);
        if ( $request['exchange1']== 'on'){
            $exchange->exchange1 = 1;
        }else{

            $exchange->exchange1 = 0;
        }
        if ( $request['exchange2']== 'on'){
            $exchange->exchange2 = 1;
        }else{

            $exchange->exchange2 = 0;
        }
        if ( $request['exchange3']== 'on'){
            $exchange->exchange3 = 1;
        }else{

            $exchange->exchange3 = 0;
        }
        if ( $request['exchange4']== 'on'){
            $exchange->exchange4 = 1;
        }else{

            $exchange->exchange4 = 0;
        }
        if ( $request['exchange5']== 'on'){
            $exchange->exchange5 = 1;
        }else{

            $exchange->exchange5 = 0;
        }

        $exchange->save();

        $sound = Sound::find(auth()->user()->id);
        if($request->file('audio1'))
        {
            $file1 = $request->file('audio1');
            $destinationPath = 'uploads';
            $file1->move($destinationPath,$pin = mt_rand(10000, 99999).$file1->getClientOriginalName());
            
            $sound->sound1 = $pin;
        }
        

        if($request->file('audio2'))
        {
            $file2 = $request->file('audio2');
            $destinationPath = 'uploads';
            $file2->move($destinationPath,$pin = mt_rand(10000, 99999).$file2->getClientOriginalName());
            $sound->sound2 = $pin;

        }

        if($request->file('audio3'))
        {
            $file3 = $request->file('audio3');
            $destinationPath = 'uploads';
            $file3->move($destinationPath,$pin = mt_rand(10000, 99999).$file3->getClientOriginalName());
            $sound->sound3 = $pin;
        }

        if($request->file('audio4'))
        {
            $file4 = $request->file('audio4');
            $destinationPath = 'uploads';
            $file4->move($destinationPath,$pin = mt_rand(10000, 99999).$file4->getClientOriginalName());
            $sound->sound4 = $pin;
        }

        if($request->file('audio5'))
        {
            $file5 = $request->file('audio5');
            $destinationPath = 'uploads';
            $file5->move($destinationPath,$pin = mt_rand(10000, 99999).$file5->getClientOriginalName());
            $sound->sound5 = $pin;
        }

        if($request['sound_exchange1']){
            $sound->sound1_check = $request['sound_exchange1'];
        }else{
            $sound->sound1_check = 'off';
        }
        if($request['sound_exchange2']){
            $sound->sound2_check = $request['sound_exchange2'];
        }else{
            $sound->sound2_check = 'off';
        }
        if($request['sound_exchange3']){
            $sound->sound3_check = $request['sound_exchange3'];
        }else{
            $sound->sound3_check = 'off';
        }
        if($request['sound_exchange4']){
            $sound->sound4_check = $request['sound_exchange4'];
        }else{
            $sound->sound4_check = 'off';
        }
        if($request['sound_exchange5']){
            $sound->sound5_check = $request['sound_exchange5'];
        }else{
            $sound->sound5_check = 'off';
        }
        $sound->save();
        

        return redirect()->route('home');
    }
}
