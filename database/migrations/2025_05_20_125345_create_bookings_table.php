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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('passport_or_nid');
            $table->string('mobile');
            $table->string('email');
            $table->string('service_country');
            $table->string('service_subject');
            $table->decimal('payment_amount', 10, 2);
            $table->string('payment_method');
            $table->string('payment_proof')->nullable();
            $table->boolean('terms_agreed')->default(false);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
