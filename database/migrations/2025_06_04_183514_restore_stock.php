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
            CREATE TRIGGER restore_stock
            AFTER DELETE ON carts
            FOR EACH ROW
            BEGIN
                UPDATE products 
                SET stock = stock + OLD.qty
                WHERE product_id = OLD.product_id;
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
