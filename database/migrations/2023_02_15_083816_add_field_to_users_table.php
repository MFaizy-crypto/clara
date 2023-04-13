<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('mobile')->after('email_verified_at')->nullable();
            $table->text('address')->after('mobile')->nullable();
            $table->text('vcertificate')->after('address')->nullable();
            $table->boolean('is_veried_vcertificate')->after('vcertificate')->default(0);
            $table->text('passport')->after('is_veried_vcertificate')->nullable();
            $table->boolean('is_veried_passport')->after('passport')->default(0);
            $table->text('comment')->after('is_veried_passport')->nullable();
            $table->boolean('is_admin')->after('comment')->default(0);
            $table->boolean('status')->after('is_admin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'mobile', 'address', 'vcertificate', 'is_veried_vcertificate', 'passport', 'is_veried_passport', 'comment', 'is_admin', 'status']);
        });
    }
}
