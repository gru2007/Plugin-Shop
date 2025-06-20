<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shop_payments', function (Blueprint $table) {
            $table->string('guest_name')->nullable()->after('user_id');
            $table->unsignedInteger('user_id')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('shop_payments', function (Blueprint $table) {
            $table->dropColumn('guest_name');
            $table->unsignedInteger('user_id')->nullable(false)->change();
        });
    }
};
