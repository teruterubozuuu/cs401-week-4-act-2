<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //lagi daw lagyan ng laman kac eto ung irurun nia
        //pag nag-create ng object dito

        Schema::table('users',function(Blueprint $table){
            $table->timestamp('email_verified_at')->comment('Date of email verification.')->nullable();
            $table->timestamp('registration_date')->comment('Date of registration.')->default(now()); //kukunin ung system date
            $table->timestamp('last_login_date')->comment('Last login date.')->nullable();
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //idedelete ung object dito

            Schema::table('users',function(Blueprint $table){
            $table->dropColumn('email_verified_at');
            $table->dropColumn('registration_date');
            $table->dropColumn('last_login_date');
            $table->timestamp();
        });
    }
};
