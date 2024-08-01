<?php

use App\Models\User;
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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('cuid')->unique();
            $table->foreignIdFor(User::class);
            // root file
            // attachments
            $table->string('rechtsgebiet');
            $table->string('vertragsgruppe');
            $table->string('vertragstyp');
            $table->string('muster');
            $table->string('vertragsinhalt');
            $table->string('autor');
            $table->string('geschaeftsbereich');
            $table->string('anmerkungen_autor')->nullable();
            $table->string('hinweise_autor')->nullable();
            $table->string('hinweise_user')->nullable();
            $table->json('meta')->nullable();
            $table->timestamp('erstellt')->nullable();
            $table->timestamp('zuletzt_geaendert')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract');
    }
};
