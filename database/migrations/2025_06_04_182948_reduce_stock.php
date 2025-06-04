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
        DB::unprepared('
            CREATE TRIGGER reduce_stock
            AFTER INSERT ON carts
            FOR EACH ROW
            BEGIN
                UPDATE products SET stock = stock - NEW.qty WHERE id = NEW.id_product;
            END');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
