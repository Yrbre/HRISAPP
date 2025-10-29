<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(true);
            $table->string('namalengkap')->nullable();
            $table->string('nik')->nullable();
            $table->string('nik_old')->nullable();
            $table->foreignId('department_id')->constrained('departments')->nullable();
            $table->foreignId('jabatan_id')->constrained('jabatans')->nullable();
            $table->foreignId('category_id')->constrained('categories')->nullable();
            $table->string('sexcode')->nullable();
            $table->string('sexdesc')->nullable();
            $table->date('tanggalmasuk')->nullable();
            $table->date('tanggalaktif')->nullable();
            $table->boolean('coderesign')->nullable();
            $table->date('tanggalresign')->nullable();
            $table->integer('sisacuti')->nullable();
            $table->boolean('tax')->nullable();
            $table->integer('npwp')->nullable();
            $table->string('codetax')->nullable();
            $table->string('namatax')->nullable();
            $table->string('ptkp')->nullable();
            $table->boolean('codebpjs')->nullable();
            $table->string('no_ansuransi')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('cv')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_domisili')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('email')->nullable();
            $table->string('kontakkeluarga')->nullable();
            $table->string('kontakstatus')->nullable();
            $table->string('kontakrelasi')->nullable();
            $table->string('kontaktelpon')->nullable();
            $table->string('kontakalamat')->nullable();
            $table->string('bank')->nullable();
            $table->string('bank_kcu')->nullable();
            $table->string('bank_norek')->nullable();
            $table->string('bank_account')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
