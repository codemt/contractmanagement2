<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {

            $table->increments('id');
            $table->string('contract_type');
            $table->string('contact_person');
            $table->string('contract_location');
            $table->string('contract_pincode');
            $table->string('contract_city');
            $table->string('contract_payment_terms');
            $table->string('contract_renewal_terms');
            $table->string('contact_number');
            $table->string('area_sq_feet');
            $table->string('premises');
            $table->string('state');
            $table->text('billing_instructions');
            $table->date('contract_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
