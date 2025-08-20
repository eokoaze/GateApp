<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redirect;
use Illuminate\View\View;

class ListingController extends Controller
{
    public function newListingIndivid(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'tokenName' => 'required',
            'coinSymbol' => 'required',
            'projectWebsite' => 'required|url',
            'whitepaperLink' => 'required|url',
            'recommendation' => 'required'
        ],
        [
            'email.required' => 'Please enter email address',
            'email.email' => 'Please enter a valid email address',
            'tokenName.required' => 'Please enter the token name',
            'coinSymbol.required' => 'Please enter the coin symbol',
            'projectWebsite.required' => 'Please enter the project website',
            'projectWebsite.url' => 'Please enter a valid URL',
            'whitepaperLink.required' => 'Please enter the whitepaper link',
            'whitepaperLink.url' => 'Please enter a valid URL',
            'recommendation.required' => 'Please provide recommendation details'
        ]);

         //Insert Transaction data
         $data = array();
         $data['email'] = $request->email;
         $data['tokenName'] = $request->tokenName;
         $data['coinSymbol'] = $request->coinSymbol;
         $data['projectWebsite'] = $request->projectWebsite;
         $data['whitepaperLink'] = $request->whitepaperLink;
         $data['recommendation'] = $request->recommendation;
         $data['created_at'] = now();
         
         if(DB::table('listing_i')->insert($data)){   
            return Redirect()->route('listingrequest')->with('success','Individual Listing Request Submitted');
         }else{
            return Redirect()->back()->with('success','Listing Request Failed to Submit');
         }

    }

    public function newListingProj(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
            'companyAdd' => 'required',
            'repName' => 'required',
            'repEmail' => 'required',
            'teamEmail' => 'required'
        ],
        [
            'companyName' => 'Please enter correct company name',
            'companyAdd' => 'Please enter correct company address',
            'repName' => 'Please enter correct representative name',
            'repEmail' => 'Please enter correct representative email',
            'teamEmail' => 'Please enter correct team email'            
        ]);

         //Insert Transaction data
         $data = array();
         $data['companyName'] = $request->companyName;
         $data['companyAdd'] = $request->companyAdd;
         $data['repName'] = $request->repName;
         $data['repEmail'] = $request->repEmail;
         $data['teamEmail'] = $request->teamEmail;
         $data['created_at'] = now();
         
         if(DB::table('listing_p')->insert($data)){   
            return Redirect()->route('listingrequestproj2')->with('success','Please Continue');
         }else{
            return Redirect()->back()->with('success','Listing Request Failed to Submit');
         }

    }

    public function newListingProj2(Request $request)
    {
        $request->validate([
            'projectName' => 'required',
            'projectIntro' => 'min:50',
            'projectWebsite' => 'required',
            'projectWhitepaper' => 'min:5'
        ],
        [
            'projectName' => 'Please enter correct project name',
            'projectIntro' => 'Please enter correct project introduction',
            'projectWebsite' => 'Please enter correct project website',
            'projectWhitepaper' => 'Please enter correct project whitepaper'
        ]);
        return Redirect()->route('listingrequestproj3');

    }
    
    public function newListingProj8(Request $request)
    {
        $request->validate([
            'receipt' => 'required',
            'ref_address' => 'required'
        ],
        [
            'receipt' => 'Please add screenshot of payment reciept',
            'ref_address' => 'Please enter correct USDT address for refund'
            
        ]);
         
            return Redirect()->route('listingrequest')->with('success','Project Listing Request Submitted');

    }
        //View Listing.
        public function view(){
            $applicationI = DB::table('listing_i')->latest()->paginate(4);
            $applicationP = DB::table('listing_p')->latest()->paginate(4);
     
            return view('dashboard', compact('applicationI','applicationP'));
         }

}
