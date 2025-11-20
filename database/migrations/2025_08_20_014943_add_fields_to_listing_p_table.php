<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToListingPTable extends Migration
{
    public function up()
    {
        Schema::table('listing_p', function (Blueprint $table) {
            $table->string('projName')->nullable();
            $table->string('projDesc')->nullable();
            $table->string('projURL')->nullable();
            $table->string('projWhitepaper')->nullable();
            $table->string('tokenENname')->nullable();
            $table->string('tokenSymbol')->nullable();
            $table->string('tokenSupply')->nullable();
            $table->string('tokenType')->nullable();
            $table->string('tokenContractAdd')->nullable();
            $table->string('tokenDecPlaces')->nullable();
            $table->string('tokenBlockExp')->nullable();
            $table->string('tokenDestribution')->nullable();
            $table->string('tokenEcoModel')->nullable();
            $table->string('tokenLRrule')->nullable();
            $table->string('tokenSalesPhase')->nullable();
            $table->string('tokenAssetAdd')->nullable();
            $table->string('tokenHoldingAdd')->nullable();
            $table->string('tokenAddIss')->nullable();
            $table->string('')->nullable();

        });
    }

    public function down()
    {
        Schema::table('listing_p', function (Blueprint $table) {
            $table->dropColumn(['projName', 'projDesc', 'projURL', 'projWhitepaper']);
        });
    }
}