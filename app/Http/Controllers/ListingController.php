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
            'companyName' => 'required|string',
            'companyAdd' => 'required|string',
            'repName' => 'required|string',
            'repEmail' => 'required|email',
            'teamEmail' => 'required|email',
            'projectName' => 'required|string',
            'projectIntro' => 'required|string',
            'projectWebsite' => 'required|url',
            'projectWhitepaper' => 'required|url',
            'tokenName' => 'required|string',
            'coinSymbol' => 'required|string',
            'totalSupply' => 'required|string',
            'coinType' => 'required|string',
            'contractAdd' => 'required|string',
            'decimalPlaces' => 'required|string',
            'blockExpl' => 'required|url',
            'tokenDist' => 'required|string',
            'ecomodel' => 'required|string',
            'tokenRule' => 'required|string',
            'salesDet' => 'required|string',
            'assetsAdd' => 'required|string',
            'holdingAdd' => 'required|string',
            'additionalIss' => 'required|string',
            'trackRec' => 'required|string',
            'outstandingFeat' => 'required|string',
            'target' => 'required|string',
            'technicalFW' => 'required|string',
            'innovativeTech' => 'required|string',
            'difficulty' => 'required|string',
            'proposedSol' => 'required|string',
            'opensource' => 'required|string',
            'competitors' => 'required|string',
            'superiorFeat' => 'required|string',
            'ecosystem' => 'required|string',
            'projectUse' => 'required|string',
            'codeLibrary' => 'required|url',
            'roadmap' => 'required|url',
            'networkCond' => 'required|string',
            'funcModules' => 'required|string',
            'implementation' => 'required|string',
            'ecosystemDev' => 'required|string',
            'currentPhase' => 'required|string',
            'devVenue' => 'required|string',
            'teamIntro' => 'required|string',
            'coreMembers' => 'required|string',
            'consultantProf' => 'required|string',
            'investors' => 'required|string',
            'commercialPartners' => 'required|string',
            'communityInfo' => 'required|string',
            'marketingCh' => 'required|string',
            'marketingCamp' => 'required|string',
            'budget' => 'required|string',
            'marketingPlans' => 'required|string',
            'receipt' => 'required|file|mimes:jpg,jpeg,png,pdf',
            'refAddress' => 'required|string'
        ],
        [
            'companyName' => 'Please enter correct company name',
            'companyAdd' => 'Please enter correct company address',
            'repName' => 'Please enter correct representative name',
            'repEmail' => 'Please enter correct representative email',
            'teamEmail' => 'Please enter correct team email',
            'projectName' => 'Please enter correct project name',
            'projectIntro' => 'Please enter correct project introduction',
            'projectWebsite' => 'Please enter correct project website',
            'projectWhitepaper' => 'Please enter correct project whitepaper',
            'tokenName' => 'Please enter correct token name',
            'coinSymbol' => 'Please enter correct coin symbol',
            'totalSupply' => 'Please enter correct total supply',
            'coinType' => 'Please enter correct coin type',
            'contractAdd' => 'Please enter correct contract address',
            'decimalPlaces' => 'Please enter correct decimal places',
            'blockExpl' => 'Please enter correct block explorer link',
            'tokenDist' => 'Please enter correct token distribution',
            'ecomodel' => 'Please enter correct economic model',
            'tokenRule' => 'Please enter correct token lockup rule',
            'salesDet' => 'Please enter correct sales details',
            'assetsAdd' => 'Please enter correct assets address',
            'holdingAdd' => 'Please enter correct holding address',
            'additionalIss' => 'Please enter correct additional issuance details',
            'trackRec' => 'Please enter correct track record',
            'outstandingFeat' => 'Please enter correct outstanding features',
            'target' => 'Please enter correct target and vision',
            'technicalFW' => 'Please enter correct technical framework',
            'innovativeTech' => 'Please enter correct innovation details',
            'difficulty' => 'Please enter correct difficulty details',
            'proposedSol' => 'Please enter correct proposed solution',
            'opensource' => 'Please enter correct open source details',
            'competitors' => 'Please enter correct competitors details',
            'superiorFeat' => 'Please enter correct superior features',
            'ecosystem' => 'Please enter correct ecosystem details',
            'projectUse' => 'Please enter correct project use cases',
            'codeLibrary' => 'Please enter correct code library link',
            'roadmap' => 'Please enter correct roadmap link',
            'networkCond' => 'Please enter correct network condition',
            'funcModules' => 'Please enter correct functional modules details',
            'implementation' => 'Please enter correct implementation details',
            'ecosystemDev' => 'Please enter correct ecosystem development details',
            'currentPhase' => 'Please enter correct current phase',
            'devVenue' => 'Please enter correct development venue',
            'teamIntro' => 'Please enter correct team introduction',
            'coreMembers' => 'Please enter correct core members details',
            'consultantProf' => 'Please enter correct consultant profile',
            'investors' => 'Please enter correct investors details',
            'commercialPartners' => 'Please enter correct commercial partners details',
            'communityInfo' => 'Please enter correct community information',
            'marketingCh' => 'Please enter correct marketing channels',
            'marketingCamp' => 'Please enter correct marketing campaigns',
            'budget' => 'Please enter correct marketing budget',
            'marketingPlans' => 'Please enter correct marketing plans',
            'receipt' => 'Please upload a valid receipt',
            'refAddress' => 'Please enter correct refund address'
        ]);

        $receiptPath = $request->file('receipt')->store('listing-receipts', 'public');

        //Insert Transaction data
        $data = $request->only([
            'companyName',
            'companyAdd',
            'repName',
            'repEmail',
            'teamEmail',
            'projectName',
            'projectIntro',
            'projectWebsite',
            'projectWhitepaper',
            'tokenName',
            'coinSymbol',
            'totalSupply',
            'coinType',
            'contractAdd',
            'decimalPlaces',
            'blockExpl',
            'tokenDist',
            'ecomodel',
            'tokenRule',
            'salesDet',
            'assetsAdd',
            'holdingAdd',
            'additionalIss',
            'trackRec',
            'outstandingFeat',
            'target',
            'technicalFW',
            'innovativeTech',
            'difficulty',
            'proposedSol',
            'opensource',
            'competitors',
            'superiorFeat',
            'ecosystem',
            'projectUse',
            'codeLibrary',
            'roadmap',
            'networkCond',
            'funcModules',
            'implementation',
            'ecosystemDev',
            'currentPhase',
            'devVenue',
            'teamIntro',
            'coreMembers',
            'consultantProf',
            'investors',
            'commercialPartners',
            'communityInfo',
            'marketingCh',
            'marketingCamp',
            'budget',
            'marketingPlans',
            'refAddress'
        ]);
        $data['receiptPath'] = $receiptPath;
        $data['created_at'] = now();
        $data['updated_at'] = now();
         
        if(DB::table('listing_p')->insert($data)){   
            return Redirect()->route('listingrequest')->with('success','Project Listing Request Submitted');
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
