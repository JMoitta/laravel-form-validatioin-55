<?php

use App\Client;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterToClientTypeClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('document_number')->unique()->change();
            $table->date('date_birth')->nullable()->change();
            $table->char('sex', 10)->nullable()->change();
            $table->enum('marital_status', array_keys(Client::MARITAL_STATUS))->nullable()->change();
            $table->string('company_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropUnique('clients_document_number_unique');
            $table->date('date_birth')->change();
            $table->char('sex', 10)->change();
            $table->enum('marital_status', array_keys(Client::MARITAL_STATUS))->change();
            $table->dropColumn('company_name');
        });
    }
}
