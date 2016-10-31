<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\DonateRequest;
use Flutterwave\Card;
use Flutterwave\Flutterwave;
use Flutterwave\AuthModel;
use Flutterwave\Currencies;
use Flutterwave\Countries;
use Flutterwave\FlutterEncrypt;


class DonateController extends Controller
{
	public function setUp()
	{
		
	}

	/*public function token($request)
	{
		$card = [
		  "card_no" => $request->get("ccnumber"),
		  "cvv" => $request->get("cvv"),
		  "expiry_month" => $request->get("ccmonth"),
		  "expiry_year" => $request->get("ccyear")
		];

		$resp = Card::tokenize($card, AuthModel::NOAUTH, Flutterwave::SMS);
	    // Card::tokenize($card, $authModel, $validateOption);
	    
	}

    public function charge($request){

		$card = [
		  "card_no" => $request->get("ccnumber"),
		  "cvv" => $request->get("cvv"),
		  "expiry_month" => $request->get("ccmonth"),
		  "expiry_year" => $request->get("ccyear")
		];

		$amount = $request->get("amount");
		$resp = Card::charge($card, $amount, "1202", Currencies::NAIRA, Countries::NIGERIA, AuthModel::NOAUTH, "test", "http://localhost:8888/donate");
    	
		
	}*/

    public function donate()
	{
		return view('pages.donate');
	}

    public function pay(DonateRequest $request){

    	$merchantKey = "tk_1WthQ9HfEX"; //can be found on flutterwave dev portal
		$apiKey = "tk_Hn4kei78jX5FTSRpwKPh"; //can be found on flutterwave dev portal
		$env = "staging"; //this can be production when ready for deployment
		Flutterwave::setMerchantCredentials($merchantKey, $apiKey, $env);

    	$card = [
		  "card_no" => $request->get('ccnumber'),
		  "cvv" => $request->get('cvv'),
		  "expiry_month" => $request->get('ccmonth'),
		  "expiry_year" => $request->get('ccyear')
		];

		$amount = $request->get('amount');

		$resp = Card::tokenize($card, AuthModel::NOAUTH, Flutterwave::SMS);

		$result = Card::charge($card, $amount, "1201", Currencies::NAIRA, Countries::NIGERIA, AuthModel::NOAUTH, "test", "http://localhost:8888/donate");
		if ($result->isSuccessfulResponse()) {
		  echo("Hurray!");
		}
		$response = $result->getResponseData();
		

		return $response;		
	}
}
