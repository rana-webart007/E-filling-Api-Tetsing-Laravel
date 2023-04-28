<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;

class LegalConnectApiManageController extends Controller
{
    //

    public function demo(Request $request)
    {
             $client = new Client();

             $response = $client->request('GET', 'http://securityhr.mypickmyvote.com/api/wages/5');
            
            // Get the response body as a string
            $body = $response->getBody()->getContents();
            $data = json_decode($body);
             dd($data);
    }


    public function register_action(Request $request)
    {
             $client = new Client();

            try{
             $response = $client->post('http://legalconnect.com/swagger/ui/index/TokenLogin/PlatformCustomer/CreateCustomerAccount', [
                'form_params' => [
                    'Account Number' => '6784611',
                    'Account Type' => '1',
                    'Account Name' => $request->name,
                    'Address 1' => $request->address1,
                    'Address 2' => $request->address2,
                    'City' => $request->city,
                    'State' => $request->state,
                    'Zip' => $request->zip,
                ]
            ]);
            
            // Get the response body as a string
            $body = $response->getBody()->getContents();
             dd($body);
        }catch(Exception $e){
              dd($e);
        }
    }
}
