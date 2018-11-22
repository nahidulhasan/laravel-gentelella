<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('number')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_pic')->nullable();
            $table->enum('type', ['user', 'deliverer', 'admin', 'super_admin', 'merchant_global', 'merchant_support',
                'merchant_account_manager','hub_manager','shift_in_charge_inbound','shift_in_charge_outbound'])->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('hub_id')->nullable();
            $table->tinyInteger('is_freelancer')->default('0');
            $table->tinyInteger('is_suspended')->default('0');
            $table->tinyInteger('is_verified')->default('0');
            $table->tinyInteger('is_trained')->default('0');
            $table->string('nid')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('rating')->nullable();
            $table->string('gender')->nullable();
            $table->string('license')->nullable();
            $table->string('passport')->nullable();
            $table->string('current_latitude')->nullable();
            $table->string('current_longitude')->nullable();
            $table->string('is_open_for_deliveries')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
